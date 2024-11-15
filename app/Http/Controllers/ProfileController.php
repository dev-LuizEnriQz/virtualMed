<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(): View
    {
        $user = Auth::user();

        if (!$user->profile){
            $user->profile()->create();
        }
/*        dd($user->profile->state);*/
        return view('profile.edit', [
            'user' => $user,
            'profile' => $user->profile]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();//verifica que el usuario esta autentificado

        //Si no hay un usuario autentificado, lanza error y redirige
        if (!$user) {
            return redirect()->route('login')->withErrors('Usuario no autentificado');
        }

        //Actualizar DATOS DEL USUARIO-TABLA USERS
        $user->fill($request->only(['first_name', 'last_name', 'second_surname', 'university']));

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }
        $user->save();


        //Actualizar DATOS DEL PERFIL USUARIO-TABLA USER_PROFILE
        $profile = $user->profile;

        if (!$profile) {
            $profile = $user->profile()->create([]);
        }
        //Asegurar de que el perfil existe antes de actualizar
        if ($profile) {
            $profile->fill($request->only(['cellphone', 'city', 'state', 'country', 'age', 'birthday', 'gender']));
            $profile->save();
        }

        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }
        //Codigo Original
 /*       $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }*/

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
