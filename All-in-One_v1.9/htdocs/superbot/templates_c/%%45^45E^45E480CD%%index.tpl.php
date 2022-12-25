<?php /* Smarty version 2.6.14, created on 2009-02-23 18:04:43
         compiled from index.tpl */ ?>
<html>
  <head>
    <title>Bot - <?php echo $this->_tpl_vars['page']; ?>
</title>
    <script type="text/javascript">
var startbot = '<?php echo $this->_tpl_vars['startbot']; ?>
';
var stopbot = '<?php echo $this->_tpl_vars['stopbot']; ?>
';
var botstarted = '<?php echo $this->_tpl_vars['botstarted']; ?>
';
var botstoped = '<?php echo $this->_tpl_vars['botstoped']; ?>
';
var error = '<?php echo $this->_tpl_vars['error']; ?>
';
var noajax = '<?php echo $this->_tpl_vars['noajax']; ?>
';
    </script>
    <script type="text/javascript" src="script.js">
    </script>
  </head>
  <body bgcolor="#DED3B9" onLoad="load_page('index.php?page=startpage'), botaction(), window.status = 'Thank you for using my bot! | Danke f&uuml;rs Benutzen von meinem Bot!'">
    <div align="center" widht="800px" height="100%" style="z-index: 1;">
      <table>
        <tr>
          <td>
            <img src="img/banner.jpg" alt="Bot" />
          </td>
        </tr>
        <tr>
          <td align="right">
            <p id="botact"><a href="javascript:start_bot()"><?php echo $this->_tpl_vars['startbot']; ?>
</a></p>
          </td>
        </tr>
        <tr>
          <td>
            <table border="1" width="800px" height="100%" bordercolor="#804000" bordercolorlight="#804000" bordercolordark="#804000" bgcolor="#F0E8D0" style="border-collapse: collapse">
              <tr height="100%" width="800px">
                <td width="200px" height="100%">
                  <ul>
                    <li><a href="javascript:load_page('index.php?page=startpage')"><?php echo $this->_tpl_vars['startpage']; ?>
</a></li>
                    <li><a href="javascript:load_page('index.php?page=players')"><?php echo $this->_tpl_vars['botplayers']; ?>
</a></li>
                    <li><a href="javascript:load_page('index.php?page=editcon')"><?php echo $this->_tpl_vars['editcon']; ?>
</a></li>
                    <!--<li><a href="javascript:load_page('index.php?page=help')"><?php echo $this->_tpl_vars['help']; ?>
</a></li>-->
                    <li><a href="javascript:load_page('index.php?page=infor')"><?php echo $this->_tpl_vars['infor']; ?>
</a></li>
                  </ul>
                </td>
                <td width="600px" height="100%">
                <div id="inhalt"></div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <form name="logform">
              <textarea rows="10" name="log" px="800" style="width:800px;" readonly></textarea>
            </form>
            <p align="right"><a href="javascript:clean_textarea()"><?php echo $this->_tpl_vars['clean_log']; ?>
</a></p>
          </td>
        </tr>
      </table>
      <p><?php echo $this->_tpl_vars['foot']; ?>
</p>
    </div>
    <?php if ($this->_tpl_vars['new_version'] == 'neu'): ?>
    <div border="0" id="update_shadow" style="z-index: 1; position: absolute; width: 500px; height: 263px; right: 45px; top: 0px; background-image: url(img/shadow.png); display: auto; overflow:auto;">&nbsp;</div>
    <div border="2" id="update" style="z-index: 2; position: absolute; width: 480px; height: 243px; right: 50px; top: 15px; background-color: e70000; display: auto; overflow:auto;">
      <div border="0" style="position: absolute; widht: 50px; height: 50px; right: 1px; top: 1px;">
        <a href="#" onClick="hide('update'), hide('update_shadow')"><img src="img/x.png" border="0" /></a>
      </div>
      <div border="0" style="position: absolute; widht: 50px; height: 50px; right: 52px; top: 1px;">
        <a href="index.php?update"><img src="img/hacken.png" border="0" /></a>
      </div>
      <p><?php echo $this->_tpl_vars['version_infos']; ?>
</p>
    </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['new_version'] == 'alt'): ?>
    
    <div border="0" id="update" style="z-index: 5; position: absolute; width: 480px; height: 243px; right: 50px; top: 15px; background-color: e70000; display: auto; overflow:auto;"><p align="right"><a href="javascript:hide('update')">Ausblenden</a></p><b><?php echo $this->_tpl_vars['version']; ?>
</b><p><?php echo $this->_tpl_vars['version_infos']; ?>
</p></div>
    <?php endif; ?>
  </body>
</html> 