<?php
/* Smarty version 3.1.30, created on 2017-04-13 14:15:51
  from "/Users/yesuserahailu/NetBeansProjects/Webstore/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58efc0570f3623_97344165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '636bf937e9d0c7650eaf08c64e53c48998d915e4' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/Webstore/templates/login.tpl',
      1 => 1492106058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58efc0570f3623_97344165 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_session_get_flash')) require_once '/Users/yesuserahailu/NetBeansProjects/Webstore/include/myplugins/function.session_get_flash.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115230860958efc0570e3bb4_60990201', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128680009658efc0570f2150_95536480', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_115230860958efc0570e3bb4_60990201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style>
    th {
      width: 10px;
    }
    th, td {
      border: none ! important;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_128680009658efc0570f2150_95536480 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2>Login</h2>

  <p>Please enter access information</p>
  
  <form action="validate.php" method="post" autocomplete="off">
    <table class="table table-condensed">
      <tr>
        <th>user:</th>
        <td><input class="form-control" type="text" name="username" autofocus="on"
                   value="<?php ob_start();
echo smarty_function_session_get_flash(array('var'=>'username'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars($_prefixVariable1, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
      </tr>
      <tr>
        <th>password:</th>
        <td><input class="form-control" type="password" name="password" /></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit">Access</button></td>
      </tr>
    </table>

  </form>

  <h4 id="message"><?php echo smarty_function_session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
</h4>
<?php
}
}
/* {/block "content"} */
}
