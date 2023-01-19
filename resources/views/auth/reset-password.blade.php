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
            <form class="form-ResetPassWord" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <h1 class="h3 mb-3 font-weight-normal">新しくパスワードを設定してください</h1> 
                <div class="block">
                    <x-jet-label for="email" class="acount" value="{{ __('対象アカウント') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                </div>               
                @error('email')
                    <span class="error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror         
                <div class="col-md-6">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password"></br>
                    @error('password')
                        <span class="error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-6">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Reset Password') }}</button>
                    <a class="back" href="{{ url('/main') }}">ホームに戻る</a>
            </form>
        </div>
</body>
</html>