var bot_active = false;
var bot_log = true;
var i = 1;

function start_bot()
{
	bot_active = true;
	document.getElementById('botact').innerHTML = "<a href=\"javascript:stop_bot()\">" + stopbot + "</a>";
	alert(botstarted);
}
function stop_bot()
{
	bot_active = false;
	document.getElementById('botact').innerHTML = "<a href=\"javascript:start_bot()\">" + startbot + "</a>";
	alert(botstoped);
}

try
{
	req = window.XMLHttpRequest?new XMLHttpRequest():
	new ActiveXObject("Microsoft.XMLHTTP");
}
catch(e)
{
	alert(noajax);
}
 
function load_page(url)
{
	req.onreadystatechange = show;
	req.open('get', url);
	req.send(null);
}
function show()
{
	//while((req.readyState != 4) && (req.status != 200)){}
	if((req.readyState == 4) && (req.status == 200))
	{
		document.getElementById('inhalt').innerHTML = req.responseText;
	}
	else
	{
		document.getElementById('inhalt').innerHTML = error;
	}
}

function innertext()
{
	if((bot_log) && (botajax.readyState == 4) && (botajax.status == 200))
	{
		if(i >= 50)
		{
			document.logform.log.value = ' ';
		}
		document.logform.log.value += botajax.responseText;
		document.logform.log.scrollTop = document.logform.log.scrollHeight;
		i++;
	}
}

function botaction()
{
	if(bot_active)
	{
		try
		{
			botajax = window.XMLHttpRequest?new XMLHttpRequest():
			new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e)
		{
			alert(noajax);
		}

		botajax.onreadystatechange = innertext;
		botajax.open('get', 'bot.php');
		botajax.send(null);
	}
	setTimeout("botaction();",1000);
}

function clean_textarea()
{
	document.logform.log.value = '';
}

function add_player(player)
{
	load_page('index.php?page=players&add_player=' + player);
}

function hide(handler)
{
	document.getElementById(handler).style.display = 'none';
}
