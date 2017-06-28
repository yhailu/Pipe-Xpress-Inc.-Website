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
          <a href="showProduct.php?field=018" class="list-group-item">Valves (Sales Category: 18)</a>
          <a href="showProduct.php?field=051" class="list-group-item">Valves (Sales Category: 51)</a>

  </div>    

</div>

{/block}