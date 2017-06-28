<?php
/* Smarty version 3.1.30, created on 2017-06-28 19:38:11
  from "/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59543de3c9a054_39910158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5acad490b72a628e8ecdf8a6a686cdbe66868515' => 
    array (
      0 => '/Users/yesuserahailu/NetBeansProjects/pipexpressphp/templates/layout.tpl',
      1 => 1495682564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59543de3c9a054_39910158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Pipe, Valves, Fittings, Distributor, Service">
    <meta name="description" content="Service distributing Thermoplastic Pipe, Valves, and Fittings">
    <title>  
      Service distributing Thermoplastic Pipe, Valves, and Fittings | Pipe Xpress Inc.
    </title>
    
    <?php echo '<script'; ?>
 type="text/javascript">
    // for Safari browser, deal with back button
    window.onpageshow = function (event) {
      if (event.persisted) {
        window.location.reload();
      }
    };
    <?php echo '</script'; ?>
>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <link rel="shortcut icon" href="imgs/delete.ico" />
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10331115159543de3c63292_78396239', "localstyle");
?>

</head>
<body>     
  <header>
    <div>
      <img class="img-responsive" src="" />
      <span class='login'></span>
    </div>
    <div class="container">
        		<button type="button" class="btn btn-danger ribbon">Over <bold>100</bold> years of Service distributing Thermoplastic Pipe, Valves, and Fittings in the Mid-Atlantic Area  </button>

      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"  ><a href="index.php">Home</a></li>
            <li role="presentation"><a href="about.php">About</a></li>
            <li role="presentation"><a href="contact.php">Contact</a></li>
            <li role="presentation"><a href="products.php">Products</a></li>
          </ul>
        </nav>
        <a class="navbar-brand" href="index.php">Pipe <i class="fa fa-xing"></i>press, Inc.</a>
      </div>
  </header>

  <section class="container-fluid"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191997903959543de3c7c252_39537910', "content");
?>
</section>
  
  <div class="container">
<footer>
	  <div class="footer" id="footer">
		  <div class="container">
			  <div class="row">
				  <div class="col-lg-3  col-md-2 col-sm-4 col-xs-6">
					  <h2>Quick Links</h2>
					  <ul>
						  <li> <a href="index.php"> Home </a> </li>
						  <li> <a href="about.php"> About </a> </li>
						  <li> <a href="products.php"> Products </a> </li>
						  
					  </ul>
				  </div>
				  <div class="col-lg-3  col-md-2 col-sm-4 col-xs-6">
					  <h2> Social Links </h2>
					  <ul>
						  <li> <a href="https://www.facebook.com/pages/Pipe-Xpress/154727007899469"> Facebook </a> </li>
						  <li> <a href="#"> Twitter </a> </li>
						  <li> <a href="#"> YouTube </a> </li>
					  </ul>
				  </div>
				  <div class="col-lg-3  col-md-2 col-sm-4 col-xs-6">
					  <h2>Manufacturers</h2>
					  <ul>
						  <li> <a href="http://www.zurn.com/"> Zurn </a> </li>
						  <li> <a href="http://www.spearsmfg.com/"> Spears </a> </li>
						  <li> <a href="http://www.jmeagle.com/"> JM Eagle </a> </li>
						  
					  </ul>
				  </div>
                              


				  
			  </div>
			  <!--/.row-->
                          <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6 ">
					  <h2>Call us for a quote</h2>
					  <ul>
						  
                                                  <abbr title="Phone">P:</abbr> <a href="tel:6109187120">(610)-918-7120</a></br>
                                                  
						  
					  </ul>
				  </div>
		  </div>
		  <!--/.container-->
	  </div>
	 <div class="footer-bottom">
		  <div class="container">
			  <p class="pull-left"> Copyright © Pipe Xpress, Inc. All right reserved. </p>
			  <div class="pull-right">
				  
			  </div>
		  </div>
	  </div>
</footer></div>
  
  <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block "localstyle"} */
class Block_10331115159543de3c63292_78396239 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_191997903959543de3c7c252_39537910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
