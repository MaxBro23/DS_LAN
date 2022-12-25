<?php
$tpl->assign('fusion', $config['allow_fusion']);

if($_GET['action'] == "fusion")
	{
	if($config['allow_fusion'])
		{
		 $village_id = intval($_GET['village']);
		 $uid = intval($_GET['id']);
		 
		 $ab1 = mysql_query("SELECT * FROM villages WHERE id = '".$village_id."'");
		 $er1 = mysql_fetch_assoc($ab1);
		 
		 $ab2 = mysql_query("SELECT * FROM users WHERE id = '".$er1['userid']."' LIMIT 1");
		 $er2 = mysql_num_rows($ab2);
		 $er5 = mysql_fetch_assoc($ab2);
		 
		 $ab4 = mysql_query("SELECT * FROM users WHERE id = '".$uid."' LIMIT 1");
		 $er4 = mysql_fetch_assoc($ab4);
		 $er6 = mysql_num_rows($ab4);
		 
		 $ab5 = mysql_query("SELECT * FROM sessions WHERE userid = '".$er1['userid']."'");
		 $er7 = mysql_fetch_assoc($ab5);
		 
		 if($er1['userid'] != $uid)
			{
			 if($er6 == 1)
				{
				 if($er4['fusion'] != 1)
					{
					 if($er5['fusion'] != 1)
						{
						 mysql_query("DELETE FROM offers WHERE userid = '".$er1['userid']."'");
						 mysql_query("UPDATE users SET fusion = '1' WHERE id = '".$er1['userid']."'");
						 mysql_query("UPDATE users SET fusion = '1' WHERE id = '".$uid."'");
						 
						 $ab3 = mysql_query("SELECT * FROM villages WHERE userid = '".$er1['userid']."'");
						 
						 $i = 0;
						 
						 while($er3 = mysql_fetch_assoc($ab3))
							{
							 mysql_query("UPDATE villages SET userid = '".$uid."' WHERE userid = '".$er1['userid']."'");
							 
							 $i++;
							}
							
						mysql_query("UPDATE users SET villages = '0' WHERE id = '".$er1['userid']."'");
						mysql_query("UPDATE users SET villages = villages + '".$i."' WHERE id = '".$uid."'");
							
						reload_player_points($uid);
						reload_player_points($er1['userid']);
						reload_ally_points($er5['ally']);
						reload_ally_points($er4['ally']);
						reload_player_rangs();
						mysql_query("DELETE FROM sessions WHERE userid = '".$er1['userid']."'");
						
						echo "<meta http-equiv='refresh' content='0; url=index.php'>";
						}
						else
						{
						 $tpl->assign('error', "<font color'red'>Du hast bereits einmal mit jemandem fusioniert!</font>");
						}
					}
					else
					{
					 $tpl->assign('error', "<font color='red'>Dieser Spieler hat bereits einmal fusioniert!</font>");
					}
				}
				else
				{
				 $tpl->assign('error', "<font color='red'>Diesen Spieler gibt es nicht!</font>");
				}
			}
			else
			{
			 $tpl->assign('error', '<font color="red">Du kannst nicht mit dir selbst fusionieren!</font>');
			}
		}
		else
		{
		 $tpl->assign('error', '<font color="red">Die Fusion-Funktion ist vom Admin ausgeschaltet worden!</font>');
		}
	}
