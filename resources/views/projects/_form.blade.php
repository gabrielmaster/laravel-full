@csrf

<div class="form-group">
        <label for="title">Titulo del proyecto</label>
        <input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror" type="text" id="title" name="title" placeholder="title..." value="{{ old('title',$project->title) }}">
</div>
<div class="form-group">
        <label for="url">URL del proyecto</label>
        <input class="form-control bg-light shadow-sm @error('url') is-invalid @else border-0 @enderror" type="text" id="url" name="url" placeholder="url..." value="{{ old('url',$project->url) }}">
</div>
<div class="form-group">
        <label for="description">Descripcion del proyecto</label>
        <textarea name="description" class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror">{{ old('description',$project->description) }}</textarea>
</div>

<button class="btn btn-success btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>
