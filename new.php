<?php 
include_once '2/new.php';
?>

<!DOCTYPE html>


<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php

    $sql ="SELECT * FROM motor;";
    $result + mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
             echo $row['base'] . "<br>";
         } {
            // code...
        }
    }

   ?>

</body>
</html>
