<?php
    session_start();
    echo $_SESSION['join']['nick_name'];
    echo '<br>';
    echo $_POST['nick_name'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Twitter風ひとこと掲示版</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
  <div id="wrap">
    <div id="head">
      <h1>Seed SNS</h1>
    </div>
    <div id="content">
      <!-- 教科書のコード -->
    </div>
  </div>
</body>
</html>
