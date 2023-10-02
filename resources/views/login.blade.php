@extends('master')
@section('content')
<div style="height: 458px; width:600px; margin-left:500px;">
<h1 style="margin-top:140px;margin-left:60px">Faça Login</h1>
<form style="margin: 71px;" method="POST" action="{{route('logar')}}">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Digite seu nickname</label>
    <input type="text" class="form-control" name="nickuser" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Digite sua senha</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
@endsection