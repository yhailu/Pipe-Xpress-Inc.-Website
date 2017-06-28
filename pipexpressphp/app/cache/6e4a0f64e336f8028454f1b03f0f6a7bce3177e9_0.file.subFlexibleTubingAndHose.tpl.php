<?php
/* Smarty version 3.1.30, created on 2017-05-21 11:19:53
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subFlexibleTubingAndHose.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921b019bc07f8_30306542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e4a0f64e336f8028454f1b03f0f6a7bce3177e9' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subFlexibleTubingAndHose.tpl',
      1 => 1495379749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5921b019bc07f8_30306542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18266254145921b019bb9e97_91867885', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13281516745921b019bbe396_47270178', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_18266254145921b019bb9e97_91867885 extends Smarty_Internal_Block
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
class Block_13281516745921b019bbe396_47270178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
<div class="row category-child" style="margin-top:20px">

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=011">
                
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>Polyethylene Tubing</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=01A">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>PVC Flexible Spa Hose</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=036">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>Clear PVC Tubing</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=036">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>Braided/Reinforced Tubing</span>
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
