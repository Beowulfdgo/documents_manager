<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            @guest
             

          <!--  // The user is not login...-->
  
        @endguest
       

        <div class="max-w-sm rounded overflow-hidden shadow-lg">
          <img src="{{ Storage::url("/companies/".$company->file) }}" alt="Imagen"> 
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">The Department</div>
            <p class="text-gray-700 text-base">
              
            </p>
          </div>
          <div class="px-6 pt-4 pb-2">
            <select id="myselect" name="myselect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="1" >Select a Department</option>
              @foreach ($departments as $department)  
              <option value="{{ $department->id }}" >{{ $department->name }}</option>
              @endforeach   
            </select>  

        <!-- <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="inline-flex items-center rounded-lg bg-blue-700 px-4 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Depto <svg class="ml-2 h-4 w-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>-->
   
          <!-- Dropdown menu 
           <div id="dropdown" class="z-10 block w-44 divide-y divide-gray-100 rounded bg-white shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(327px, 70px, 0px);">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                @foreach ($departments as $department)       
              <li>
                <g href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $department->name}} </g>
                @php
                //$documents = App\Http\Controllers\UploadController::allFiles($valor);
              
                @endphp 
              </li>
              @endforeach             
            </ul>
            </div>-->
           
          </div>
        </div>

            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table  class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                          <tr>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                              File
                            </th>
                          </tr>
                        </thead class="border-b">
                        <tbody id="resultados-documentos">
                         
                        </tbody>

                      </table>
                      <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                        </thead class="border-b">
                        <tbody>
                        <tr> 
                          <th>
                          <div id="leftbutton"> </div>
                        </th>
                        <th>
                          <div id="rigthbutton"> </div>
                        </th>

                                       <!-- Botton pag -->

                        </tr>
                      </tbody>
                      </table>
                    </div>

                   
                  </div>
                </div>
              

           

</div>
</div>
</div>
</div>



<script>
    document.getElementById("myselect").addEventListener("change", function() {
      var valor = this.value;
      console.log(valor);
      //const token = document.querySelector('div[id=token]').textContent
      // Pasamos la variable de JavaScript a Blade
      window.blade = window.blade || {};
    window.blade.valor = valor;
    });
  </script>
  <script>
    function openPdf(ruta) {
  // Obtener la URL del archivo PDF en la carpeta `storage/app/public`
  
  
  var ruta='{{ asset("storage/post/1/1678130161.lya2 UI.pdf") }}'
  //const pdfUrl = '{{ asset("storage/'+ruta+'") }}';
  const pdfUrl = ruta;
  //const pdfUrl = '{{ asset("storage") }}/' + path;
  // Abrir una nueva ventana del navegador con la URL del archivo PDF
  const pdfWindow = window.open(pdfUrl, '_blank');
  pdfWindow.focus();
}

  </script>


<script>
  document.getElementById("myselect").addEventListener("change", function() {
    var valor = this.value;
    
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "/allfilesbyid/"+valor, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        console.log(this.responseText);
        var res = this.responseText;
        var obj = JSON.parse(res);
        document.getElementById("resultados-documentos").innerHTML = "";
        document.getElementById("leftbutton").innerHTML= "";
        document.getElementById("rigthbutton").innerHTML = "";
        for (x of obj.data) {
            //console.log(x.id + ' ' + x.name);
            document.getElementById("resultados-documentos").innerHTML +="<tr class='bg-white border-b'> <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'> <button type='button' onclick='openPdf()'>"+x.name+"</button></td></tr>";
         }
         document.getElementById("leftbutton").innerHTML += "<button type='button' onclick='allfilesbyid(" +'"'+ obj.first_page_url +'"'+ ")' >« Previous</button>";
         if ( obj.next_page_url == null)
         document.getElementById("rigthbutton").innerHTML = "";
          else 
          document.getElementById("rigthbutton").innerHTML += "<button type='button' onclick='allfilesbyid(" +'"'+ obj.next_page_url +'"'+ ")' >Next »</button>";
         }
    };
    xhr.send("/" + encodeURIComponent(valor));
  });
</script>
<script>
  function allfilesbyid(valor){       
    var xhr = new XMLHttpRequest();
    console.log("Here"+valor);
    xhr.open("GET", valor, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        console.log(this.responseText);
        var res = this.responseText;
        var obj = JSON.parse(res);
        //document.getElementById("resultados-documentos").innerHTML +="<tr class='bg-white border-b'> <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>""</td></tr>";
        document.getElementById("resultados-documentos").innerHTML = "";
        document.getElementById("leftbutton").innerHTML= "";
        document.getElementById("rigthbutton").innerHTML = "";
        for (x of obj.data) {
            //console.log(x.id + ' ' + x.name);
            document.getElementById("resultados-documentos").innerHTML +="<tr class='bg-white border-b'> <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>"+x.name+"</td></tr>";
         }
         document.getElementById("leftbutton").innerHTML += "<button type='button' onclick='allfilesbyid(" +'"'+ obj.first_page_url +'"'+ ")' >« Previous</button>";
         if ( obj.next_page_url == null)
         document.getElementById("rigthbutton").innerHTML = "";
          else 
          document.getElementById("rigthbutton").innerHTML += "<button type='button' onclick='allfilesbyid(" +'"'+ obj.next_page_url +'"'+ ")' >Next »</button>";
       

        //document.getElementById("add_to_me").innerHTML +=obj[1].name;
      }
    };
    xhr.send("/" + encodeURIComponent(valor));
  }
</script>
<script>
function clickOrigin(e){
    var target = e.target;
    var tag = [];
    tag.tagType = target.tagName.toLowerCase();
    tag.tagClass = target.className.split(' ');
    tag.id = target.id;
    tag.parent = target.parentNode;
    
    return tag;
}

var tagsToIdentify = ['g'];

document.body.onclick = function(e){
    elem = clickOrigin(e);
    
    for (i=0;i<tagsToIdentify.length;i++){
        if (elem.tagType == tagsToIdentify[i]){
            console.log('You\'ve clicked a monitored tag (' + elem.tagType + ', in this case).');
            return false; // or do something else.
        }
    }
};
</script>

  <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
