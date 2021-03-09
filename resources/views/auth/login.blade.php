{{-- layout --}}
@extends('layouts.fullLayoutMaster')

{{-- page title --}}
@section('title','Leonardo Miranda')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{secure_asset('css/pages/login.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div id="login-page" class="row">

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <h5 class="ml-4">Acesso Restrito - Leonardo Miranda</h5>
                    <x-jet-validation-errors class="mb-4 error" />
                </div>
            </div>
            <div>
                <x-jet-label for="email" value="Email" />
                <x-jet-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="Senha" />
                <x-jet-input id="password" class="" type="password" name="password" required autocomplete="current-password" />
            </div>

            

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif

                
            </div>
            <div class="row">
            <div class="input-field col s12">
            <x-jet-button class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">
                    {{ __('Acessar Sistema') }}
                </x-jet-button>
            </div>
            </div>
        </form>
        </div>
    
</div>
@endsection