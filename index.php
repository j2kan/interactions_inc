<link rel="stylesheet" href="Homepage/components/bootstrap2/css/bootstrap.css">
<link rel="stylesheet" href="Homepage/components/bootstrap2/css/bootstrap-responsive.css">
	
<style>

.nav ul {
  list-style: none;
  background-color: #444;
  text-align: left;
  padding: 0;
  margin: -10px;
}
.nav li {
  font-family: 'Oswald', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
}
 
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: #005f5f;
}
 
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}
 
@media screen and (min-width: 600px) {
  .nav li {
    width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
  }
 
  /* Option 1 - Display Inline */
  .nav li {
    display: inline-block;
    margin-right: -75px;
  }
 
  /* Options 2 - Float
  .nav li {
    float: left;
  }
  .nav ul {
    overflow: auto;
    width: 600px;
    margin: 0 auto;
  }
  .nav {
    background-color: #444;
  }
  */
}
/* Bordered form */
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
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
    float: right;
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

</style>
<body class="news">
  <header>
    <div class="nav">
      <ul>
      --- 
      	<li> <img src="connect.jpg" alt="Avatar" class="avatar"> </li>
        <li class="home"><a href="#">Connect</a></li>
        <!-- <li class="tutorials"><a href="#">Tutorials</a></li> -->
        <!-- <li class="about"><a href="#">About</a></li> -->
        <!-- <li class="news"><a href="#">Newsletter</a></li> -->
        <!-- <li class="contact"><a href="#">Contact</a></li> -->
        <li> </li>
      </ul>
    </div>
  </header>
</body>

<div id="tableContainer-1">
  <!-- <div id="tableContainer-2"> -->
  <p><center> Weather? </center></p>
    <table id="myTable" border>
      <tr><td>
  <form action="action_page.php">
  <div class="imgcontainer">
  <h1> Sign in </h1>
  </div>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <button type="submit">Connect</button>
    <input type="checkbox" checked="checked"> Remember me
    <span class="psw"> <a href="#">Trouble connecting?</a></span>
  </div>
	</form>
      </td></tr>
    </table>
  <!-- </div> -->
</div>







