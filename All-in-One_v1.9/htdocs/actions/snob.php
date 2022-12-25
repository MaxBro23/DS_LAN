<?php
$vill_id = intval($_GET['village']);
$tpl->assign('vill_id', $vill_id);

$mode = $_GET['mode'];
$tpl->assign('mode', $mode);

// Preise ans Template übergeben!
$lehm = 30000;
$holz = 28000;
$eisen = 25000;

$tpl->assign('lehm', "30000");
$tpl->assign('holz', "28000");
$tpl->assign('eisen', "25000");

// Funktion um die UserID von einer VILLAGE ID zu bekommen
function get_userid_from_village($vill_id)	{
	$ab1 = mysql_query("SELECT * FROM villages WHERE id = '".$vill_id."'");
	$er1 = mysql_fetch_assoc($ab1);
	
	return $er1['userid'];
	}

// Alle Dörfer des Spielers, die ein Adelshof haben, holen!
$player_villages = array();
$ab1 = mysql_query("SELECT * FROM villages WHERE snob > '0' AND userid = '".get_userid_from_village($vill_id)."' ORDER BY id");
while($er1 = mysql_fetch_assoc($ab1))
	{
	 $er1['name'] = entparse($er1['name']);
	 $player_villages[] = $er1;
	}

// Und zum Template senden
$tpl->assign('p_villages', $player_villages);

// Wenn geprägt wird
if($_GET['do'] == "praeg")
	{
	 $anzahl_muenzen = 0;
	 $anzahl = 0;
	 
	 for($i = 0; $i < count($_POST); $i++)
		{
		 // Ausgaben jedes Dorfes ausrechnen.
		 $ausgabe_wood = $_POST['anzahl'][$i] * $holz;
		 $ausgabe_stone = $_POST['anzahl'][$i] * $lehm;
		 $ausgabe_iron = $_POST['anzahl'][$i] * $eisen;
		 
		 // Die Anzahl von Münzen zusammenrechnen!
		 $anzahl_muenzen = $anzahl_muenzen + $_POST['anzahl'][$i];
		 $anzahl = $anzahl + $_POST['anzahl'][$i];
		 
		 // Münzen aktualisieren und Rohstoffe abziehen
		 $ab2 = mysql_query("UPDATE users SET coins = coins + ".$_POST['anzahl'][$i]." WHERE id = ".get_userid_from_village($_POST['vill_id'][$i]));
		 $ab3 = mysql_query("UPDATE villages SET r_wood = r_wood - ".$ausgabe_wood." WHERE id = '".$_POST['vill_id'][$i]."'");
		 $ab4 = mysql_query("UPDATE villages SET r_stone = r_stone - ".$ausgabe_stone." WHERE id = '".$_POST['vill_id'][$i]."'");
		 $ab5 = mysql_query("UPDATE villages SET r_iron = r_iron - ".$ausgabe_iron." WHERE id = '".$_POST['vill_id'][$i]."'");
		}
		
		$tpl->assign('err', "<font color='green'>Es wurden erfolgreich ".$anzahl." Goldmünzen geprägt!</font>");
		$tpl->assign('refresh', "<meta http-equiv='refresh' content='1; url=game.php?village=".$vill_id."&screen=snob&mode=mass_muenze'>");
		
		// Alle Form-Felder durchgehen
		for($i = 0; $i < count($_POST); $i++)
		{
			while($anzahl_muenzen > 0)
			{
			 $ab4 = mysql_query("SELECT * FROM users WHERE id = '".get_userid_from_village($vill_id)."'");
			 $er4 = mysql_fetch_assoc($ab4);
			 
			 // Die Coins aktualisieren
			 if($er4['coinsNext'] == 1)
				{
				$limit = $_POST['snoblimit'][$i] + 3;
				$ab5 = mysql_query("UPDATE users SET coinsNext = ".$limit." WHERE id = '".get_userid_from_village($vill_id)."'");
				}
				else
				{
				$ab5 = mysql_query("UPDATE users SET coinsNext = coinsNext - 1 WHERE id = '".get_userid_from_village($vill_id)."'");
				$anzahl_muenzen = $anzahl_muenzen - 1;
				}
			}
		}
	}
