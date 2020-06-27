<!DOCTYPE html>
<html>
<head>
  <title>Features</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Online Money Exchange</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Transfer</a></li>
          <li><a href="#section2">Check</a></li>
          <li><a href="#section3">View</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin activity<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Control Customer</a></li>
              <li><a href="#section42">Control Employee</a></li>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="section1" class="container-fluid">
  <h1>Transfer</h1>
  <p>Transfer Money With Appropriate Branch or Transfer Code</p>
</div>
<div id="section2" class="container-fluid">
  <h1>Check</h1>
  <p>Check How Much Balance You  Have in Your account</p>
</div>
<div id="section3" class="container-fluid">
  <h1>View payments</h1>
  <p>Customer can view his transfered payments and check his receivers whom he paid</p>
</div>
<div id="section41" class="container-fluid">
  <h1>Add,Edit Or Delete Customer</h1>
  <p>Admin can add,edit,or delete any customer whom he want</p>
</div>
<div id="section42" class="container-fluid">
  <h1>Add,Edit Or Delete Employee</h1>
  <p>Admin can add,edit,or delete any employee whom he want</p>
</div>

<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});
</script>

</body>
</html>