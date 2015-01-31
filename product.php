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
	
</head>
<body class="product">

<?php include("includes/header.php"); ?>

<section class="back-button fixed-top group">
	<div class="wrapper group">
    	<a href="jucie.php">BACK</a>
    </div>
</section>

<section class="single-product group">
	<div class="wrapper group">
    	<aside class="image"><img src="images/single-bottle-rotated-1.png" alt="#" height="495" /></aside>
        <aside class="details">
        	<h2>GREEN ELIXIR</h2>
            <div class="tab-box">
            	<div class="tabs group">
                	<ul>
                    	<li><a href="#" class="active" id="tab1-click">INGREDIENTS</a></li>
                        <li><a href="#" id="tab2-click">BENEFITS</a></li>
                        <li><a href="#" id="tab3-click">NUTRITIONAL CONTENT</a></li>	
                    </ul>
                </div>
                <div class="tab-content group">
                	<div id="tab1" class="display">
                    	<p>Kale, Apple, Ginger, Romaine, Celery, Spinach, Cucumber, Parsley, Lemon</p>
                        <p>&nbsp;</p>
                        <p><img src="images/icon-nuts.png" alt="#" class="f-right" /></p>
                        
                    </div>
                    <div id="tab2">BENEFITS here</div>
                    <div id="tab3">NUTRITIONAL CONTENT here</div>
                </div>

                <div class="price">¥68RMB</div>
                <div class="order">
                	<div class="number">
                        <div class="value">
                            <a href="#" class="remove">-</a>
                            <div class="num">1</div>
                            <a href="#" class="add">+</a>
                        </div>
                    </div>
                    <div class="add"><a href="#">Add into</a></div>
                </div>
            </div>
        </aside>
    </div>
</section>

<section class="slider group">
	<div class="wrapper group">
    	<div class="center-slider">
          <div><a href="#"><img src="images/single-bottle-rotated-1.png" alt="" /></a><span>GREEN ELIXIR</span></div>
          <div><a href="#"><img src="images/single-bottle-rotated-2.png" alt="" /></a><span>INTERNAL FIX</span></div>
          <div><a href="#"><img src="images/single-bottle-rotated-3.png" alt="" /></a><span>BEAUTY GLOW</span></div>
          <div><a href="#"><img src="images/single-bottle-rotated-4.png" alt="" /></a><span>SPICY LIMONADE</span></div>
          <div><a href="#"><img src="images/single-bottle-rotated-5.png" alt="" /></a><span>BEET IT</span></div>
          <div><a href="#"><img src="images/single-bottle-rotated-6.png" alt="" /></a><span>HORCHATA</span></div>
          <div><a href="#"><img src="images/single-bottle-rotated-7.png" alt="" /></a><span>AMNIO HYDRATE</span></div>
          <div><a href="#"><img src="images/single-bottle-rotated-8.png" alt="" /></a><span>THE REHYDRATOR</span></div>
        </div>
        
    </div>
</section>

<?php include("includes/footer.php"); ?>

<script>
	$('#tab1-click').click(function (e) {
		e.stopPropagation();
		$('#tab1').toggleClass('display');
		$(this).toggleClass('active');
		$('#tab3, #tab2').removeClass('display');
		$('#tab3-click, #tab2-click').removeClass('active');

	});
	$('#tab2-click').click(function (e) {
		e.stopPropagation();
		$('#tab2').toggleClass('display');
		$(this).toggleClass('active');
		$('#tab1, #tab3').removeClass('display');
		$('#tab1-click, #tab3-click').removeClass('active');
	});
	$('#tab3-click').click(function (e) {
		e.stopPropagation();
		$('#tab3').toggleClass('display');
		$(this).toggleClass('active');
		$('#tab1, #tab2').removeClass('display');
		$('#tab1-click, #tab2-click').removeClass('active');
	});
</script> 


<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>