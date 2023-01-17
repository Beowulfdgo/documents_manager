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
                    {{ __("You're logged in!") }}
                 <form method="POST" action="{{ route('Upload.store') }}"  enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                  
                  <div> 
                    <input type="text" id="name" name="name"><br><br>
                  </div>  
                  
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
    const inputElement = document.querySelector('input[id="file"]');
    const pond = FilePond.create(inputElement);
    FilePond.setOptions({
        server: {
            process: '/upload',
            headers: {
                'X-CSRF-TOKEN':'{{csrf_token()}}'
            }
        }  
    });
  });      
</script> 
</x-app-layout>
