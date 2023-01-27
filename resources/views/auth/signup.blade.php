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
                @if (session('login_error'))
                    <div class="error">
                    {{ session('login_error') }}
                    </div>
                @endif
                    <label for="inputEmail" class="sr-only">Riot ID(Email address)</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Riot ID (Email)" autocomplete="email" value="{{ old('email') }}" value="{{ 'email' }}"/>
                        <div class="error">{{ $errors->first('email') }}</div>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                    @if ($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                    @endif
                    <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Password">

                    <div class="API-wrapper">
                        <div class="form-group row mt-2">
                            <div class="col-md-8 offset-md-4">
                                <a href>
                                    <img src="\img\ダウンロード.png">
                                </a>
                            </div>
                        </div>
                        <a href><img src="/img/apple_logo_PNG19667.png" style="width: 30px;"></a>
                        <a href><img src="/img/twitter.png" style="width: 30px;"></a>
                    </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">新規登録</button>
                    <a class="back" href="{{ url('/main') }}">ホームに戻る</a>
            </form>
        </div>
</body>
</html>