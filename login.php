<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>健康診断データ管理 - ログイン</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
    }

    .navbar {
      background-color: #f8f9fa !important;
      border-bottom: 1px solid #dddddd;
    }

    .navbar-brand {
      color: #333333;
      font-weight: bold;
    }

    .form-control {
      margin-bottom: 20px;
    }

    .btn-login {
      background-color: #007bff;
      border: none;
    }

    .btn-login:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">健康診断データ管理</a>
      </div>
    </nav>
  </header>

  <div class="container">
    <h2 class="text-center mb-4">ログイン</h2>
    <form name="form1" action="login_act.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="lid" placeholder="ID">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="lpw" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary btn-block btn-login">ログイン</button>
    </form>
  </div>

</body>

</html>
