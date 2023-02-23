<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Connection LDAP') }}
        </h2>
    </x-slot>
    <h1>Lista de Conexiones LDAP</h1>

    <a href="{{ route('connections-ldap.create') }}" class="btn btn-primary">Nueva Conexión LDAP</a>

    <table class="min-w-full text-center">
        <thead class="border-b bg-gray-800">
            <tr>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">ID</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nombre</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Description</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Server</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Puerto</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Base DN</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Username</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">password</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Acciones</th>
            </tr>
        </thead class="border-b">
        <tbody>
            @foreach($connectionsLdap as $connection)
                <tr>
                    <td>{{ $connection->id }}</td>
                    <td>{{ $connection->name }}</td>
                    <td>{{ $connection->description }}</td>
                    <td>{{ $connection->server }}</td>
                    <td>{{ $connection->port }}</td>
                    <td>{{ $connection->base_dn }}</td>
                    <td>{{ $connection->username }}</td> 
                    <td>{{ $connection->password }}</td>
                    <td>
                         <a href="{{ route('connections-ldap.edit', $connection->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('connections-ldap.destroy', $connection->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>

