<?php
/* Smarty version 3.1.30, created on 2017-05-21 14:16:57
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subDrainage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921d999e05f62_97288252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b7ee3d0b76e4a8cc5afde8d84b2c81ec49dc083' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subDrainage.tpl',
      1 => 1495390571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5921d999e05f62_97288252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20246963615921d999e00266_56043555', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18726207435921d999e03fb7_46761356', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_20246963615921d999e00266_56043555 extends Smarty_Internal_Block
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
class Block_18726207435921d999e03fb7_46761356 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">

  <div id="MainMenu">
      <div class="list-group panel"></div>
          <a href="showProduct.php?field=037" class="list-group-item">Channel Drains/Basins/Grates/Drains</a>
          <a href="showProduct.php?field=041" class="list-group-item">Septic Drainage</a>

  </div>    

</div>

<?php
}
}
/* {/block "content"} */
}
