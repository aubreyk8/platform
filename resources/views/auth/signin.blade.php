<div class="form-group">

    <label class="form-label">{{__('Email address')}}</label>

    {!!  \Orchid\Screen\Fields\Input::make('email')
        ->type('email')
        ->required()
        ->placeholder(__('Enter your email'))
    !!}
</div>

<div class="form-group">
    <label class="form-label w-full">
        {{__('Password')}}
        <a href="{{ route('platform.password.request') }}" class="float-right small">{{__('Forgot your password?')}}</a>
    </label>

    {!!  \Orchid\Screen\Fields\Password::make('password')
        ->required()
        ->placeholder(__('Enter your password'))
    !!}
</div>

<div class="row">
    <div class="form-group col-md-6 col-xs-12">
        <label class="custom-control custom-checkbox">
            <input type="checkbox" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
            <span class="custom-control-label"> {{__('Remember Me')}}</span>
        </label>
    </div>
    <div class="form-group col-md-6 col-xs-12">
        <button id="button-login" type="submit" class="btn btn-default btn-block">
            <i class="icon-login text-xs mr-2"></i> {{__('Login')}}
        </button>
    </div>
</div>
