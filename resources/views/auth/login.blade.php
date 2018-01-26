@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row"> --}}
      <div class="wrapper">
        <img src="{{ asset('img/foblogonew1.png') }}" alt="" class="img-responsive img-login">
        <form class="login animated fadeIn slow" method="POST" action="{{ route('login') }}" >
            {{ csrf_field() }}
            <p class="title">Iniciar Sesión</p>
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <input type="text" placeholder="Usuario" name="username" value="{{ old('username') }}" required autofocus class="user"/>
                <i class="fa fa-user"></i>
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" placeholder="Contraseña" name="password" id="password"/>
                <i class="fa fa-key"></i>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit">
                <span class="state">Ingresar</span>
            </button>
        </form>
        <footer><a target="blank" href="http://fundacion-profin.org/">FRIENDS OF BOLIVIA &reg; 2018</a></footer>
      </div>
    {{-- </div>
</div> --}}
@endsection
