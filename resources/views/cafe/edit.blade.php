<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集</title>
</head>

<body id="app" v-on="click: closeMenu">
    <header class="contact">
        <nav class="motion">
        <div class='logo'><a href="{{ url('/cafe') }}"><img src="{{ asset('img/logo.png') }}" alt='Cafe'></a></div>
            <div class='g_nav'>
                <div class='menu'><a href="index.php#cafe_intro">はじめに</a></div>
                <div class='menu'><a href="index.php#cafe_exp">体験</a></div>
                <div class='menu'><a href="{{ url('/contact') }}">お問い合わせ</a></div>
            </div>
            <div class='sign'>
                <!-- <div class='signup'>登録</div> -->
                <div class='signin _click' v-on="click: openModal">サインイン</div>
                <div class='sp _click' v-on="click: spMenu=!spMenu"><img src="{{ asset('img/menu.png') }}" alt="スマホメニュー"></div>
                <div class='sp_nav sp_nav_motion' v-if="spMenu">
                    <div class='sp_signin _click' v-on="click: openModal">サインイン</div>
                    <div class='sp_menu _click'><a href="index.php#cafe_intro">はじめに</a></div>
                    <div class='sp_menu _click'><a href="index.php#cafe_exp">体験</a></div>
                    <div class='sp_menu'><a href="{{ url('/contact') }}">お問い合わせ</a></div>
                </div>
            </div>
        </nav>
    </header>
    <open-modal v-show="showContent" v-on="click: closeModal"></open-modal>

		<div class ="edit">
            <div class ="contact_box">
            <h2 class="edit_page">編集画面</h2>
                <div class="contact-form">
                    <form action="{{ route ('update',['id' => $data->id ]) }}" method="post" id ="form">
                        @csrf
                        @method('POST')
                            <input type="hidden" name="id" value="{{ $data->id }}">
                        <p>
                            <label>氏名</label>
                            <div class="is-error-name"></div>
                            @if ($errors->has('name'))
                            <span>{{ $errors->first('name') }}</span>
                            @endif
                            <input type="text" name="name" id="name" value="{{ $data->name }}">
                        </p>
                        <p>
                            <label>フリガナ</label>
                            <div class="is-error-kana"></div>
                            @if ($errors->has('kana'))
                            <span>{{ $errors->first('kana') }}</span>
                            @endif
                            <input type="text" name="kana" value="{{ $data->kana }}">
                        </p>
                        <p>
                            <label>電話番号</label>
                            <div class="is-error-tel"></div>
                            @if ($errors->has('tel'))
                            <span>{{ $errors->first('tel') }}</span>
                            @endif
                            <input type="text" name="tel" value="{{ $data->tel }}">
                        </p>
                        <p>
                            <label>メールアドレス</label>
                            <div class="is-error-email"></div>
                            @if ($errors->has('email'))
                            <span>{{ $errors->first('email') }}</span>
                            @endif
                            <input type="text" name="email" value="{{ $data->email }}">
                        </p>
                        <p>
                            <label>お問い合わせ内容</label>
                            <div class="is-error-body"></div>
                            @if ($errors->has('body'))
                            <span>{{ $errors->first('body') }}</span>
                            @endif
                            <textarea id="message" name ="body">{{ $data->body }}</textarea>
                           
                        </p>

                        <dd class="edit_btn">
                        <button type="submit">送　信</button>
                        <a href="{{ url('/contact') }}" ><button type="button" class="edit_back">戻　る</dd></button></a>

                    </form>
                </div>
            </div>
        </div>

        @include('cafe.footer')

<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.5/vue.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>
</html>