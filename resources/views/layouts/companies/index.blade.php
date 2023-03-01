
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>
     

<div class="container">
        <h1>Companies List</h1>
        <p><a href="{{ route('companies.create') }}" class="btn btn-success">Add new company</a></p>
        <table class="min-w-full text-center">
                <thead class="border-b bg-gray-800">
                <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Name</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Description</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">logo</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Active</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->description }}</td>
                    <td>{{ $company->file }}</td>
                    <td>{{ $company->status }}</td>
                    <td>
                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta compañía?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </x-app-layout>