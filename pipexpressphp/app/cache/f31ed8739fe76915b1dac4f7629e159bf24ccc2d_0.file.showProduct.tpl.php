<?php
/* Smarty version 3.1.30, created on 2017-05-20 22:32:57
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/showProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5920fc596b51a5_52175163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f31ed8739fe76915b1dac4f7629e159bf24ccc2d' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/showProduct.tpl',
      1 => 1495333975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5920fc596b51a5_52175163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11420606125920fc596965a2_41928638', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15586268605920fc596b3ef3_35875427', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_11420606125920fc596965a2_41928638 extends Smarty_Internal_Block
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
class Block_15586268605920fc596b3ef3_35875427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 
<div class ='container'>
  <table class="table table-hover table-condensed">
    <tr>
      <th>Sales Category</th>
      <th>Product Name</th>
     
    </tr>
   
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableData']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
      <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['sc']->value;?>
</td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

        </td>
       
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </table>
</div>
<?php
}
}
/* {/block "content"} */
}
