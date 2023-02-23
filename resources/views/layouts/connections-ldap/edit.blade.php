<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('LDAP Connection') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Edit  Connection") }}
                        <form action="{{ route('connections-ldap.update', $connectionsLdap->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" value="{{ $connectionsLdap->name }}">
                            </div>
                            <div class="form-group">
                                <label for="host">description:</label>
                                <input type="text" name="description" class="form-control" value="{{ $connectionsLdap->description }}">
                            </div>
                            <div class="form-group">
                                <label for="host">server:</label>
                                <input type="text" name="server" class="form-control" value="{{ $connectionsLdap->server }}">
                            </div>
                            <div class="form-group">
                                <label for="port">Port:</label>
                                <input type="text" name="port" class="form-control" value="{{ $connectionsLdap->port }}">
                            </div>
                            <div class="form-group">
                                <label for="base_dn">Base DN:</label>
                                <input type="text" name="base_dn" class="form-control" value="{{ $connectionsLdap->base_dn }}">
                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" class="form-control" value="{{ $connectionsLdap->username }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" value="{{ $connectionsLdap->password }}">
                            </div>
                            <x-primary-button class="ml-4">
                                {{ __('Update') }}
                                 </x-primary-button>  
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>