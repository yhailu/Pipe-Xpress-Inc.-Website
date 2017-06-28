<?php
/* Smarty version 3.1.30, created on 2017-05-21 00:51:27
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subPVC.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59211ccf70e888_16463221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c44d7c56fc8f09d5289e8989297e10088011eda' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/subPVC.tpl',
      1 => 1495342102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_59211ccf70e888_16463221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201376388959211ccf7070f2_02720083', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194979210459211ccf70bf77_64182396', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_201376388959211ccf7070f2_02720083 extends Smarty_Internal_Block
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
class Block_194979210459211ccf70bf77_64182396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
<div class="row category-child" style="margin-top:20px">

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=005">
                
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>Sewer and Drain</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=002">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>SDR 35</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="subSchedule40.php">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>Schedule 40</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=006">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>Schedule 80</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="showProduct.php?field=056">
                <img class="img-responsive" src="" alt="">
                <div class="wrapper">
                    <div class="caption post-content">
                        <span>Duct Pipe and Fittings</span>
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
