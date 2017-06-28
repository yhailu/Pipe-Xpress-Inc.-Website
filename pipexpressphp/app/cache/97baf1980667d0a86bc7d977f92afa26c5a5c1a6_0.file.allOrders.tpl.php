<?php
/* Smarty version 3.1.30, created on 2017-04-13 18:04:32
  from "/Users/yesuserahailu/NetBeansProjects/Webstore/templates/allOrders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eff5f089e5a9_06299846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97baf1980667d0a86bc7d977f92afa26c5a5c1a6' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/Webstore/templates/allOrders.tpl',
      1 => 1492121050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58eff5f089e5a9_06299846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28592576358eff5f08772b0_59992485', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_577949658eff5f089d066_61364226', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_28592576358eff5f08772b0_59992485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style type="text/css">
        td:first-child{
            width: 10px;
        }
        td{
            border: none ! important;
        }
    </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_577949658eff5f089d066_61364226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>All Orders</h2>
    <table class="table table-condensed">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
            <tr>
                <td>
                    <a href="showOrder.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
                    Order #<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>

                    </a>
                </td>
                <td>Time Placed:<?php echo $_smarty_tpl->tpl_vars['order']->value->created_at;?>
</td>
                <td>for:<?php echo $_smarty_tpl->tpl_vars['order']->value->user->name;?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
        <h4 id="message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h4>
<?php
}
}
/* {/block "content"} */
}
