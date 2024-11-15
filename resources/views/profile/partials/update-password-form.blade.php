<section>
    <div class="card">
        <div class="card-header">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Actualización de Password') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Asegura que tu cuenta tenga un contraseña de forma de caracter aleatorio, que cuente con mayusculas y numeros.') }}
            </p>
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')

                <div class="col-md-6">
                    <x-input-label for="update_password_current_password" class="form-label" :value="__('Password Actual')" />
                    <x-text-input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>

                <div class="col-md-6">
                    <x-input-label for="update_password_password" class="form-label" :value="__('Nuevo Password')" />
                    <x-text-input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div class="col-md-6">
                    <x-input-label for="update_password_password_confirmation" class="form-label" :value="__('Confirmar Password')" />
                    <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center mt-3">
                    <x-primary-button class="btn btn-primary">{{ __('Actualizar') }}</x-primary-button>

                    @if (session('status') === 'password-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400"
                        >{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
