<?php 
define("SERVER", "localhost");
define("USER", "root");
define("PASSWORD", "123654");
define("DB", "hsl");
$conn=new mysqli(SERVER, USER, PASSWORD, DB);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$output=" ";
$row=0;
$search=$_POST["userdata"];
$sql="SELECT * FROM items WHERE item_name LIKE '%".$search."%' ";
$result = $conn->query($sql);
if($result->num_rows > 0){
		$output.="<h4 class='text-center'>Resutl Found </h4>";
		$output.='<table class="table table-bordered">
		<tr><td>Item Name</td><td>Item Price</td></tr>
		';
	while($row=$result->fetch_assoc()){
		$output.='<tr><td>'.$row["item_name"].'</td><td>'.$row["item_price"].' Kyats </td></tr>';
	}
	echo $output;
}else{
	echo  "Result no found";
}