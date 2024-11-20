@extends('admin.layouts.master')

@section('content')
<div class="card p-5" style="background-color: #d9dfe9!important;">
    <h2 class="main-title">Créer une publication</h2>
    
    <div class="col-sm-6">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                       id="title" name="title" value="{{ old('title') }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="content">Contenu</label>
                <textarea class="form-control @error('content') is-invalid @enderror" 
                          id="content" name="content" rows="10" required>{{ old('content') }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" 
                       id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Publier</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')

<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection