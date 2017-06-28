<?php
/* Smarty version 3.1.30, created on 2017-04-09 19:16:30
  from "/Users/yesuserahailu/NetBeansProjects/webstore/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eac0cef2cea1_29092901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c80507a1a480f94da1dab0446e9a1b8dd37cf4c5' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/webstore/templates/index.tpl',
      1 => 1491486440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58eac0cef2cea1_29092901 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/Users/yesuserahailu/NetBeansProjects/webstore/include/libs/plugins/function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4936065358eac0cef02902_11835193', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205878530858eac0cef2ae22_31962729', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_4936065358eac0cef02902_11835193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    .top { 
      margin-bottom: 20px; 
    }
    .top h2 { 
      display: inline-block;
      margin: 0 30px 0 0;
      vertical-align: bottom;
    }
    .top form {
      display: inline-block;
      vertical-align: bottom;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_205878530858eac0cef2ae22_31962729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div class='top'>
    <h2>Products</h2>
    <form action="filterCategory.php">
      <button type="submit">Filter by Category:</button>
      <select name="category">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl);?>

      </select>
    </form>
  </div>

  <table class="table table-hover table-condensed">
    <tr>
      <th><a href="setProductOrder.php?field=name">name</a></th>
      <th>category</th>
      <th class="price"><a href="setProductOrder.php?field=price">price</a></th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <tr>
        <td>
          <a href="productSelect.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>

          </a>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->category->name;?>
</td>
        <td class="price">$<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2);?>
</td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </table>

<?php
}
}
/* {/block "content"} */
}
