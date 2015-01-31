<?php 

include('database/db_connect.php');
session_start();
error_reporting(0);
$cu_id = $_SESSION['customer_id'];

?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>FARMHOUSE JUICE</title>
    <meta name="keywords" content="FARMHOUSE JUICE"/>
    <meta name="description" content="FARMHOUSE JUICE"/>
    <meta name="robots" content="index, follow" />
    <link href='webstyle/style.css' rel='stylesheet' type='text/css'>
    <link href='webstyle/reset.css' rel='stylesheet' type='text/css'>
    <link href='webstyle/fonts.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="webstyle/ie8-fixs.css" />
    <![endif]-->
    <!--[if gt IE 8]>
    <link rel="stylesheet" type="text/css" href="webstyle/ie-fixs.css" />
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <script type="text/javascript" src="slick/slick.min.js"></script>
	
	
	<script language="javascript">
		function fun_add(id,qty) {
					
					//var pric = price; var trid = tr_id; var tot_amt = tot; var gnd_tot = gd_total; //alert(gnd_tot); 
					//alert(trid);
					//var qt = qty;
					var p_id = id; //alert(p_id); var qt = qty; //alert(qt);
					document.getElementById(p_id).value++;
		
					
					}
		function fun_del(id,qty) {
					
					//var qt = qty;
					var p_id = id; var qt = qty;
					if( (document.getElementById(p_id).value - 1  < 0))
					return;
					else
					document.getElementById(p_id).value--;
				   								
					}
					
					function loadXMLDoc(p_id,qty)
					{
					var pd = p_id;
					var no1 = qty; //alert(no1);
					var xmlhttp;
					window.location.href="add_to_cart.php?msg=addtocart&pd="+pd+"&qty1="+no1;
					}
					
					
 
			
		/*$(document).ready(function(){
						$(".bu").click(function(){
						//alert("Value: " + $("#price1").val()); 
						//var product_price = $("#price1").val(); alert(product_price);
						var quantity = $(".no1").val(); alert(quantity);
						var p_id = $("#p_id").val(); alert(p_id);
						$.ajax({
						type: "POST",
						url: "/farmhouse/add_to_cart.php",
						data: { "no": quantity, "pr_id": p_id }
						}).done(function( msg ) {
						alert( "Data Saved: " + msg );
						});
						});
						});

*/			
		</script>			

	
</head>
<body class="jucie">

<?php include("includes/header.php"); ?>

<section class="slider fixed-top group">
	<div class="wrapper group">
    	<div class="center-slider-jucie">
          <div><a href="product.php"><img src="images/single-big2-bottle-1.jpg" alt="" /></a></div>
          <div><a href="product.php"><img src="images/single-big2-bottle-2.jpg" alt="" /></a></div>
          <div><a href="product.php"><img src="images/single-big2-bottle-3.jpg" alt="" /></a></div>
          <div><a href="product.php"><img src="images/single-big2-bottle-4.jpg" alt="" /></a></div>
          <div><a href="product.php"><img src="images/single-big2-bottle-5.jpg" alt="" /></a></div>
          <div><a href="product.php"><img src="images/single-big2-bottle-6.jpg" alt="" /></a></div>
        </div>
        
        <div class="clear"></div>
        <h2>OUR JUICES</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pellentes risus in enim porta aliquam aenean at felis.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pellentes risus in enim porta aliquam aenean at felis.</p>
    </div>
</section>

    <section class="juices-list group">
	<div class="wrapper group">
	<h2>JUICES LIST</h2>
	<!--<table align="center" border="0" cellpadding="5" cellspacing="2">-->
	<form action="" method="post">
	<?php 
	$sql_pro = "select * from farmhouse_juice_details";
	$res_pro = mysqli_query($conn,$sql_pro);
	
	
	while($row_pro = mysqli_fetch_array($res_pro)) {
	
	?>
	<figure>
        	<div class="image"><a href="#"><img src="images/<?php echo $row_pro['image']; ?>" alt="#" /></a></div>
            <div class="number">
				    
                    <input type='button' name='add' onclick='return fun_add(<?php echo $row_pro['product_id'];?>,<?php echo $row_pro['quantity'];?>);' value=' + '/>
                   
				    <input type='text' name='no1' class="no1" id='<?php echo $row_pro['product_id'];?>' value='<?php echo $row_pro['quantity'];?>' size = "1"/>
                   
				    <input type='button' name='subtract' onclick='return fun_del(<?php echo $row_pro['product_id'];?>,<?php echo $row_pro['quantity'];?>);' value=' - '/>
					<input type="hidden" value="<?php echo $row_pro['product_id'];?>" id="p_id">
					<?php /*?><div><a href="add_to_cart.php?pr_id=<?php echo $row_pro['product_id'];?>&qty=<?php echo $row_pro['quantity'];?>&cid=<?php echo $cu_id; ?>">Add Into</a></div><?php */?>
			         <input type='button' name='add_to_cart' onclick='loadXMLDoc(<?php echo $row_pro['product_id'];?>,document.getElementById(<?php echo $row_pro['product_id'];?>).value);' value='Add into'/>
					<?php /*?><div class="add1">< id="<?php echo $row_pro['product_id'];?>" onClick="return add_to_cart(<?php echo $row_pro['product_id'];?>,<?php echo $row_pro['quantity'];?>);">Add into</a></div><?php */?>
					
					
               
             </div>   
        </figure>
	
	
	<?php  
	
	} // ends while here
	//echo "</td></tr>";
	?>
	</form>
	<!--</table>-->
	
	</div>
	</section>
</form>
<?php include("includes/footer.php"); ?>

<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>