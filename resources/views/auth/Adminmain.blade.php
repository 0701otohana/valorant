<?php
  $btma = "ZETA";
  $btmb = "SG";
  $btmc = "PRX";
  $btmd = "DRX";
  $btme = "FAV";
  $btmf = "CR";
  $btmg = "DGW";
  $btmh = "user";
  $winer = "優勝";

  if(isset($_POST['btma'])){$btma = $_POST['btma'];}
  if(isset($_POST['btmb'])){$btmb = $_POST['btmb'];}
  if(isset($_POST['btmc'])){$btmc = $_POST['btmc'];}
  if(isset($_POST['btmd'])){$btmd = $_POST['btmd'];}
  if(isset($_POST['btme'])){$btme = $_POST['btme'];}
  if(isset($_POST['btmf'])){$btmf = $_POST['btmf'];}
  if(isset($_POST['btmg'])){$btmg = $_POST['btmg'];}
  if(isset($_POST['btmh'])){$btmh = $_POST['btmh'];}

  $checka = "";
  $checkb = "";
  $checkc = "";
  $checkd = "";
  $checke = "";
  $checkf = "";
  $checkg = "";
  $checkh = "";

  $btm1 = "";
  $btm2 = "";
  $btm3 = "";
  $btm4 = "";
  $btm5 = "";
  $btm6 = "";
  $btm7 = "";

  if(!empty($_POST['bt1'])) {
    if($_POST['bt1'] == "a") {
      $win1 = "#b121{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}\n";
      $checka = "checked";$btm1 = $btma;
    } elseif($_POST['bt1'] == "b") {
      $win1 = "#b122{border:2px solid #ffffff;border-top-color:#ff0000;border-right-color:#ff0000;border-left-color:#666666;border-bottom-color:#666666;}\n";
      $checkb = "checked";$btm1 = $btmb;
    }
  }

  if(!empty($_POST['bt2'])) {
    if($_POST['bt2'] == "c") {
      $win2 = "#b123{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}\n";
      $checkc = "checked";$btm2 = $btmc;
    } elseif($_POST['bt2'] == "d") {
      $win2 = "#b124{border:2px solid #ffffff;border-top-color:#ff0000;border-right-color:#ff0000;border-bottom-color:#666666;border-left-color:#666666;}\n";
      $checkd = "checked";$btm2 = $btmd;
    }
  }

  if(!empty($_POST['bt3'])) {
    if($_POST['bt3'] == "e") {
      $win3 = "#b125{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}\n";
      $checke = "checked";$btm3 = $btme;
    } elseif($_POST['bt3'] == "f") {
      $win3 = "#b126{border:2px solid #ffffff;border-top-color:#ff0000;border-right-color:#ff0000;border-bottom-color:#666666;border-left-color:#666666;}\n";
      $checkf = "checked";$btm3 = $btmf;
    }
  }

  if(!empty($_POST['bt4'])) {
    if($_POST['bt4'] == "g") {
      $win4 = "#b127{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}\n";
      $checkg = "checked";$btm4 = $btmg;
    } elseif($_POST['bt4'] == "h") {
      $win4 = "#b128{border:2px solid #ffffff;border-top-color:#ff0000;border-right-color:#ff0000;border-bottom-color:#666666;border-left-color:#666666;}\n";
      $checkh = "checked";$btm4 = $btmh;
    }
  }

  if(!empty($_POST['bt5'])) {
    if($_POST['bt5'] == "i") {
      if($btm1 == $btma) {
        $win5 = "#b113{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-right-color:#666666;}\n
                  #b114{border:2px solid #ffffff;border-top-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}";
        $checki = "checked";$btm5 = $btm1;
        } else {
        $win5 = "#b113{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-bottom-color:#ff0000;border-right-color:#666666;}\n
                  #b114{border:2px solid #ffffff;border-top-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}";
        $checki = "checked";$btm5 = $btm1;
        }
    } elseif($_POST['bt5'] == "j") {
        if($btm2 == $btmd) {
        $win5 = "#b115{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#666666;border-bottom-color:#666666;border-right-color:#666666;}\n
                #b116{border:2px solid #ffffff;border-top-color:#ff0000;border-right-color:#ff0000;border-left-color:#666666;}";
        $checkj = "checked";$btm5 = $btm2;
        } else {
        $win5 = "#b115{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#666666;border-bottom-color:#666666;border-right-color:#666666;}\n
                #b116{border:2px solid #ffffff;border-top-color:#ff0000;border-right-color:#ff0000;border-left-color:#666666;border-bottom-color:#ff0000;}";
        $checkj = "checked";$btm5 = $btm2;
        }
    }
  }

  if(!empty($_POST['bt6'])) {
    if($_POST['bt6'] == "k") {
      if($btm3 == $btme) {
        $win6 = "#b117{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-right-color:#666666;}\n
                #b118{border:2px solid #ffffff;border-top-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}";
        $checkk = "checked";$btm6 = $btm3;
        } else {
        $win6 = "#b117{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-bottom-color:#ff0000;border-right-color:#666666;}\n
                #b118{border:2px solid #ffffff;border-top-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}";
        $checkk = "checked";$btm6 = $btm3;
        }
    } elseif($_POST['bt6'] == "l") {
        if($btm4 == $btmg){
        $win6 = "#b119{border:2px solid #ffffff;border-top-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;border-left-color:#666666;}\n
                #b120{border:2px solid #ffffff;border-top-color:#ff0000;border-right-color:#ff0000;border-left-color:#666666;border-bottom-color:#ff0000;}";
        $checkl = "checked";$btm6 = $btm4;
        } else {
          $win6 = "#b119{border:2px solid #ffffff;border-top-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;border-left-color:#666666;}\n
                #b120{border:2px solid #ffffff;border-top-color:#ff0000;border-right-color:#ff0000;border-left-color:#666666;}";
        $checkl = "checked";$btm6 = $btm4;
        }
    }
  }


  if(!empty($_POST['bt7'])) {
    if($_POST['bt7'] == "m") {
      if($btm5 == $btma) {
          $win7 = "#b101{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}\n
                  #b102{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                  #b103{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                  #b104{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-left-color:#666666;border-right-color:#666666;}\n
                  #b109{border:2px solid #ffffff;border-right-color:#ff0000;border-bottom-color:#ff0000;border-left-color:#666666;border-top-color:#666666;}\n";
          $checkm = "checked";$btm7 = $btm5;$winer = "優勝：" . $btm5;
        } elseif($btm5 == $btmb) {
            $win7 = "#b101{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}\n
                  #b102{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                  #b103{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                  #b104{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-left-color:#666666;border-right-color:#666666;}\n
                  #b109{border:2px solid #ffffff;border-right-color:#ff0000;border-bottom-color:#ff0000;border-left-color:#666666;border-top-color:#666666;}\n";
            $checkm = "checked";$btm7 = $btm5;$winer = "優勝：" . $btm5;
        } elseif($btm5 == $btmc) {
            $win7 = "#b101{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}\n
                  #b102{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                  #b103{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                  #b104{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-left-color:#666666;border-right-color:#666666;}\n
                  #b109{border:2px solid #ffffff;border-right-color:#ff0000;border-bottom-color:#ffffff;border-left-color:#666666;border-top-color:#666666;}\n";
            $checkm = "checked";$btm7 = $btm5;$winer = "優勝：" . $btm5;
        } else {
            $win7 = "#b101{border:2px solid #ffffff;border-top-color:#ff0000;border-left-color:#ff0000;border-bottom-color:#666666;border-right-color:#666666;}\n
                  #b102{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                  #b103{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                  #b104{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-left-color:#666666;border-right-color:#666666;}\n
                  #b109{border:2px solid #ffffff;border-right-color:#ff0000;border-bottom-color:#ffffff;border-left-color:#666666;border-top-color:#666666;}\n";
            $checkm = "checked";$btm7 = $btm5;$winer = "優勝：" . $btm5;
        }

    } elseif($_POST['bt7'] == "n") {
        if($btm6 == $btme){
            $win7 = "#b105{border:2px solid #ffffff;border-top-color:#ff0000;border-bottom-color:#666666;border-left-color:#666666;border-right-color:#666666;}\n
                    #b106{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-left-color:#666666;border-right-color:#666666;}\n
                    #b107{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                    #b108{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#ff0000;}\n
                    #b112{border:2px solid #ffffff;border-left-color:#ff0000;border-top-color:#666666;border-bottom-color:#ffffff;border-right-color:#666666;}\n";
            $checkn = "checked";$btm7 = $btm6;$winer = "優勝：" . $btm6;
        } elseif($btm6 == $btmf) {
            $win7 = "#b105{border:2px solid #ffffff;border-top-color:#ff0000;border-bottom-color:#666666;border-left-color:#666666;border-right-color:#666666;}\n
                    #b106{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-left-color:#666666;border-right-color:#666666;}\n
                    #b107{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                    #b108{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#ff0000;}\n
                    #b112{border:2px solid #ffffff;border-left-color:#ff0000;border-top-color:#666666;border-bottom-color:#ffffff;border-right-color:#666666;}\n";
            $checkn = "checked";$btm7 = $btm6;$winer = "優勝：" . $btm6;
        } elseif($btm6 == $btmg) {
            $win7 = "#b105{border:2px solid #ffffff;border-top-color:#ff0000;border-bottom-color:#666666;border-left-color:#666666;border-right-color:#666666;}\n
                    #b106{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-left-color:#666666;border-right-color:#666666;}\n
                    #b107{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                    #b108{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#ff0000;}\n
                    #b112{border:2px solid #ffffff;border-left-color:#ff0000;border-top-color:#666666;border-bottom-color:#ff0000;border-right-color:#666666;}\n";
            $checkn = "checked";$btm7 = $btm6;$winer = "優勝：" . $btm6;
        } else {
            $win7 = "#b105{border:2px solid #ffffff;border-top-color:#ff0000;border-bottom-color:#666666;border-left-color:#666666;border-right-color:#666666;}\n
                      #b106{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-left-color:#666666;border-right-color:#666666;}\n
                      #b107{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#666666;}\n
                      #b108{border:2px solid #ffffff;border-bottom-color:#666666;border-top-color:#ff0000;border-right-color:#ff0000;}\n
                      #b112{border:2px solid #ffffff;border-left-color:#ff0000;border-top-color:#666666;border-bottom-color:#ff0000;border-right-color:#666666;}\n";
            $checkn = "checked";$btm7 = $btm6;$winer = "優勝：" . $btm6;
        }
    }
  }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Admin.css') }}" type="text/css" media="all">
    <title>管理者画面</title>
