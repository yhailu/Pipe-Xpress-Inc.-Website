<?php
/* Smarty version 3.1.30, created on 2017-04-09 19:16:31
  from "/Users/yesuserahailu/NetBeansProjects/webstore/templates/links.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eac0cf018c99_87512155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dc28c7644c2a030ecd86ae3fab32a905738d6a0' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/webstore/templates/links.tpl',
      1 => 1491486440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eac0cf018c99_87512155 (Smarty_Internal_Template $_smarty_tpl) {
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
