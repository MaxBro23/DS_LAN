<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Die St&auml;mme - Das Browsergame im Mittelalter</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="start.css" />
		<meta name="description" content="Die St&auml;mme ist ein Browsergame. Jeder Spieler ist Herrscher eines kleinen Dorfes, dem er zu Ruhm und Macht verhelfen soll." />
		<meta name="keywords" content="Browsergame, Browsergames, Browserspiel, Onlinespiel, Onlinegame, Mittelalter, Ritter, Burg, Burgen, Dorf, Krieg, Kampf, K&auml;mpfen, Ruhm, Ehre, Die St&auml;mme" />
			<link rel="stylesheet" type="text/css" href="index.css" />
		<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="index_ie6.css" media="screen"/>
		<![endif]-->
		
									<script type="text/javascript">
		if(top!=self)
			top.location=self.location;
		</script>
  
   <body>



  </head>
<div id="gamebar_content">



</div>
</div>

		<div id="index_body">
			<div id="main">
						<div id="header">
				<h1><a href="/index.php" style="background:url(graphic/index/bg-logo.jpg) no-repeat 100% 0;">Die St&auml;mme</a></h1>
				<div class="navigation">
					<div class="navigation-holder">
						<div class="navigation-wrapper">
							<div id="navigation_span">
								<a href="help.php">Hilfe</a> - <a href="http://dslan.gfx-dose.de">DSLan Forum</a> - <a href="sds_rounds.php">SDS-Runden</a>  - <a href="stats.php">Statistik</a>
							</div>
						</div>
					</div>
				</div>
				<span class="paladin"><img src="graphic/index/bg-paladin.png" alt="" /></span>						</div>				<div id="content">
					<div class="container-block">
						<div class="container-top"></div>
						<div class="container">
															<div class="info-block">
	<img src="/graphic/index/bg-raven.gif" alt="" />
	<h2>Die St&auml;mme</h2>
	 <p>Die St&auml;mme ist ein Browsergame, das im Mittelalter spielt. Jeder Spieler ist Herrscher eines kleinen Dorfes, dem er zu Ruhm und Macht verhelfen soll.</p>

		<a class="btn-kostenlos-anmelden" href="register.php">Jetzt kostenlos anmelden!</a>
		<strong>Bilder vom Spiel:</strong>
		<ul class="screenshots">
<li><a href="javascript:toggle_screenshot(1)"><img src="graphic/index/bg-screenshots-thumb-1.jpg" alt=""/></a></li>
			<li><a href="javascript:toggle_screenshot(2)"><img src="graphic/index/bg-screenshots-thumb-2.jpg" alt="" /></a></li>
			<li class="last"><a href="javascript:toggle_screenshot(3)"><img src="graphic/index/bg-screenshots-thumb-3.jpg" alt="" /></a></li>
		</ul>
	<br style="clear:both;" />
	<strong style="padding-top:10px;">Schon {$players} Spieler sind dabei!</strong>	
</div>														<div class="login-block">
	<h2 style="text-align:left;margin-bottom:15px;">Die St&auml;mme - Login</h2>
		<form action="index.php?action=login" method="post">
		<input type="hidden" id="fehler" name="{$error}">
		<div>
			<label for="user">
				<strong>Benutzername:</strong>
				<span><input id="user" name="user" class="text" type="text" value="" /></span>
			</label>
			<label for="password">
				<strong>Passwort:</strong>
				<span><input name="clear" type="hidden" value="true" /><input id="password" name="password" class="text" type="password" /></span>
			</label>
	<label for="server_select">
<strong>Welt:</strong>
<select id="server_select" class="server_select" name="server">

<option value="welt1">Welt 1</option>
<option value="welt2">Welt 2</option></select>
<input id="login-btn-input" type="submit" onmouseout="javascript:hover_toggle_css('login-btn-input','login-btn-input-hover',false);return true;" onmouseover="javascript:hover_toggle_css('login-btn-input','login-btn-input-hover',false);return true;" value="" class=""/>         
  <label for="cookie" style="text-align:right;">         
         
         <input id="cookie" type="checkbox" name="cookie" value="true"  />
					Dauerhaft einloggen
			</label>
			
			<p><a href="http://127.0.0.1/lost_pw.php">Passwort vergessen/&auml;ndern</a></p>
		
    </div>
	</form>
</div>
						</div>
						<div class="container-bottom"></div>
					</div>
				</div><!-- content -->
	<div class="closure">
								&copy; 2003 - 2009 InnoGames GmbH Templates by All in One by Agamendon
			<p></p>

      </div>			</div><!-- main -->
<script type="text/javascript" src="http://www.google-analytics.com/urchin.js">
					<script type="text/javascript">

_uacct = "UA-1897727-2";
urchinTracker();

</script>
      
      	<script type="text/javascript" src="mootools.js" >
		<script type="text/javascript" src="index.js">
				<div id="screenshot" style="visibility: hidden;" onclick="hide_screenshot();">
				<div id="screenshot_image"></div>
		
      </div>

  	</div>

  </body>
</html>