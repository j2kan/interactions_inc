<link rel="stylesheet" href="Homepage/components/bootstrap3/css/bootstrap.css">
<link rel="stylesheet" href="Homepage/components/bootstrap3/css/bootstrap-responsive.css">
 <script type="text/javascript"> 

  var _plm = _plm || [];
  _plm.push(['_btn', 44473]); 
  _plm.push(['_loc','caon0728']);
  _plm.push(['location', document.location.host ]);
   (function(d,e,i) {
  if (d.getElementById(i)) return;
  var px = d.createElement(e);
  px.type = 'text/javascript';
  px.async = true;
  px.id = i;
  px.src = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/js/btn/pelm.js?orig=en_ca';
  var s = d.getElementsByTagName('script')[0];

  var py = d.createElement('link');
  py.rel = 'stylesheet'
  py.href = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/styles/btn/styles.css'

  s.parentNode.insertBefore(px, s);
  s.parentNode.insertBefore(py, s);
})(document, 'script', 'plmxbtn');</script>
	
<style>

/* Bordered form */
form {
    /*border: 0px solid #f1f1f1;*/
}

/* Full-width inputs */
/*input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
*/
/* Set a style for all buttons */
button {
    background-color: #0b42c1;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 30%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */
span.psw {
    float: left;
    padding-top: 0;

}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}
</style>
<style>
  html, body {
    height: 100%;
  }
  #tableContainer-1 {
    height: 100%;
    width: 100%;
    display: table;
  }
  #tableContainer-2 {
    vertical-align: middle;
    display: table-cell;
    height: 100%;
  }
  #myTable {
    margin: 0 auto;
  }
.Large
{
    font-size: 16pt;
    height: 30px;
}
</style>
<link rel="icon" href="connect2.jpg">
<title> Login </title>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> <span class="glyphicon glyphicon-globe"></span>   Connect</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#">Home</a></li> -->
    </ul>
  </div>
</nav>
<div id="tableContainer-1">

<p></p>
<table style="border: 0px solid white;" id="myTable" width="50" border>
  <tr><td>
  <form  action="Homepage/home.php">
  <div class="imgcontainer">
  <p><br><br><br></p>
  <h1> Sign in </h1>
  </div>
  <div class="container">
    <label><b>Username</b></label>
    <input size="30" class="Large" type="text" placeholder="" name="uname" required>
    <label><b>Password</b></label>
    <input size="30" class="Large" type="password" placeholder="" name="psw" required>
    <input type="checkbox" checked="checked"> Remember me
    <button type="submit">Connect</button>
   <span class="psw"> <a href="#"><font color="#0b42c1">Trouble connecting?</font></a></span>
  </div>
	</form>
      </td></tr>
    </table>
<footer>
<!-- <div id="plemx-root"></div>  -->
<br>
<br>
 <center>© 2015-2016 Interactions Inc.</center>
</footer>
</div>







