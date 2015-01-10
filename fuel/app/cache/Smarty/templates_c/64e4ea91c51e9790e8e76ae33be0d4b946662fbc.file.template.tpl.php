<?php /* Smarty version Smarty-3.1.21, created on 2015-01-10 18:47:16
         compiled from "/home/wojtek/WOJTEK_PRACA/fuel_test_esky/fueltest/fuel/app/views/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173449356954b04de066cc59-86485430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64e4ea91c51e9790e8e76ae33be0d4b946662fbc' => 
    array (
      0 => '/home/wojtek/WOJTEK_PRACA/fuel_test_esky/fueltest/fuel/app/views/template.tpl',
      1 => 1420912035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173449356954b04de066cc59-86485430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54b04de0690e30_64983374',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b04de0690e30_64983374')) {function content_54b04de0690e30_64983374($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('general/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="navbar navbar-inverse navbar-fixed-top">

</div>

<div class="container">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('general/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
