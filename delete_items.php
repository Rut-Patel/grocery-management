<?php
require_once "db.php";
$rowCount = count($_POST["items"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn, "DELETE FROM items WHERE itemId='" . $_POST["items"][$i] . "'");
}
header("Location:index.php");
?>