<?php
session_cache_limiter('none');
session_start();
$error = [];



//require_once('dbc.php');

    //$sql = "SELECT * FROM contacts";
 
    //$result = $pdo -> query($sql);
     
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
			<form action="{{ route('confirm') }}" method="post" name="form1" onSubmit="return check()" novalidate>
        @csrf
				@method('POST')
            <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
            <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
            <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
            <p><span class="required">*</span>は必須項目となります。</p>
			<dl>
          <dt><label for="name">氏名</label><span class="required">*</span></dt>
            @if ($errors->has('name'))
            <dd class="error">{{ $errors->first('name') }}</dd>
            @endif
          <dd>
            <input type="text" name="name" id="name" placeholder="山田太郎" value="{{ old('name') }}">
          </dd>

            <dt><label for="kana">フリガナ</label><span class="required">*</span></dt>
              @if ($errors->has('kana'))
              <dd class="error">{{ $errors->first('kana') }}</dd>
              @endif
          <dd>
            <input type="text" name="kana" id="kana" placeholder="ヤマダタロウ" value="{{ old('kana') }}">
          </dd>

            <dt><label for="tel">電話番号</label></dt>
              @if ($errors->has('tel'))
              <dd class="error">{{ $errors->first('tel') }}</dd>
              @endif
          <dd>
            <input type="text" name="tel" id="tel" placeholder="09012345678" value="{{ old('tel') }}">
          </dd>

            <dt><label for="email">メールアドレス</label><span class="required">*</span></dt>
              @if ($errors->has('email'))
              <dd class="error">{{ $errors->first('email') }}</dd>
              @endif
          <dd>
            <input type="text" name="email" id="email" placeholder="test@test.co.jp" value="{{ old('email' )}}">
          </dd>

          <h3><label for="body">お問い合わせ内容をご記入ください<span class="required">*</span></label></h3>
          <dl class="body">
          @if ($errors->has('body'))
          <dd class="error">{{ $errors->first('body') }}</dd>
          @endif
          <dd>
            <textarea name="body" id="body">{{ old('body') }}</textarea>
          </dd>
				<dd><button type="submit" id="submit">送　信</button></dd>
			</dl>
			</form>
        </div>
    </section>

    <table class="db_list" >
      <tr>
        <th>ID</th>
        <th>名前</th>
        <th>フリガナ</th>
        <th>電話番号</th>
        <th>メールアドレス</th>
        <th>お問い合わせ内容</th>
        <th>送信日</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
      @foreach($result as $row)
        <tr>
        <td> {{ $row->id }} </td>
        <td> {{ $row->name }} </td>
        <td> {{ $row->kana }} </td>
        <td> {{ $row->tel }} </td>
        <td> {{ $row->email }} </td>
        <td> {{ $row->body }} </td>
        <td> {{ $row->created_at }} </td>

        <td><button><a href="{{ route ('edit',['id' => $row->id ]) }}">編集</button></td>
        <td><button><a href="{{ route ('delete',['id' => $row->id ]) }}"onclick="return confirm('削除してもよろしいですか？')">削除</a></button></td>
        </tr>
        @endforeach
      </table>

      @include('cafe.footer');

<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.5/vue.min.js"></script>
<script type="text/javascript" src="./js/script.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>
</html>