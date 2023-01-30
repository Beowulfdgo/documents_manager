<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
@vite('resources/assets/filepond/css/filepond.css')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                 <form method="POST" action="{{ route('Upload.store') }}"  enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                  
                    @auth
      <!--
                    {{ Auth::user()->name }}
                    {{ Auth::user()->departments_id  }}
                    {{ Auth::user()->id  }}
                    // The user is login...
                    <div> 
                        <input type="text" id="departments_id" name="departments_id" value={{Auth::user()->departments_id}}><br><br>
                      </div>
                    -->    
                @endauth
                
                
                @guest
                
                    // The user is not login...
                
                @endguest

                @php   
                $department = App\Http\Controllers\DepartmentController::department(Auth::user()->departments_id);
                @endphp 
                <tr>
                   <td>
                       <label for="">Departament {{ $department->name}} </label> 
                       @php
                      $documents = App\Http\Controllers\UploadController::allFiles($department->id);
                       @endphp  
                       @if (is_array($documents)|| is_object($documents))      
                         @foreach ($documents as $document )
                       <td>
                        <!--   <a href="{{ $document->path.$document->departments_id."/".$document->name}}">{{ $document->name}}</a>-->
                        <br>
                        <a href="{{ route('Upload.download', ['path' => 'storage/'.$document->path.$document->departments_id, 'file' => $document->name]) }}">{{ $document->name}}</a>              

                        </td>       
                       @endforeach
                       @endif
                   </td>   
               </tr>         

       
       </table>

                  <div>
                 <x-input-label for="name" value="File" />
                 </div> 

                 <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
                 <x-primary-button class="ml-4">
                {{ __('Upload') }}
                 </x-primary-button>   
                </div>
                </form>   
                </div>
            </div>
        </div>
    </div>
    @vite('resources/assets/filepond/js/filepond.js') 
    <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Create FilePond object
    const inputElement = document.querySelector('input[name="file"]');
    const pond = FilePond.create(inputElement);
    FilePond.setOptions({
        server: {
            process: '/tmp-upload',
            revert:'/tmp-delete',
            headers: {
                'X-CSRF-TOKEN':'{{csrf_token()}}'
            }
        }  
    });
  });      
</script> 
</x-app-layout>
