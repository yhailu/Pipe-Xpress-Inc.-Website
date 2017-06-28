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
{/block}

{block name="content"}
<div class="container">
	  <div class="page-header">
		  <h2>Industry sales categories served: {$sc}</h2>
	  </div>
</div>

<div class="container">
	    <table class="table table-hover table-condensed">
    <tr>
    
      <th>Product Name</th>
     
    </tr>
   
    {foreach $tableData as $data}
      <tr>
          
        <td>
          {$data}
        </td>
       
      </tr>
    {/foreach}
  </table>
</div>
        
<div class="container">
     
    </div>

{/block}