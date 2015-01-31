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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    
    <script>
    	$(function() {
			$('.single-adress-tooltip').tooltip();
		  });
    </script>
    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<script type="text/javascript" src="slick/slick.min.js"></script>
    
    <link href="webstyle/sumoselect.css" rel="stylesheet" />
    <script src="js/jquery.sumoselect.min.js"></script>
    
	<link href="skins/flat/grey.css" rel="stylesheet">
	<script src="js/icheck.js"></script>
    
    
    
</head>
<body class="adresses">

<?php include("includes/header.php"); ?>

<section class="back-button fixed-top group">
	<div class="wrapper group">
    	<a href="schedule1.php">BACK</a>
    </div>
</section>


<section class="plan">
	<div class="wrapper">
    	<aside class="title group">Schedule:</aside>
        <div class="clear"></div>
        
        <div class="pick-plan group">
        	<p>Always send to the same address every time? <span class="radio-same-address"><input type="radio" name="always" checked > Yes&nbsp;&nbsp;&nbsp;<input type="radio" name="always" > No</span></p>
            <p>Drag and drop the icon to your schedule:</p>
        	<div class="row-top group">
            	<div class="col-1">&nbsp;</div>
                <div class="col-2">Wed</div>
                <div class="col-3">Thu</div>
                <div class="col-4">Fri</div>
                <div class="col-5">Sat</div>
                <div class="col-6">Sun</div>
                <div class="col-7">Mon</div>
                <div class="col-8">Tue</div>
            </div>
            
            <div class="row group">
            	<div class="col-1"><input type="radio" name="iCheck1" checked ><span>B</span></div>
                <div class="col-2 can-chedule"><a href="#" class="single-adress-tooltip" title="3Day Detox for 1 person to Address 2"><img src="images/icon-pointer.png" /></a><a href="#" class="single-adress-tooltip" title="3Day Detox for 1 person to Address 2"><img src="images/icon-pointer.png" /></a></div>
                <div class="col-3"></div>
                <div class="col-4"></div>
                <div class="col-5 can-chedule"><a href="#" class="single-adress-tooltip" title="3Day Detox for 1 person to Address 2"><img src="images/icon-pointer.png" /></a></div>
                <div class="col-6"></div>
                <div class="col-7 can-chedule"><a href="#" class="single-adress-tooltip" title="3Day Detox for 1 person to Address 2"><img src="images/icon-pointer.png" /></a><a href="#" class="single-adress-tooltip" title="3Day Detox for 1 person to Address 2"><img src="images/icon-pointer.png" /></a></div>
                <div class="col-8"></div>
            </div>
        </div>
        
        <div class="address-list group">
        	<figure class="group">
            	<div class="dragit"><a href="#" class="single-adress-tooltip" title="3Day Detox for 1 person to Address 2"><img src="images/icon-pointer.png" /></a></div>
                <div class="address-no">Address 1:</div>
                <div class="address-details">No.***, *** Bilding, *** Street, *** District, *** City</div>
                <div class="address-action"><a href="#">Edit</a></div>
            </figure>
            
            <figure class="group">
            	<div class="dragit"><a href="#" class="single-adress-tooltip" title="3Day Detox for 1 person to Address 2"><img src="images/icon-pointer.png" /></a></div>
                <div class="address-no">Address 2:</div>
                <div class="address-details">No.***, *** Bilding, *** Street, *** District, *** City</div>
                <div class="address-action"><a href="#">Edit</a></div>
            </figure>
            
            <figure class="group">
            	<div class="dragit"><a href="#" class="single-adress-tooltip" title="3Day Detox for 1 person to Address 2"><img src="images/icon-pointer.png" /></a></div>
                <div class="address-no">Address 3:</div>
                <div class="address-details">No.***, *** Bilding, *** Street, *** District, *** City</div>
                <div class="address-action"><a href="#">Edit</a></div>
            </figure>
            
            <figure class="group add-new-address">
            	<div class="dragit"><a href="#" class="single-adress-tooltip" title="3Day Detox for 1 person to Address 2"><img src="images/icon-pointer.png" /></a></div>
                <div class="address-no">Address 4:</div>
                <div class="address-details">
                	<div class="add-address">
                    	<textarea name="address" placeholder="No.***, *** Building, *** Street" rows="5" ></textarea>
                    </div>
                    <div class="add-address-dc">
                    	<p><select class="SlectBox" name="district">
                            <option value="Huangpu">Huangpu</option>
                            <option value="Huangpu">Huangpu</option>
                        </select></p>
                        <p class="text">District,</p>
                        <p><select class="SlectBox" name="city">
                            <option value="ShanghaiShanghai">Shanghai</option>
                            <option value="Shanghai">Shanghai</option>
                        </select></p>
                        <p class="text">City</p>
                    </div>
                </div>
                <div class="address-action"><a href="#">Save</a></div>
            </figure>
        
        </div>
        
        
    </div>
</section>

<section class="center-link gray group">
	<div class="wrapper group">
    	<a href="#">Add More Address</a>
    </div>
</section>

<section class="center-link group">
	<div class="wrapper group">
    	<a href="#" class="add-card">Add Into</a>
    </div>
</section>

<?php include("includes/footer.php"); ?>

<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>