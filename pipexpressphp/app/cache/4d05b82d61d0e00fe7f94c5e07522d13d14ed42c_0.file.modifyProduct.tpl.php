<?php
/* Smarty version 3.1.30, created on 2017-04-13 15:39:31
  from "/Users/yesuserahailu/NetBeansProjects/Webstore/templates/modifyProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58efd3f38e8303_91355066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d05b82d61d0e00fe7f94c5e07522d13d14ed42c' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/Webstore/templates/modifyProduct.tpl',
      1 => 1492112368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58efd3f38e8303_91355066 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/Users/yesuserahailu/NetBeansProjects/Webstore/include/libs/plugins/function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139938871458efd3f38a6835_39645730', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172500986858efd3f38e5960_19520253', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_139938871458efd3f38a6835_39645730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style type="text/css">
        td:first-child {
            width: 10px;
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
class Block_172500986858efd3f38e5960_19520253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Modify Product</h2>
    
    <form action="modifyProductReentrant.php" method="post">
        
        <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" />
        
        <table class="table-condensed table">
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
                    <?php echo $_smarty_tpl->tpl_vars['category']->value;?>

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
                    <textarea name="description" rows="20" cols='60'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
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
                    <button type="submit" name="modifyit">Modify</button>
                    <button type="submit" name="cancel">Cancel</button>
                </td>
            </tr>
        </table>
    </form>
                        <h4 id="message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h4>
<?php
}
}
/* {/block "content"} */
}
