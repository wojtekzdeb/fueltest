<?php /* Smarty version Smarty-3.1.21, created on 2015-01-10 20:51:17
         compiled from "/home/wojtek/WOJTEK_PRACA/fuel_test_esky/fueltest/fuel/app/views/main/logs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175350275854b04de06c8317-96388158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87ac94fd62b8c3053000babec72da8d1cd89cd0d' => 
    array (
      0 => '/home/wojtek/WOJTEK_PRACA/fuel_test_esky/fueltest/fuel/app/views/main/logs.tpl',
      1 => 1420919369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175350275854b04de06c8317-96388158',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54b04de0705f11_21718092',
  'variables' => 
  array (
    'logs' => 0,
    'log' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b04de0705f11_21718092')) {function content_54b04de0705f11_21718092($_smarty_tpl) {?><div class="container-fluid">
    <div class="row header">
        <div class="col-md-2">Id</div>
        <div class="col-md-2">Date</div>
        <div class="col-md-2">Currency from</div>
        <div class="col-md-2">Currency to</div>
        <div class="col-md-2">Rate</div>
    </div>
    <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
    <div class="row row-log">
        <div class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['log']->value->getId();?>
</div>
        <div class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['log']->value->getDate()->format('Y-m-d H:i:s');?>
</div>
        <div class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['log']->value->getCurrencyFrom();?>
</div>
        <div class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['log']->value->getCurrencyTo();?>
</div>
        <div class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['log']->value->getRate();?>
</div>
    </div>
    <?php } ?>
</div><?php }} ?>
