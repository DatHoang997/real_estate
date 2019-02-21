<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
</head>
<body>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
                <a href="#">Detail</a>
                <a href="#">logout</a>
            </div>
        </div>
    </div> 


  
    <!-- <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
 -->     
    <div class="sidenav">
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="main">
   <!--  @yield('edit') -->
    @yield('content')
    

    </div>


</body>
<footer>
	<div class="footer">
  		<h2>Footer</h2>
    </div> 
</footer>
</html>
