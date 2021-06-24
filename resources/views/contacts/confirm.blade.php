@extends('app')

@section('title', '確認画面')

@include('nav')

@section('content')


<div class="container mt-4">
  <div class="border p-4">
    <h1 class="h4 mb-4 font-weight-bold"><center>確認画面</center></h1>

    {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
            {{ csrf_field() }}

      <fieldset class="mb-4">
  
      <div>
        <label for="subject">お名前(全角)：</label>
          {{ $inputs['lastname'] }} {{ $inputs['firstname'] }}
      </div>
      <input type="hidden" name="lastname" value="{{ $inputs['lastname'] }}">
      <input type="hidden" name="firstname" value="{{ $inputs['firstname'] }}">


      <div>
        <label for="subject">お名前カナ(全角)：</label>
        {{ $inputs['lastname_kana'] }} {{ $inputs['lastname_kana'] }}
      </div>
      <input type="hidden" name="lastname_kana" value="{{ $inputs['lastname_kana'] }}">
      <input type="hidden" name="firstname_kana" value="{{ $inputs['firstname_kana'] }}">

      <div>
        <label for="subject">生年月日：</label>
        {{ $inputs['birthday_year'] }}年{{ $inputs['birthday_month'] }}月{{ $inputs['birthday_day'] }}日
      </div>
      <input type="hidden" name="birthday_year" value="{{ $inputs['birthday_year'] }}">
      <input type="hidden" name="birthday_month" value="{{ $inputs['birthday_month'] }}">
      <input type="hidden" name="birthday_day" value="{{ $inputs['birthday_day'] }}">

      <div>
        <label for="subject">
          性別：
        </label>
        {{ $inputs['gender' ]}}
      </div>
      <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">

      <div>
        <label for="subject">
          学年：
        </label>
{{ $inputs['school_year'] }}
      </div>
      <input type="hidden" name="school_year" value="{{ $inputs['school_year'] }}">

      <div>
          <label for="subject">
            学校名：
          </label>
          {{ $inputs['school_name'] }}
      </div>
      <input type="hidden" name="school_name" value="{{ $inputs['school_name'] }}">


      <div>
          <label for="subject">
            郵便番号：
          </label>
          {{ $inputs['postalcode'] }}
      </div>
      <input type="hidden" name="postalcode" value="{{ $inputs['postalcode'] }}">


      <div>
          <label for="subject">
            住所：
          </label>
          {{ $inputs['address']}}
      </div>
      <input type="hidden" name="address" value="{{ $inputs['address'] }}">


      <div>
          <label for="subject">
            保護者名：
          </label>
          {{ $inputs['parentname'] }}
      </div>
      <input type="hidden" name="parentname" value="{{ $inputs['parentname'] }}">


      <div>
          <label for="subject">
            電話番号：
          </label>
          {{ $inputs['tel'] }}
      </div>
      <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">


      <div>
          <label for="subject">
            メールアドレス：
          </label>
          {{ $inputs['email'] }}
      </div>
      <input type="hidden" name="email" value="{{ $inputs['email'] }}">


      <div>
          <label for="subject">
            現在所属するチーム名：
          </label>
          {{ $inputs['teamname'] }}
      </div>
      <input type="hidden" name="teamname" value="{{ $inputs['teamname'] }}">


      <div>
        <label for="subject">スクール参加希望日：</label>
        {{ $inputs['participation_year'] }}年{{ $inputs['participation_month'] }}月{{ $inputs['participation_day'] }}日
      </div>
      <input type="hidden" name="participation_year" value="{{ $inputs['participation_year'] }}">
      <input type="hidden" name="participation_month" value="{{ $inputs['participation_month'] }}">
      <input type="hidden" name="participation_day" value="{{ $inputs['participation_day'] }}">


      <div>
          <label for="subject">
            コース：
          </label>
          {{ $inputs['cose'] }}
        </div>
        <input type="hidden" name="cose" value="{{ $inputs['cose'] }}">


      <div>
          <label for="subject">
            ご要望などメッセージ：
          </label>
          {{ $inputs['freearea'] }}
      </div>
      <input type="hidden" name="freearea" value="{{ $inputs['freearea'] }}">


</br>
<div class="text-center">
<button name="action" type="submit" value="return" class="btn btn-dark">入力画面に戻る</button>
<button name="action" type="submit" value="submit" class="btn blue-gradient">登録する</button>
</div>

{!! Form::close() !!}
      </fieldset>
    </form>
  </div>
</div>

@endsection