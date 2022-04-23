@extends('layouts.app')
@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>

                <div class="card-body">
                
                    
                    <form method="POST" action="{{ url('/login/conducteur') }}" aria-label="{{ __('Login') }}">
            
                        @csrf
                        <h1>Driver Login</h1>
                <div >
                  <input type="email" name=email class="form-control" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                @if ($errors->has('email'))
                <span ><strong>{{ $errors->first('email') }}</strong></span>
                @endif
                <br>
                <div >
                  <input type="password" name="password" class="form-control" required>
                </div>
                <br>
                <div >
                  <button type="submit" class="btn btn-primary">Driver Login</button>
                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection