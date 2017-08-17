@extends('layout1')

@section('content')
<style>

body {
	background:rgba(0,0,0,.5);
 
}
.demo-card-square.mdl-card {
  width: 720px;
  height: 620px;
  background:#fff;
  
}
.demo-card-square > .mdl-card__title {
  color: grey;
  font-size: 20px;
  
}

</style>

        <div class="demo-card-square mdl-card mdl-shadow--0dp mdl-card__actions">
                <h2 class="mdl-card__title">Register</h2>
                    <form class="" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input id="name" type="text" class="mdl-textfield__input" name="name" value="{{ old('name') }}" required autofocus>
                                <label class="mdl-textfield__label" for="name">Name</label>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input id="email" type="email" class="mdl-textfield__input" name="email" value="{{ old('email') }}" required>
                                <label class="mdl-textfield__label" for="email">E-Mail Address</label>       
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input id="password" type="password" class="mdl-textfield__input" name="password" required>
                                <label class="mdl-textfield__label" for="password">Password</label>    
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            
                                <input id="password-confirm" type="password" class="mdl-textfield__input" name="password_confirmation" required>
                                <label class="mdl-textfield__label" for="password-confirm">Password</label>    
                           
                        </div>

                        <div class="mdl-card__actions">
                            <div class="mdl-card__actions">
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
        </div>

@endsection
