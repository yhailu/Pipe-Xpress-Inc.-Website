<?php
/* Smarty version 3.1.30, created on 2017-05-21 14:23:20
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subAccessories.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921db187e27e3_17276404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27fc184d992acdfdf19b9e2b8ad5601c0681b214' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subAccessories.tpl',
      1 => 1495390963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5921db187e27e3_17276404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6457490205921db187db577_86382021', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15420526225921db187e10e3_14021341', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_6457490205921db187db577_86382021 extends Smarty_Internal_Block
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
class Block_15420526225921db187e10e3_14021341 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">

  <div id="MainMenu">
      <div class="list-group panel"></div>
          <a href="showProduct.php?field=040" class="list-group-item">Saws, Cutters, & Tools</a>
          <a href="showProduct.php?field=031" class="list-group-item">Hangers and Clamps</a>
          <a href="showProduct.php?field=040" class="list-group-item">Pressure Gauges</a>
          <a href="showProduct.php?field=040" class="list-group-item">Flags and Marking Tape</a>
          <a href="showProduct.php?field=024" class="list-group-item">Flange Gaskets</a>
          <a href="showProduct.php?field=029" class="list-group-item">Test Plugs and Accessories</a>
          <a href="showProduct.php?field=032" class="list-group-item">Yard Hydrants</a>
          <a href="showProduct.php?field=034" class="list-group-item">Meter Pits & Acc.</a>
          <a href="showProduct.php?field=035" class="list-group-item">Rubber Link Seals</a>
  </div>    

</div>

<?php
}
}
/* {/block "content"} */
}
