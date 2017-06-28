<?php
/* Smarty version 3.1.30, created on 2017-05-24 22:18:46
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59263f06410716_62077998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd06d08d8ccb786e2b68b68177fd6a249a60ab55a' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/contact.tpl',
      1 => 1495678725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_59263f06410716_62077998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63135156959263f06408155_95108335', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60560661759263f0640d942_87937425', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_63135156959263f06408155_95108335 extends Smarty_Internal_Block
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
class Block_60560661759263f0640d942_87937425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<!--we are end here-->
	<!--special start here-->
        <div class="jumbotron">
        <h1>We Are Here to Help</h1>
        <blockquote class="blockquote blockquote-reverse">
        <p class="mb-0">"Pipe Xpress Inc. is proactive and committed to providing service that is 
the formula for a "Win-Win" environment for our customers. We are individually 
empowered to deliver an exceptional customer experience. Our goal is to forge
lasting relationships with our personal and professional partners. We excel in 
providing a level of service allowing our customers to achieve the success they deserve."</p>
        <footer class="blockquote-footer"> <cite title="Source Title"> - Sean Redfern | President</cite></footer>
    </blockquote>
      </div>
		<div class="panel panel-primary">
			<div class="panel-heading">We are located in the beautiful city of West Chester
			</div>
			<div class="panel-body"><div class="container">
				<div class="row-fluid">
					<div class="col-md-8">
						<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3057.768964599567!2d-75.59496008416295!3d39.968917879419806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6f15d3ea5b851%3A0xe6f70306cea0a3c4!2sPipe+Xpress+Inc!5e0!3m2!1sen!2sus!4v1484038771011"></iframe>
					</div>
					<div class="col-md-4">
						<h2>CONTACT US</h2>
						<address>
							<strong>Pipe Xpress, Inc.</strong><br>
							Monday-Friday 7am - 5pm<br>
							Saturday 8am - Noon(March - December)<br>
							821 East Washington Street<br>

                                                        <abbr title="Phone">P:</abbr> <a href="tel:6109187120">(610)-918-7120</a></br>
							<abbr title="Fax">F:</abbr> (610)-918-1328</address>
					</div>
				</div>
			</div></div>
		</div>
	</div>

<?php
}
}
/* {/block "content"} */
}
