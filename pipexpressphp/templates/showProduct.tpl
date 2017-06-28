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

 
<div class ='container'>
  <table class="table table-hover table-condensed">
    <tr>
      <th>Sales Category</th>
      <th>Product Name</th>
     
    </tr>
   
    {foreach $tableData as $data}
      <tr>
          <td>{$sc}</td>
        <td>
          {$data}
        </td>
       
      </tr>
    {/foreach}
  </table>
</div>
{/block}