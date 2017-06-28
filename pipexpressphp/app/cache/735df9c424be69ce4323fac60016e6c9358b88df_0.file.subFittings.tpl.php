<?php
/* Smarty version 3.1.30, created on 2017-05-21 14:51:09
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subFittings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921e19d1e94c3_97026947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '735df9c424be69ce4323fac60016e6c9358b88df' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subFittings.tpl',
      1 => 1495392661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5921e19d1e94c3_97026947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3798484305921e19d1d4f84_25436349', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2988462725921e19d1e0887_77308956', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_3798484305921e19d1d4f84_25436349 extends Smarty_Internal_Block
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
class Block_2988462725921e19d1e0887_77308956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
<div class="row category-child" style="margin-top:20px">

        <div class="container">
<div id="MainMenu">
  <div class="list-group panel">
    <a href="#demo3" class="list-group-item list-group-item-success strong" data-toggle="collapse" data-parent="#MainMenu">PVC<i class="fa fa-caret-down"></i></a>
    <div class="collapse" id="demo3">
      <a href="#SubMenu1" class="list-group-item strong" data-toggle="collapse" data-parent="#SubMenu1">Sewer And Waste <i class="fa fa-caret-down"></i></a>
      <div class="collapse list-group-submenu" id="SubMenu1">
        <a href="showProduct.php?field=026" class="list-group-item" data-parent="#SubMenu1">Solvent Weld(Non-Gasketed)</a>
        <a href="showProduct.php?field=017" class="list-group-item" data-parent="#SubMenu1">Gasketed/Drainage</a>
       
        	
      </div>
      
      <a href="#submenu2" class="list-group-item list-group-item-success strong" data-toggle="collapse" data-parent="#submenu2">Schedule 40<i class="fa fa-caret-down"></i></a>
    <div class="collapse list-group-submenu" id="submenu2">
      <a href="showProduct.php?field=014" class="list-group-item" data-parent="#submenu2">Pressurized</a>
      <a href="showProduct.php?field=013" class="list-group-item" data-parent="#submenu2">DWV(Non-Pressurized)</a>
      <a href="showProduct.php?field=020" class="list-group-item" data-parent="#submenu2">Electrical Cond</a>
      
      
    </div>
    
      <a href="showProduct.php?field=028" class="list-group-item">Barbed</a>
    </div>
    
    
    <a href="#demo4" class="list-group-item list-group-item-success strong" data-toggle="collapse" data-parent="#MainMenu">CPVC<i class="fa fa-caret-down"></i></a>
    <div class="collapse" id="demo4">
      <a href="showProduct.php?field=052" class="list-group-item">Schedule 80</a>
      <a href="showProduct.php?field=025" class="list-group-item strong"></i> Copper Tube Size </i></a>
      <a href="showProduct.php?field=038" class="list-group-item">Flexible Rubber Fittings('Fernco' type)</a>
      
      
    </div>
    
    <a href="#demo5" class="list-group-item list-group-item-success strong" data-toggle="collapse" data-parent="#MainMenu">Polyethylene<i class="fa fa-caret-down"></i></a>
    <div class="collapse" id="demo5">
       <a href="showProduct.php?field=009" class="list-group-item">HDPE Corrugated</a>
       <a href="showProduct.php?field=022" class="list-group-item">HDPE Fusion</a>
       <a href="showProduct.php?field=033" class="list-group-item">Compression</a>
    </div>
    
    <a href="#demo6" class="list-group-item list-group-item-success strong" data-toggle="collapse" data-parent="#MainMenu">Polypropylene<i class="fa fa-caret-down"></i></a>
    <div class="collapse" id="demo6">
       <a href="showProduct.php?field=023" class="list-group-item">Cam Operated</a>
       <a href="showProduct.php?field=062" class="list-group-item">Compression</a>
       <a href="showProduct.php?field=032" class="list-group-item">Plumbing</a>
    </div>
    
    <a href="#demo7" class="list-group-item list-group-item-success strong" data-toggle="collapse" data-parent="#MainMenu">Brass<i class="fa fa-caret-down"></i></a>
    <div class="collapse" id="demo7">
       <a href="showProduct.php?field=033" class="list-group-item">Water Service</a>
       <a href="showProduct.php?field=028" class="list-group-item">Barbed</a>
  
    </div>
    <a href="showProduct.php?field=019" class="list-group-item list-group-item-success strong"  data-parent="#MainMenu">Tubing</a>

  </div>
   
</div>
</div>
        
        
        
   
</div>
</div>

<?php
}
}
/* {/block "content"} */
}
