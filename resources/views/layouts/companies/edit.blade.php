    <div class="container">
        <h1>Editar Compañía</h1>
        <form action="{{ route('companies.update', $company->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}">
            </div>
            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea name="description" id="description" class="form-control">{{ $company->description }}</textarea>
            </div>
            <fieldset>
                <legend>Choose Company Active features:</legend>
            
                <div>
                 <!-- <input type="checkbox" id="status" name="status" value="{{ $company->status }}" >-->
                 <select name="status" id="status" class="form-control">
                  <option value="true" {{ $company->status ? 'selected' : '' }}>Active</option>
                  <option value="false" {{ !$company->status ? 'selected' : '' }}>Inactive</option>
                  <label for="scales">Active</label>
                </select>
                </div>

            </fieldset>
            <div class="form-group">
                <label for="description">logo:</label>
                <textarea name="file" id="file" class="form-control">{{ $company->file }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form