</head>
@include('auth.header')
<body>
<div id="nav-toggle">
    <div>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
  <aside id="sidebar">
      <nav id="global-nav">
          <ul>
              <p>MENU</p>
              <form method="POST" action="{{ route('admin.logout') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @csrf
                <input type="submit" value='ログアウト'>
              </form>
              <li><a class="js-btn" href="#sectio01">Game VALORANT</a></li>
              <li><a class="js-btn" href="#sectio02">大会概要</a></li>
              <li><a class="js-btn" href="#sectio03">大会日程</a></li>
              <p>配信プラットフォーム</p>
              <div class="youtube">
                  <li>
                  <a href="https://www.youtube.com/c/VALORANTjp">
                  <img src="/img/vct-youtube.2670ea0214.png">
                  <span>YouTube</span>
                  </a>
                  </li>
              </div>
              <div class="twitch">
                  <li>
                  <a href="https://www.twitch.tv/valorant_jpn">
                  <img src="/img/31-311115_go-back-images-for-twitch-logo-transparent-twitch.png">
                  <span>twitch</span>
                  </a>
                  </li>
              </div>
          </ul>
      </nav>
  </aside>
<h1 class="MatchSchedule">管理者画面</h1>
<main id="main" style="box-shadow: inset 5px 5px 5px 680px rgb(187 32 32 / 64%);">
<style>
    table{padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;}
    td{width:35px;height:35px;text-align:center;}
    #b101{border:1px solid #ffffff;border-bottom-color:#666666;border-right-color:#666666;}
    #b102{border:1px solid #ffffff;border-bottom-color:#666666;border-right-color:#666666;}
    #b103{border:1px solid #ffffff;border-bottom-color:#666666;border-right-color:#666666;}
    #b104{border:1px solid #ffffff;border-right-color:#666666;border-bottom-color:#666666;}
    #b105{border:1px solid #ffffff;border-bottom-color:#666666;border-left-color:#666666;border-right-color:#666666;}
    #b106{border:1px solid #ffffff;border-bottom-color:#666666;border-right-color:#666666;}
    #b107{border:1px solid #ffffff;border-bottom-color:#666666;border-right-color:#666666;}
    #b108{border:1px solid #ffffff;border-bottom-color:#666666;}
    #b109{border:1px solid #ffffff;border-top-color:#666666;border-left-color:#666666;}
    #b110{border:1px solid #ffffff;border-right-color:#666666;}
    #b111{border:1px solid #ffffff;border-left-color:#666666;border-top-color:#666666;}
    #b112{border:1px solid #ffffff;border-left-color:#666666;border-top-color:#666666;border-right-color:#666666;}
    #b113{border:1px solid #ffffff;border-right-color:#666666;}
    #b114{border:1px solid #ffffff;border-top-color:#666666;border-bottom-color:#666666;border-right-color:#666666;}
    #b115{border:1px solid #ffffff;border-top-color:#666666;border-bottom-color:#666666;border-left-color:#666666;border-right-color:#666666;}
    #b116{border:1px solid #ffffff;border-left-color:#666666;}
    #b117{border:1px solid #ffffff;border-right-color:#666666;}
    #b118{border:1px solid #ffffff;border-bottom-color:#666666;border-top-color:#666666;border-right-color:#666666;}
    #b119{border:1px solid #ffffff;border-bottom-color:#666666;border-top-color:#666666;border-right-color:#666666;}
    #b120{border:1px solid #ffffff;}
    #b121{border:1px solid #ffffff;border-bottom-color:#666666;border-right-color:#666666;}
    #b122{border:1px solid #ffffff;border-top-color:#666666;border-bottom-color:#666666;border-left-color:#666666;}
    #b123{border:1px solid #ffffff;border-top-color:#666666;border-bottom-color:#666666;border-right-color:#666666;}
    #b124{border:1px solid #ffffff;border-bottom-color:#666666;}
    #b125{border:1px solid #ffffff;border-right-color:#666666;border-bottom-color:#666666;}
    #b126{border:1px solid #ffffff;border-bottom-color:#666666;}
    #b127{border:1px solid #ffffff;border-top-color:#666666;border-bottom-color:#666666;border-right-color:#666666;}
    #b128{border:1px solid #ffffff;border-bottom-color:#666666;}
    <?php  if(!empty($win1)){ echo $win1; } ?>
    <?php  if(!empty($win2)){ echo $win2; } ?>
    <?php  if(!empty($win3)){ echo $win3; } ?>
    <?php  if(!empty($win4)){ echo $win4; } ?>
    <?php  if(!empty($win5)){ echo $win5; } ?>
    <?php  if(!empty($win6)){ echo $win6; } ?>
    <?php  if(!empty($win7)){ echo $win7; } ?>
