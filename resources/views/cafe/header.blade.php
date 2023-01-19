
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="app" v-on="click: closeMenu">
    <div class="alert">
        <a href="#">新型コロナウイルスに対する取り組みの最新情報をご案内</a>
    </div>
    <header>
        <h1 class="concept">あなたの<br>好きな空間を作る。</h1>
        <nav v-class="motion: position > 50">
            <div class='logo'><a href="{{ url('/cafe') }}"><img src="img/logo.png" alt='Cafe'></a></div>
            <div class='g_nav'>
                <div class='menu _click' v-on="click: toIntro" v-transition>はじめに</div>
                <div class='menu _click' v-on="click: toExp" v-transition>体験</div>
                <div class='menu'><a href="{{ url('/contact') }}">お問い合わせ</a></div>
            </div>
            <div class='sign'>
                <!-- <div class='signup'>登録</div> -->
                <div class='signin _click' v-on="click: openModal">サインイン</div>
                <div class='sp _click' v-on="click: spMenu=!spMenu"><img src="img/menu.png" alt="スマホメニュー"></div>
                <div class='sp_nav' v-class="sp_nav_motion: position > 50" v-if="spMenu">
                    <div class='sp_signin _click' v-on="click: openModal">サインイン</div>
                    <div class='sp_menu _click' v-on="click: toIntro" v-transition>はじめに</div>
                    <div class='sp_menu _click' v-on="click: toExp" v-transition>体験</div>
                    <div class='sp_menu'><a href="{{ url('/contact') }}">お問い合わせ</a></div>
                </div>
            </div>
        </nav>
    </header>

</body>
</html>