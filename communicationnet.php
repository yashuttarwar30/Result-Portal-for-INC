<?php
 include 'connection.php';
 include 'navbar.php';
 $sql="SELECT * FROM `result1` WHERE `Domain`='Communication Networks' ORDER BY `result1`.`Aveper` DESC";
 $result = $conn->query($sql) or die($conn->error);
$a=array();
 if ($result->num_rows > 0) {
     
    while($row = $result->fetch_assoc()) {
        
            array_push($a,$row['Team ID']) ;
        }
      
    
}
if(sizeof($a)<3){
    for($i=0;$i<sizeof($a);$i++){ 
        echo $a[$i];
    }

}
else{
    for($i=0;$i<3;$i++){ 
        echo $a[$i];
    }

}

?>