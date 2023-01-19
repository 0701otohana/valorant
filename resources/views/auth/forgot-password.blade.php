<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/foget.css') }}" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>パスワードリセット</title>
</head>
<body class="text-center">
    <img class="logo" src="/img/logo_riot.png">
        <div class="title-box3">
            <div class="title-box3-title">パスワードリセット</div>
            <form class="form-foget" method="POST" action="{{ ('/forgot-password') }}">
            @csrf 
                <h1 class="h3 mb-3 font-weight-normal">Riotに登録しているメールアドレスを入力してください</h1>
                    <label for="inputEmail" class="sr-only">Riot ID(Email address)</label>
                    <input type="Email" id="inputEmail" class="form-control" name="email" placeholder="Riot ID (Email)" autofocus>
                    @if ($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                    @if (session('status'))
                    <div class="sentemail">
                        {{ session('status') }}
                    </div>
                    @endif
                    <button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
                    <div class="Login"><a href="{{ ('/login') }}" class="btn_03">ログイン画面へ</a></div>
                    <a class="back" href="{{ ('/main') }}">ホームに戻る</a>
            </form>
            </form>
        </div>
</body>
</html>