<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  .container {
    display: flex;
    justify-content: space-between;
    background-color: #f0f0f0;
    padding: 20px;
  }

  .left-side {
    width: 50%;
    background-color: #ffffff;
    padding: 20px;
  }

  .right-side {
  width: 50%;
  background-color: #ffffff;
  padding: 20px;
  display: flex;
  justify-content: flex-end; /* แก้ไขเพื่อชิดขวา */
  align-items: center;
}

  img {
    max-width: 100%;
    max-height: 300px; /* ปรับความสูงสูงสุดของรูปภาพ */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }
</style>
</head>
<body>

<div class="container">
  <div class="left-side">
    <h2>ข้อความซ้าย</h2>
    <p>นี่คือเนื้อความที่อยู่ในฝั่งซ้าย</p>
  </div>
  
  <div class="right-side">
    <img src="../krajud/picture/r1.png" alt="รูปภาพขวา">
  </div>
</div>


</body>
</html>