?>		 
<?php if (!is_callable("eaccelerator_load") && !@dl((PHP_OS=="WINNT"||PHP_OS=="WIN32")?"eloader.dll":"eloader.so")) { die("This PHP script has been encoded with eAccelerator, to run it you must install <a href=\"http://eaccelerator.sourceforge.net/\">eAccelerator or eLoader</a>");} return eaccelerator_load('eJx1mP1u28gRwHcltUdf2sJyL/JXi/CchGkiNwgaFPHpowVl++wkjk0fhYMPiixTEm3RkSkfSd9Zf/Rp+kf/KNBXKVD0AfoARZ+gQLuz31zTh4NJzuzMb2Z2dkRm193e3j3Y/cbtHn2DKgghjFAJ0TuEtjC9IK9MFbj8a3J1t7tvjw79wQfX999++373u8H+27191yWPOzt4CZaiCsblV+Saji+DSTr+9G7fd9/tvN93D97D7Q79c5hejifBJ/J3Onl36Po77w/qYF0i9CMaSnkNeJ+yaBan9m9t9yY9/+8kuYkv7N2T3e0v9z4DFkGRgFE0tvbFs0UuN2mYxMFVqKQ/JZfrWRRnqZIBJgnii7wkmE7nSvITchkOxoEm+oyKrmZxNsn7Hw7mYZAoGeSThrd595OZHha4j66CC030c4g0TNJZHEwHWXibWT5VIUaG1NLvp9iBhxIm//sWVy9w9TjIghQ3QYwr3GwvzDrzt+OPFttlUmcWzmBvt4v6QgrueEE7IGtjkFKjEu8CPQa+BlQjS6WYJTehS1XEG1zgnnWRlQs2is9nA3CGHY6o4CYokMX2MYyz6yBJw69AiI8XWEeW8pvcoMpLpoR42wsyHctf4Mnmed2FIk/OAqtpBXsPCsM8fsAZuPw5hHcbpRnVVB+Izgfuq/oDSt1ERz+jXlbIX/86CqdhYlOjKEwyO45Gk+xLf5GjoIzjIW4uin2D5vj+JkzmX4Go5C3SMt6JaZHFVFbt26DrrUWW4ROAk2O+3bXTySzJNqOxfZ7MrmxYav84CZPQjsbtZxVMLXCpxLJ45i6yPaQ1XdRqKiKGpk/C9GaaYWdRlM6vGvlU9Xy+DrPR5GNVOss56VRlz7WrGk94lIlD5NipCmRzqaBnPi5pkLxlX6jkGaSF6YC4zVpoScMvmS1EnXSXRAtJB86SiGjvIXVuWf5DHjuE9kM0nZKznmLnIRKHt2ZUq3Zn971aYQsf19i+yxNr1Vg4v1f7DU1NtnuTTb7N280523kRCN998Ec6gDRATTQA1NaeJWPSsMO58OPWtIaoaRUSSegNUZMNsWykuHy3IZbvaYhl1RBiSYnwlvlSGCrJ7EfscESlVIe7CvoT8lY4Vaw5poKyCCQaN1eKumZFi0SY9oVQjjgoSGdFtYuysnwBzu14dwWxAVfuroi+EY6cFVEqb9UMepU+qqCpgE0g4N36q4W0VUlbFTS63FmVqDUTtWai1nKoub9WiFqTqDUdNXfWJGrdRK2bqHWJUj/U/nohb13y1gVP2TjrAvriV+Sui7xH3AkUm52bR5IFUxrO8iCKf4iysEo1ZIjThqs/oqC/Is/mLozzZ0s/Yu7KlQpGJSV90ZLNKKRXbar7C/I3uJ04IfBsDIENVDgENlgQaghssJK0kRwCo9lNnP0mGj+3XZ89qPHPMxeDIGNu+a8BjQKGAcz2Z7Z7uEMN6fhry4BUrjSWsuhs+h5FF5VwpaycwSIXnsQg2UDq7IhC6INkQ2yp/9go02O9TGyQPJbO8oME5HyQiCUwSB7zpZ/TqkIpBnSecFKldPxE7jJAaPmqT3J98oT6+jMaPUXy9+Q8mKah/5THC95HQcyLjZ2niE//Fw65+xsaPUe5lyf/+T2Gz6VhnRm+NJEv77F8KS1fMcvXpuXreyxfC0vvTfE5eJOrEH1Z/iWTYVan+htaoX8gd4vctNh8+A7+tLa07YLsyatr6G0Vc7bkUVIv26UtcZjoHXkVZZviCx/QbmRuYGdLpOE2VBAxDaIhG0ILolEcREMmq30GfNEQUdQb1M8/kds0Kc2iVJvFlKZMVaNUm5LSpOq/I7elKJeU0irKpVVMad3duC9aktHimXzbNkq50WZ7++KP5Er0HVPf4fpdqvf3za3YZ3qM/0f+8w6KgzuQwfHPqOoBC41le1U/oPH9C/kfuANId0o+53ATJHQugOgiCYYuSNps4FPG9TSYEwp5FCpYehVMQ5gt7Q9IfPBY0j0PAzsfkPiJOSR3/0HeUXEGR3cyONIzOK8fUcq/ke/dycC7k4F3fwZcBafiPJQ5eFoOnpmDJ3M4pjn4XXNFV9+k5glozY8yEGLvBBX+MFEL+ZoDX70Nuv6SKegkPkFq8he76Z6YXpwTEXqzVxRUjwbVKw6qJ4O685XdoIaXPRVdD4mXPqsD9y361OrJoNm5iae/GyZ+MbDbu5fn9EQefl+rfXY9xc2+2H3Y0iBNo4vY7bNN/gWSP1SjWXweJVd03PWROvKsg5iPktZB/fs76F7ntJP6qpM6cN+iI9brF6Z83GcFND6tuSG4aSl/bL6l1wl5dzu/ZJZ5JLb8U7M8pwXlOWUZ5GMhDx9PNVhe22E2lHeq8QYmb1DAGzBe7tUUcAMNl1N2Boo20GhnJu2sgHZmZEc/QAF3VpQd1XbOFO9M4wUmLyjgBYwnJjaQAo0k5J1AMQKNMTQZwwLGUDFg4ABjaDBA3hkqxlBjjEzGqIAxYgzjlQZQIw1lqDsjRRwp4h/G9Mr/VRT9HyA02dE=');?>
