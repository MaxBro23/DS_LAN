<?php /* Smarty version 2.6.14, created on 2022-12-24 00:39:16
         compiled from ../templates/createvillage.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_tpl_vars['lang']->get('create_village'); ?>
</title>
<link rel="stylesheet" type="text/css" href="stamm.css" />
<script src="script.js?1159978916" type="text/javascript"></script>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
</head>

<body >
<table class="main" width="800" align="center"><tr><td>
<h3>Neues Dorf erbauen</h3>

<?php if (! empty ( $this->_tpl_vars['ennobled_by'] )): ?>
<p><?php echo $this->_tpl_vars['lang']->get('ennobled_by'); ?>
 <strong><?php echo $this->_tpl_vars['ennobled_by']; ?>
</strong> <?php echo $this->_tpl_vars['lang']->get('ennobled'); ?>
 <?php echo $this->_tpl_vars['lang']->get('citizens'); ?>
</p>
<?php endif; ?>


<h4><?php echo $this->_tpl_vars['lang']->get('direction'); ?>
</h4>

<table class="vis"><tr><td width="200">
<form action="create_village.php?action=create" method="post">
<label><input type="radio" name="direction" value="random" checked="checked" /><?php echo $this->_tpl_vars['lang']->get('random'); ?>
</label><br />
<label><input type="radio" name="direction" value="nw" /><?php echo $this->_tpl_vars['lang']->get('northwest'); ?>
</label><br />
<label><input type="radio" name="direction" value="no" /><?php echo $this->_tpl_vars['lang']->get('northeast'); ?>
</label><br />
<label><input type="radio" name="direction" value="sw" /><?php echo $this->_tpl_vars['lang']->get('southwest'); ?>
</label><br />
<label><input type="radio" name="direction" value="so" /><?php echo $this->_tpl_vars['lang']->get('southeast'); ?>
</label><br />
<br /><input type="submit" value="<?php echo $this->_tpl_vars['lang']->get('confirm'); ?>
" />
</form>

</td><td>
<img src="graphic/richtung/richtung.png" alt="" />
</td></tr></table>



</td></tr></table>
<script type="text/javascript">setImageTitles();</script>
</body>
</html>