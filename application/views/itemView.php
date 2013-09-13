<!DOCTYPE html> 
<html> 
	<head> 
	  <title>Jquery Mobile Splitview</title> 
	  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	  <link rel="stylesheet" href="/code/asset/jquerymob/jquery-mobile/jquery.mobile.css" />
	  <link rel="stylesheet" href="/code/asset/jquerymob/src/jquery.mobile.splitview.css" />
	  <link rel="stylesheet"  href="/code/asset/jquerymob/src/jquery.mobile.grids.collapsible.css" />
	  <script type="text/javascript" src="/code/asset/jquerymob/vendor/jquery-1.7.1.js"></script>
	  <script type="text/javascript" src="/code/asset/jquerymob/src/jquery.mobile.splitview.js"></script>
	  <script type="text/javascript" src="/code/asset/jquerymob/jquery-mobile/jquery.mobile.js"></script>
	  <link rel="stylesheet" href="/code/asset/overlay/overlay.css" />
	  <link rel="stylesheet" href="/code/asset/css/main.css" />
	  <script src="/code/asset/overlay/jquery.popupoverlay.js"></script>
	  <script>
		$(document).ready(function(){
			$('#my_modal').popup();
		
		});
		
	  
	  </script>
	   
</head> 

  <body> 
	<?php $this->load->helper('url'); ?>
    <div data-role="panel" data-id="menu" data-hash="crumbs" data-context="a#default">
      <!-- Start of first page -->
      <div data-role="page" id="main" data-hash="false">
      	<div data-role="header" data-position="fixed">
      		<h1>Menu</h1>
      	</div><!-- /header -->

      	<div data-role="content">	
      	  <ul data-role="listview">
			<?php
				 
				 foreach($category as $index=> $row){
					//$category_id_ = $row['item_id']
					$attr = array('data-panel'=>'main','rel'=>'external');
					echo "<li>".anchor("item/getItems/".$row['category_id'],ucwords($row['category_name']),$attr)."</li>";
				
				}					
			
			?>
            
          </ul>
      	</div><!-- /content -->

      
      		
        </div>
      </div>

		
	
      

      
      
     <div data-role="panel" data-id="main">   
		 <div data-role="page" id="credits">

			<div data-role="header" data-position="fixed">
			  <h1>Item details</h1>
			</div><!-- /header -->

			<div data-role="content"> 
				<div id="">
					<?php
					foreach($items as $index=>$row){
						// displaying the item details 
						echo "<div class='item_row'>";
							echo"<div class='item_details'>";
									echo"<div><h3> Name:</h3>".ucwords($row['item_name'])."</div>";
									echo "<div><h3>Description:</h3>".ucwords($row['item_description'])."</div>";
							echo"</div>";
							// showing the imge
							echo"<div class='image_div' ><img class='item_image' src='/code/asset/image/uploaded/".$row['item_id'].".jpg'></div>";		
						echo"</div>";
						} 
					?>	
					
					
				</div>	
				
				
				<div id="my_modal" data-role="panel" style="zindex:2222;position:fixed; right:10px;left:auto" data-id="main">
					
				</div>
					
					
				
  
				  

  
					
					
					
					
					
			
		  </div><!-- /content -->
		</div>
    </div><!-- panel main -->


  </body>
</html>
