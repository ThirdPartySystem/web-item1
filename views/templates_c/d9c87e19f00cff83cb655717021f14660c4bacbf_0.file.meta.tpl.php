<?php /* Smarty version 3.1.24, created on 2016-09-07 23:50:17
         compiled from "C:/xampp/htdocs/web-item1/views/templates/common/meta.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:638157d029298094c3_15108808%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9c87e19f00cff83cb655717021f14660c4bacbf' => 
    array (
      0 => 'C:/xampp/htdocs/web-item1/views/templates/common/meta.tpl',
      1 => 1473256792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '638157d029298094c3_15108808',
  'variables' => 
  array (
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d0292980da78_21031336',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d0292980da78_21031336')) {
function content_57d0292980da78_21031336 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '638157d029298094c3_15108808';
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
<meta name="viewport" content="width=device-width"/><?php }
}
?>