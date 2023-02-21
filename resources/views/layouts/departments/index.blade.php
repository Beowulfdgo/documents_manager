
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Departments') }}
        </h2>
    </x-slot>
     
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Department list</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('department.create') }}"> Create Department</a>
                    </div>
                </div>
            </div>
            <table class="min-w-full text-center">
                <thead class="border-b bg-gray-800">
                    <tr>
                   <!--     <th scope="col" class="text-sm font-medium text-white px-6 py-4">S.No</th>-->
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Company Name</th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Action</th>
                    </tr>
                </thead class="border-b">
                <tbody>
                    @foreach ($departments as $department)
                        <tr>
                           <!-- <td>{{ $department->id }}</td>-->
                            <td>{{ $department->name }}</td>
                            <td>
                                <form action="{{ route('department.destroy',$department->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('department.edit',$department->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="ml-4" type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
          
        </div>
</x-app-layout>