@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/schedule.css') }}"> <!-- schedule.cssと連携 -->
@section('content')
<!--ハンバーガーメニュー-->
<div class="header-logo-menu">
  <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
          <ul>
              <li><a href="{{ url('home') }}"><h3>ホーム画面に戻る</h3></a></li>
              <li><a href="{{ url('list') }}"><h3>保存リストへ</h3></a></li>
              <li><a href="{{ url('search') }}"><h3>リスト検索へ</h3></a></li>
              <li><a href="{{ url('store') }}"><h3>画像一覧</h3></a></li>
              <li><a href="{{ url('create') }}"><h3>新規作成</h3></a></li>
          </ul>
      </div>
      <script>
        $(function() {
         $('#nav-content li a').on('click', function(event) {
        $('#nav-input').prop('checked', false);
        });
        });
      </script>
    </div>
  </div>

<!-- 新規スケジュール作成パネル… -->
<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')


  <h1>新規スケジュール作成</h1>
     <form action="{{ url('create') }}" method="post">
                {{ csrf_field() }}
                <div class='form-group'>
                    <div class="schedule">
                        <input type="text" name="schedule_name" id="schedule_name" class="form-control" size="15" placeholder="スケジュール名を入力">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="image0" id="image0" class="form-control" size="15" placeholder="正しい画像番号を入力">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="image1" id="image1" class="form-control" size="15" placeholder="正しい画像番号を入力">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="image2" id="image2" class="form-control" size="15" placeholder="正しい画像番号を入力">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="image3" id="image3" class="form-control"  size="15"placeholder="正しい画像番号を入力">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="image4" id="image4" class="form-control" size="15" placeholder="正しい画像番号を入力">
                    </div>
            </div>
            <div class="form-group">
                    <div class="button">
                        <button type="submit" >
                            <i class="fa fa-plus"></i> 作成する
                        </button>
                    </div>
                    @if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
            </div>
                </form>
    <h2>保存画面一覧</h2>
    <div class="table_main">
        <div class="image-list">
            <table>
                <tbody >
                <tr class="cell">
                    <td >1</td>
                    <td ><img src="{{ asset('airport.png') }}" alt="airport" ><td>
                    <td >2</td>
                    <td ><img src="{{ asset('beach.png') }}" alt="beach" ><td>
                    <td >3</td>
                    <td ><img src="{{ asset('bighouse.png') }}" alt="bighouse" ><td>
                    <td >4</td>
                    <td ><img src="{{ asset('car.png') }}" alt="car" ><td>
                    <td >5</td>
                    <td ><img src="{{ asset('classroom.png') }}" alt="classroom" ><td>
                    <td >6</td>
                    <td ><img src="{{ asset('convine.png') }}" alt="convine" ><td>
                    <td >7</td>
                    <td ><img src="{{ asset('dental.png') }}" alt="dental" ><td>
                    <td >8</td>
                    <td ><img src="{{ asset('dentist.png') }}" alt="dentist" ><td>
                    <td >9</td>
                    <td ><img src="{{ asset('doctor.png') }}" alt="doctor" ><td>
                    <td >10</td>
                    <td ><img src="{{ asset('eat.png') }}" alt="eat" ><td>
                    <td >11</td>
                    <td ><img src="{{ asset('game.png') }}" alt="gmae" ><td>
                    <td >12</td>
                    <td ><img src="{{ asset('garagara.png') }}" alt="garagara" ><td>
                    <td >13</td>
                    <td ><img src="{{ asset('grandp.png') }}" alt="granp" ><td>
                    <td >14</td>
                    <td ><img src="{{ asset('ground.png') }}" alt="ground" ><td>
                    <td >15</td>
                    <td ><img src="{{ asset('hospital.png') }}" alt="hospital" ><td>
                    <td >16</td>
                    <td ><img src="{{ asset('hotel.png') }}" alt="hotel" ><td>
                    <td >17</td>
                    <td ><img src="{{ asset('house.png') }}" alt="house" ><td>
                    <td >18</td>
                    <td ><img src="{{ asset('kinder.png') }}" alt="kinder" ><td>
                    <td >19</td>
                    <td ><img src="{{ asset('lunch.png') }}" alt="lunch" ><td>
                    <td >20</td>
                    <td ><img src="{{ asset('mountain.png') }}" alt="mountain" ><td>
                    <td >21</td>
                    <td ><img src="{{ asset('nurse.png') }}" alt="nurse" ><td>
                    <td >22</td>
                    <td ><img src="{{ asset('park.png') }}" alt="park" ><td>
                    <td >23</td>
                    <td ><img src="{{ asset('phroom.png') }}" alt="phroom" ><td>
                    <td >24</td>
                    <td ><img src="{{ asset('plane.png') }}" alt="plane" ><td>
                    <td >25</td>
                    <td ><img src="{{ asset('post.png') }}" alt="post" ><td>
                    <td >26</td>
                    <td ><img src="{{ asset('quiet.png') }}" alt="quiet" ><td>
                    <td >27</td>
                    <td ><img src="{{ asset('school.png') }}" alt="school" ><td>
                    <td >28</td>
                    <td ><img src="{{ asset('shoesbox.png') }}" alt="shoesbox" ><td>
                    <td >29</td>
                    <td ><img src="{{ asset('super.png') }}" alt="super" ><td>
                    <td >30</td>
                    <td ><img src="{{ asset('teeth.png') }}" alt="teeth" ><td>
                    <td >31</td>
                    <td ><img src="{{ asset('toilet.png') }}" alt="toilet" ><td>
                    <td >32</td>
                    <td ><img src="{{ asset('train.png') }}" alt="train" ><td>
                    <td >33</td>
                    <td ><img src="{{ asset('wash.png') }}" alt="wash" ><td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
