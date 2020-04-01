<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Genex Web Check 2020</title>
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
    $("#button0").show();    
    $("#bar1").hide();
    $("#bar2").hide();
    $("#bar3").hide();
    $("#bar4").hide();
    $("#bar5").hide();
    $("#bar6").hide();
    $("#bar7").hide();
    $("#bar8").hide();

  $("#button0").click(function(){
    $("#div1").fadeIn(1000);
    $("#p").hide();
    $("#button0").hide();
    $("#bar1").show();
    $("#bar2").hide();
    $("#bar3").hide();
    $("#bar4").hide();
    $("#bar5").hide();
    $("#bar6").hide();
    $("#bar7").hide();
    $("#bar8").hide();
  });


  $("#button1").click(function(){
    $("#div1").hide();
    $("#p").hide();
    $("#button0").hide();
    $("#div2").fadeIn(1000);
    $("#bar1").hide();
    $("#bar2").show();
    $("#bar3").hide();
    $("#bar4").hide();
    $("#bar5").hide();
    $("#bar6").hide();
    $("#bar7").hide();
    $("#bar8").hide();
  });


  $("#button2").click(function(){
    $("#div1").hide();
    $("#div2").hide();
    $("#p").hide();
    $("#button0").hide();
    $("#div3").fadeIn(1000);
    $("#bar1").hide();
    $("#bar2").hide();
    $("#bar3").show();
    $("#bar4").hide();
    $("#bar5").hide();
    $("#bar6").hide();
    $("#bar7").hide();
    $("#bar8").hide();
  });

  $("#button3").click(function(){
    $("#div1").hide();
    $("#div2").hide();
    $("#div3").hide();
    $("#p").hide();
    $("#button0").hide();
    $("#div4").fadeIn(1000);
    $("#bar1").hide();
    $("#bar2").hide();
    $("#bar3").hide();
    $("#bar4").show();
    $("#bar5").hide();
    $("#bar6").hide();
    $("#bar7").hide();
    $("#bar8").hide();
  });

  $("#button4").click(function(){
    $("#div1").hide();
    $("#div2").hide();
    $("#div3").hide();
    $("#div4").fadeOut(1000);
    $("#p").hide();
    $("#button0").hide();
    $("#div5").fadeIn(1000);
    $("#bar1").hide();
    $("#bar2").hide();
    $("#bar3").hide();
    $("#bar4").hide();
    $("#bar5").show();
    $("#bar6").hide();
    $("#bar7").hide();
    $("#bar8").hide();
  });

  $("#button5").click(function(){
    $("#div1").hide();
    $("#div2").hide();
    $("#div3").hide();
    $("#div5").fadeOut(1000);
    $("#p").hide();
    $("#button0").hide();
    $("#div6").fadeIn(1000);
    $("#bar1").hide();
    $("#bar2").hide();
    $("#bar3").hide();
    $("#bar4").hide();
    $("#bar5").hide();
    $("#bar6").show();
    $("#bar7").hide();
    $("#bar8").hide();
  });

  $("#button6").click(function(){
    $("#div1").hide();
    $("#div2").hide();
    $("#div3").hide();
    $("#div6").fadeOut(1000);
    $("#p").hide();
    $("#button0").hide();
    $("#div7").fadeIn(1000);
    $("#bar1").hide();
    $("#bar2").hide();
    $("#bar3").hide();
    $("#bar4").hide();
    $("#bar5").hide();
    $("#bar6").hide();
    $("#bar7").show();
    $("#bar8").hide();
  });


  $("#button7").click(function(){
    $("#div1").hide();
    $("#div2").hide();
    $("#div3").hide();
    $("#div7").fadeOut(1000);
    $("#p").hide();
    $("#button0").hide();
    $("#div8").fadeIn(1000);
    $("#bar1").hide();
    $("#bar2").hide();
    $("#bar3").hide();
    $("#bar4").hide();
    $("#bar5").hide();
    $("#bar6").hide();
    $("#bar7").hide();
    $("#bar8").show();
  });
});

function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
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
    </ul>
  </div>
</nav> 

<p id="p"class="text-success">Complete all the form fields for your feedback.</p>
<button id="button0" class="btn btn-info btn-l">Click to Start the survey </button><br><br>

<div id="div1" style="display:none;">                                                                                       
<div class="container">
  <div class="row">
    <div class="col-l">
    
  <label class="text-danger"> 1. Testing Demoraphic Question </label><br/>
    <label class="text-primary">Test  </label>
    <textarea class="form-control col-xs-12" rows="3" cols="20"></textarea><br/>
