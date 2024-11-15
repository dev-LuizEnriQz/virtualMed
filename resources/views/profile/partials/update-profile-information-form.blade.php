<section>
    <div class="card">
        <div class="card-header">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Información del perfíl') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __("Actualiza y edita la información de tu perfíl.") }}
            </p>
        </div>

        <div class="card-body">
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <!-- Información del Perfil del usuario -->

            <form method="post" action="{{ route('profile.update') }}" class="row g-3 needs-validation" novalidate>
                @csrf
                @method('patch')

                <div class="col-md-4">
                    <x-input-label for="first_name" class="form-label" :value="__('Nombre')" />
                    <x-text-input id="first_name" name="first_name" type="text" class="form-control" :value="old('first_name', $user->first_name)" required autofocus autocomplete="first_name" />
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                </div>

                <div class="col-md-4">
                    <x-input-label for="last_name" class="form-label" :value="__('Primer Apellido')" />
                    <x-text-input id="last_name" name="last_name" type="text" class="form-control" :value="old('last_name', $user->last_name)" required autofocus autocomplete="last_name" />
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                </div>

                <div class="col-md-4">
                    <x-input-label for="second_surname" class="form-label" :value="__('Segundo Apellido')" />
                    <x-text-input id="second_surname" name="second_surname" type="text" class="form-control" :value="old('second_surname', $user->second_surname)" required autofocus autocomplete="second_surname" />
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('second_surname')" />
                </div>

                <div class="col-md-4">
                    <x-input-label for="university" class="form-label" :value="__('Universidad')" />
                    <x-text-input id="university" name="university" type="text" class="form-control" :value="old('university', $user->university)" required autofocus autocomplete="university" />
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('university')" />
                </div>

                <div class="col-md-2">
                    <x-input-label for="cellphone" class="form-label" :value="__('Telefono / Celular')" />
                    <x-text-input id="cellphone" name="cellphone" type="tel" class="form-control" :value="old('cellphone', optional($user->profile)->cellphone)" required autofocus autocomplete="cellphone" />
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('cellphone')" />
                </div>

                <div class="col-md-2">
                    <x-input-label for="city" class="form-label" :value="__('Ciudad')" />
                    <x-text-input id="city" name="city" type="text" class="form-control" :value="old('city', optional($user->profile)->city)" required autofocus autocomplete="city" />
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('city')" />
                </div>

                <div class="col-md-2">
                    <x-input-label for="state" class="form-label" :value="__('Estado')" />
                    <select id="state" name="state" class="form-select" required autofocus autocomplete="state">
                        <option selected disabled value="">Selecciona tu Estado</option>
                        <option value="AGS" {{old('state', optional($user->profile)->state) == 'AGS' ? 'selected' : ''}}>AGS - Aguascalientes</option>
                        <option value="BC" {{old('state', optional($user->profile)->state) == 'BC' ? 'selected' : ''}}>BC - Baja California</option>
                        <option value="BCS" {{old('state', optional($user->profile)->state) == 'BCS' ? 'selected' : ''}}>BCS - Baja California Sur</option>
                        <option value="CAM" {{old('state', optional($user->profile)->state) == 'CAM' ? 'selected' : ''}}>CAM - Campeche</option>
                        <option value="CDMX" {{old('state', optional($user->profile)->state) == 'CDMX' ? 'selected' : ''}}>CDMX - Ciudad de México</option>
                        <option value="CHIS" {{old('state', optional($user->profile)->state) == 'CHIS' ? 'selected' : ''}}>CHIS - Chiapas</option>
                        <option value="CHH" {{old('state', optional($user->profile)->state) == 'CHH' ? 'selected' : ''}}>CHH - Chihuahua</option>
                        <option value="COA" {{old('state', optional($user->profile)->state) == 'COA' ? 'selected' : ''}}>COA - Coahuila</option>
                        <option value="COL" {{old('state', optional($user->profile)->state) == 'COL' ? 'selected' : ''}}>COL - Colima</option>
                        <option value="DGO" {{old('state', optional($user->profile)->state) == 'DGO' ? 'selected' : ''}}>DGO - Durango</option>
                        <option value="GTO" {{old('state', optional($user->profile)->state) == 'GTO' ? 'selected' : ''}}>GTO - Guanajuato</option>
                        <option value="GRO" {{old('state', optional($user->profile)->state) == 'GRO' ? 'selected' : ''}}>GRO - Guerrero</option>
                        <option value="HGO" {{old('state', optional($user->profile)->state) == 'HGO' ? 'selected' : ''}}>HGO - Hidalgo</option>
                        <option value="JAL" {{old('state', optional($user->profile)->state) == 'JAL' ? 'selected' : ''}}>JAL - Jalisco</option>
                        <option value="MEX" {{old('state', optional($user->profile)->state) == 'MEX' ? 'selected' : ''}}>MEX - Estado de México</option>
                        <option value="MIC" {{old('state', optional($user->profile)->state) == 'MIC' ? 'selected' : ''}}>MIC - Michoacán</option>
                        <option value="MOR" {{old('state', optional($user->profile)->state) == 'MOR' ? 'selected' : ''}}>MOR - Morelos</option>
                        <option value="NAY" {{old('state', optional($user->profile)->state) == 'NAY' ? 'selected' : ''}}>NAY - Nayarit</option>
                        <option value="NL" {{old('state', optional($user->profile)->state) == 'NL' ? 'selected' : ''}}>NL - Nuevo León</option>
                        <option value="OAX" {{old('state', optional($user->profile)->state) == 'OAX' ? 'selected' : ''}}>OAX - Oaxaca</option>
                        <option value="PUE" {{old('state', optional($user->profile)->state) == 'PUE' ? 'selected' : ''}}>PUE - Puebla</option>
                        <option value="QRO" {{old('state', optional($user->profile)->state) == 'QRO' ? 'selected' : ''}}>QRO - Querétaro</option>
                        <option value="QR" {{old('state', optional($user->profile)->state) == 'QR' ? 'selected' : ''}}>QR - Quintana Roo</option>
                        <option value="SLP" {{old('state', optional($user->profile)->state) == 'SLP' ? 'selected' : ''}}>SLP - San Luis Potosi</option>
                        <option value="SIN" {{old('state', optional($user->profile)->state) == 'SIN' ? 'selected' : ''}}>SIN - Sinaloa</option>
                        <option value="SON" {{old('state', optional($user->profile)->state) == 'SON' ? 'selected' : ''}}>SON - Sonora</option>
                        <option value="TAB" {{old('state', optional($user->profile)->state) == 'TAB' ? 'selected' : ''}}>TAB - Tabasco</option>
                        <option value="TAM" {{old('state', optional($user->profile)->state) == 'TAM' ? 'selected' : ''}}>TAM - Tamaulipas</option>
                        <option value="TLA" {{old('state', optional($user->profile)->state) == 'TLA' ? 'selected' : ''}}>TLA - Tlaxcala</option>
                        <option value="VER" {{old('state', optional($user->profile)->state) == 'VER' ? 'selected' : ''}}>VER - Veracruz</option>
                        <option value="YUC" {{old('state', optional($user->profile)->state) == 'YUC' ? 'selected' : ''}}>YUC - Yucatán</option>
                        <option value="ZAC" {{old('state', optional($user->profile)->state) == 'ZAC' ? 'selected' : ''}}>ZAC - Zacatecas</option>
                    </select>
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('state')" />
                </div>

                <div class="col-md-2">
                    <x-input-label for="country" class="form-label" :value="__('País')" />
                    <select id="country" name="country" class="form-select" required autofocus autocomplete="country">
                        <option selected disabled value="">Selecciona tu País</option>
                        <option value="México" {{old('country', optional($user->profile)->country) == 'México' ? 'selected' : ""}}>México</option>
                    </select>
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('country')" />
                </div>

                <div class="col-md-1">
                    <x-input-label for="age" class="form-label" :value="__('Edad')" />
                    <x-text-input id="age" name="age" type="text" class="form-control" :value="old('age', optional($user->profile)->age)" required autofocus autocomplete="age" />
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('age')" />
                </div>

                <div class="col-md-2">
                    <x-input-label for="gender" class="form-label" :value="__('Género')" />
                    <select id="gender" name="gender" class="form-select" required autofocus autocomplete="gender">
                        <option selected disabled value="">Selecciona tu género</option>
                        <option value="Masculino" {{old('gender', optional($user->profile)->gender) == 'Masculino' ? 'selected' : ''}}>Masculino</option>
                        <option value="Femenino" {{old('gender', optional($user->profile)->gender) == 'Femenino' ? 'selected' : ''}}>Femenino</option>
                        <option value="Otro" {{old('gender', optional($user->profile)->gender) == 'Otro' ? 'selected' : ''}}>Otro</option>
                    </select>
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                </div>


                <div class="col-md-2">
                    <x-input-label for="birthday" class="form-label" :value="__('Fecha de Nacimiento')" />
                    <x-text-input id="birthday" name="birthday" type="date" class="form-control" :value="old('birthday', optional($user->profile)->birthday)" required autofocus autocomplete="birthday" />
                    <div class="valid-feedback">Excelente</div>
                    <x-input-error class="mt-2" :messages="$errors->get('birthday')" />
                </div>



                <!-- Edita correo electronico -->

                {{--<div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>--}}

                <div class="flex items-center gap-4">
                    <x-primary-button class="btn btn-primary">{{ __('Guardar') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
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
