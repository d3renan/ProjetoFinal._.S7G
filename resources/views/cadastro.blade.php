@extends('master')
@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top space-between">
  <div class="container-fluid" style="background-color: #080326; width: 100%;height: 70px;">
      <a class="navbar-brand" href="{{'/'}}"
          style="color: #EEF0F4; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 50px;">SevenGames</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item" style="margin-left: 1000px;">
                  <a class="nav-link active" aria-current="page" href="{{'/'}}"
                      style="color: aliceblue; font-size: 20px;">Home</a>
              </li>
           
          </ul>
      </div>
  </div>
</nav>
<div style="height: 458px; width:600px; margin-left:500px;">
<h1 style="margin-top:140px;margin-left:60px">Cadastre-se</h1>
<form style="margin: 71px;" method="post" action="{{route('cadastrar')}}" >
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Digite seu nickname</label>
    <input type="text" class="form-control" name="nickuser" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Digite sua senha</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
@endsection