</style>
<!--対戦者設定-->
<form method='post' action="{{ ('/main') }}" id="tournament">
    @csrf
      <dd style="float:left; padding: 30px;">
        <input type="text" name="btma" value="@php  echo $btma; @endphp" style='width:300px;padding: 0px 0px 0px 0px;'><br />
        <input type="text" name="btmb" value="@php  echo $btmb; @endphp" style='width:300px;padding: 0px 0px 0px 0px;'><br />
        <input type="text" name="btmc" value="@php  echo $btmc; @endphp" style='width:300px;padding: 0px 0px 0px 0px;'><br />
        <input type="text" name="btmd" value="@php  echo $btmd; @endphp" style='width:300px;padding: 0px 0px 0px 0px;'><br />
        <input type="text" name="btme" value="@php  echo $btme; @endphp" style='width:300px;padding: 0px 0px 0px 0px;'><br />
        <input type="text" name="btmf" value="@php  echo $btmf; @endphp" style='width:300px;padding: 0px 0px 0px 0px;'><br />
        <input type="text" name="btmg" value="@php  echo $btmg; @endphp" style='width:300px;padding: 0px 0px 0px 0px;'><br />
        <input type="text" name="btmh" value="@php  echo $btmh; @endphp" style='width:300px;padding: 0px 0px 0px 0px;'><br />
      </dd>
    </dl>
    <!--対戦表-->
    <table border="0" cellpadding="0" cellspacing="0" style="background-color: #666666b3;padding:10px;">
      <tr><td style="width:50px;">1回戦	</td><td style="width:250px;text-align:right;" nowrap>@php  echo $btma; @endphp  <input type=radio value="a" name="bt1" @php  echo $checka @endphp > </td><td> vs </td><td style="width:250px;text-align:left;" nowrap><input type=radio value="b" name="bt1" @php  echo $checkb @endphp > @php  echo $btmb; @endphp</td></tr>
      <tr><td style="width:50px;">2回戦	</td><td style="width:250px;text-align:right;" nowrap>@php  echo $btmc; @endphp  <input type=radio value="c" name="bt2" @php  echo $checkc @endphp > </td><td> vs </td><td style="width:250px;text-align:left;" nowrap><input type=radio value="d" name="bt2" @php  echo $checkd @endphp > @php  echo $btmd; @endphp</td></tr>
      <tr><td style="width:50px;">3回戦	</td><td style="width:250px;text-align:right;" nowrap>@php  echo $btme; @endphp  <input type=radio value="e" name="bt3" @php  echo $checke @endphp > </td><td> vs </td><td style="width:250px;text-align:left;" nowrap><input type=radio value="f" name="bt3" @php  echo $checkf @endphp > @php  echo $btmf; @endphp</td></tr>
      <tr><td style="width:50px;">4回戦	</td><td style="width:250px;text-align:right;" nowrap>@php  echo $btmg; @endphp  <input type=radio value="g" name="bt4" @php  echo $checkg @endphp > </td><td> vs </td><td style="width:250px;text-align:left;" nowrap><input type=radio value="h" name="bt4" @php  echo $checkh @endphp > @php  echo $btmh; @endphp</td></tr>

      <tr><td style="width:50px;">5回戦	</td><td style="width:250px;text-align:right;" nowrap>@php  echo $btm1; @endphp<input type=radio value="i" name="bt5" @php   if(!empty($checki))echo $checki; @endphp></td><td> vs </td><td style="width:250px;text-align:left;" nowrap><input type=radio value="j" name="bt5" @php  if(!empty($checkj))echo $checkj; @endphp > @php  echo $btm2; @endphp</td></tr>
      <tr><td style="width:50px;">6回戦	</td><td style="width:250px;text-align:right;" nowrap>@php  echo $btm3; @endphp<input type=radio value="k" name="bt6" @php   if(!empty($checkk))echo $checkk; @endphp></td><td> vs </td><td style="width:250px;text-align:left;" nowrap><input type=radio value="l" name="bt6" @php  if(!empty($checkl))echo $checkl; @endphp > @php  echo $btm4; @endphp</td></tr>
      <tr><td style="width:50px;">決勝戦		</td><td style="width:250px;text-align:right;" nowrap>@php  echo $btm5; @endphp<input type=radio value="m" name="bt7" @php   if(!empty($checkm))echo $checkm; @endphp></td><td> vs </td><td style="width:250px;text-align:left;" nowrap><input type=radio value="n" name="bt7" @php  if(!empty($checkn))echo $checkn; @endphp > @php  echo $btm6; @endphp</td></tr>
      <tr><td style="width:50px;"> </td><td style="width:250px;text-align:left;" nowrap> </td><td><input type=submit value="更新" name="bt0"></td><td style="width:250px;text-align:left;" nowrap> </td></tr>
      <tr><td style="width:50px;"> </td><td> </td><td><a href="{{ ('/admin/Adminmain') }}" title="" style="color:white;">reset</a></td><td> </td></tr>
    </table>
