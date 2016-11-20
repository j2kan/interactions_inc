<?php
	include '../nav.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Connect</title>

	<meta name="description" content="Full view calendar component for twitter bootstrap with year, month, week, day views.">
	<meta name="keywords" content="jQuery,Bootstrap,Calendar,HTML,CSS,JavaScript,responsive,month,week,year,day">
	<meta name="author" content="Serhioromano">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="components/bootstrap3/css/bootstrap.css">
	<link rel="stylesheet" href="components/bootstrap3/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/calendar.css">

	<style type="text/css">
		.btn-twitter {
			padding-left: 30px;
			background: rgba(0, 0, 0, 0) url(https://platform.twitter.com/widgets/images/btn.27237bab4db188ca749164efd38861b0.png) -20px 9px no-repeat;
		}
		.btn-twitter:hover {
			background-position:  -21px -16px;
		}
	</style>
</head>
<body>
<div class="container">
	

	<div class="page-header">

		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn btn-default" data-calendar-nav="today">Today</button>
				<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Year</button>
				<button class="btn btn-warning active" data-calendar-view="month">Month</button>
				<button class="btn btn-warning" data-calendar-view="week">Week</button>
				<button class="btn btn-warning" data-calendar-view="day">Day</button>
			</div>

		</div>

		<h3></h3>
		<small></small>
			<img src="img/legend.png">
	</div>

	<div class="row">
		<div class="col-md-9">

			<div id="calendar"></div>

		</div>
		<div class="col-lg-3">
			<a href="http://www.accuweather.com/en/ca/waterloo/n2l/weather-forecast/55073" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1479676926831" class="aw-widget-current"  data-locationkey="55073" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1479676926831"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
			<!--<a href="index_clicked.html"><img src="img/add.jpg" width="20" height="20"></a>
			&#160;&#160;&#160;
			<a href="index_clicked.html"><img src="img/remove.jpg" width="20" height="20"></a>
			<br><br>-->
			<h2><u>Don't Forget</u>
			<a href="../underdev/under_dev.html"><img src="img/remove.jpg" width="20" height="20" align="right"></a>&#160;<a href="../underdev/under_dev.html"><img src="img/add.jpg" width="20" height="20" align="right"></a></h2>
			</h2>
			<!--<small>This list is populated with events dynamically</small>-->
			<!--<ul id="eventlist" class="nav nav-list"></ul>-->
			<table style="width:100%">
				<tr>
			    <td>Tuesday 11:59 P.M.</td>
			    <td>342 Assignment</td>
			    
			  </tr>
			  <tr><td><br></td></tr>
			  <tr>
			    <td>Friday 10:00 A.M.</td>
			    <td>Tesla Interview</td>
			    
			  </tr>
			 </table>

			<br><br>
			<h2><u>To Do</u> <a href="../underdev/under_dev.html"><img src="img/remove.jpg" width="20" height="20" align="right"></a>&#160;<a href="../underdev/under_dev.html"><img src="img/add.jpg" width="20" height="20" align="right"></a></h2>
			<table style="width:100%">
				<tr>
			    <td>Prepare for Tesla Interview</td>
			    <td><img src="img/blue.png" width="24" height="24"></td>
			  </tr>
			  <tr><td><br></td></tr>
			  <tr>
			    <td>Study MSCI 333</td>
			    <td><a href="home_clicked.php"><img src="img/blue.png" width="20" height="20"></a></td>
			  </tr>

			 </table>
		</div>

		
	</div>

	<div class="clearfix"></div>

	<div class="row-fluid">
	
	</div>
	
	


	<script type="text/javascript" src="components/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="components/underscore/underscore-min.js"></script>
	<script type="text/javascript" src="components/bootstrap3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="components/jstimezonedetect/jstz.min.js"></script>
	<script type="text/javascript" src="js/calendar.js"></script>
	<script type="text/javascript" src="js/app.js"></script>

	<script type="text/javascript">
		var disqus_shortname = 'bootstrapcalendar'; // required: replace example with your forum shortname
		(function() {
			var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		})();
	</script>
</div>
</body>
</html>
