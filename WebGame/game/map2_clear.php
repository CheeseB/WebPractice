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
    .btn {width:500px;}
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
    <span id = "right">맵 2</span>
    <br><br>
  </div>

  <table>
    <tr>
      <td><img src = "../source/rock.JPG"></td>
      <td><img src = "../source/rock.JPG"></td>
      <td><img src = "../source/rock.JPG"></td>
      <td></td>
    </tr>
    <tr>
      <td><img src = "../source/lion.JPG"></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td><img src = "../source/rock.JPG"></td>
      <td></td>
      <td><img src = "../source/rock.JPG"></td>
    </tr>
    <tr>
      <td><img src = "../source/clear.JPG"></td>
      <td></td>
      <td></td>
      <td><img src = "../source/rock.JPG"></td>
    </tr>
  </table>

  <div class="btn" style="text-align:center;">
    <br>
    잘했어! 이제 곧 찾을 것 같아! <br><br>
    <button type ="button" onclick ="location.href = 'map3_1.php'"> 다음 맵으로 </button>
  </div>

</body>
</html>
