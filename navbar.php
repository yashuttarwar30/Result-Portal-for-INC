<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.navbar
{
    width:100%;
    white-space:nowrap;
    background-color: #5E11A3;
}
.main_div
{
    width:100%;
    height:100vh;
 
}
*{
    margin:0;
    padding:0;
   box-sizing:border-box;
}
h4
{
    color:white;
}
.display_table
{
    width:100vw;
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content: center;
    text-align:center;
}
.center_div
{
    width:90vw;
    height:80vh;
    background-image:url('images/2.jpg');
    background-repeat:no-repeat;
    background-size:100%;
    padding:20px 0 0 0;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius:10px;
    margin-left:30px;
}
h5
{
    background-color:black;
    border:1px solid #f2f2f2;
   padding:8px 30px;
  text-align:center;
  opacity:0.9;
  color:#04FB73 ;}
h9
{
    background-color:black;
    border:1px solid #f2f2f2;
   padding:8px 30px;
  text-align:center;
  opacity:0.9;
  color:#04FB73 ;}
table
{
    border-collapse:collapse;
    background-color:black;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius: 10px;
    border-collapse:collapse;
    table-layout:fixed;
    opacity:0.7;
    color:#F7CC1A;
    font-weight:bold;
    margin:auto;
}
th,td
{
  border:1px solid #f2f2f2;
   padding:8px 30px;
  text-align:center;
  opacity:0.9;
  color:#04FB73 ; 
}
th{
    text-transform:uppercase;
    font-weight:500;
}
td
{
    font-size:13px;
}

</style>
 <?php 
session_start();
    if(isset($_POST['submit'])){
      

        $_SESSION['serach'] = $regValue;
        
    }
?> 
<head>
<nav class="navbar navbar-expand-md">
<a href="#" class="navbar-brand font-weight-bold text-white text-center">INC RESULT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
       
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action='xx.php' method='get'>
    <input class="form-control me-2" type="search" name="serach" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0"  onclick="myFunction()" name="submit" type="submit">Search</button>
      
    </form>
  </div>
</nav>
  </head>
