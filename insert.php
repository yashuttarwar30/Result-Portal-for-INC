<?php

include("connection.php");
if(isset($_POST['Submit'])){
  




    $judge=$_POST["judgeid"];
    $team=$_POST["projectid"];
    $domain=$_POST["domain"];
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
    $d=$_POST["d"];
    $e=$_POST["e"];
    $f=$_POST["f"];
    $g=$_POST["g"];
    $h=$_POST["h"];
    
    
    
    $query= "INSERT INTO `marks`(`Judge ID`, `Team ID`, `Domain`, `AE`, `IA`, `OC`, `PP`, `PQ`, `RS`, `TD`, `Marks`) VALUES ('$judge', '$team', $domain, $a, $b, $c, $d, $e, $f, $g, $h);";
    $result=mysqli_query($conn,$query);
    if($result){
      
        header("location: insert.php");
    }
   else{
        
        echo mysqli_error($conn);

    }

    
    

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>INC || INSERT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
     input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 5px solid ;
  border-radius: 4px;
  border-image: linear-gradient(to left, turquoise, greenyellow) 1 0;
  

}
input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 5px solid ;
  border-radius: 4px;
  border-image: linear-gradient(to left, turquoise, greenyellow) 1 0;
  color: aliceblue;

}
body{
  background-color: black;
}

  </style>


</head>
<body>

<div class="container mt-3">
  <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: aquamarine;">INC -  DATA FOR RESULT CALCULATION</h2>
  <br><br>
  <form action="/IMPETOUS/insert.php"  method="post">
    
    <div class="mb-3 mt-3">
      <label for="judgeid" style="font-size: larger; color: white;">Judge ID</label>
      <input type="text" class="form-control" id="jd" placeholder="Enter Judge ID" name="judgeid" required>
    </div>
    <br><br>
    <div class="mb-3">
      <label for="text" style="font-size: larger; color: white;"> Project ID</label>
      <input type="text" class="form-control" name="projectid" id="pid" placeholder="Enter Project ID" required>
    </div>
    <br><br>
    <div class="mb-3">
      <label for="number" style="font-size: larger; color: white;"> Domain</label>
      <input type="number" class="form-control" name="domain" id="domain" placeholder="Enter Domain" required>
    </div>
    <br><br>
    <div class="mb-3">
      <label for="number" style="font-size: larger; color: white;" >Ability to Execute projects as a Startups or Startup Enrollment</label>
      <input type="number" class="form-control" name="a" id="aep" placeholder="Enter the following" required>
    </div>
    <br><br>
    <div class="mb-3">
      <label for="number" style="font-size: larger; color: white;">Impact and Applications</label>
      <input type="number" class="form-control" name="b" id="ia" placeholder="Enter Imapact and Applications" required>
    </div>
    <br><br>
    <div class="mb-3">
      <label for="text" style="font-size: larger; color: white;"> Originality, Creativity, Clarity, and Innovation in Project</label>
      <input type="number" class="form-control" name="c" id="occi" placeholder="Enter the following" required>
    </div>
    <br><br>
    <div class="mb-3">
      <label for="number" style="font-size: larger; color: white;">Patent or Product readiness from Project</label>
      <input type="number" class="form-control" name="d" id="pprp" placeholder="Enter Marks" required>
    </div>
    <br><br>
    <div class="mb-3">
      <label for="number" style="font-size: larger; color: white;"> Presentation, and Q&A</label>
      <input type="number" class="form-control" name="e" id="qa" placeholder="Enter Marks" required>
    </div>
    <br><br>
    <div class="mb-3">
      <label for="number" style="font-size: larger; color: white;"> Relevance to Society</label>
      <input type="number" class="form-control" name="f" id="rs" placeholder="Enter Marks" required>
    </div>
    <br><br>
    
    <div class="mb-3">
      <label for="number" style="font-size: larger; color: white;">Testing or Demonstration</label>
      <input type="number" class="form-control" name="g" id="td" placeholder="Enter Marks" required>
    </div>
    <br><br>
    <div class="mb-3">
      <label for="number" style="font-size: larger; color: white;">Total</label>
      <input type="number" class="form-control" name="h" id="total" placeholder="Enter Total" onclick="sum()" readonly>
    </div>
    <br><br>
    <div  class="form-group">
        <input type="submit" id="Submit" name="Submit"  style="padding: 10px;" class="btn btn-primary" value="Submit" >
    </div>
   
  </form>
</div>
<script>
function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}
function sum(){
    var a=parseInt(document.getElementById("aep").value);
    var b=parseInt(document.getElementById("ia").value);
    var c=parseInt(document.getElementById("occi").value);
    var d=parseInt(document.getElementById("pprp").value);
    var e=parseInt(document.getElementById("qa").value);
    var f=parseInt(document.getElementById("rs").value);
    var g=parseInt(document.getElementById("td").value);
    if (!isNumber(a) || !isNumber(b) || !isNumber(c) || !isNumber(d)|| !isNumber(e) || !isNumber(f) || !isNumber(g)) {
        alert("Please enter all fields.");
    }   
    else {
        var ans=a+b+c+d+e+f+g;
        document.getElementById("total").value=ans;
    }
    
}
</script>
</body>
</html>