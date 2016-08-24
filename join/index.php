<?php
    // セッションを使用する場合は必ずこの記述が必要
    session_start();

    // エラーメッセージを格納するための配列を用意
    $error = array();

    // 「入力内容を確認する」ボタンが押された時に実行する
    // もし、ボタンが押されたら
    // もし、$_POSTデータが空じゃなければ
    if (!empty($_POST)) { // 定型文
        // エラー項目の確認 (バリデーション)
        if ($_POST['nick_name'] == '') {
            $error['nick_name'] = 'blank';
        }

        if ($_POST['email'] == '') {
            $error['email'] = 'blank';
        }

        if (strlen($_POST['password']) < 4) {
            $error['password'] = 'length';
        }

        if ($_POST['password'] == '') {
            $error['password'] = 'blank';
        }

        // エラーが起きなければ処理を実行
        // もし$errorが空だったら
        if (empty($error)) {
            // セッションに情報を保存する (情報 = 入力されたデータ)
            $_SESSION['join'] = $_POST;
            // データの保存
            // $_SESSION['キー'] = 値;
            // データの表示
            // echo $_SESSION['キー'];

            // 次の画面へ遷移する
            header('Location: check.php');
            exit();
        }
    }
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
      <p>次のフォームに必須事項をご記入ください。</p>
      <form action="" method="post" enctype="multipart/form-data">
        <dl>
          <dt>ニックネーム<span class="required">必須</span></dt>
          <dd><input type="text" name="nick_name" size="35" maxlength="255"></dd>
          <dt>メールアドレス<span class="required">必須</span></dt>
          <dd><input type="text" name="email" size="35" maxlength="255"></dd>
          <dt>パスワード<span class="required">必須</span></dt>
          <dd><input type="password" name="password" size="10" maxlength="20"></dd>
          <dt>写真など</dt>
          <dd><input type="file" name="image" size="35"></dd>
        </dl>
        <div><input type="submit" value="入力内容を確認する"></div>
      </form>
    </div>
  </div>
</body>
</html>
