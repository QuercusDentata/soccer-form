@extends('app')

@section('title', '会員情報入力')

@include('nav')

@section('content')

<div class="container mt-4">
  <div class="border p-4">
    <h1 class="h4 mb-4 font-weight-bold"><center>会員情報入力</center></h1>



    {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
        {{ csrf_field() }}


      <fieldset class="mb-4">
  
      <div>
        <label for="subject">お名前(全角)</label>
        <span class="form-require">必須</span>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-6">
            {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => '名字']) }}
        </div>

        <div class="form-group col-sm-6">
            {{ Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => '名前']) }}
        </div>
      </div>
      @if ($errors->has('lastname'))
                <p class="alert alert-danger">{{ $errors->first('lastname') }}</p>
            @endif
            @if ($errors->has('firstname'))
                <p class="alert alert-danger">{{ $errors->first('firstname') }}</p>
            @endif

      <div>
        <label for="subject">お名前カナ(全角)</label>
        <span class="form-require">必須</span>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-6">
        {{ Form::text('lastname_kana', null, ['class' => 'form-control', 'placeholder' => 'ミョウジ']) }}
        </div>

        <div class="form-group col-sm-6">
        {{ Form::text('firstname_kana', null, ['class' => 'form-control', 'placeholder' => 'ナマエ']) }}
        </div>
      </div>
      @if ($errors->has('lastname_kana'))
                <p class="alert alert-danger">{{ $errors->first('lastname_kana') }}</p>
            @endif
            @if ($errors->has('firstname_kana'))
                <p class="alert alert-danger">{{ $errors->first('firstname_kana') }}</p>
            @endif

      <div>
        <label for="subject">生年月日</label>
        <span class="form-require">必須</span>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-3">
        {{Form::selectRange('birthday_year', 1900, 2021, null, ['class' => 'form-control', 'placeholder' => '--'], [])}}
        </div>
      <span class="birthday">年</span>

        <div class="form-group col-sm-2">
        {{Form::selectRange('birthday_month', 1, 12, null, ['class' => 'form-control', 'placeholder' => '--'], [])}}
        </div>
      <span class="birthday">月</span>
      
        <div class="form-group col-sm-2">
        {{Form::selectRange('birthday_day', 1, 31, null, ['class' => 'form-control', 'placeholder' => '--'], [])}}
        </div>
      <span class="birthday">日</span>
      </div>
      @if ($errors->has('birthday_year'))
                <p class="alert alert-danger">{{ $errors->first('birthday_year') }}</p>
            @endif
            @if ($errors->has('birthday_month'))
                <p class="alert alert-danger">{{ $errors->first('birthday_month') }}</p>
            @endif
            @if ($errors->has('birthday_day'))
                <p class="alert alert-danger">{{ $errors->first('birthday_day') }}</p>
            @endif

      <div class="form-group">
        <label for="subject">
          性別
        </label>        
        <span class="form-require">必須</span></br>
                <label>{{ Form::radio('gender', "男子") }} 男子</label>
                <label>{{ Form::radio('gender', "女子") }} 女子</label>
            @if ($errors->has('gender'))
                <p class="alert alert-danger">{{ $errors->first('gender') }}</p>
            @endif

      <div class="form-group">
        <label for="subject">
          学年
        </label><span class="form-require">必須</span></br>

        <label>{{ Form::radio('school_year', "幼稚園年中") }} 幼稚園年中</label>
        <label>{{ Form::radio('school_year', "幼稚園年長") }} 幼稚園年長</label></br>
        <label>{{ Form::radio('school_year', "小学１年生") }} 小学１年生</label>
        <label>{{ Form::radio('school_year', "小学２年生") }} 小学２年生</label>
        <label>{{ Form::radio('school_year', "小学３年生") }} 小学３年生</label>
        <label>{{ Form::radio('school_year', "小学４年生") }} 小学４年生</label>
        <label>{{ Form::radio('school_year', "小学５年生") }} 小学５年生</label>
        <label>{{ Form::radio('school_year', "小学６年生") }} 小学６年生</label></br>
        <label>{{ Form::radio('school_year', "中学１年生") }} 中学１年生</label>
        <label>{{ Form::radio('school_year', "中学２年生") }} 中学２年生</label>
        <label>{{ Form::radio('school_year', "中学３年生") }} 中学３年生</label>
      </div>
      @if ($errors->has('school_year'))
                <p class="alert alert-danger">{{ $errors->first('school_year') }}</p>
            @endif

      <div class="form-group">
          <label for="subject">
            学校名
          </label>
          <span class="form-require">必須</span>
          {{ Form::text('school_name', null, ['class' => 'form-control']) }}
      </div>
      @if ($errors->has('school_name'))
                <p class="alert alert-danger">{{ $errors->first('school_name') }}</p>
            @endif

      <div class="form-row">
        <div class="form-group col-sm-3">
          <label for="subject">
            郵便番号
          </label>
          {{ Form::text('postalcode', null, ['class' => 'form-control']) }}
        </div>
      </div>

      <div class="form-group">
          <label for="subject">
            住所
          </label>
          <span class="form-require">必須</span>
          {{ Form::text('address', null, ['class' => 'form-control']) }}
      </div>
      @if ($errors->has('address'))
                <p class="alert alert-danger">{{ $errors->first('address') }}</p>
            @endif

      <div class="form-row">
      <div class="form-group col-sm-3">
          <label for="subject">
            保護者名
          </label>
          <span class="form-require">必須</span>
          {{ Form::text('parentname', null, ['class' => 'form-control']) }}
      </div>
      </div>
      @if ($errors->has('parentname'))
                <p class="alert alert-danger">{{ $errors->first('parentname') }}</p>
            @endif

      <div class="form-row">
      <div class="form-group col-sm-3">
          <label for="subject">
            電話番号
          </label>
          <span class="form-require">必須</span>
          {{ Form::text('tel', null, ['class' => 'form-control']) }}
      </div>
      </div>

      @if ($errors->has('tel'))
                <p class="alert alert-danger">{{ $errors->first('tel') }}</p>
            @endif


      <div class="form-group">
          <label for="subject">
            メールアドレス
          </label>
          <span class="form-require">必須</span>
          {{ Form::email('email', null, ['class' => 'form-control']) }}
      </div>

      @if ($errors->has('email'))
                <p class="alert alert-danger">{{ $errors->first('email') }}</p>
            @endif

      <div class="form-row">
      <div class="form-group col-sm-4">
          <label for="subject">
            現在所属するチーム名
          </label>
          {{ Form::text('teamname', null, ['class' => 'form-control']) }}
      </div>
