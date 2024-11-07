<x-guest-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 p-4">
                <div class="card">
                    <div class="card-header text-center">{{__('Registro')}}</div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- First Name -->
                            <div>
                                <x-input-label for="first_name" class="form-label" :value="__('Nombre')" />
                                <x-text-input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>

                            <!--Last Name-->

                            <div class="input-group mt-4">
                                <x-input-label for="last_name" class="input-group-text" :value="__('Apellidos')"/>
                                <x-text-input id="last_name" type="text" class="form-control" name="last_name" placeholder="1º Apellido"/>
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                <x-text-input id="second_surname" type="text" class="form-control" name="second_surname" placeholder="2º Apellido"/>
                                <x-input-error :messages="$errors->get('second_surname')" class="mt-2" />
                            </div>
                            <div id="passwordHelpBlock" class="form-text">
                                En caso de que el alumno cuente con un solo apellido favor de dejar el espacio.
                            </div>

                            <!--University-->
                            <div class="mt-4">
                                <x-input-label for="university" class="form-label" :value="__('Universidad a la que perteneces')" />
                                <x-text-input id="university" class="form-control" type="text" name="university" :value="old('university')" required autofocus autocomplete="university" placeholder="Universidad de Guadalajara, etc."/>
                                <x-input-error :messages="$errors->get('university')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" class="form-label" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="usuario@domino.com"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" class="form-label" :value="__('Password')" />

                                <x-text-input id="password" class="form-control" aria-describedby="passwordHelpBlock"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                                <div id="paswordHelpBlock" class="form-text">
                                    Tu password tiene que contener de 8 a 20 caracteres, con letras y numeros sin espacios, caracteres especiales o emojis.
                                </div>

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <div class="row g-3 align-items-center">

                                    <div class="col-auto">
                                <x-input-label for="password_confirmation" :value="__('Confirmación Password')" />
                                    </div>

                                    <div class="col-auto">
                                <x-text-input id="password_confirmation" class="form-control" aria-describedby="passwordHelpInline"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                                    </div>

                                    <div class="col-auto">
                                        <span id="passwordHelpInline" class="form-text">
                                            Debe de contener de 8-20 caracteres.
                                        </span>
                                    </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Ya te has registrado-->

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                        {{ __('Ya te has registrado?') }}
                                    </a>
                                </div>
                                <div class="d-md-flex justify-content-md-end">
                                    <x-primary-button class="btn btn-primary">
                                        {{ __('Registrar') }}
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
