@extends('layouts/main')

@section('container')
<card class="card" style="width: 50%">
    <div class="card-body">
        <form id="formtable" method="post" action="/donasi/{{$project->slug}}/{{auth()->user()->id}}">
            @csrf
            <div class="mb-3">
                <p>Donasi untuk project {{$project->title}}</p>
                <p>Petani: {{$project->user->name}}</p>
                <label class="form-label">Nominal Donasi</label>
                <input
                    type="number"
                    class="form-control @error('nominal') is-invalid @enderror"
                    name="nominal"
                    id="nominal"
                    required
                    autofocus
                    value="{{ old('nominal') }}"
                />
                @error('nominal')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            

            <button class="btn btn-primary" onclick="return button_donasi()">
                Bayar
            </button>
            <script>
                function button_donasi()
                {
                    const nominal = document.querySelector('#nominal');
                    alert('Apakah kamu yakin akan melakukan donasi dengan nominal Rp '+nominal.value+'?');
                }
            </script>
        </form>
    </div>
</card>


@endsection