<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Departments') }}
        </h2>
    </x-slot>
  
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2>Lista de usuarios</h2>
                <a href="{{ route('register') }}" class="btn btn-primary">Agregar usuario</a>
                <hr>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="min-w-full text-center">
                    <thead class="border-b bg-gray-800">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">ID</th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nombre</th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">Email</th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td> 
                                   <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Editar</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
