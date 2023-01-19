<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新規登録</title>
</head>
<body class="text-center">
    <img class="logo" src="/img/logo_riot.png">
        <div class="title-box3">
            <div class="title-box3-title">新規登録画面</div>
            <form class="form-signup" method="POST" action="{{ route('register') }}">
            @csrf 
                <h1 class="h3 mb-3 font-weight-normal">アカウントを作成</h1>
                    <label for="inputEmail" class="sr-only">Riot ID(Email address)</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Riot ID (Email)" autofocus>
                    @if ($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                    @if ($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                    @endif
                    <div class="API-wrapper"><div>API</div><div>API</div><div>API</div></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">新規登録</button>
                    <a class="back" href="{{ url('/main') }}">ホームに戻る</a>
            </form>
        </div>
</body>
</html>