<?php
/* Smarty version 3.1.30, created on 2017-05-22 23:09:55
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5923a803a6e6e6_63152387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c38ac24d52482f573fdf982a5580e8fd58a1869' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/products.tpl',
      1 => 1495508990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5923a803a6e6e6_63152387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16673505615923a803a67653_86132701', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6218776685923a803a6c396_78444836', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_16673505615923a803a67653_86132701 extends Smarty_Internal_Block
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
    .image {
    position: relative;
    height:300px;
 /* for IE 6 */
}

h3 {
    position: absolute;
    top: 200px;
    left: 0;
    width: 100%;
}
h3 span {
    color: white;
    font: bold 30px/30px Helvetica, Sans-Serif;
    letter-spacing: -1px;
    background: rgb(0, 0, 0); /* fallback color */
    background: rgba(0, 0, 0, 0.7);
    padding: 10px;
}
h3 span.spacer {
    padding:0 5px;
}
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_6218776685923a803a6c396_78444836 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
        
    <div class="image">
        
	  <img src="imgs/slider1.png" alt="" />

          <h3><span>Keeping Confidence in Stock </span></h3>


        </div></div>

<div class="container">
	  <div class="page-header">
		  <h2>Search By:</h2>
	  </div>
</div>
        
<div class="container">
        <div class="row category-child" style="margin-top:20px">

            <div class="col-lg-6 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="salesCategories.php">

                    <div class="wrapper">
                        <div class="caption post-content">
                            <span>By Sales Category</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="industryServed.php">

                    <div class="wrapper">
                        <div class="caption post-content">
                            <span>By Industry</span>
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
