<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>健康診断データ管理</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }

        .jumbotron {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: #333333;
            font-weight: bold;
        }

        .navbar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dddddd;
        }
    </style>
</head>

<body>

    <!-- ナビゲーションバー -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="select.php">健康診断データ管理</a>
        </div>
    </nav>

    <!-- メインコンテンツ -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="jumbotron">
                    <form method="POST" action="insert.php">
                        <fieldset>
                            <legend class="text-center">健康診断データ入力フォーム</legend>
                            <div class="form-group">
                                <label for="name">名前</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="age">年齢</label>
                                <input type="text" class="form-control" id="age" name="age">
                            </div>
                            <div class="form-group">
                                <label for="naiyou">診断結果</label>
                                <textarea class="form-control" id="naiyou" name="naiyou" rows="4"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">送信</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
