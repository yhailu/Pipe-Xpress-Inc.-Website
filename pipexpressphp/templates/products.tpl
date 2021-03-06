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

{/block}
