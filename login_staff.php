<?php include_once("header.php");?>
<style>
body, html {
  height: 90%;
  font-family: Bodoni MT, Agency FB, Bahnschrift Condensed;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("img/cms.JPG");

  min-height:500px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 30px;
  max-width: 300px;
  padding: 20px;
   border:groove;
  background-color: white;
  
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 15px 0;
  border:ridge;
  background:#e1ecf0;
  
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<h2 style="color:#04AA6D; font-size:40px;" ></h2>
<div class="bg-img">
  <form action="staff_login_success.php"  method = "post"  class="container" >
 
    <h1 style="color:#04AA6D;"> Staff Login Panel</h1>


	

    <label for="email"><b>User Name </b></label>
    <input type="text" placeholder="Enter User Name" name="uname" required>

    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
	<button type="button" class="cancelbtn" style ="color:red;">Cancel</button>
    <span class="pwd">Forgot <a href="#">password?</a></span>
 
   <button type="submit" class="btn">Login</button>
	
    
  </form>
  
</div>
<?php include_once("footer.php");?>