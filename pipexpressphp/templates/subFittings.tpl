{*
Yesusera Hailu
*}
{extends file="layout.tpl"}

{block name="localstyle"}
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
{/block}

{block name="content"}

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

{/block}