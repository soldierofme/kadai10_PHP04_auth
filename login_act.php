<?php
//最初にSESSIONを開始！！ココ大事！！
session_start();

//POST値
$lid = $_POST["lid"]; //lid
$lpw = $_POST["lpw"]; //lpw

//1.  DB接続します
include("funcs.php");
$pdo = db_conn();

//2. データ登録SQL作成
//* PasswordがHash化→条件はlidのみ！！
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid=:lid AND life_flg=0");
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if ($status == false) {
  sql_error($stmt);
}

//4. 抽出データ数を取得
$val = $stmt->fetch();         //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()


//5.該当１レコードがあればSESSIONに値を代入
//入力したPasswordと暗号化されたPasswordを比較！[戻り値：true,false]
$pw = password_verify($lpw, $val["lpw"]); //$lpw = password_hash($lpw, PASSWORD_DEFAULT);   //パスワードハッシュ化
if ($pw) {
  //Login成功時
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  //Login成功時（select.phpへ）
  redirect("select.php");
} else {
  //Login失敗時(login.phpへ)
  redirect("login.php");
}

exit();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>健康診断データ一覧</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: #ffffff;
      border-bottom: 1px solid #dddddd;
    }

    .navbar-brand {
      color: #333333;
      font-weight: bold;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      border-bottom: 1px solid #dddddd;
      padding: 12px 15px;
      text-align: left;
    }

    th {
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
    }

    tr {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ddd;
    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">健康診断管理</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="logout.php">ログアウト</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <h2>健康診断データ一覧</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>名前</th>
          <th>削除</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // 修正点: 適切なデータを取得する必要があります
        // 以下はサンプルコードです。実際のデータを適切に取得してください。
        $values = array(
          array("id" => 1, "name" => "テストユーザー1"),
          array("id" => 2, "name" => "テストユーザー2"),
          array("id" => 3, "name" => "テストユーザー3"),
        );
        foreach ($values as $v) { ?>
          <tr>
            <td><?= $v["id"] ?></td>
            <td><a href="detail.php?id=<?= $v["id"] ?>"><?= $v["name"] ?></a></td>
            <td><a href="delete.php?id=<?= $v["id"] ?>">削除</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</body>

</html>
