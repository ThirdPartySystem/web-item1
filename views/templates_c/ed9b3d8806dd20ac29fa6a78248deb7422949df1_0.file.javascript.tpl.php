<?php /* Smarty version 3.1.24, created on 2016-09-07 23:50:17
         compiled from "C:/xampp/htdocs/web-item1/views/templates/common/javascript.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2501157d0292988d079_47304716%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed9b3d8806dd20ac29fa6a78248deb7422949df1' => 
    array (
      0 => 'C:/xampp/htdocs/web-item1/views/templates/common/javascript.tpl',
      1 => 1473256792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2501157d0292988d079_47304716',
  'variables' => 
  array (
    'javaScriptDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d02929891a83_22861205',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d02929891a83_22861205')) {
function content_57d02929891a83_22861205 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2501157d0292988d079_47304716';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['javaScriptDir']->value;?>
/const.js?ver=1.0" type="text/javascript"  charset="UTF-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['javaScriptDir']->value;?>
/jQuery.js?ver=1.0" type="text/javascript"  charset="UTF-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['javaScriptDir']->value;?>
/all.js?ver=1.0" type="text/javascript"  charset="UTF-8"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49196479-5', 'auto');
  ga('send', 'pageview');
<?php echo '</script'; ?>
>
<?php }
}
?>