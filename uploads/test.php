<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = '08_08';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM images";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
    </style>
</head>

<body>
    <div class="masonry">
        <?php
        $counter = 0;  // เพิ่มตัวแปรนับจำนวนรูปภาพ
        while ($row = $result->fetch_assoc()) {
            echo '<div class="grid">';
            echo '<img src="' . $row['file_path'] . '" alt="' . $row['name'] . '">';
            echo '</div>';

            $counter++;  // เพิ่มค่าตัวแปรนับ
            if ($counter >= 16) {  // เมื่อแสดงรูปภาพ 12 รูปให้หยุดการทำงาน
                break;
            }
        }
        ?>

    </div>


</body>

</html>