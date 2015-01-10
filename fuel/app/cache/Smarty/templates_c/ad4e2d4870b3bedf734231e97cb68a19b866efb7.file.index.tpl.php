<?php /* Smarty version Smarty-3.1.21, created on 2015-01-10 21:59:29
         compiled from "/home/wojtek/WOJTEK_PRACA/fuel_test_esky/fueltest/fuel/app/views/main/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179496029554b04de06c1be0-35478833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad4e2d4870b3bedf734231e97cb68a19b866efb7' => 
    array (
      0 => '/home/wojtek/WOJTEK_PRACA/fuel_test_esky/fueltest/fuel/app/views/main/index.tpl',
      1 => 1420923567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179496029554b04de06c1be0-35478833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54b04de06c5219_98424955',
  'variables' => 
  array (
    'val' => 0,
    'el' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b04de06c5219_98424955')) {function content_54b04de06c5219_98424955($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['val']->value['errors'])) {?>
    <table class="table"><tbody>
            <?php  $_smarty_tpl->tpl_vars['el'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['el']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['el']->key => $_smarty_tpl->tpl_vars['el']->value) {
$_smarty_tpl->tpl_vars['el']->_loop = true;
?>
                <tr class="table-hover error">
                    <td><?php echo $_smarty_tpl->tpl_vars['el']->value;?>
</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['val']->value['rate'])) {?>
    <table class="table">
        <thead>
            <tr>
                <td>From:</td>
                <td>To:</td>
                <td>Rate:</td>
                <td>Average:</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="column"><?php echo $_smarty_tpl->tpl_vars['val']->value['rate']['from'];?>
</td>
                <td class="column"><?php echo $_smarty_tpl->tpl_vars['val']->value['rate']['to'];?>
</td>
                <td class="column"><?php echo round($_smarty_tpl->tpl_vars['val']->value['rate']['rate'],4);?>
</td>
                <td class="column"><?php echo round($_smarty_tpl->tpl_vars['val']->value['rate']['avg'],4);?>
</td>
            </tr>
        </tbody>
    </table>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ('./logs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
