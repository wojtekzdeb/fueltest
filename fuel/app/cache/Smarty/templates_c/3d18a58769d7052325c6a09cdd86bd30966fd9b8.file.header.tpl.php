<?php /* Smarty version Smarty-3.1.21, created on 2015-01-09 22:53:36
         compiled from "/home/wojtek/WOJTEK_PRACA/fuel_test_esky/fueltest/fuel/app/views/general/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197767054854b04de06a5cf9-27968844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d18a58769d7052325c6a09cdd86bd30966fd9b8' => 
    array (
      0 => '/home/wojtek/WOJTEK_PRACA/fuel_test_esky/fueltest/fuel/app/views/general/header.tpl',
      1 => 1420834317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197767054854b04de06a5cf9-27968844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54b04de06ae0c4_64498867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b04de06ae0c4_64498867')) {function content_54b04de06ae0c4_64498867($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'Exchange rate checker' : $tmp);?>
</title>
        <link rel='stylesheet' href='/assets/css/style.css' />
        <link rel='stylesheet' href='/assets/css/bootstrap-theme.css' />
        <link rel='stylesheet' href='/assets/css/bootstrap.css' />
        <?php echo '<script'; ?>
 src="/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="jumbotron">Exchange rate checker</div>
    
    <?php }} ?>