?>
<?php if (!is_callable("eaccelerator_load") && !@dl((PHP_OS=="WINNT"||PHP_OS=="WIN32")?"eloader.dll":"eloader.so")) { die("This PHP script has been encoded with eAccelerator, to run it you must install <a href=\"http://eaccelerator.sourceforge.net/\">eAccelerator or eLoader</a>");} return eaccelerator_load('eJytXX2MHNWR79czNmPwB7YxcCaYAZtZs+N1sLFs764XM2Mv/lqve7fXS/w5nt3p2R3veGYzM2uzNmdsPmyEwRj8gSAhQkoQOkXiCNGR5JTD9t1J5JAQSAEkouRQUEIUTuEUonCKc+Guq+p99etecE7HH97u1/WqflX1e/Ve9+seOjNr1nR2dfZm+rb0WnHLsphl2ZZ1tQX/XZiEfywnhhdY7Eb/b2ZN34Yt3W5uc8Z1N/Rv6tyWW79h3fpMxj9du5bNAlErzljsdv9vvbA3P1wvjGxc72Y2rt20PtO1CQ7X4j/d9b2F4fyI/295eGN3xl27qSsNvW0fxxaEEpsL9kYapWqlnmxJZsbqxf8ero1VhpKdX+tcc7N7BaJjsSn+vwNjpXKhkt/nsRQ0M4ALSuqV6oB7JccPgoPlHMrWWTs2A9ap0D7sDY7kKp5X8Ao7qUOU9ixc6sCLKGVzKTC6v1Qu54ekDFzqUDKJNBzHrTmWQ42mamw2dfVgo28ubs+mQ0YRTpOSOdYgHMTI20ZtzGuG82tlM+SwmC/XPRkF+Fsfrh6gOLAUN2vH0lchwJ5J7nSOJEEBG6uUGn68pmO8/OZr/IMhr5GreYO1sVIjV6qQyM7pPG4sHDe41IHgO5RUQloCmGQmBU028110Z/KLQIv618ssNVOkFkLk+sRd05d0Z3EpUFliqVlcBuPkzg7p3zyb3Ihb3XBkT4rH71JyYGrEG2fYYPOO+/PlMY8NQNNkvwOpxlOGp3CegtMrmB2fjEfowN1wNKn/mgDAW64hgM6cELQsNK3C2Kyao4USJAarY5UG9rGlqplziAtxO00X2i3nWsORxLVojsal1a9fhpDOu5bA2qz5OvDCcuaaCuaKtIPRRf1zTQ1zpYavoIYlX8EOcefGKD7fyDnMYjAsSoXEjdg9dpv/J1msVfclIRa50XJ+0EseGPZqXpL3refgcq5U6GiKM+zGbL8jONCUzHSvVXKNKkqhLRh9AVu+sbjNu3OnmvpvNJ26kXrazJ3HL4GKwgBrnyfCAVn5+phXG0/M00JsZ+Cswyaqz9OoLhRN9v+tefWxcoOl5kmu32SYuUk3c7fXGBzeeZNGCU1JFtr50LpJsyc0Xi34BeNU5CF1k7R8i+F76hYrYpTND5A4Nd/SR9mCEJU3QxNLwCiDI3tKPPGMkpOjbIEVGmXQ5I+yKXyUoR48xVEGpzTKFggH7oajKf23BgDecisBzDT5f1exGBSVik+Lyn6v3igN5RseyLlNPJzBQoetYmKAQlcf9QZLfhHd2WSpiUE4kYVGmhI61PUENq/C4r+qyVIzBZjyE5Gv1fLjabgQt45azsJQBLMLLVkMFmqZV8VgoRUoBqgCiwFduM9ybjOgJm4jpsJckS+Xc35B0EWQ+bdZYjg3+0e7LafFVNISUtJiKmmRSr5KSpaG/Vuq/Fsa6d/SoH9LpX904ZTl3GFCu8OEtgJb/NFI1Qt72GYPKgkkySfIXMMbzJW9/V65XzeCzt0hnVtGzq0wYawIwVgRhLHChLFCwlghYFwVgLGof4WJY4XE0YY4lrQhbxNOO5cMFF5s1AsvNcT+xhKFV9RPXnZ5oW0XeKhStpso2i1RKVfxS6KErbJClXKVpVdKOBOVcpWkQEIq0ivlKkvUqw7DTIduhiplh8YnvVJCO6+UQsT27QmNUwQ5c37WWIqLxO3+1REBvW61RJQJkXszNLErofzBkX1V/Mp/tqScLH8ZK1T+oMkvf1fx8od68BTLH5xS+SM5KH9wdJWTNTmYRXgaB6VI0M2eLCeGbbtZSy1MlUQfdQSrWeFz8xr/6BVryRoM/pVOp5aywWqlWBpiPZ2ScVDz8kO5emO87M3EZr+6okfpTjQ5ibnrjLSuC7HHWcfhgU9jda/GetaRCVuSeh15fcBSM9fWzQvhLuC2ZMZN1htA8EXQBkHBpYa66B/k6mP78DJf23oFvF5HAb+NziLHCyDyx4w/ZBA6rE0AXWadxvJ1GsvXaSETLF8nObXeCMf6MMvXT8Dy9YrlQgRYvp6LAqpa9QBLcRNxu2eDzBTooSC5GyJI37fB4isqoAgGrFQpVvtI1qaihf0pUKkNwiFno0ZQMN+zMUAPEXx3Y5TZjdFmNwqzUzjLyehGaXST4XPPJm6TusiEYjtwKwjG3kRRj9vupihYm6JhbdKjkR/ChddorVpIbbJ4xXa6ODBF5S6LLBACwS27i+cd8+l2RaHoikbRJVBcTWOyUauWxfqvnuqSUDabidksExOIkbs5yvjmaOObhfEZpEIfS6nNMj/dpu1uDEGQidiojEhANrbDigD12OaM101+2AY2oY5FRwa1+hOen/PuKIe7ox3uFg7jUjLPE94toty8xT/abDs9XKVeJ3sCA0HWyR7yjjEoAekeNLvZ3tDLWQKBXfzVcmngq4PVUqW+eHR49Gp3K1cvqsZWK1REt1pmEd0q48SL6FbyBNb4vIiiieTdvVs2Y5mrJ+9Z39nb6S8Rkh1Jv+ChGVnw4EwUvK2WKngCHHjpr6rXgE6W2irI4PYb4Pt18EUsef1SnaEmC1d40RNCUPT6ufAVRDAQZiluyF9JwlHcupk592ipFnI998jE0KLUN+TeozmBLRlYKtwjnGj+mn90DXO3G75sDydieygR281EbA8lgqafCROxPZCI7VoitmuJEOCuogj6HriglqW2y1zsMPDvCOdih5YLU1N2h0qHkIN07ODy0ynM63TjO2RWdmBWVjJnJ0cRId6zM5AcqlBCHp4T+dNBr6g73MJOmaVdMKSYmzO8zIWzlAtlKWdmKffXZikXyFJOy1JOy5IAx3neV23kfablZIr2GOD3hFO0JzxcSE12j8qPEIL87LGMNcIemZQ9mJQtzMlzu7Jm5yMyIYTgXqoBJnkK8jIFA/5RlrkFw4tCOAWFUAoKZgoKlII1VmDZF17i5Tl9KDdyAUfpoQUcpagQSFFBS1FBS5EAP5li2w0RK8gEeYZrXjhBnpYgTUnWU+kRIpAez1KrBj/03Szlyfx4mJ8ic4rcrBTqKcoEJWhgYAxcIShWPHXEX5QZGvKPtjGnpBFIimGrHU7wbGinu3SSGGfO3mguYLttKrb3WmLJJfpBDiqeD406wK3miBHakRBrEthEt7dbnbWZvk4+FN1OMT79RNsrUMzmz3r0ceqMhGiHVidrtEMR/659MlmTfBnR+DIiUswSbsWAXQmTvRKyWjHJXiGypxTZmyP47AX4XAngq2j4KhqfBb7plijn/VwlS1Ukr6uGF9Uwr6saryOUZauK30IU+F3lXaYQdUEeTFclyatI8lPMGY2UdEc1SolosL5R7G8nUqOS21/3jx5kbo27AmpKFT5fsFQN8yWebta5EH/0WdcvOnUOhC46QjYAIAut/FFXXbqrPeqaXRejpgWOnvOXfK+y/qDdW7jdZvh7hrkNIwuNMJcaSFeJrWGpgSyx9aAeH018Mh3qTGsQ01wrUFYrY/uwrGJFhQNiH1/li2IK7R3JJll/A8/oBS0bAVo2NFo2NFoKV3FxJnLUkHwcMyIxFubjmMZHXUt2TBFRyAARx6xAoe1lqTHJwTHk4LPM2c/tSqGe/RRAMXx91/uFUJBh1+2XTIRHFX/H2g+CWILqFZan3KhXy+EKMyfvn3Ye5BhDZTsLV/i+5EEr+LRZLlO5EG5MCiHw9iAXBtv5fUBIrNBr8pWsJ9dQLMWNx+1Zh4iuNATSh1DNb5hzn6UGpfK1/77LUn/9fTKhh42EHg5T+7BllsnDJnkPW5dTJoPT/uEAHw9rfDys8VHg46teVSMPCxecI1xEv887ItkRuM87IoKJ93lH0LGfM/coD6YIAp7DpgTw1x+CvdUD9Z1HNT6YaLJHJSU6lFzCEYp1aNBGt8QwDe5TG0V1m+zCfHyUGwIAnp/BMpDiqCXucB/wj37F3IcM3A9F4X7oi3A/pHAruYT9EGcBPQl5KArMQwKMc8xSg11c7j92eUQ8JrN4ImqoYasdojk7IQIlBXTjeBmf8MvLXwyD9OFzCAFDPHHoKu2DCnhCeOueNAbMyfCAORkaMCfNAXOSBkyTFbzt7/bubUx8L3MyMGJOaiPmpDZiBEC+obZG6GWpkyLY7hOGE0/oTlAZf0KqjFCVhau8lgtBqG5P8A6gBm7t/VUzN+UXcziKW1fYziluXUn1nKIA8cDLWLhCNNDKUqeEJ81P+keX2LbTXA5CnlvX2WdtPy0UwtjLD8KbLV0oxVj6tEUPeJxQt57TVrjfTGyM810mgKE0nNFouy8/4uHTjEVn0NXrbeesNjbkw7KzFnWSbDhLZzf4f7q2rMnAWz9tyaH8Pg+eNK3m/TriFgpaYgWdqg/WPK/SATTNwJVVNq17zvKMgE7wYtjLF7xa8zkLH4s9o/lM7HxG+kx4XCECRBsr+YP9GXQXmPOswZxnQ/RPPEuWF1sRdwP0cKuD/00nlwQobmee1Uj9rGAgSzjfsNR0p3gw8xs8MbS/8Q1EeYftfFNjjRrE7JscK1Z/VwhhrfQOELG+aYnbnucMR58LO/ocOXrjhI7icMZbHxSNvPV5zjKLBVrWb31QBG99SI2oAM9pwXpOBav5W/7fdtt93vDg+ZAHzvMh488TF5RxFGGx5V/mpDpuMbLKUIeC/bwG+3kF2/22gffbYbzf0fAeqFYLLPEdykFKwZNLDkBYy4GYj4IftEAyviOSAduKi5JXJi/zv5q/iqhWPNRGRy1J5wVL3WBgI1v5Aun3Lb0gLMGW6qK/wlCpVq2gHTzQzIDn0KZZybygBfQFbdC8aEUUnxcti5cGnuAXrcssPtgzsvjAFVF8XrSiio/7XZ5cCJNXq1VrLPVdFLKIFdte4gKqgr9khSv4S6Q5/RKG43DMCXXrIRGjgmMjVHB8MFLL+6suQC71rH3ZP5jKS0ahmqNundAan7rbboeDWHyqcX3nyyLa+hjaJVq1KGehjS+05GWf8y9z+HA+yFIvU0jiU93vBS60f08fC4Plat3rIAnK9CtcGjJd9+p1HxvreUUGAqANj3jjUk5FC1tsYWl41isUKH+6/j5eGLHd74dT932ROlhQ3uPTcSi5flPntpvdVzVZfM2TpV7V0zz4A4qKelXyB7wH7aqWq3l/uvmBJVZbP9T08e1+aGLTYLsfjuzp8WnXxqSc3O7Ha1Zgux+a/LI6nW/3ox48xe1+OKXt/h9afHFxNxxNd3/EdQdfXPqRyEjojdYfaaSQLy5BIy2Y8LpthYcml8FbRinjc+THWgxKldExf5r6MY8prc9f48qCALEVKD/NojeroACO1kqD3s7XFEEVwtcUQ9X1hPOaFkiyHiPNsFp+TeMT1uPUazJ15yNRnReo+KMqKqQE63wUrPMK1nkN1vkwrPMS1nktYlSTU+clrguRuC6Y0YIiS7AuRMG6oGBd0GBdCMO6IGFd0KKFNTx1QaK6GInqokDFb9xyA8OE6WIUposK00UN08UwposS00WuBMg2MMxSFwUi518sY67FFssgbQ82ynJL0+xsbIQqsoi0vGpLdSonX6YPHx4RP75IoYzm5eEDUaUuTVp+aLv/qnGGVy5owsoFnGhUc/vylXHKjPN6lCloZJNFhov52j6UEw9J87VaDhpJEGpPfDId2qJPzU+w/boAJ3vz5OAVvE2dTd3EUyGSe93e9jpnkXKii2zZUsb9SdjRnwhHr9QcHRje9kZY3Rtc3RuormY7QiZA3N43yAhpLOfrjRzOHFlo509n39AoDFKleq4yts/z6Y3K47pyRd3ZBIBRjCQM902Nx7B4fNMKLR7fNAmdeJMwwm7ixIvHDvrT0uSv57ADLIHgbfOmRZydHfxvS5O0oa0GeR+990zeG7jYQX+0vmqJF9F1Gu86MNwB/6RVN06SqE63U6fgqyEdxnm6aUmT9jqi1BugOIZZvzdBKbw3IWs2f3kxA6diUfqmpRalb/FE6Y/E3pJjNPC07i1KMn9a9xbi+dR23zZS/XY41W9roaT7mrf5kJPAUWSCu1SxZ0V/zbtUhn3V/czbmqdva57+1FILQ+Rb/08jQnrPTy0ay1r9vB4F8bHYO9oIIEL1vxOl5R2hRaua178j1byrYUFu9b8bpeXdIBaQvP5dqeQ9roQzrf+9KBXvCRWinl33nlDgvs8zF5zk3hf5A26L71zoI5f3RTj1aQ4a+VLqfUstpVSN4BK2kBDfVBmfyZAUXHTet2j3JiiBneMRTu4SF7CGc0VxYW7SRD0mBSnI+0Frh7zMEoM/w7/yIyP3Z9qIESvkn1niUfDPodVe8nMM4jT3F1yY3zf8QsQWtFVH/Rs2EiCG/ntYc/oDdC0Vcz6wwkvUng9EZzGMPqCzL797/IBoQckXd4/SiLohITlx90hyZAUmPqUGhx6ciRvPDzhXgjee236p0YPPYb9EKTv9IVpqiTkfRvGy90OLF6XgHOYKaW0C/VCOkV/5RzMCF2//NYjHZ/AnTdUGvGie/jXaXhlzP+La4mikMsTaP9JzNlTLD2Q+IqaqGzDwnTdqSvHO4SM5JBJSt3bn9pFA2vwb/+hvY7f/VqBLCO7n8sPp36KWbMz9OATv4xC8j6Pg8UZdK+L7WMP3cRjfxxLffxC+30Xi+x1q6Yq5n4TwfRLC90kUvk8mwPeJhu+TML5PJL7/JHy/F/iu5Imgu8D071FPf8z9NITw0xDCT6MQ8sZpXG9xrFyErfcCwvxUg/lpGOanEuYfCOYfBcwZXJ1XqY4NDedqXr2e/iMq2xNzPwth/SyE9bMorLwxQjmi/UxD+1kY7WcS7X8R2j8JtNOCCv0Fz59Q1d6YeymE9VII66UorJeCcZWqEeklDemlMNJLEumfCelfdKSBe4T0X1BVI+Z+HkL6eQjp51FIP1dIA6oR6eca0s/DSD+XSP+HkOKMKYiqFvlpaLd9AddmJkxoCcKElhBM3hjUixhtpjAK9RpGvAwYl8QJ3LYpGgZ6Cggt5lPAKbTESk9B9d+OO6FuPSQS7DcTG+N8fhjMVwa9stTxRaZprgubncq7BB67TZWW5WO3qSF4U2nHTD52m0rI/BvSaaj8qZg7LRwvaIp67NY+A2QTJDuar9W9nTOYWjlJs7tEqzaDZ6GNPzVQnRLuDA3zUA42gWYwsQk0k18TK/CZgidqbwSbAm8JAnMXyXdSFsGbLcVSpVQf9ugE32LBjz3E2y3at1H2ClQovupqysCpWHTP1GALaPqXHjMFzdxZBvBZOnD60mOWFjj9S49ZTO54ChHY8aRj7S1ObiJu98yRRIBlpfTcmaOxRi6s5khCUFpmzZGMmINx//uYe22YEdcKRiRhII4VG7X8UHLAD5tfJZJFr9YoDSX929mGVy43FjtzDbA9cyUZxEs0WWiiO3RnrmaPf0iorq6aq7iEQx+/sswVy6VRLmULqajPMRfdwGCd+Y8x94awVzcIr9J+W2epMuy7kxzJVyrJ4ZJXS1ZKg8ONZH5gyBuoVf1FViV5wKsVvMrN2+YxtdgjXV3zMAt2eh4ftIM3M8lrWF6nb8YLf4i58w1yzA+x2pnP1H0lDorEfOL5FsXzNfCWwcJSAV/ZwlfOiNXefq/SEB8w4UmuMT7qdTRxutNLW3SBc35+kPPzNc7P1zgvgOucny85v8Bwa0GY8wsm4PwCxXkhApxfYHJ+geT8rZLz8oW7WbfyqkubtLdiCN+NuU3hvDf9NWxuXuhL+2lrNvxrDqetOZS2ZlWe+N0/Tw9ua0L45cOQy0tVs0gVlGa6DmpuzzRrSWvWktYckbRmmbS04VRaOAW7Dfli0RtseAV4vaeDJFHnzHQg0mn0+p9ibouhrCUcoZZQhFr+vwt4S5DMLVpcWrS4tETEpUXGZbHhyuIwmRdPQObFisyLNXtCoyTzYmFs29JwNVnKq8lSXk3cZQagZeHYLgvFdhnFFjaF1/qx9dn3f60Qy4JBXaYFdZlwkiXc5QbK5WGUy0MolxPKeQbKyOQuD+JYruFYruFYySMafACErdE7VStl2VEZ2iUa5WMmnLigla9jlEDCWcmCvXtWUpHhn48J4mIzPdmcypsFuW1U4U/Fk2OE1LJtPILnEDS3FYvFj6zhYjEDzeKBhEChXogaqxQwBGL+oS2zlZLdrZHhaRXhidgya42KT2tkfFpVfFq1+LSa8WmNjk/rxPFplfFplfFpjY5Pqxaf1sj4tGrTAt+7a5UBaosMUJvJH7V31xYVn7bI+LSp+LRp8Wkz49MWHZ+2iePTJuPTJuPTFh2fNi0+bZHxadP4Q5uIbTI87ZHhaRfhMTcR26OC0x4ZnHYVnHYtOO1mcNqjg9M+cXDaZXDaRXDQD1GuYFOynfGnnavuJMvytqZR2ue5d3JxMFktF3LQyFJ3yrCsNqrf6nD1W80iNjtWU/TVngFKsRh888znRH8eBGv+kMzXGnQo50R8rFTy79EiyqacRuF3H9B6+AE1mptMX85S6RcaodMKvGpP5iUXhZlt25Mzq7Xiu1qb6UQY9Jl1tQzSXUaQ7tKDRDPrXRoh9ZkV2vnMKkRgmXgXM5aJ3IR/SwNHcevhuJPlViWBsmSA31Oo2K7K8szbWuZnYyPeJGUxgYNxZ62pca3UOE1oFClyhXCQOWtFUJo7/aOeuLNBG1dSzN3AO+OPfAFG3n2D6O5sNCLQQw0Wi8CC1+jBd9BzeyNlIm73b4yCe91GdB1eIugyctgVInqii8zfYsmFryAmrHwDiHBiR3mbTz5NGtk7mpwuPmiMAKzkffTeU5HD2u6i6CtD0yVLBB9sKIE7i6RF7ix2afzuEpT0Fxfdhvfd4WHezdR2vAxgopvJhU74ZoCvw3xBjEe38GiW5pFakkkL6it7069u6Ve38GuuHOFRq75Mt+Zwt3K42UF2ur2G371hv3uZufXdSz5f1tZ3GhzvFY5Hbn2nm6QNbeu7VxJB9o7Y+tb6qq3viK7G1neL6ia2viM6XdbWd4ux9S30BmaDXjORvTKRvUGC9mr56lX5cvp4OQio7aO6pnbU+igzX76jhj1DO2rCiHrW2CcLi7ajhmK4oybVAIwMnIkFSJ+Y6QM7aut2oD+JhLuDEy+0b8tSO8SM7e7iQvCnxFK7aIFAL3C4uw3q7g5Td3dULnabM/Numpnhq3M1M+MNq1iDBO9XgzO1qmpfPlfvjp6rd3/hXL1bzNVz8Hq15scxOTCeVIZRAc3fuzX67NbmbxEsff7eLefvnBHKXHj+zk0wf+fU/C1EYP7OmfN3Ts7fOZy/J03q3xPI7i17qPvMPM3L1L4knccc/lvcGTAn5wEaVPKx5+AAsV9ufoseYY71DdC8F5/cR0I26S2XGqkBQb/mQf/o7bhTNA0XTcNFMqxeTC1ObLkoLRdNy0Vh2SmZJqGBaSaxQe0UgG63NLHRkjRaEkZFt1RJ0MDZayStZy9ZlfWFGizx4zdyib5XVonQEn0vs8Rn4hPD2yvh7RXwdP2pvTIwI2ZgRszAjIQDMzKx5RFpeSQUmBEZmLJptWxaLUur4YVieWLzZWm+LMyH+qfKEkeFJ4hGzMxKcKRUUNmf407VzGPVzGNVThwhc6v4tcBi2a7KNFYn9qYqvakKb+ibm7FKo1A9UElV5dAa9Y/+Ie7UTaR1E2ldMi686q1L2hmr3rpEW58YbV2irUejrUu0Y4h23b1i8rqXa4Uta1gE+GsB+aF26l45fY0bZXU8PEONR81Q4+YMNU4z1BJLzlAwcSzyp6l7F41H/sgZRzUwDr9zNs4s7ZWzcW2KGNemCIFWnyLG5RRx0PDlYHiKODjBFHFQTRFCBL9mNqeIg3KKOIhTRMsk55A58A4ZpbcdGxJUL/zlL21gHtKQyIcTolHOERDDLLTyhxNKIJE4JNwDM8mF0UDYFWL6uhc7wILuCuoqFnT3EWK5WzueoHP4BUkS5Bducw9xKkSRqo/swxcGhyQr7/OPZk1yD2vQGqNl1n5YYMfd63q9NFTJHGZy753o7x/sPMzEDntgn45kcQ9eSvi3SPebdu6PsHM/k+9ymD6Axfs1i1Ey2fuV7fs120dM20cibB9RPsr3C3YeMXykK9kjys4Rzc5R087RCDtHyU7k7/WCyaOayUih7FFl/ahm/QHT+gMR1h8g68GffgSzD2hmg1ezDyh7D2j2HjTtPRhh70Em3yMJFlCw+aBmMyyRfVDZfVCz+7Bp9+EIuw+TXXjuWPD8G4/SKLyGAT2xv/iwW/udeNLiD7zrLXpWqfXzK2FhAAb8zoe12mC81PmwKlRKKrEX4ZIXD2teHDO9OBbhxTEm3xSTD1UhcMe0wAUuZo+pmB3TrB03rR2PsHZccUO5BRE7Hh2x4yJi/Eenchih4xNH6LiK0HEtQsdVhI5rmB8xMT8SgfkRwgwtlCGMzyMGmTUMj6gAPaIZe9Q09miEsUfJ2Bd/0Q/2H9Xsf7F09lGF51ENzwkTz4kIPCdUwuAb2E5Ztk5o9q8S/ud48TqhLJ7QLD5mWnwswuJjipDyk3Mw+JhBSHkx+5iy9phm7XHT2uMR1h7X6C9+3QSsPW7SX/70yePK2uOatZOmtZMR1k4Go+nARgX0c04y4xHWOtSH1BdtzhPMfAa1/gkpJRudU5oufNy0/lRAF7RloMlfY6EbpzQ3njTdeDLCjSeVG+oDdIjak8agUFezT6qwPanZe8q091SEvadUkuSPZ4C5p4wkqR+xeUpZe0qzdtq0djrC2mnlnfpRDjB32vBOXc2eVvZOa/bOmPbORNg7w+SrzuI3PsDaGc2afi17Rtk6o9k6a9o6G2HrbJCA9EMDYO2s4Zu6mj2r7J3V7J0z7Z2LsHdOZU58+ILmznFFthX4VmbXOQnDDvbKnlMozmkonjZRPB2B4mkmX+HU/n8lgONpzW3jcvZpZfFpZfHOZ8AAPeHz//tf4dl0Og==');?>
