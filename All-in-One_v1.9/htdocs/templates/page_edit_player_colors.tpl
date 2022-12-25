<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="stamm.css" />
<script src="script.js?1159978916" type="text/javascript"></script>
<script src="menu.js?1148466057" type="text/javascript"></script>
<title>{$lang->grab("edit_player_colors", "change_player_colors")}</title>
</head>
<body>
<table class="navi-border" width="100%" style="margin: 25px auto auto; border-collapse: collapse;">
<tbody>
<tr>
<td>
<table class="main" width="100%" align="center">
  <tbody>
    <tr>
      <td>
        <h2>Spielerfarben bearbeiten</h2>
          <table class="vis">
            <tbody>
              <tr class="edit_player_colors">
              </tr>
              <tr class="edit_player_colors">
              </tr>
              <tr class="edit_player_colors">
              </tr>
              <tr class="edit_player_colors">
              </tr>
            </tbody>
          </table>
<h3>Neue Gruppe</h3>
{literate}
<script type="text/javascript">
function show_color_picker() {
var style = gid("color_picker").style;
style.display = (style.display == 'none' ? '' : 'none');
}
</script>
{/literate}
  <form method="post" action="page.php?page=edit_player_colors&action=new_group">
    <table class="vis">
      <tbody>
        <tr class="edit_player_colors">
          <td>Farbe</td>
          <td id="color" width="30" style="background-color: rgb(255, 0, 255); background-image: none;"/>
          <td width="200">
            <a href="javascript:show_color_picker()">» Farbe ändern</a>
          </td>
        </tr>
        <tr>
          <td/>
          <td colspan="2">
{literate}
<script type="text/javascript">
function color_picker_choose(r, g, b) {
gid("color_picker_r").value = r;
gid("color_picker_g").value = g;
gid("color_picker_b").value = b;
color_picker_change();
}
function color_picker_change() {
var r = gid("color_picker_r").value;
var g = gid("color_picker_g").value;
var b = gid("color_picker_b").value;
gid("color").style.backgroundColor = "rgb("+r+", "+g+", "+b+")";
gid("color").style.backgroundImage = 'none';
}
function color_picker_ok() {
color_picker_change();
}
</script>
{/literate}
  <table id="color_picker" style="border-spacing: 0px; display: none;">
    <tbody>
      <tr>
        <td>Rot:</td>
        <td>
          <input id="color_picker_r" type="text" size="4" onkeyup="color_picker_change()" onchange="color_picker_change()" style="font-size: 10px;" name="color_picker_r"/>
        </td>
        <td width="15" onclick="color_picker_choose(0,0,0)" style="background-color: rgb(0, 0, 0); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(0,0,127)" style="background-color: rgb(0, 0, 127); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(0,0,254)" style="background-color: rgb(0, 0, 254); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(0,127,0)" style="background-color: rgb(0, 127, 0); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(0,127,127)" style="background-color: rgb(0, 127, 127); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(0,127,254)" style="background-color: rgb(0, 127, 254); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(0,254,0)" style="background-color: rgb(0, 254, 0); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(0,254,127)" style="background-color: rgb(0, 254, 127); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(0,254,254)" style="background-color: rgb(0, 254, 254); background-image: none;"> </td>
      </tr>
      <tr>
        <td>Grün:</td>
        <td>
          <input id="color_picker_g" type="text" size="4" onkeyup="color_picker_change()" onchange="color_picker_change()" style="font-size: 10px;" name="color_picker_g"/>
        </td>
        <td width="15" onclick="color_picker_choose(127,0,0)" style="background-color: rgb(127, 0, 0); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(127,0,127)" style="background-color: rgb(127, 0, 127); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(127,0,254)" style="background-color: rgb(127, 0, 254); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(127,127,0)" style="background-color: rgb(127, 127, 0); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(127,127,127)" style="background-color: rgb(127, 127, 127); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(127,127,254)" style="background-color: rgb(127, 127, 254); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(127,254,0)" style="background-color: rgb(127, 254, 0); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(127,254,127)" style="background-color: rgb(127, 254, 127); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(127,254,254)" style="background-color: rgb(127, 254, 254); background-image: none;"> </td>
      </tr>
      <tr>
        <td>Blau:</td>
        <td>
          <input id="color_picker_b" type="text" size="4" onkeyup="color_picker_change()" onchange="color_picker_change()" style="font-size: 10px;" name="color_picker_b"/>
        </td>
        <td width="15" onclick="color_picker_choose(254,0,0)" style="background-color: rgb(254, 0, 0); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(254,0,127)" style="background-color: rgb(254, 0, 127); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(254,0,254)" style="background-color: rgb(254, 0, 254); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(254,127,0)" style="background-color: rgb(254, 127, 0); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(254,127,127)" style="background-color: rgb(254, 127, 127); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(254,127,254)" style="background-color: rgb(254, 127, 254); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(254,254,0)" style="background-color: rgb(254, 254, 0); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(254,254,127)" style="background-color: rgb(254, 254, 127); background-image: none;"> </td>
        <td width="15" onclick="color_picker_choose(254,254,254)" style="background-color: rgb(254, 254, 254); background-image: none;"> </td>
      </tr>
    </tbody>
  </table>
{literate}
<script type="text/javascript">
gid("color_picker_r").value = 255;
gid("color_picker_g").value = 0;
gid("color_picker_b").value = 255;
color_picker_change();
</script>
{/literate}
</td>
</tr>
<tr>
<td>Gruppenname:</td>
<td colspan="2">
<input type="text" value="Gruppe" name="name"/>
</td>
</tr>
</tbody>
</table>
<input type="submit" value="Erstellen"/>
</form>
<p>
<a href="javascript:opener.location.href=opener.location.href+'&con_update'; window.close();">» Schließen und Karte aktualisieren</a>
</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</body>
</html>