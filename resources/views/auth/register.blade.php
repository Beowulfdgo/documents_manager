<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Depto Info -->
        <div class="mt-4">
            <x-input-label for="departments_id" :value="__('Departament')" />
            <select id="departments_id" name="departments_id">
                @foreach($departments as $category)
                <option value="{{$category->id}}" > {{$category->name}}</option> @endforeach
            </select>    
            </div>
                    <!-- ldap Info -->
        <div class="mt-4">
            <x-input-label for="ldapconnections_id" :value="__('Ldap')" />
            <select id="ldap" name="ldap">
                @foreach($ldapconnections as $ldapconnection)
                <option value="{{$ldapconnection->id}}" > {{$ldapconnection->name}}</option> @endforeach
            </select>    
            </div>

            <!-- user ldap -->
        <div class="mt-4">
            <x-input-label for="user" :value="__('User Ldap')" />
            <x-text-input id="user" class="block mt-1 w-full"  name="user"  required />

        </div>
                            <!-- ldap Info -->
        <div class="mt-4">
            <x-input-label for="ldapconnections_id" :value="__('Ldap')" />
            <select id="ldap" name="ldap">
                @foreach($ldapconnections as $ldapconnection)
                <option value="{{$ldapconnection->id}}" > {{$ldapconnection->name}}</option> @endforeach
            </select>    
            </div>

            <!-- guid Info -->
            <div class="mt-4">
            <x-input-label for="guid_id" :value="__('Guid')" />
            <select id="guid" name="guid">
            <option value="orclguid" >WebLogic Authentication provider </option> 
            <option value="orclguid" >Oracle Internet Directory Authentication provider</option> 
            <option value="orclguid" >Oracle Virtual Directory Authentication provider</option> 
            <option value="objectguid" >Active Directory Authentication provider</option> 
            <option value="nsuniqueid" >iPlanet Authentication provider </option> 
            <option value="guid" >Novell Authentication provider </option> 
            <option value="entryuuid" >Open LDAP Authentication provider </option> 
            </select>
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
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

       <!-- <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>-->

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
