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

{/block}