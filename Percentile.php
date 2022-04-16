<?php
    include "connection.php";
    $on=0;
    
    
    while($on<1){
        $sq=" DELETE from `per`";
        $res=$conn->query($sq);
    $sql=" SELECT `Judge ID` FROM `judge2` ";
    
    $result = $conn->query($sql);
    $a=array();
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
           
            array_push($a,$row['Judge ID']);
        }
        
        
        }
      
        for ($x = 0; $x < sizeof($a); $x++) {
            $var=$a[$x];
          
            
            $sql1=" SELECT * FROM `marks` HAVING `Judge ID`= '{$var}'  ";
    
            $result1 = $conn->query($sql1) or die($conn->error);
            
            
            $mark1=array();
            
            $team=array();
           
    if ( $result1->num_rows >0) {
        
        
        while($row = $result1->fetch_assoc()) {
         
            array_push($mark1,$row['Marks']);
            array_push($team,$row['Team ID']);
        }
    }
    if(sizeof($mark1)>0){
        $maxelement=max($mark1);
    }
   
    for ($x1 = 0; $x1 < sizeof($mark1); $x1++) {
        
        $per=($mark1[$x1]*100)/$maxelement;
        $sql2="INSERT INTO `per` (`Judge ID`, `Team ID`, `Marks`) VALUES ('{$a[$x]}', '{$team[$x1]}', $per)";

        // $result2 = $conn->query($sql2);
        $result2 = $conn->query($sql2) or die($conn->error);

     }


     
           
          }
          $on=1;
        }
        
   
?>
<?php
include 'connection.php';
$sqq=" DELETE from `result1`";
$resq=$conn->query($sqq);
$sql=" SELECT `Team ID` from marks ";
$result = $conn->query($sql);
$a=array();
$avgper=array();
if ($result->num_rows > 0) {
        
    while($row = $result->fetch_assoc()) {
       
   
        array_push($a, $row['Team ID']);

    }
    
}
$a=array_unique($a);

foreach($a as $key){
    $avg=array();
    $avg1=array();
    $var=$key;
    $ma=0;
    $sql1=" SELECT * FROM `per` HAVING `Team ID`= '{$var}'  ";
    $result1= $conn->query($sql1) or die($conn->error);
    if ($result1->num_rows > 0) {
        
        while($row = $result1->fetch_assoc()) {
            
           
            array_push($avg, $row['Marks']);
    
        }
        
    }
    rsort($avg);
    $sql2=" SELECT `Domain` , `Project Type` from student where `Team Id`='{$var}'";
    $result2= $conn->query($sql2) or die($conn->error);
    $rrrr=sizeof($avg);
    $sql3=" SELECT `Marks` from marks where `Team Id`='{$var}' ";
    $result3= $conn->query($sql3) or die($conn->error);
    if ($result3->num_rows > 0) {
        
        while($row = $result3->fetch_assoc()) {
            
           
       
            array_push($avg1, $row['Marks']);
    
        }
        
    }
    rsort($avg1);
    if($rrrr>1){
        $rrr=($avg[0]+$avg[1])/2;
        $rrrrr=($avg1[0]+$avg1[1])/2;
    }
    else if($rrrr==1){
        $rrr=$avg[0];
        $rrrrr=($avg1[0])/1;
    }
    else{
        $rrr=0;
        $rrrrr=0;
    }
    
    if ($result2->num_rows > 0) {
        
        while($row = $result2->fetch_assoc()) {
            $sql4="INSERT INTO `result1` (`Team ID`, `Domain`, `ProjectT`, `Aveper`,`frequency`) VALUES ('{$var}', '{$row['Domain']}', '{$row['Project Type']}', $rrr,$rrrrr)";
            $result4= $conn->query($sql4) or die($conn->error);
    
        }
        
    }


}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>INC</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Merriweather:wght@300&family=Poppins:wght@100&display=swap" rel="stylesheet">
  </head>
  <body>
    <script src="index.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <div class="reveal" style="font-size: 40px;"><span>RESULT PORTAL</span></div>
    <br>
    <br>
    <button onclick="location.href = 'http://localhost/Impetous/winner.php'; " type="button">Winners</button>
    <button onclick="location.href = 'http://localhost/Impetous/dresult.php'; " type="button">Domain</button>
    <button onclick="location.href = 'http://localhost/Impetous/opensoftware.php'; " type="button">Open Software</button>
    <button onclick="location.href = 'http://localhost/Impetous/openhardware.php'; " type="button">Open Hardware</button>
    
  </body>
</html>