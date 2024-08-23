<x-guest-layout>

<p class="text-center">Application Part 1</p>
    <form method="POST" action="{{ route('register') }}">
        @csrf

    

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

    <div>
        <x-input-label for="name" :value="__('Enter name in full')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>


    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="phone" :value="__('Phone Number')" />
        <x-text-input id="phone" class="block mt-1 w-full" type="phone" name="phone" :value="old('phone')" required autocomplete="phone" />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>




    <!-- Add other fields here -->



    <div>
        <x-input-label for="altphone" :value="__('Alternative Number')" />
        <x-text-input id="phone" class="block mt-1 w-full" type="phone" name="altphone" :value="old('altphone')" required autocomplete="altphone" />
        <x-input-error :messages="$errors->get('altphone')" class="mt-2" />
    </div>



     <div>
        <x-input-label for="idPp" :value="__('ID/Passport No')" />
        <x-text-input id="idPp" class="block mt-1 w-full" type="text" name="idPp" :value="old('idPp')" required autocomplete="idPp" />
        <x-input-error :messages="$errors->get('idPp')" class="mt-2" />
    </div>


     <div>
        <x-input-label for="DOB" :value="__('Date of Birth')" />
        <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autocomplete="dob" />
        <x-input-error :messages="$errors->get('dob')" class="mt-2" />
    </div>


     <div>
        <x-input-label for="postaladdress" :value="__('Postal Address: P.O Box')" />
        <x-text-input id="postaladdress" class="block mt-1 w-full" type="number" name="postaladdress" :value="old('postaladdress')" required autocomplete="postaladdress" />
        <x-input-error :messages="$errors->get('postaladdress')" class="mt-2" />
    </div>



     <div>
        <x-input-label for="postalcode" :value="__('Postal Code')" />
        <x-text-input id="postalcode" class="block mt-1 w-full" type="number" name="postalcode" :value="old('postalcode')" required autocomplete="postalcode" />
        <x-input-error :messages="$errors->get('postalcode')" class="mt-2" />
    </div>



     <div>
        <x-input-label for="town" :value="__('Town')" />
        <x-text-input id="town" class="block mt-1 w-full" type="text" name="town" :value="old('town')" required autocomplete="town" />
        <x-input-error :messages="$errors->get('town')" class="mt-2" />
    </div>

    
     <div>
        <x-input-label for="Physical Address:Town" :value="__('Physical Address:Town')" />
        <x-text-input id="physicaladdresstown" class="block mt-1 w-full" type="text" name="physicaladdresstown" :value="old('physicaladdresstown')" required autocomplete="physicaladdresstown" />
        <x-input-error :messages="$errors->get('physicaladdresstown')" class="mt-2" />
    </div>



     <div>
        <x-input-label for="estate" :value="__('Estate')" />
        <x-text-input id="estate" class="block mt-1 w-full" type="text" name="estate" :value="old('estate')" required autocomplete="estate" />
        <x-input-error :messages="$errors->get('estate')" class="mt-2" />
    </div>



    <div>
        <x-input-label for="building" :value="__('Building')" />
        <x-text-input id="building" class="block mt-1 w-full" type="text" name="building" :value="old('building')" required autocomplete="building" />
        <x-input-error :messages="$errors->get('building')" class="mt-2" />
    </div>



     <div>
        <x-input-label for="housenumber" :value="__('House Number')" />
        <x-text-input id="housenumber" class="block mt-1 w-full" type="number" name="housenumber" :value="old('housenumber')" required autocomplete="housenumber" />
        <x-input-error :messages="$errors->get('housenumber')" class="mt-2" />
    </div>


    <div>
        <x-input-label for="nextofkin" :value="__('Next of Kin')" />
        <x-text-input id="nextofkin" class="block mt-1 w-full" type="text" name="nextofkin" :value="old('nextofkin')" required autocomplete="nextofkin" />
        <x-input-error :messages="$errors->get('nextofkin')" class="mt-2" />
    </div>


    <div>
        <x-input-label for="nextofkinno" :value="__('Next of Kin Number')" />
        <x-text-input id="nextofkinno" class="block mt-1 w-full" type="phone" name="nextofkinno" :value="old('nextofkinno')" required autocomplete="nextofkinno" />
        <x-input-error :messages="$errors->get('nextofkinno')" class="mt-2" />
    </div>


    <div>
        <x-input-label for="relationship" :value="__('Relationship')" />
        <x-text-input id="relationship" class="block mt-1 w-full" type="text" name="relationship" :value="old('relationship')" required autocomplete="relationship" />
        <x-input-error :messages="$errors->get('relationship')" class="mt-2" />
    </div>



      <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

</div>
    </form>
</x-guest-layout>