</div>

      <div>
        <label for="subject">スクール参加希望日</label>
        <span class="form-require">必須</span>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-3">
        {{Form::selectRange('participation_year', 1900, 2021, null, ['class' => 'form-control', 'placeholder' => '--'], [])}}

        </div>
      <span class="birthday">年</span>

        <div class="form-group col-sm-2">
        {{Form::selectRange('participation_month', 1, 12, null, ['class' => 'form-control', 'placeholder' => '--'], [])}}

        </div>
      <span class="birthday">月</span>
      
        <div class="form-group col-sm-2">
        {{Form::selectRange('participation_day', 1, 31, null, ['class' => 'form-control', 'placeholder' => '--'], [])}}

        </div>
      <span class="birthday">日</span>
      </div>

      @if ($errors->has('participation_year'))
                <p class="alert alert-danger">{{ $errors->first('participation_year') }}</p>
            @endif
            @if ($errors->has('participation_month'))
                <p class="alert alert-danger">{{ $errors->first('participation_month') }}</p>
            @endif
            @if ($errors->has('participation_day'))
                <p class="alert alert-danger">{{ $errors->first('participation_day') }}</p>
            @endif

      <div class="form-group">
          <label for="subject">
            コース
          </label>
          <span class="form-require">必須</span></br>
                <label>{{ Form::radio('cose', "週1回コース 月額6,000円(税別)") }} 週1回コース 月額6,000円(税別)</label></br>
                <label>{{ Form::radio('cose', "週2回コース 月額8,000円(税別)") }} 週2回コース 月額8,000円(税別)</label></br>
                <label>{{ Form::radio('cose', "毎日コース 月額10,000円(税別)") }} 毎日コース 月額10,000円(税別)</label></br>
      </div>
      @if ($errors->has('cose'))
                <p class="alert alert-danger">{{ $errors->first('cose') }}</p>
            @endif

      <div class="form-group">
          <label for="subject">
            ご要望などメッセージ
          </label>
          {{Form::textarea('freearea', null, ['class' => 'form-control', 'rows' => '8'])}}
      </div>


</br>
<div class="text-center">
{{ Form::submit('確認画面へ', ['class' => 'btn blue-gradient']) }}
</div>
{!! Form::close() !!}
      </fieldset>
  </div>
</div>

@endsection