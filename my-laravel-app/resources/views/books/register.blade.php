@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{ route('store_book') }}" method="post" class="register-book">
    @csrf
    <div class="cp-iptxt">
      <label for="title">題名</label><br>
      <input type="text" name="title">
    </div>

    <div class="cp-iptxt">
      <label for="body">内容</label><br>
      <textarea name="body" cols="30" rows="10"></textarea>
    </div>

    <div class="cp-iptxt">
      <input type="submit" value="登録">
    </div>
  </form>
</div>
@endsection