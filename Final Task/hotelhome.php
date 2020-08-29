<?php
	include 'dbconnhotel.php'
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript">
		function statefilter(str){
			if (str == "") {
    			return;
       		} 
    else {
    	a = document.getElementById('date').value;
    	if (a.length > 0) {
    		x = '1' + '!' + str + '!' + a;
    		str = x;
    	}

    	else{
    		x = '2' + '!' + str;
    		str = x;
    	}
    	console.log(str);

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("hotelsec").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","gethotelstates.php?q="+str,true);
        xmlhttp.send();
    }
		}



		function datefilter(str){
			if (str == "") {
    			return;
       		} 
    else {
    	a = document.getElementsByClassName('state-select')[0].value;
    	if (a.length > 0) {
    		x = '3' + '!' + str + '!' + a;
    		str = x;
    	}

    	else{
    		x = '4' + '!' + str;
    		str = x;
    	}
    	console.log(str);

        if (window.XMLHttpRequest) {
            
            xmlhttp = new XMLHttpRequest();
        } else {
          
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("hotelsec").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","gethotelstates.php?q="+str,true);
        xmlhttp.send();
    }

		}





	</script>

</head>
<body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="homecss.css?version=51">

<nav class="navbar navbar-expand-lg navbar-light" id = "my-navbar">
  <a class="navbar-brand" href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Hotel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
    <span class="navbar-text">
      <div style="background-color: #004675; color: white;"class="nav-link"  id="myBtn" >Login</div>
    </span>
    <span class="navbar-text">
      <div style="background-color: #004675; color: white;"class="nav-link"  id="myBtn2" >Register</div>
    </span>
  </div>
</nav>


<!-- Modal form -->


<!-- The Modal -->
<div id="myModal" class="my-modal">

  <!-- Modal content -->
  <div class="my-modal-content">
    <span class="close">&times;</span>
    <div class="tab-toggle"><button class="logintogglebtn clogintoggle activebutton" onclick="displayclogin()"> Customer login</button> <button class="logintogglebtn hlogintoggle"  onclick="displayhlogin()"> Hotel Login</button></div>
  <form  class="customerlogin loginform" id="clogin">
    <p class="cuname"> User ID/Email (Customer)</p>
    <input class="cinput" type="text" name="">
    <p class="cpassword">Password</p>
    <input class="cinput" type="text" name="">

    <div style="margin-top: 5px;  margin-left: 10px;"><a href="#">Forgot Password?</a></div>
    <button class="cloginbtn">Login</button>
    <p class="caccwarn">  Don't have an account yet? Register Now (<a href="#">Customer</a>/ <a href="#">Hotel</a>)</p>
</form>

<form  class="hotellogin loginform nodisplay" id="hlogin">
    <p class="huname"> User ID/Email (Hotel)</p>
    <input class="hinput" type="text" name="">
    <p class="cpassword">Password</p>
    <input class="hinput" type="text" name="">

    <div style="margin-top: 5px;  margin-left: 10px;"><a href="#">Forgot Password?</a></div>
    <button class="hloginbtn">Login</button>
    <p class="haccwarn">  Don't have an account yet? Register Now (<a href="#">Customer</a>/ <a href="#">Hotel</a>)</p>
</form>
  </div>

</div>




<!-- Modal form ends-->




<!-- The Modal -->
<div id="myModal2" class="my-modal2">

  <!-- Modal content -->
  <div class="my-modal2-content">
    <span class="close">&times;</span>
    <div class="tab-toggle"><button class="regtogglebtn cregtoggle activebutton" onclick="displaycreg()"> Customer Registration</button> <button class="regtogglebtn hregtoggle"  onclick="displayhreg()"> Hotel Registration</button></div>
  <form  class="customerreg regform" action="customerregistration.php" id="creg">
    <p class="cuname">1. First Name</p>
    <input class="cinput" type="text" name="fname">
    <p class="cuname"> Last Name</p>
    <input class="cinput" type="text" name="lname">
    <p class="cuname"> Email Address</p>
    <input class="cinput" type="text" name="emailid">

    <p class="cpassword">Password</p>
    <input class="cinput" type="Password" name="password">

     <p class="cpassword">Confirm Password</p>
    <input class="cinput" type="Password" name="">

    <div style="margin-top: 5px;  margin-left: 10px;"><a href="#">Forgot Password?</a></div>
    <button class="cregbtn" type="submit">Register</button>
    <p class="caccwarn">  Already a member ? Login Now (<a href="#">Customer</a>/ <a href="#">Hotel</a>)</p>
</form>

<form  class="hotelreg regform nodisplay" id="hreg">
     <p class="huname">2. First Name</p>
    <input class="cinput" type="text" name="">
    <p class="huname"> Last Name</p>
    <input class="hinput" type="text" name="">
    <p class="huname"> Email Address</p>
    <input class="hinput" type="text" name="">

    <p class="hpassword">Password</p>
    <input class="hinput" type="Password" name="">

     <p class="hpassword">Confirm Password</p>
    <input class="hinput" type="Password" name="">

    <div style="margin-top: 5px;  margin-left: 10px;"><a href="#">Forgot Password?</a></div>
    <button class="cregbtn">Register</button>
    <p class="caccwarn">  Already a member ? Login Now (<a href="#">Customer</a>/ <a href="#">Hotel</a>)</p>
</form>
  </div>

</div>












<section class="section1">
	<select class = "state-select" id = "" onchange="statefilter(this.value)">
 		<option hidden disabled selected value >States</option>
 		<option value="Maharashtra">Maharashtra</option>
 		<option value="Gujarat">Gujarat</option>
 		<option value="Uttar Pradesh">Uttar Pradesh</option>
  	</select>

 	<input placeholder="Available Date" class="date-select" type="text" onfocus="(this.type='date')" id="date" name="availabledate" onchange="datefilter(this.value)">
 	<div class="search-container">
	 	<input type="text" placeholder="Search.." name="search">
	    <button type="submit"><i class="fa fa-search"></i></button>
	</div>
</section>



<section class="section2 row" id="hotelsec">
	<h3> Apply filters to get Hotels using AJAX technology</h3>

</section>




<script>
// Get the modal
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
	console.log('hi');
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


function displayclogin(){
  x = document.getElementsByClassName('customerlogin');
  x[0].classList.remove('nodisplay');
  y = document.getElementsByClassName('hotellogin');
  y[0].classList.add('nodisplay');


  a = document.getElementsByClassName('clogintoggle');
  a[0].classList.add('activebutton');

  b = document.getElementsByClassName('hlogintoggle');
  b[0].classList.remove('activebutton');
}



function displayhlogin(){
  x = document.getElementsByClassName('customerlogin');
  x[0].classList.add('nodisplay');
  y = document.getElementsByClassName('hotellogin');
  y[0].classList.remove('nodisplay');


  a = document.getElementsByClassName('clogintoggle');
  a[0].classList.remove('activebutton');

  b = document.getElementsByClassName('hlogintoggle');
  b[0].classList.add('activebutton');
}






var modal2 = document.getElementById("myModal2");

var btn2 = document.getElementById("myBtn2");

var span2 = document.getElementsByClassName("close")[1];


btn2.onclick = function() {
  modal2.style.display = "block";
}


span2.onclick = function() {
  modal2.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}


function displaycreg(){
  x = document.getElementsByClassName('customerreg');
  x[0].classList.remove('nodisplay');
  y = document.getElementsByClassName('hotelreg');
  y[0].classList.add('nodisplay');


  a = document.getElementsByClassName('cregtoggle');
  a[0].classList.add('activebutton');

  b = document.getElementsByClassName('hregtoggle');
  b[0].classList.remove('activebutton');
}



function displayhreg(){
  x = document.getElementsByClassName('customerreg');
  x[0].classList.add('nodisplay');
  y = document.getElementsByClassName('hotelreg');
  y[0].classList.remove('nodisplay');


  a = document.getElementsByClassName('cregtoggle');
  a[0].classList.remove('activebutton');

  b = document.getElementsByClassName('hregtoggle');
  b[0].classList.add('activebutton');
}
</script>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>