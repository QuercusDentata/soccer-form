@extends('app')

@section('title', '完了ページ')

@include('nav')

@section('content')

<div class="text-center">
        <h1 class="text-center mt-2 mb-5">ご入力ありがとうございました。</h1>
        <a href="{{ route('contact') }}" class="btn blue-gradient">入力画面に戻る</a>
    </div>