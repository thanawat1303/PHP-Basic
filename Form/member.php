<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBER</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])) {
            if( !empty($_POST['fullname']) && 
                !empty($_POST['email']) && 
                !empty($_POST['date']) && 
                !empty($_POST['gendar']) ) {
                    echo "ชื่อ-นามสกุล " . $_POST['fullname'] . "<br>";
                    echo "อีเมล " . $_POST['email'] . "<br>";
                    echo "วันเกิด " . $_POST['date'] . " ";
                    echo "เพศ " .$_POST['gendar'];
                }
            else {
                echo "Please enter not emply";
            }
        } else {
            echo "Someting error";
        }
    ?>
</body>
</html>