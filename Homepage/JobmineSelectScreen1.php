<!DOCTYPE html>
<html>
<head>
<?php
  include '../nav.php';
?>
	<title>Jobmine | Connect</title>

  <link rel="stylesheet" href="components/bootstrap3/css/bootstrap.css">

</head>
<body>
<div class="container">

	<h1>Your upcoming Interviews!</h1>
	 <table id="DB_course_table" class="table table-hover">
  <tr>
    <th>With</th>
    <th>When</th>
    <th>Time</th>
    <th></th>
  </tr>

  <tr>
    <td>Facebook</td>
    <td>October 24th, 2016</td>
    <td>1:30pm-2:00pm</td>
   <td><a href="../Homepage/JobmineSelectScreen1.php">Change Time</a></td>
  </tr>

  <tr>
    <td>Linkedin</td>
    <td>October 25th, 2016</td>
    <td>5:30pm-6:30pm</td>
   <td><a href="../Homepage/JobmineSelectScreen1.php">Change Time</a></td>
  </tr>

    <tr class="active">
    <td>Oliver Wyman</td>
    <td>October 26th, 2016</td>
    <td></td>
    <td><a href="../Homepage/JobmineInterviewTime1.php">Select Time</a></td>
  </tr>

   <tr>
    <td>Tesla</td>
    <td>October 30th, 2016</td>
    <td>2:30pm-3:30pm</td>
   <td><a href="../Homepage/JobmineSelectScreen1.php">Change Time</a></td>
  </tr>

</table> 

</div>
</body>

</html>