<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 p-4">
                <div class="card">
                    <div class="card-header text-center">{{__('Inicio de Sesión')}}</div>
                        <div class="card-body">

                <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <!-- Email Address -->
                            <div class="mt-2">
                                <x-input-label for="email" class="form-label" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="cuenta@ejemplo.com" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" class="form-label" :value="__('Password')" />

                                <x-text-input id="password" class="form-control"
                                              type="password"
                                              name="password"
                                              required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="mt-4 form-check">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recuerdame') }}</span>
                                </label>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4 mt-2">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu contraseña?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="col-md-4 mt-2">
                                    <x-primary-button class="btn btn-primary w-100">
                                        {{ __('Iniciar de Sesión') }}
                                    </x-primary-button>
                                </div>
                            </div>
                </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
