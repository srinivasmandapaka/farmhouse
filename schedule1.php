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
    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<script type="text/javascript" src="slick/slick.min.js"></script>
    
    <script src="js/jquery.sumoselect.min.js"></script>
    <link href="webstyle/sumoselect.css" rel="stylesheet" />
    
    <link href="skins/flat/aero.css" rel="stylesheet">
	<script src="js/icheck.js"></script>
    
    <script type="text/javascript" src="js/zebra_datepicker.js"></script>
    <link rel="stylesheet" href="webstyle/bootstrap.css" type="text/css">
	
</head>
<body class="schedule">

<?php include("includes/header.php"); ?>

<section class="back-button fixed-top group">
	<div class="wrapper group">
    	<a href="jucie.php">BACK</a>
    </div>
</section>

<section class="main-title group">
	<div class="wrapper group">
    	<h2>SCHEDULE MY DETOX</h2>
    </div>
</section>

<section class="ordered gray group">
	<div class="wrapper group">
    	<aside class="title group">Ordered:</aside>
        <aside class="list group">
        
        	<figure class="group">
            	<div class="days">
                	<select class="SlectBox" name="days">
                        <option value="1 day">1 day</option>
                        <option value="3 day">3 day</option>
                        <option value="5 day">5 day</option>
                    </select>
                </div>
                <div class="box">&nbsp;</div>
                <div class="type">&nbsp;</div>
                <div class="for">&nbsp;</div>
                <div class="persons">
                	<select class="SlectBox" name="persons">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
            	</div>
                <div class="image"><img src="images/icon-profile-image.png" alt="Profile" /></div>
            </figure>
            
        	<figure class="group">
            	<div class="days">
                	<select class="SlectBox" name="days">
                        <option value="1 day">1 day</option>
                        <option value="3 day">3 day</option>
                        <option value="5 day">5 day</option>
                    </select>
                </div>
                <div class="box"><img src="images/icon-basket-detox-gray.png" alt="Detox" /></div>
                <div class="type">
                	<select class="SlectBox" name="type">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div>
                <div class="for">for</div>
                <div class="persons">
                	<select class="SlectBox" name="persons">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
            	</div>
                <div class="image"><img src="images/icon-profile-image.png" alt="Profile" /></div>
            </figure>
            
            <figure class="group">
            	<div class="days">
                	<select class="SlectBox" name="days">
                        <option value="1 day">1 day</option>
                        <option value="3 day">3 day</option>
                        <option value="5 day">5 day</option>
                    </select>
                </div>
                <div class="box">&nbsp;</div>
                <div class="type">&nbsp;</div>
                <div class="for">&nbsp;</div>
                <div class="persons">
                	<select class="SlectBox" name="persons">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
            	</div>
                <div class="image"><img src="images/icon-profile-image.png" alt="Profile" /></div>
            </figure>
            
        </aside>
    </div>
</section>


<section class="plan">
	<div class="wrapper">
    	<aside class="title group">Schedule:</aside>
        <aside class="date group">
        	<p>When do you want to start your delivery schedule? <a href="#" class="info">About our delivery schedule?</a></p>
            <p>Next available delivery date is: 
            <input id="datepicker" type="text" placeholder="Select Date"></p>
           </p>
        </aside>
        <div class="clear"></div>
        
        <div class="pick-plan group">
        	<p>Choose a plan:</p>
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
            	<div class="col-1"><input type="radio" name="iCheck1" ><span>A</span></div>
                <div class="col-2 can-chedule"></div>
                <div class="col-3"></div>
                <div class="col-4 can-chedule"></div>
                <div class="col-5"></div>
                <div class="col-6 can-chedule"></div>
                <div class="col-7"></div>
                <div class="col-8"></div>
            </div>
            
            <div class="row group">
            	<div class="col-1"><input type="radio" name="iCheck1" checked ><span>B</span></div>
                <div class="col-2 can-chedule"></div>
                <div class="col-3"></div>
                <div class="col-4"></div>
                <div class="col-5 can-chedule"></div>
                <div class="col-6"></div>
                <div class="col-7 can-chedule"></div>
                <div class="col-8"></div>
            </div>
            
            <div class="row group">
            	<div class="col-1"><input type="radio" name="iCheck1" ><span>C</span></div>
                <div class="col-2 can-chedule"></div>
                <div class="col-3"></div>
                <div class="col-4 can-chedule"></div>
                <div class="col-5"></div>
                <div class="col-6"></div>
                <div class="col-7 can-chedule"></div>
                <div class="col-8"></div>
            </div>
        </div>
    </div>
</section>

<section class="next-button group">
	<div class="wrapper group">
    	<a href="schedule2.php">NEXT</a>
    </div>
</section>

<?php include("includes/footer.php"); ?>

<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>