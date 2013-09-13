<?php
	$this->load->helper('url');
	 

?>

<script type='text/javascript' src="/code/asset/js/jquery.js">
</script>

</script>


<?php
	 
	 foreach($category as $index=> $row){
		echo anchor("item/getItems/".$row['category_id'],$row['category_name'],'title="News"')."<br>";
	
	} 
	
	
	echo "Items under this<br>";
	 foreach($items as $index=> $row){
		echo anchor("item/item_details/".$row['item_id'],$row['item_name'],'title="News"')."<br>";
	
	} 


?>