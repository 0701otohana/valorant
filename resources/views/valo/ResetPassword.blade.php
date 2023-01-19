<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/ResetPassword.css') }}" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>パスワード再設定</title>
</head>
<body class="text-center">
    <img class="logo" src="/img/logo_riot.png">
        <div class="title-box3">
            <div class="title-box3-title">パスワード再設定</div>
            <form class="form-ResetPassWord" method="POST" action="{{ url('/complete') }}">
            @csrf
                <h1 class="h3 mb-3 font-weight-normal">新しくパスワードを設定してください</h1>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
                    <a class="back" href="{{ ('/main') }}">ホームに戻る</a>
            </form>
        </div>
</body>
</html>