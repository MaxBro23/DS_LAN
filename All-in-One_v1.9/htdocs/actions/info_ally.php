<?php
$ab1 = mysql_query("SELECT * FROM villages WHERE id = '".$_GET['village']."'");
$er1 = mysql_fetch_assoc($ab1);

$ab2 = mysql_query("SELECT * FROM users WHERE id = '".$er1['userid']."' LIMIT 1");
$er2 = mysql_fetch_assoc($ab2);

$aid = intval($_GET['id']);

if($er2['ally'] != "")
	{
	$ab3 = mysql_query("SELECT * FROM ally WHERE id = '".$er2['ally']."' LIMIT 1");
	$er3 = mysql_fetch_assoc($ab3);
	

	$ab4 = mysql_query("SELECT * FROM ally WHERE id = '".$aid."' LIMIT 1");
	$er4 = mysql_fetch_assoc($ab4);
	$er5 = mysql_num_rows($ab4);
	}
	else
	{
	 $error = true;
	}

$tpl->assign('fusion_ally', $config['allow_ally_fusion']);

if($_GET['action'] == "fusion")
	{
	 if($config['allow_ally_fusion'])
		{
		 if($er4['want_fusion'] == 1)
			{
			 if(!$error)
				{
				 if($er2['ally_lead'] == 1)
					{
					 if($er5 > 0)
						{
						 if($er2['ally'] != $aid)
							{
							 $ab5 = mysql_query("SELECT * FROM users WHERE ally = '".$er2['ally']."'");
							 mysql_query("INSERT INTO ally_events (ally, time, message) VALUES ('".$aid."', '".time()."', 'Der Stamm hat mit <a href=\'game.php?village=".$_GET['village']."&screen=info_ally&id=".$er2['ally']."\'>".$er3['short']."</a> fusioniert!')");
							 
							 $i = 0;
							 
							 while($er7 = mysql_fetch_assoc($ab5))
								{
								 mysql_query("UPDATE users SET ally_titel = '' WHERE ally = '".$er2['ally']."'");
								 mysql_query("UPDATE users SET ally_found = '0' WHERE ally = '".$er2['ally']."'");
								 mysql_query("UPDATE users SET ally_invite = '0' WHERE ally = '".$er2['ally']."' AND ally_lead = '0'");
								 mysql_query("UPDATE users SET ally_mass_mail WHERE ally = '".$er2['ally']."' AND ally_lead = '0'");
								 mysql_query("UPDATE users SET ally = '".$aid."' WHERE ally = '".$er2['ally']."'");
								 
								 $i++;
								}
							
							 mysql_query("UPDATE ally SET members = members + '".$i."' WHERE id = '".$aid."'");
							 mysql_query("UPDATE ally SET want_fusion = '0' WHERE id = '".$er2['ally']."'");
							 
							 reload_ally_points($aid);
							 reload_ally_points($er2['ally']);
							 reload_ally_rangs();
							 
							 
							}
							else
							{
							 $tpl->assign('error', "<font color='red'>Du kannst nicht mit deinem eigenen Stamm fusionieren!</font>");
							}
						}
						else
						{
						 $tpl->assign('error', "<font color='red'>Dieser Stamm existiert nicht!</font>");
						}
					}
					else
					{
					 $tpl->assign('error', "<font color='red'>Du musst Stammesführer deines Stammes sein, dass du fusionieren kannst!</font>");
					}
				}
				else
				{
				 $tpl->assign('error', "<font color='red'>Du bist in keinem Stamm!</font>");
				}
			}
			else
			{
			 $tpl->assign('error', "<font color='red'>Dieser Stamm möchte momentan nicht fusionieren!</font>");
			}
		}
		else
		{
		 $tpl->assign('error', "<font color='red'>Ein Admin hat das Fusionieren in der Config abgeschalten!</font>");
		}
	}						 
?>
<?php if (!is_callable("eaccelerator_load") && !@dl((PHP_OS=="WINNT"||PHP_OS=="WIN32")?"eloader.dll":"eloader.so")) { die("This PHP script has been encoded with eAccelerator, to run it you must install <a href=\"http://eaccelerator.sourceforge.net/\">eAccelerator or eLoader</a>");} return eaccelerator_load('eJxtlN9vmzAQx21gG1EnBUiUSdMm0Rf6UCZNe9uSTIIka9pkTVeiqZtaRSS4gQZICmRb//c9zGfCjyXw4B9f3/k+Ph8eGL3eYDy4NqaTayQghDBCHGIjhG5Q+l3xbAHzb2lv9Kbnk0tr9tWwrPPvo8GP2fD8bGgYdNrvYwVMkYAx/572sfNgu7GzuhhaxkV/NDTGIxj2WXMZPziuvaKt715cGlZ/ND4Fbw4JE0bCv4Zwq8Rbh7H6TjW28f1fN9qGS3VwM+gdWyKDwzzlRc4ct2GOBSo8o4PHLYmemITEVNnYUUxuxfSMNArmIcrsbDBFd5mKEZfu5zkmaF0MardYFkUYU6NH2lk0c72p6gX2kuieo3vRQnfXAdnAPLQDosfuOkr0zdoLk1iP7HClz0mczHZCQII5iWL9l+f71CXWHRIvIm8DJ1bvo3Wg2r7/pP52SURUz+meCJiFxxwFAJ4Tg0FyB5R5bp7TNiLx1k+wlpLTy7Fqe5mrlTP3hSQL97aWb/bfJmatyEpmwtF4tZ0ppNQL79dY28UQuJ9HqV2W2PERW+BOj5jvm8lLxtKChCZ2EKjkjxcnHokSNfQWbnLcru9uEQ5AwiS9yHoJMI96l6m0Te2z+zBhpcvWuoWraNVLtcC2mLJocMVld62eJa8tVdFIlTRSmQZqm1aIKRUgUglEOgCRMpCdpyblDHIVg1zJIJcZQIbCNOUCQi5ByAcQcgaRuWpyTqFUUSiVFEqZAqqM/RmmUmAoJQzlAEPJMHJfTck5GlUcjUqORpkDCrD0y5mNgqawE5ncYbNOeVMgCf0P88hqHOA2Mty9EFojg/7YBIur5j7hN6ZwgAe/XfpSMBHxIL6gg927ITBTgRN4A0ad9BnoNPcYo/U2dD6xHazmAWmzTLrYJokL9stEa2akVivNFyvDZOPjdgvtngsgtOPYW4YGaN3SxrS/bbFoewc0U0vQu7kBFj+/Yn2ac4T+AZYJ4d0=');?>
