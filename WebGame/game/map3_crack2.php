<?php
  session_start();
  $_SESSION['life']--;
  if ($_SESSION['life'] == 0){
    Header("Location:gameover.html");
  }
?>

<!DOCTYPE html>
<html lang= "ko">
<head>
  <meta charset="utf-8">
  <title>똘망똘망 다람이의 모험</title>
  <style>
    div {left:0; right:0; margin:auto; font-size: 25px;}
    table {width:500px; height:500px; margin:auto; border:2px solid; border-collapse:collapse; table-layout:fixed;}
    td {border:2px solid black; line-height:0; text-align: center;}
    img {width:100px; height:100px;}
    button {width:100px; height:50px; font-size:20px;}
    .info {width:500px; margin-top:50px;}
    .btn {width:300px;}
    #left {float:left;}
    #right {float:right;}
  </style>
</head>

<body>

  <iframe src="../source/silence.mp3" allow="autoplay" id="audio" style="display:none;"></iframe>
  <audio id="audio" autoplay controls>
    <source src="../source/bgm.mp3">
  </audio>

  <div class = "info">
    <span id = "left">남은 생명: <?php echo $_SESSION['life']; ?></span>
    <span id = "right">맵 3</span>
    <br><br>
  </div>

  <table>
    <tr>
      <td><img src = "../source/grass.JPG"></td>
      <td><img src = "../source/grass.JPG"></td>
      <td><img src = "../source/grass.JPG"></td>
      <td><img src = "../source/dotori.JPG"></td>
    </tr>
    <tr>
      <td><img src = "../source/crack.JPG"></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td><img src = "../source/grass.JPG"></td>
      <td></td>
      <td><img src = "../source/grass.JPG"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td><img src = "../source/scare.JPG"></td>
    </tr>
  </table>

  <div class="btn" style="text-align:center;">
    <br>
    구멍에 빠져버렸어!<br><br>
    <button type ="button" onclick ="history.back()"> 뒤로가기 </button>
  </div>

</body>
</html>
