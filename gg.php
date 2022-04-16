<?php
    include "connection.php";
    $on=0;
    echo $on;
    while($on<1){
    $sql=" SELECT `Judge ID` FROM `judge2` ";
    
    $result = $conn->query($sql);
    $a=array();
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
           
            array_push($a,$row['Judge ID']);
        }
        
        
        }
      
        for ($x = 0; $x < 2; $x++) {
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
   $maxelement=max($mark1);
    for ($x1 = 0; $x1 < sizeof($mark1); $x1++) {
        
        $per=($mark1[$x1]*100)/$maxelement;
        $sql2="INSERT INTO `per` (`Judge ID`, `Team ID`, `Percentile`) VALUES ('{$a[$x]}', '{$team[$x1]}', $per)";

        // $result2 = $conn->query($sql2);
        $result2 = $conn->query($sql2) or die($conn->error);

     }


     
           
          }
          $on=1;
        }
        echo $on;
   
?>
