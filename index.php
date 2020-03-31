<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Progressbar - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
<style type="text/css">
/* Sticky Footer Classes */
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: gray;
}
  </style>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
   $(document).ready(function(){
    
    $("#p").show();
    $("#button2").hide();    

  $("#button1").click(function(){
    $("#div1").fadeIn(1000);
    $("#p").hide();
    $("#button1").hide();
    $("#button2").show();
  });


  $("#button2").click(function(){
    $("#div1").hide();
    $("#p").hide();
    $("#button1").hide();
    $("#button2").hide();
    $("#div2").fadeIn(1000);
  });

});


  </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Survey</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav> 


<p id="p"class="text-success">Complete all the form fields for your feedback.</p>
<button id="button1" class="btn btn-info btn-l">Click to Start the survey </button><br><br>


<div id="div1" style="display:none;">                                                                                       
<div class="container">
  <div class="row">
    <div class="col-l">
    
  <label class="text-danger"> 1. Testing Demoraphic Question </label><br/>
    <label class="text-primary">Test  </label>
    <textarea class="form-control col-xs-12" rows="3" cols="20"></textarea><br/>
<input type="button" id="button2" class="btn btn-danger btn-l" value="Next"><br><br>


</div>
  </div>
</div>
</div>
<br>
    

<div id="div2" style="display:none;">                                                                                       
<div class="container">
  <div class="row">
    <div class="col-l">
    
  <label class="text-danger"> 1. Testing Demoraphic Question </label><br/>
    <label class="text-primary">Test  </label>
    <textarea class="form-control col-xs-12" rows="3" cols="20"></textarea><br/>
<button id="btn2" class="btn btn-danger btn-l">Next</button><br><br>


</div>
  </div>
</div>
</div>
<br>



<footer class="footer">
  <div class="container" row="50%">

  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:0%">
    0%
  </div>
</div> 

  </div>
</footer>
</body>

</body>
</html>