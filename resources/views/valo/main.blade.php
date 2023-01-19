@php
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
@endphp

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Valorant Champions 2023</title>
</head>
<body>
@include('valo.header')
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
              <li><a href="{{ url('showLogin') }}">大会エントリーはこちら</br>（Login）</a></li>
              <li><a class="js-btn" href="#sectio01">Game VALORANT</a></li>
              <li><a class="js-btn" href="#sectio02">大会概要</a></li>
              <li><a class="js-btn" href="#sectio03">大会日程</a></li>
              <p>配信プラットフォーム</p>
              <div class="youtube">
                  <li>
                  <a href="https://www.youtube.com/c/VALORANTjp">
                  <img src="img/vct-youtube.2670ea0214.png">
                  <span>YouTube</span>
                  </a>
                  </li>
              </div>
              <div class="twitch">
                  <li>
                  <a href="https://www.twitch.tv/valorant_jpn">
                  <img src="img/31-311115_go-back-images-for-twitch-logo-transparent-twitch.png">
                  <span>twitch</span>
                  </a>
                  </li>
              </div>
          </ul>
      </nav>
  </aside>
<h1 class="MatchSchedule">Match Schedule</h1>
<main id="main">
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
  <div class='Tournament'>
    <table border="0" cellpadding="0" cellspacing="0" style="background-color: #666666b3;">
      <tr>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="6"> {{ $winer }} </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
      </tr>
      <tr>
        <td> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2" id="b101"> </td>
        <td colspan="2" id="b102"> </td>
        <td colspan="2" id="b103"> </td>
        <td colspan="2" id="b104"> </td>
        <td colspan="2" id="b105"> </td>
        <td colspan="2" id="b106"> </td>
        <td colspan="2" id="b107"> </td>
        <td colspan="2" id="b108"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td> </td>
      </tr>
      <tr>
        <td> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2" id="b109"> </td>
        <td colspan="2" id="b110"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2" id="b111"> </td>
        <td colspan="2" id="b112"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td> </td>
      </tr>
      <tr>
        <td> </td>
        <td colspan="2"> </td>
        <td colspan="2" id="b113"> </td>
        <td colspan="2" id="b114"> </td>
        <td colspan="2" id="b115"> </td>
        <td colspan="2" id="b116"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2" id="b117"> </td>
        <td colspan="2" id="b118"> </td>
        <td colspan="2" id="b119"> </td>
        <td colspan="2" id="b120"> </td>
        <td colspan="2"> </td>
        <td> </td>
      </tr>
      <tr>
        <td> </td>
        <td colspan="2" id="b121"> </td>
        <td colspan="2" id="b122"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2" id="b123"> </td>
        <td colspan="2" id="b124"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2" id="b125"> </td>
        <td colspan="2" id="b126"> </td>
        <td colspan="2"> </td>
        <td colspan="2"> </td>
        <td colspan="2" id="b127"> </td>
        <td colspan="2" id="b128"> </td>
        <td> </td>
      </tr>
      <tr>
        <td colspan="2"> {{ $btma }} </td>
        <td colspan="2"> </td>
        <td colspan="2"> {{ $btmb }} </td>
        <td colspan="2"> </td>
        <td colspan="2"> {{ $btmc }} </td>
        <td colspan="2"> </td>
        <td colspan="2"> {{ $btmd }} </td>
        <td colspan="2"> </td>
        <td colspan="2"> {{ $btme }} </td>
        <td colspan="2"> </td>
        <td colspan="2"> {{ $btmf }} </td>
        <td colspan="2"> </td>
        <td colspan="2"> {{ $btmg }}</td>
        <td colspan="2"> </td>
        <td colspan="2"> {{ $btmh }} </td>
      </tr>
    </table>
  </div>
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
  </div>
</section>
</body>
@include('valo.footer')
</html>