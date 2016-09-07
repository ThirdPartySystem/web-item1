<?php /* Smarty version 3.1.24, created on 2016-09-08 01:17:54
         compiled from "C:/xampp/htdocs/web-item1/views/templates/common/stylesheet.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2916957d03db2f3b834_16765528%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40e64f8b6912e8ad02505c55e8982b9f1878238e' => 
    array (
      0 => 'C:/xampp/htdocs/web-item1/views/templates/common/stylesheet.tpl',
      1 => 1473265073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2916957d03db2f3b834_16765528',
  'variables' => 
  array (
    'styleDir' => 0,
    'controller' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d03db30f0d60_15070474',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d03db30f0d60_15070474')) {
function content_57d03db30f0d60_15070474 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2916957d03db2f3b834_16765528';
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['styleDir']->value;?>
/init.css?ver=1.0" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $_smarty_tpl->tpl_vars['styleDir']->value;?>
/page.css?ver=1.0" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $_smarty_tpl->tpl_vars['styleDir']->value;?>
/header.css?ver=1.0" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $_smarty_tpl->tpl_vars['styleDir']->value;?>
/footer.css?ver=1.0" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $_smarty_tpl->tpl_vars['styleDir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
.css?ver=1.0" rel="stylesheet" type="text/css" media="all">

<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'index' && $_smarty_tpl->tpl_vars['action']->value == 'index') {?>
<link href="<?php echo $_smarty_tpl->tpl_vars['styleDir']->value;?>
/page-image.css?ver=1.0" rel="stylesheet" type="text/css" media="all">
<?php }
}
}
?>