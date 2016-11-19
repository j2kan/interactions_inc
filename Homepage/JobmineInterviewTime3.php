<!DOCTYPE html>
<html>
<?php
  include '../nav.php';
?>
<head>
	<title>Jobmine | Connect</title>

  <link rel="stylesheet" href="components/bootstrap3/css/bootstrap.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-6">

	<h1>Congratulations!</h1>

    <h3>Oliver Wynman</h3>
    <p>October 26th, 2016</p>
	 <table id="DB_course_table" class="table table-hover">
  <tr>
    <th>Time</th>
    <th>Select</th>
  </tr>

  <tr>
    <td>1:30pm-2:00pm</td>
   <td><a href="../Homepage/JobmineInterviewTime3.php">Select Time</a></td>
  </tr>

  <tr>
    <td>2:00pm-2:30pm</td>
   <td>Time Taken</td>
  </tr>

    <tr class="active">
    <td>2:30pm-3:00pm</td>
    <td><a href="../Homepage/JobmineInterviewTime4.php">Unselect Time</a></td>
  </tr>

   <tr>
    <td>3:00pm-3:30pm</td>
   <td><a href="../Homepage/JobmineInterviewTime3.php">Select Time</a></td>
  </tr>

</table> 


<table>
<tr>
<td>
 <form action= "../Homepage/JobmineSelectScreen3.php" class="col-sm-offset-2 col-sm-10">
<input class="btn btn-warning" type = "submit" name = "Save" value="Save"/></form>
</td>
<td>
 <form action= "../Homepage/JobmineSelectScreen2.php" class="col-sm-offset-2 col-sm-10">
<input class="btn btn-warning" type = "submit" name = "Cancel" value="Cancel"></form>
</td>
</tr>
</table>

</div>

<div class="col-xs-1">
    <div class="row">
  </div>
</div>

<div class="col-xs-5">
    <div class="row">
    <br></br>
    <br></br>
      <h4>Don't forget:</h4>
    <p>October 26th, 2016</p>

<blockquote>8:00am-9:00am &nbsp; &nbsp; HCI Midterm</blockquote>
<blockquote>12:00pm-1:00pm &nbsp; Yelp Information Session</blockquote>
<blockquote>1:00pm-2:00pm &nbsp; &nbsp; HCI Group Meeting</blockquote>
<blockquote>2:30pm-3:00pm &nbsp; &nbsp; Oliver Wynman Interview!</blockquote>

  </div>
</div>
</div>


</body>

</html>