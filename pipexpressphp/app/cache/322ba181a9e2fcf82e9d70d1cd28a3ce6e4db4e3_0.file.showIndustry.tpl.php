<?php
/* Smarty version 3.1.30, created on 2017-05-22 23:28:42
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/showIndustry.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5923ac6a8b8323_85769939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322ba181a9e2fcf82e9d70d1cd28a3ce6e4db4e3' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/showIndustry.tpl',
      1 => 1495510118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5923ac6a8b8323_85769939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7241839025923ac6a89aa58_12245328', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9138612045923ac6a8b6438_10129439', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_7241839025923ac6a89aa58_12245328 extends Smarty_Internal_Block
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
class Block_9138612045923ac6a8b6438_10129439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	  <div class="page-header">
		  <h2>Industry sales categories served: <?php echo $_smarty_tpl->tpl_vars['sc']->value;?>
</h2>
	  </div>
</div>

<div class="container">
	    <table class="table table-hover table-condensed">
    <tr>
    
      <th>Product Name</th>
     
    </tr>
   
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableData']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
      <tr>
          
        <td>
          <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

        </td>
       
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </table>
</div>
        
<div class="container">
     
    </div>

<?php
}
}
/* {/block "content"} */
}
