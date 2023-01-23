
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/EntryForm.css') }}" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>エントリーチーム編集</title>
</head>
<body>
@include('valo.header')
    <div class="contact">
        <h1 class="contact-ttl">エントリーチーム編集画面</h1>
        <form method="POST" action="{{ route('admin.EntryteamUpdate', $Entryteam->id) }}" >
        @csrf
            <table class="contact-table">
                <tr>
                    <th class="contact-item">チーム名</th>
                    <td class="contact-body">
                        <input type="text" name="team" class="form-text" id="team" value="{{ old('team')?: $Entryteam->team }}"/>
                        @if ($errors->has('team'))
                        <div class="error">{{ $errors->first('team') }}</div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">coach</th>
                    <td class="contact-body">
                        <input type="text" class="form-text" name="coach" id="coach" value="{{ old('cocah')?: $Entryteam->coach }}"/>
                        @if ($errors->has('coach'))
                        <div class="error">{{ $errors->first('coach') }}</div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">player1</th>
                    <td class="contact-body">
                        <input type="text" class="form-text" name="player1" id="player1" value="{{ old('player1')?: $Entryteam->player1 }}"/>
                        @if ($errors->has('player1'))
                        <div class="error">{{ $errors->first('player1') }}</div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">player2</th>
                    <td class="contact-body">
                        <input type="text" class="form-text" name="player2" id="player2" value="{{ old('player2')?: $Entryteam->player2 }}"/>
                        @if ($errors->has('player2'))
                        <div class="error">{{ $errors->first('player2') }}</div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">player3</th>
                    <td class="contact-body">
                        <input type="text" class="form-text" name="player3" id="player3" value="{{ old('player3')?: $Entryteam->player3 }}"/>
                        @if ($errors->has('player3'))
                        <div class="error">{{ $errors->first('player3') }}</div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">player4</th>
                    <td class="contact-body">
                        <input type="text" class="form-text" name="player4" id="player4" value="{{ old('player4')?: $Entryteam->player4 }}"/>
                        @if ($errors->has('player4'))
                        <div class="error">{{ $errors->first('player4') }}</div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">player5</th>
                    <td class="contact-body">
                        <input type="text" class="form-text" name="player5" id="player5" value="{{ old('player5')?: $Entryteam->player5 }}"/>
                        @if ($errors->has('player5'))
                        <div class="error">{{ $errors->first('player5') }}</div>
                        @endif
                    </td>
                </tr>
            </table>

            <input class="contact-submit" type="submit" value="送信" />
        </form>
        <form method="POST" action="{{ ('logout') }}">
        @csrf
        <input type="submit" value='ログアウト'>
        </form>
    </div>
    @include('valo.footer')
</body>

</html>