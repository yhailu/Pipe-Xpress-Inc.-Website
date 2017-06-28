<?php
/* Smarty version 3.1.30, created on 2017-04-13 14:15:43
  from "/Users/yesuserahailu/NetBeansProjects/Webstore/templates/cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58efc04f8a34f5_95327210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4397bbab9ddb944e1f46c261b3acea013077ee4f' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/Webstore/templates/cart.tpl',
      1 => 1492106022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58efc04f8a34f5_95327210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75751657358efc04f87fa60_05192035', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132915365058efc04f8a18c4_60476881', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_75751657358efc04f87fa60_05192035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style type="text/css">
        .top{
            margin-bottom: 20px;
        }
        .top h2{
            display: inline-block;
            margin: 0 30px 0 0;
            vertical-align: bottom;
        }
        .top form{
            display: inline-block;
            vertical-align: bottom;
        }
    </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_132915365058efc04f8a18c4_60476881 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="top">
    <h2>My Cart</h2>
    
</div>
    
    <table class="table table-hover table-condensed">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Per-Product Subtotal</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_data']->value, 'quantity', false, 'product_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_id']->value => $_smarty_tpl->tpl_vars['quantity']->value) {
?>
        <tr>
            <td><a href="productSelect.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['quantity']->value['name'];?>
</a></td> 
                <td>$<?php echo number_format($_smarty_tpl->tpl_vars['quantity']->value['price'],2,".",'');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['quantity']->value['quantity'];?>
</td>
                <td>$<?php echo number_format($_smarty_tpl->tpl_vars['quantity']->value['subtotal'],2,".",'');?>
</td>
        </tr>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
            <td>Total:</td>
            <td></td>
            <td></td>
            <td>$<?php echo number_format($_smarty_tpl->tpl_vars['total_price']->value,2,".",'');?>
</td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['session']->value->login) {?>
        <tr>
            <td>
                <form action="placeOrder.php">
                    <button type="submit">Place Order</button>
                </form>
            </td>
        </tr>
        <?php }?>
    </table>

<?php
}
}
/* {/block "content"} */
}
