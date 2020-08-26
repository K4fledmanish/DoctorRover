

<?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * FROM Products ORDER BY id ASC";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '
		<div class="col-md-4" style="margin-top:10px;padding:2%;">
            <div style="background-color:whitesmoke; padding:5%; height:550px; text-align:center;">
            	<img src="shop/'.$row["image"].'" class="img-responsive" style="height:300px; text-align:center;" /><br />
            	<h3 class="text-info" style="font-size:18px;">'.$row["name"].'</h3>
            	<h3 class="text-danger"  style="font-size:20px;">$ '.$row["price"] .'</h3>
            	<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
            	<input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:6px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
            </div>
        </div>
		';
	}
	echo $output;
}

?>
