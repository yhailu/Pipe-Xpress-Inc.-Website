<?php
/* Smarty version 3.1.30, created on 2017-04-13 23:18:55
  from "/Users/yesuserahailu/NetBeansProjects/Webstore/templates/addProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f03f9ff2d8e6_24974119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c3c42455f9993e897dcd08de84b9da811b77a40' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/Webstore/templates/addProduct.tpl',
      1 => 1492106022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58f03f9ff2d8e6_24974119 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/Users/yesuserahailu/NetBeansProjects/Webstore/include/libs/plugins/function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167392583758f03f9ff0cbb3_80878574', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38440357058f03f9ff2aff3_19330695', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_167392583758f03f9ff0cbb3_80878574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style type="text/css">
        td:first-child {
            width: px;
        }
        td {
            border: none ! important;
        }
    </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_38440357058f03f9ff2aff3_19330695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Add Product</h2>
    
    <form action="addProductReentrant.php" method="post">
        <table class="table table-condensed">
            <tr>
                <td>Name:</td>
                <td>
                    <input class="form-control" type="text" name="name"
                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                </td>
            </tr>
            <tr>
                <td>Category:</td>
                <td>
                    <select class="form-control" name="category">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl);?>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Price ($):</td>
                <td>
                    <input class="form-control" type="text" name="price"
                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                </td>
            </tr>
            <tr>
                <td>Description:</td>
                <td>
                    <textarea name="description" rows='10' cols='50'
                              value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Photo:</td>
                <td>
                    <select class="form-control" name="photo">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['photos']->value,'selected'=>$_smarty_tpl->tpl_vars['photo']->value),$_smarty_tpl);?>

                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="addit">Add</button>
                    <button type="submit" name="cancel">Cancel</button>
                </td>
            </tr>
        </table>
                        <h4 id="message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h4>
    </form>
<?php
}
}
/* {/block "content"} */
}
