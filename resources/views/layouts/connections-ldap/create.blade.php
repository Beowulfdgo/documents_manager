   
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Connection LDAP') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Connection create") }}
                <form action="{{ route('connections-ldap.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="host">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="host">Server</label>
                        <input type="text" name="server" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="port">Port</label>
                        <input type="text" name="port" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="base_dn">Base DN</label>
                        <input type="text" name="base_dn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <x-primary-button class="ml-4">
                        {{ __('Create') }}
                         </x-primary-button>   
                </form>
            </div>
        </div>
    </div>
</x-app-layout>