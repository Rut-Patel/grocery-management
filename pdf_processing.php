<?php
require_once 'db.php';
require_once 'fpdf.php';


	if(isset($_POST['generate'])){
		$result = mysqli_query($conn, "SELECT * FROM items WHERE quantity < maxquantity;");
	$pdf = new FPDF('L','mm','a4');
	$pdf->SetFont('arial','b','14');
	$pdf->AddPage();
	$pdf->cell('30','10','Item ID','1','0','C');
	$pdf->cell('40','10','Item Name','1','0','C');
	$pdf->cell('25','10','Quantity ','1','0','C');
	$pdf->cell('35','10','Max Quantity','1','0','C');
	$pdf->cell('45','10','Description','1','0','C');
	$pdf->cell('25','10','Updated','1','1','C');
	$pdf->SetFont('arial','','11');
	while($row = mysqli_fetch_assoc($result)){
		$pdf->cell('30','10',$row['itemId'],'1','0','C');
		$pdf->cell('40','10',$row['itemName'],'1','0','C');
		$pdf->cell('25','10',$row['quantity'],'1','0','C');
		$pdf->cell('35','10',$row['maxquantity'],'1','0','C');
		$pdf->cell('45','10',$row['description'],'1','0','C');
		$pdf->cell('25','10',$row['updated'],'1','1','C');
	}

	$pdf->Output('Shopping_List.pdf','D');
	}

?>