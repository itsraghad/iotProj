<!DOCTYPE html>
<html>
    <head>
    <meta charest="UTF-8">
</head>
<body>

<form action="add.php" method="post">
    name  <input type="text" name="base"><br/>
 type <input type="text" name="shoulder"><br/>
 <input type="text" name="elbow"><br/>
 <input type="text" name="wrist"><br/>
 <input type="text" name="gripper"><br/>
 <input type="text" name="engine"><br/>

 <input type="submit" >

</form>
 
<?php

$connection = new mysqli("localhost","root"," ","motor");
$stmt = $connection ->prepare(" select * from iot_info") ;
$stmt ->execute();

$result = $stmt->get_result();

echo "<table border='1'>" ;
    while($row=$result->fetch_assoc()){
    
        echo "<tr><td>".$row['base'].</td></tr>.$row['shoulder']."</td></tr>"
        "<tr><td>".$row['elbow'].</td></tr>.$row['wrist']."</td></tr>"
        "<tr><td>".$row['gripper'].</td></tr>.$row['engine']."</td></tr>"
    }
    echo "</table>"
?>

</body>
</html>
