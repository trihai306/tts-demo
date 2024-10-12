<div class="login-main" x-data="loginForm">
    <form class="theme-form" x-on:submit.prevent="submit">
        <h2 class="text-center">{{ __('future::auth.login_to_your_account') }}</h2>
        <p class="text-center">{{ __('future::auth.enter_your_credentials') }}</p>
        <div class="form-group">
            <label class="col-form-label" for="email">{{ __('future::auth.email_address') }}</label>
            <input id="email" type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" required placeholder="{{ __('future::auth.your_email_address') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label" for="password">{{ __('future::auth.password') }}</label>
            <div class="form-input position-relative">
                <input id="password" type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" required placeholder="{{ __('future::auth.your_password') }}">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="show-hide"><span class="show"></span></div>
            </div>
        </div>
        <div class="form-group mb-0 checkbox-checked">
            <div class="form-check checkbox-solid-info">
                <input id="remember-me" type="checkbox" class="form-check-input">
                <label class="form-check-label" for="remember-me">{{ __('future::auth.remember_me_on_this_device') }}</label>
            </div>
            <a class="link" href="{{ route('forgot-password') }}">{{ __('future::auth.i_forgot_password') }}</a>
            <div class="text-end mt-3">
                <button type="submit" class="btn btn-primary btn-block w-100" :disabled="loading">
                    <span x-text="loading ? '{{ __('future::auth.loading') }}' : '{{ __('future::auth.sign_in') }}'"></span>
                </button>
            </div>
        </div>
        <div class="login-social-title">
            <h6>{{ __('future::auth.or_sign_in_with') }}</h6>
        </div>
        <p class="mt-4 mb-0 text-center">{{ __('future::auth.dont_have_account') }}<a class="ms-2" href="sign-up.html">{{ __('future::auth.create_account') }}</a></p>
    </form>
</div>

@script
<script>
    Alpine.data('loginForm', () => ({
        email: '',
        password: '',
        remember: false,
        loading: false,
        submit() {
            this.loading = true;
            this.$wire.login().then(() => {
                this.loading = false;
            }).catch(error => {
                this.loading = false;
                console.log(error);
            });
        }
    }));
</script>
@endscript
