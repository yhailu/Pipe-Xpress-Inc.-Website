<?php
/* Smarty version 3.1.30, created on 2017-05-21 14:13:07
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subValves.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921d8b39e2398_52508645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc48361d769c4825810d0e31166309ade8fdd9a' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subValves.tpl',
      1 => 1495390386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5921d8b39e2398_52508645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7978389015921d8b39ddfb9_58052160', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6280435575921d8b39e0ef7_10989735', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_7978389015921d8b39ddfb9_58052160 extends Smarty_Internal_Block
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
class Block_6280435575921d8b39e0ef7_10989735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">

  <div id="MainMenu">
      <div class="list-group panel"></div>
          <a href="showProduct.php?field=018" class="list-group-item">Vales (Sales Category: 18)</a>
          <a href="showProduct.php?field=051" class="list-group-item">Vales (Sales Category: 51)</a>

  </div>    

</div>

<?php
}
}
/* {/block "content"} */
}
