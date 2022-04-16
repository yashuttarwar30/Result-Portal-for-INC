<html>
<head>
    <?php  include 'navbar.php'; ?>

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
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
    
<body>
<div class="display_table">
                 
                 <div class="center_div">
               <div class="table-responsive">
                    <table>
                    <thead>
                     <tr>
                     <th>Winner</th>
                      <th>Runner Up</th>
                      <th>Second Runner Up</th>
                       
                    </tr>
                    </thead>
                   <tbody>
                  </div>

                  <?php
 include 'connection.php';

 $sql="SELECT * FROM `result1` WHERE `Domain`='DIGITAL / IMAGE/ SPEECH / VIDEO PROCESSING' ORDER BY `result1`.`Aveper` DESC , `result1`.`frequency` DESC";
 $result = $conn->query($sql) or die($conn->error);
$a=array();
 if ($result->num_rows > 0) {
     
    while($row = $result->fetch_assoc()) {
        
            array_push($a,$row['Team ID']) ;
        }
      
    
}
if(sizeof($a)<3){
    for($i=0;$i<sizeof($a);$i++){ 
        ?>
        <td><?php  echo $a[$i]; ?></td><?php
        
       
       
         
           
    }
    ?> </tr>
    </tbody>
              </table>
        </div>
        </div><?php
    for($i=0;$i<3;$i++){ ?>
    <div class="center_div">
               <div class="table-responsive">
                    <table>
                    <tbody>
                        <?php
        
         $sqll =" SELECT * FROM `student` WHERE `Team ID` LIKE '{$a[$i]}'";
         $resultl = $conn->query($sqll);
         if ($result->num_rows > 0) {
            // output data of each row
            while($row = $resultl->fetch_assoc()) {
              ?>
              
              <tr>
              <td><?php  echo $row['Team ID']; ?></td>
              <td><?php echo $row['Title']; ?></td>
              <td><?php echo $row['Domain']; ?></td>
              <td><?php echo $row['Project Type']; ?></td>
              <td><?php echo $row['College']; ?></td>
              <td><?php echo $row['Name of Student']; ?></td>
              <td><?php echo $row['Email ID']; ?></td>
              <td><?php echo $row['Mobile No']; ?></td>
              
            
            
              
            <?php
            }
          } 
          else {
            echo "0 results";
          } 
          ?>
          </tr>
            </tbody>
              </table>
        </div>
        </div>
          <?php
        
           
    }

}
else{
    ?><tr><?php
    for($i=0;$i<3;$i++){ 
        ?>
         <td><?php  echo $a[$i]; ?></td>
         
         <?php
         
           
    }
    ?> </tr>
    </tbody>
              </table>
        </div>
        </div><?php
    for($i=0;$i<3;$i++){ ?>
    <div class="center_div">
               <div class="table-responsive">
                    <table>
                    <tbody>
                        <?php
        
         $sqll =" SELECT * FROM `student` WHERE `Team ID` LIKE '{$a[$i]}'";
         $resultl = $conn->query($sqll);
         if ($result->num_rows > 0) {
            // output data of each row
            while($row = $resultl->fetch_assoc()) {
              ?>
              
              <tr>
              <td><?php  echo $row['Team ID']; ?></td>
              <td><?php echo $row['Title']; ?></td>
              <td><?php echo $row['Domain']; ?></td>
              <td><?php echo $row['Project Type']; ?></td>
              <td><?php echo $row['College']; ?></td>
              <td><?php echo $row['Name of Student']; ?></td>
              <td><?php echo $row['Email ID']; ?></td>
              <td><?php echo $row['Mobile No']; ?></td>
              
            
            
              
            <?php
            }
          } 
          else {
            echo "0 results";
          } 
          ?>
          </tr>
            </tbody>
              </table>
        </div>
        </div>
          <?php
        
           
    }

}?>
 </tbody>
        </table>
        </div>
        </div>

</html>