</form>
<div class="catch">優勝賞金 <strong>総額100万ドル</strong></div>
<section class="section" id="sectio01">
    <div class="Game">
      <h2>Game <strong>VALORANT</strong></h2>
        <p>『LoL』を手掛けるRiotGames（ライアットゲームズ）はMOBA分野にとどまらず、</p>
        <p>古典的な競技型FPSタイトルにも進出を果たした。それが『VALORANT』</p>
        <p>プレイヤーは特殊能力を備えた「エージェント」と呼ばれるキャラクターを選択し、</p>
        <p>5人組のチームに分かれて戦闘を繰り広げ</p>
        <p>攻撃チームは拠点へのボム設置を目指し、防衛チームは敵の進行を阻止しなければならない。</p>
        <p>本作は”競技性”を念頭に置いて作られたタイトルです。</p>
        <p>RiotGamesの主導によって、</p>
        <p>世界各地で行われるトーナメントシリーズ「VALORANT IGNITION」を開催。</p>
        <p>世界最強を決める「VALORANT Champions」も12月に開催。</p>
        <p>2021年に「VALORANT CHAMPION Tour」が開催され、
        <p>日本国内でも多数のプロチームが誕生し、しのぎを削っています。</p>
    </div>
  </section>
</main>
<div id="overlay"></div>
<section class="section" id="sectio02">
    <div class="overview">
      <h3>大会概要</h3>
        <p>応募期間	2023年4月4日 ~ 2023年4月25日</p>
        <p>抽選発表	2023年5月3日</p>
        <p>配信日程	スケジュール　参照</p>
        <p>募集チーム	最大8チーム</p>
        <p>※スターター5名の平均ランクが高いチームから優先して選出します。
        <p>※ランクデータは応募締め切り時点でのデータを使用し、
        直近のACTにおける最高ランクを参照します。</p>
        <p>※Episode4 ACT1, Episode4 ACT2が対象となります。</p>
        <p>賞金総額	最大 100万ドル</p>
        <p>参加資格	16歳以上であること</p>
        <p>保持しているRiotアカウントのランクが「イモータル」以上であること</p>
        <p>※Episode4 ACT1, Episode4 ACT2が対象となります。</p>
    </div>
  </section>
