
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理者ログイン画面</title>
</head>
<body class="text-center">
    <img class="logo" src="/img/logo_riot.png">
        <div class="title-box3">
            <div class="title-box3-title">管理者ログインフォーム</div>
            <form class="form-Login" method="POST" action="{{ ('admin.login') }}">
            @csrf
                <h1 class="h3 mb-3 font-weight-normal">管理者ログイン画面</h1>
                    <label for="inputEmail" class="sr-only">Riot ID(Email address)</label>
                    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="管理者 ID (Email)" autofocus value="{{ old('email') }}">
                    <label for="inputPassword" class="sr-only">Password</label>
                    @if ($errors->has('email'))
                        <div class="error">管理者として{{ $errors->first('email') }}</div>
                    @endif
                    @if ($errors->has('login_errror'))
                        <div class="error">{{ $errors->first('login_errror') }}</div>
                    @endif
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                    @endif
                    <div class="API-wrapper"><div>API</div><div>API</div><div>API</div></div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-bottom: 30px;">ログイン</button>
                    <a class="back" href="{{ url('/main') }}">ホームに戻る</a>
            </form>
        </div>
</body>
</html>