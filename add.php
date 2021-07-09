<!DOCTYPE html>
<html>
    <head>
        <meta charest="UTF-8">
</head>
<body>
    <?php
    $base $_POST["base"];
    $shoulder $_POST["shoulder"];
    $elbow $_POST["elbow"];
    $wrist $_POST["wrist"];
    $gripper $_POST["gripper"];
    $engine $_POST["engine"];
    $conn =new mysqli("localhost","root"," ","motor")
    $stmt=$conn->prepare("insert into iot_info (base,shoulder,elbow,wrist,gripper,engine) values(?,?,?,?,?,?)");
    $stmt ->bind_param("iiiiii",$base,$shoulder,$elbow,$wrist,$gripper,$engine);
    $stmt ->execute();
    echo "Done";
    ?>
</body>
</html>
