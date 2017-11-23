@extends('store.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-user"></i> Registrarme</h1>            
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="page">

                    @include('store.partials.errors')

                    <form method="POST" action="{{ route('register-post')}}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="user">Usuario</label>
                            <input class="form-control" type="text" name="user" value="{{ old('user') }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password">
                        </div>

                        <div class="form-group">
                            <label for="confirm password">Confirm Password</label>
                            <input class="form-control" type="password" name="password_confirmation">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Register</button>
                        </div>
                    </form>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>

@stop