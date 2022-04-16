<?php
include 'connection.php';
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
print_r($a);
foreach($a as $key){
    $avg=array();
   
    $var=$key;
    $ma=0;
    $sql1=" SELECT * FROM `per` HAVING `Team ID`= '{$var}'  ";
    $result1= $conn->query($sql1) or die($conn->error);
    if ($result1->num_rows > 0) {
        
        while($row = $result1->fetch_assoc()) {
           $ma=$ma+$row['Marks'];
       
            array_push($avg, $row['Marks']);
    
        }
        
    }
    $sql2=" SELECT `Domain` , `Project Type` from student where `Team Id`='{$var}'";
    $result2= $conn->query($sql2) or die($conn->error);
    $rrr=$ma/sizeof($avg);
    if ($result2->num_rows > 0) {
        
        while($row = $result2->fetch_assoc()) {
            $sql4="INSERT INTO `result1` (`Team ID`, `Domain`, `ProjectT`, `Aveper`) VALUES ('{$var}', '{$row['Domain']}', '{$row['Project Type']}', $rrr)";
            $result4= $conn->query($sql4) or die($conn->error);
    
        }
        
    }


}
print_r($avgper);


?>