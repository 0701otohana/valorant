<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lesson Sample Site</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="app" v-on="click: closeMenu">
    <header class="contact">
        <nav class="motion">
            <div class='logo'><a href="{{ url('/cafe') }}"><img src="img/logo.png" alt='Cafe'></a></div>
            <div class='g_nav'>
                <div class='menu'><a href="index.php#cafe_intro">はじめに</a></div>
                <div class='menu'><a href="index.php#cafe_exp">体験</a></div>
                <div class='menu'><a href="{{ url('/contact') }}">お問い合わせ</a></div>
            </div>
            <div class='sign'>
                <!-- <div class='signup'>登録</div> -->
                <div class='signin _click' v-on="click: openModal">サインイン</div>
                <div class='sp _click' v-on="click: spMenu=!spMenu"><img src="img/menu.png" alt="スマホメニュー"></div>
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

<section>
    <div class="contact_box">
        <h2>お問い合わせ</h2>
        <div class="complete_msg">
            <p>お問い合わせ頂きありがとうございます。</p>
            <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
            <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
            <a href="{{ url('/cafe') }}">トップへ戻る</a>
        </div>
    </div>
</section>

@include('cafe.footer');

<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.5/vue.min.js"></script>
<script type="text/javascript" src="./js/script.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>