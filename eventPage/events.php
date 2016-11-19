<?php
include '../nav.php';
?>

<html>
  <link rel="stylesheet" href="../Homepage/components/bootstrap3/css/bootstrap.css">
	<link rel="stylesheet" href="../Homepage/components/bootstrap3/css/bootstrap-responsive.css">
<style>

.flex-container
{
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > *
{
    padding: 10px;
    -webkit-flex: 1 50%;
    flex: 1 75%;
}

.article
{
    text-align: left;
}

@media all and (min-width: 700px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex: 0px;flex:100 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}

</style>
<body>

<div class="flex-container">

<nav class="nav">
<ul>
  <img src="map.png" alt="Map View">
</ul>
</nav>

<article class="article">
  <header>
    <h1><ins>Kitchener, ON Events</ins></h1>
  </header>
  <p id="demo"></p>
  <script>
  function myFunction2()
  {
    var person = prompt("Who would you like to share this with?",
    "Enter Email");
      if (person != null)
      {
          document.getElementById("demo").innerHTML =
          "This event has been shared with " + person + "!";
      }
      document.getElementById("demo").innerHTML = x;
  }
  </script>

  <img src="eventOne.png" alt="Event One" usemap = "#attendEvent1" border="2">
  <map name="attendEvent1">
  <area shape="poly" coords="226,60,285,60,285,92,228,90" href = "../eventPage/events1">
  <area shape="poly" coords="711,103,746,102,747,139,709,138"  onclick = "myFunction2()">
  <area shape="poly" coords="5,3,202,4,202,101,5,103,11,113,192,116,194,129,14,128" href#>
  </map>
  <br>
  <br>

  <img src="eventTwo.png" alt="Event Two" usemap = "#attendEvent2" border = "2">
  <map name="attendEvent2">
  <area shape="poly" coords="230,61,293,61,292,92,230,96" href = "../eventPage/events2">
  <area shape="poly" coords="710,104,744,105,747,140,709,140"  onclick = "myFunction2()">
  <area shape="poly" coords="2,5,201,3,201,102,2,102,11,115" href#>
  <area shape="poly" coords="195,113,195,129,10,129" href#>
  </map>
  <br>
  <br>

  <img src="eventThree.png" alt="Event Three" usemap = "#attendEvent3" border="2">
  <map name="attendEvent3">
  <area shape="poly" coords="229,57,287,55,289,90,228,87" href = "../eventPage/events3">
  <area shape="poly" coords="706,101,745,103,748,137,706,134"  onclick = "myFunction2()">
  <area shape="poly" coords="6,4,186,8,193,97,5,99" href#>
  <area shape="poly" coords="7,113,181,111,183,131,8,129" href#>
  </map>

</article>
<footer>
 <center>© 2015-2016 Interactions Inc.</center>
</footer></div>

</body>
</html>
