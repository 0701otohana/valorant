<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/compleat.css') }}" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登録完了</title>
</head>
<body class="text-center">
    <img class="logo" src="/img/logo_riot.png">
        <div class="title-box3">
            <div class="title-box3-title">登録完了画面</div>
            <div class="form-complete">
                <h1 class="h3 mb-3 font-weight-normal">登録が完了しました。</h1>
                <div>
                    <form method="POST" action="{{ ('logout') }}">
                    @csrf
                    <input type="submit" value='ログイン画面へ' class="btn_03">
                    </form>
                </div>
                <a class="back" href="{{ url('/main') }}">ホームに戻る</a>
            </div>
        </div>
</body>
</html>