<input type="button" id="button1" class="btn btn-danger btn-l" value="Next"><br><br>
</div>
  </div>
</div>
</div>
<br>
    

<div id="div2" style="display:none;">                                                                                       
<div class="container">
  <div class="row">
    <div class="col-l">

    <label class="text-danger"> 2. How would you rate the load speed on the Genex Insights platform? </label>
    <div class="d-flex justify-content-start">Extremely Low</div>    
    <!-- Default unchecked -->
    <div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">1</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">2</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">3</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">4</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">5</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">6</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">7</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">8</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">9</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">10</label>
</div>

<div class="d-flex justify-content-end">Extremely High</div>

<input type="button" id="button2" class="btn btn-danger btn-l" value="Next"><br><br>
</div>
  </div>
</div>
</div>


<div id="div3" style="display:none;">                                                                                       
<div class="container">
  <div class="row">
    <div class="col-l">
    <label class="text-danger"> 3. Did the charts load in the dashboard? </label>
    
    <!-- Default unchecked -->
    <div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">Yes</label>
</div>
  
  <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">No</label>
</div>
<input type="button" id="button3" class="btn btn-danger btn-l" value="Next"><br><br>

</div>
  </div>
</div>
</div>


<div id="div4" style="display:none;">                                                                                       
<div class="container">
  <div class="row">
    <div class="col-l">
    <label class="text-danger"> 4. Is there anything else you might want to add or mention? </label>
    <textarea class="form-control col-xs-12" rows="3" cols="20" required></textarea><br/>
    <input type="button" id="button4" class="btn btn-danger btn-l" value="Next"><br><br>
</div>
  </div>
</div>
</div>



<div id="div5" style="display:none;">                                                                                       
<div class="container">
  <div class="row">
    <div class="col-l">

    <label class="text-danger"> 5. How would you rate the load speed for Analytic charts? </label>
    
<div class="d-flex justify-content-start">Extremely Low</div>
    <!-- Default unchecked -->
    <div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">1</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">2</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">3</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">4</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">5</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">6</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">7</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">8</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">9</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">10</label>
</div>
<div class="d-flex justify-content-end">Extremely High</div>

<input type="button" id="button5" class="btn btn-danger btn-l" value="Next"><br><br>
</div>
  </div>
</div>
</div>

<div id="div6" style="display:none;">                                                                                       
<div class="container">
  <div class="row">
    <div class="col-l">

    <label class="text-danger"> 6. Do you want to generate a Resolve Alert? </label>
    
    <!-- Default unchecked -->
    <div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">Yes</label>
</div>
    <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">No</label>
</div>
<input type="button" id="button6" class="btn btn-danger btn-l" value="Next"><br><br>
</div>
  </div>
</div>
</div>


<div id="div7" style="display:none;">                                                                                       
<div class="container">
  <div class="row">
    <div class="col-l">
    <form action="#">
  <label class="text-danger"> 7. Is there anything else you might want to add or mention? </label><br/>
    <textarea class="form-control col-xs-12" rows="3" cols="20" ></textarea><br/>
<input type="submit" id="button7" class="btn btn-danger btn-l" value="Next"><br><br>
</form>
</div>
  </div>
</div>
</div>


<div id="div8" style="display:none;align:center">                                                                                       
<div class="container">
  <div class="row">
    <div class="col-l">
  <p>  You’re at the end of our survey. Thank you for taking the time to share your feedback.</p>
  </div>
  </div>
</div>
</div>

<footer class="footer">
  <div class="container" row="50%">

  <div class="progress" id="bar1">
  <div class="progress-bar"  role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:0%">
    0%
  </div>
 </div> 
 
 <div class="progress" id="bar2">
  <div class="progress-bar"  role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:14%">
    14%
  </div>
 </div> 
 
 
 <div class="progress" id="bar3">
  <div class="progress-bar"  role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:28%">
    28%
  </div>
 </div> 
 
 <div class="progress" id="bar4">
  <div class="progress-bar"  role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:42%">
    42%
  </div>
 </div> 
 
 <div class="progress" id="bar5">
  <div class="progress-bar"  role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:57%">
    57%
  </div>
 </div> 
 
 <div class="progress" id="bar6">
  <div class="progress-bar"  role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:71%">
    71%
  </div>
 </div>

 <div class="progress" id="bar7">
  <div class="progress-bar"  role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:81%">
    81%
  </div>
 </div>
 

 <div class="progress" id="bar8">
  <div class="progress-bar"  role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:100%">
    100%
  </div>
 </div>
 
 </div>
</footer>
</body>

</body>
</html>
