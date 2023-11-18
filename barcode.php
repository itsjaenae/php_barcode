<html>
<head>
<style>
p.inline {display: inline-block;text-align: center;}
span { font-size: 0.2rem;  }
.text{font-size: 30px;}

</style>
<style type="text/css" media="print">
    @page 
    {
       size: auto;  /*auto is the initial value */
    margin: 0mm;  /* this affects the margin in the printer settings */
   
    }
</style>
</head>
<body onload="window.print();" style="background-color: #f3f3f3; 
 margin-left: 8%;
 display:flex;
  justify-content: center;">
	<div style=" margin-top:150px;
	 ">
		<?php
		include 'barcode128.php';
		$product = $_POST['product'];
		$product_id = $_POST['product_id'];

		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "<p class='inline'>
			<span class='text'><b  > $product</b></span>"
			.bar128(stripcslashes($_POST['product_id']))
			." </b><span ></p>&nbsp&nbsp&nbsp&nbsp";
		}

		?>
	</div>
</body>
</html>