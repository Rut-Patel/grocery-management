<?php 
$conn = mysqli_connect("sql209.epizy.com","epiz_31046332","VhMOWms7XT", "epiz_31046332_item_list");


function close_con($conn){
	mysqli_close($conn);
}
?>