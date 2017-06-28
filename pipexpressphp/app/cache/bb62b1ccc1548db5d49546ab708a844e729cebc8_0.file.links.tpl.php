<?php
/* Smarty version 3.1.30, created on 2017-04-13 14:15:42
  from "/Users/yesuserahailu/NetBeansProjects/Webstore/templates/links.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58efc04ec84030_56876792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb62b1ccc1548db5d49546ab708a844e729cebc8' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/Webstore/templates/links.tpl',
      1 => 1492106067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58efc04ec84030_56876792 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['session']->value->login && !$_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
    <li><a href="cart.php">Cart</a></li>
    <li><a href="myOrders.php">My Orders</a></li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
    <li><a href="allOrders.php">All Orders</a></li>
    <li><a href="addProduct.php">Add Product</a></li>
    <li><a href="addCategory.php">Add Category</a></li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->login) {?>
    <li><a href="logout.php">Logout</a></li>
<?php } else { ?>
<li><a href="cart.php">Cart</a></li>
<li><a href="login.php">Login</a></li>
<?php }
}
}
