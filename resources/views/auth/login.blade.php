@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex container text-center">
                        <img src="{{asset('img/pregnant1.png')}}" height="333" alt="">
                    </div>                  
                </div>              
            </div>
        </div>
        <div class="col-md-8">
            <div class="card" >
                <div class="text-center text-uppercase font-weight-bold pt-4">
                    {{ __('Inicio de sesión') }}
                </div>                
                <div class="card-body">
                    <form class="text-center" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                    <label for="email" class="col-form-label text-center">{{ __('Correo') }}</label>    
                        <div class="form-group">                            
                            
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div> <br>

                    <label for="password" class="col-form-label text-center">{{ __('Contraseña') }}</label>
                        <div class="form-group">                            
                            
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div> <br>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary mr-3">
                                {{ __('Iniciar') }}
                            </button>
                            <a href="{{ route('register') }}" class="btn btn-success ml-3">Registrarse</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br>
</div>
@endsection
