<?php /* Smarty version 3.1.24, created on 2016-09-08 01:03:03
         compiled from "C:/xampp/htdocs/web-item1/views/templates/common.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2049757d03a37e4e621_20983234%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '837b9fb76b822d015248f1bf199c67786279f1de' => 
    array (
      0 => 'C:/xampp/htdocs/web-item1/views/templates/common.tpl',
      1 => 1473264181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2049757d03a37e4e621_20983234',
  'variables' => 
  array (
    'imageDir' => 0,
    'templatePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d03a37e8b275_76988388',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d03a37e8b275_76988388')) {
function content_57d03a37e8b275_76988388 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2049757d03a37e4e621_20983234';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<?php echo $_smarty_tpl->getSubTemplate ("common/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("common/stylesheet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("common/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>
<div id="page">
<header>
<p class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['imageDir']->value;?>
/logo.png" width="200" height="75"></p>
<div class="wrapper">
<ul class="menu clearfix">
<li><a href="#">ホーム</a></li>
<li><a href="#">サービス</a></li>
<li><a href="#">企業情報</a></li>
<li><a href="#">お問い合わせ</a></li>
</ul>
</div>
</header>
<section id="content">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templatePath']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</section>
<footer>
</footer>
</div><!-- #page -->
</body>
</html><?php }
}
?>