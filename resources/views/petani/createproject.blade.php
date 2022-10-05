@extends('layouts/petani')

@section('container')
<card class="card" style="width: 75%%">
    <div class="card-body">
        <form id="formtable" method="post" action="/create-project/create">
        @csrf
            <div class="mb-3">
                <label class="form-label">Nama Project</label>
                <input
                    type="text"
                    class="form-control @error('title') is-invalid @enderror"
                    id="title"
                    name='title'
                    value="{{ old('title') }}"
                    autofocus
                    required
                />
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input
                    type="text"
                    class="form-control @error('slug') is-invalid @enderror"
                    id="slug"
                    name='slug'
                    value="{{ old('slug') }}"
                    required
                />
            </div>
            @error('slug')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror

            <div class="mb-3">
                <label class="form-label">Status Project</label>
                <select class="form-select @error('slug') is-invalid @enderror" id="status_project" name="status_project" required>
                    <option value="Perencanaan">Perencanaan</option>
                    <option value="Berjalan">Berjalan</option>
                    <option value="Selesai">Selesai</option>
                </select>
                @error('slug')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Target Dana</label>
                <input
                    type="number"
                    class="form-control"
                    id="target_pendanaan"
                    name="target_pendanaan"
                    value="{{ old('target_pendanaan') }}"
                    required
                />
                @error('target_pendanaan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for='deskripsi_project' class="form-label">Deskripsi Project</label>
                @error('deskripsi_project')
                <p class="text-danger">
                    {{$message}}
                </p>
                @enderror
                <input id="deskripsi_project" type="hidden" name="deskripsi_project">
                <trix-editor input="deskripsi_project"></trix-editor>
                
            </div>

            <button type="submit" class="btn btn-primary">
                Buat Project
            </button>
        </form>
    </div>
</card>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/create-project/createslug?title='+title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection