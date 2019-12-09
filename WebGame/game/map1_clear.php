<?php
  session_start();
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
    button {width:130px; height:50px; font-size:20px;}
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
    <span id = "right">맵 1</span>
    <br><br>
  </div>

  <table>
    <tr>
      <td><img src = "../source/tree.JPG"></td>
      <td><img src = "../source/tree.JPG"></td>
      <td></td>
      <td><img src = "../source/clear.JPG"></td>
    </tr>
    <tr>
      <td><img src = "../source/tree.JPG"></td>
      <td></td>
      <td></td>
      <td><img src = "../source/tree.JPG"></td>
    </tr>
    <tr>
      <td><img src = "../source/tree.JPG"></td>
      <td></td>
      <td><img src = "../source/dog.JPG"></td>
      <td><img src = "../source/tree.JPG"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td><img src = "../source/tree.JPG"></td>
      <td><img src = "../source/tree.JPG"></td>
    </tr>
  </table>

  <div class="btn" style="text-align:center;">
    <br>
    잘했어! 조금만 더 가보자! <br><br>
    <button type ="button" onclick ="location.href = 'map2_1.php'"> 다음 맵으로 </button>
  </div>

</body>
</html>