<section class="section" id="sectio03">
  <div class="TournamentSchedule">
    <h4>大会日程</h4>
      <p>VALORANT Champions 2023 スケジュール(日本時間)</p>
      <p>グループステージ</p>
      <p>DAY1:8月31日（水）</p>
      <p>-23:00</p>
      <p>-2:00</p>
      <p>DAY2:9月1日（木）</p>
      <p>-21:00</p>
      <p>-0:00</p>
      <p>DAY3:9月2日（金）</p>
      <p>-21:00</p>
      <p>-0:00</p>
      <p>DAY4:9月3日（土）</p>
      <p>-21:00</p>
      <p>-0:00</p>
      <p>DAY5:9月4日（日）</p>
      <p>-21:00</p>
      <p>-0:00</p>
      <p>9月14日（水）  休息日</p>
      <p>9月15日（木）  休息日</p>
      <p>DAY6:9月16日（金）</p>
      <p>-23:00</p>
      
      <table class="db_list" >
        <tr>
          <th>エントリーチーム名</th>
          <th>編集</th>
          <th>削除</th>
        </tr>
        @foreach ($Entryteams as $Entryteam)
          <tr>
          <td> {{ $Entryteam->team }} </td>
          <td><button style="margin-top: 5px;"><a href="{{ route('admin.EntryteamEdit',['id' => $Entryteam->id ]) }}">編集</button></td>
          <td>
              <form action="{{ route('admin.EntryteamDelete',['id' => $Entryteam->id ]) }}" method="POST" onclick="return confirm('削除してもよろしいですか？')">
              @csrf
              <button type="submit">削除</button>
              </form>
          </td>
          </tr>
        @endforeach
      </table>
    </div>
  </section>
</body>

@include('auth.footer')
</body>
</html>
