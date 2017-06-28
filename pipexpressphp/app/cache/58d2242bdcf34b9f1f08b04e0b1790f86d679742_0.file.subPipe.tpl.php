<?php
/* Smarty version 3.1.30, created on 2017-05-21 00:51:26
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subPipe.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59211ccec64653_88017484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58d2242bdcf34b9f1f08b04e0b1790f86d679742' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subPipe.tpl',
      1 => 1495342279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_59211ccec64653_88017484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159843918859211ccec588e0_12640030', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21203785059211ccec5f4d0_88519150', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_159843918859211ccec588e0_12640030 extends Smarty_Internal_Block
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
class Block_21203785059211ccec5f4d0_88519150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
<div class="row category-child" style="margin-top:20px">

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="subPVC.php">
                
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>PVC</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=002">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>CPVC</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=004">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>HDPE Corrugated</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=062">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>Polypropylene</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=011">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>Polyethylene</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=030">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>Copper</span>
                    </div>
                </div>
            </a>
    </div>
        
   
</div>
</div>

<?php
}
}
/* {/block "content"} */
}
