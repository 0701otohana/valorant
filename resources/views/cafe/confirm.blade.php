<?php
//if (empty($_SERVER["HTTP_REFERER"])) {
    //header('Location: contact.php');
    //exit();
//}
  
session_start();

//入力画面からのアクセス出なければ戻す
//if (!isset($_SESSION['form'])) {
    //header('Location: contact.php');
    //exit();
//} else {
    //$post = $_SESSION['form'];
//}
//require_once('dbc.php');

    //$name = $post['name'];
    //$kana = $post['kana'];
    //$tel = $post['tel'];
    //$email = $post['email'];
    //$body = $post['body'];

    //try{
        //$pdo->beginTransaction();

        // INSERT文を変数に格納
        //$sql = "INSERT INTO contacts (name,  kana, tel, email, body, created_at) VALUES (:name, :kana, :tel, :email, :body, now())";
        //挿入する値は空のままSQL実行の準備
        //$stmt = $pdo->prepare($sql);
        // 挿入する値を配列に格納
        //$params = array(':name' => $name, ':kana' => $kana, ':tel' => $tel, 'email' => $email, 'body' => $body);
        
        //$stmt->bindParam( ':id', $id,  PDO::PARAM_INT);
        //$stmt->bindParam( ':name', $name, PDO::PARAM_STR);
        //$stmt->bindParam( ':kana', $kana, PDO::PARAM_STR);
        //$stmt->bindParam( ':tel', $tel, PDO::PARAM_STR);
        //$stmt->bindParam( ':email', $email, PDO::PARAM_STR);
        //$stmt->bindParam( ':body', $body, PDO::PARAM_STR);
        //$stmt->execute($params);

        // コミット
        //if( $stmt ) {
            //$pdo->commit();
        //}
       //} catch(PDOException $e) {
        //エラーメッセージを出力
            //echo $e->getMessage();
            //$pdo->rollBack();
        //}finally {
            //$pdo = null;
        //}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lesson Sample Site</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
		<form action="{{ route('complete') }}" method="post">
        <p>下記の内容をご確認の上送信ボタンを押してください</p>
        <p>内容を訂正する場合は戻るを押してください。</p>
		<dl class="confirm">
        {{ csrf_field() }}
		{{ method_field('POST') }}
            <dt>氏名</dt>
            <dd>{{ $inputs['name'] }}
            <input type="hidden" name="name" value="{{ $inputs['name'] }}">
            </dd>
            <dt>フリガナ</dt>
            <dd>{{ $inputs['kana'] }}
			<input type="hidden" name="kana" value="{{ $inputs['kana'] }}">
            </dd>
            <dt>電話番号</dt>
            <dd>{{ $inputs['tel'] }}
            <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
            </dd>
            <dt>メールアドレス</dt>
            <dd>{{ $inputs['email'] }}
            <input type="hidden" name="email" value="{{ $inputs['email'] }}">
            </dd>
            <dt>お問い合わせ内容</dt>
            <dd>{{ $inputs['body'] }}
            <input type="hidden" name="body" value="{{ $inputs['body'] }}">
			<dd class="confirm_btn">
            <button type="submit">送　信</button>
            <a href="{{ url('/contact') }}">戻　る

</section>

@include('cafe.footer');

<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.5/vue.min.js"></script>
<script type="text/javascript" src="./js/script.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>
</html>