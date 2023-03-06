
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>
    @vite('resources/assets/filepond/css/filepond.css')
    @vite('resources/assets/filepond/css/filepond-plugin-image-preview.css')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Companies create") }}
        <form method="POST" action="{{ route('Upload.companystore') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <fieldset>
                <legend>Choose Company Active features:</legend>
            
                <div>
                    <select name="status" id="status" class="form-control">
                        <option value="true">Active</option>
                        <option value="false">Inactive</option>
                    </select>     
                 <!-- <input type="checkbox" id="status" name="status" value="true" onclick="cat_check()" checked>-->
                  <label id="text" style="display:inline">Active</label>
                </div>

            </fieldset>
            <div class="form-group">
                <label for="description">Logo:</label>
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
                <x-primary-button class="ml-4">
                    {{ __('Create') }}
                     </x-primary-button>   
                <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
</div>

@vite('resources/assets/filepond/js/filepond-plugin-image-preview.js') 
@vite('resources/assets/filepond/js/filepond.js') 
<script>
 function cat_check()
{
    var checkBox = document.getElementById('status');
    var text = document.getElementById('text');

    if (checkBox.checked === true)
    {
        text.style.display = "inline";
        checkBox.value = "true";
    }
    else
    {
        //text.style.display = "none";
        checkBox.value = "false";
    }
    
    console.log(checkBox.value);
}   
document.addEventListener('DOMContentLoaded', function() {
FilePond.registerPlugin(FilePondPluginImagePreview);
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