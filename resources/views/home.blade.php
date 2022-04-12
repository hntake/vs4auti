@extends('layouts.app')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/schedule.css') }}"> <!-- home.cssと連携 -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script> <!-- jQueryのライブラリを読み込み -->
    <script src="{{ asset('/js/home.js') }}"></script> <!-- home.jsと連携 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム画面</title>
</head>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card-header">
                    @csrf <!-- CSRF保護 -->
                    <tr>
                            <td>{{ $schedule->schedule_name }}</td><br>
                            <td><img src="{{asset(''.$schedule->imageOne->pic_name)}}" alt="image" style="width: 150px; height: auto;"></td>
                            <td><div class="arrow"></div></td>
                            <td><img src="{{asset(''.$schedule->imageTwo->pic_name)}}" alt="image" style="width: 150px; height: auto;"></td>
                            <td><div class="arrow"></div></td>
                            <td><img src="{{asset(''.$schedule->imageThree->pic_name)}}" alt="image" style="width: 150px; height: auto;"></td>
                            <td><div class="arrow"></div></td>
                            <td><img src="{{asset(''.$schedule->imageFour->pic_name)}}" alt="image" style="width: 150px; height: auto;"></td>
                            <td><div class="arrow"></div></td>
                            <td><img src="{{asset(''.$schedule->imageFive->pic_name)}}" alt="image" style="width: 150px; height: auto;"></td>
                    </tr>

                    </div>
                    <!-- <div class="openbox">
                        <label for="pushlabel">▼ スケジュールリスト選択</label>
                        <input id="pushlabel" class="inputcss" type="checkbox" />
                        <span class="boxshow">

                        <ul>
                        <li>**ここは折りたたまれる部分です**</li>
                        <li><a href="URL">折りたたまれる部分にリンク付けたい場合</a></li>
                        </ul>
                        </span>
                    </div> -->
                    <div class="route">
                        <div class="submit_button">
                            <a href="{{ route('create') }}">新規作成</a>
                        </div>
                        <div class="submit_button">
                            <a href="{{ route('search') }}">スケジュール検索</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
