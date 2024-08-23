<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
    public function store(Request $request): RedirectResponse
    {

       // dd($request);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255','unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],

            //new form fields

            'altphone' => ['required', 'string', 'max:255','unique:'.User::class],
            'idPp' => ['required', 'string', 'max:255','unique:'.User::class],
            'dob' => ['required', 'date', 'before:today'],
            'postaladdress' => ['required', 'string', 'max:255'],
            'postalcode' => ['required', 'string', 'max:255'],
            'town' => ['required', 'string', 'max:255'],
            'physicaladdresstown' => ['required', 'string', 'max:255'],
            'estate' => ['required', 'string', 'max:255'],
            'building' => ['required', 'string', 'max:255'],
            'housenumber' => ['required', 'string', 'max:255'],
            'nextofkin' => ['required', 'string', 'max:255'],
            'nextofkinno' => ['required', 'string', 'max:255','unique:'.User::class],
            'relationship' => ['required', 'string', 'max:255'],


            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,

            'altphone' => $request->altphone,
            'idPp' => $request->idPp,
            'dob' => $request->dob,
            'postaladdress' => $request->postaladdress,
            'postalcode' => $request->postalcode,
            'town' => $request->town,
            'physicaladdresstown' => $request->physicaladdresstown,
            'estate' => $request->estate,
            'building' => $request->building,
            'housenumber' => $request->housenumber,
            'nextofkin' => $request->nextofkin,
            'nextofkinno' => $request->nextofkinno,
            'relationship' => $request->relationship,

            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
