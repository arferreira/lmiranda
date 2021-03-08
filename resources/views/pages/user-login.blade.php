{{-- layout --}}
@extends('layouts.fullLayoutMaster')

{{-- page title --}}
@section('title','Leonardo Miranda')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/login.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div id="login-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
    <form class="login-form">
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Leonardo Miranda</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="username" type="text">
          <label for="username" class="center-align">Usuário</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password">
          <label for="password">Senha</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <a href="{{asset('/')}}"
            class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Acessar Sistema</a>
        </div>
      </div>
      
    </form>
  </div>
</div>
@endsection