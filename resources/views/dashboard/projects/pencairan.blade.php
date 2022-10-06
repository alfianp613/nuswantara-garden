@extends('dashboard.layouts.main')

@section('container')
<card class="card" style="width: 50%;margin-top:2rem">
    <div class="card-body">
        <form id="formtable" method="post" action="/dashboard/project/{{$project->slug}}/{{auth()->user()->id}}/payment">
            @csrf
            <div class="mb-3">
                <p>Project yang dicairkan {{$project->title}}</p>
                <label class="form-label">Nominal Pencairan</label>
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
                <p>Maksimal pencairan Rp {{$project->dana_terkumpul-$project->dana_terambil}}</p>
            </div>
            

            <button class="btn btn-primary" onclick="return button_donasi()">
                Ambil
            </button>
            <script>
                function button_donasi()
                {
                    const nominal = document.querySelector('#nominal');
                    alert('Apakah kamu yakin akan melakukan pencairan dana dengan nominal Rp '+nominal.value+'?');
                }
            </script>
        </form>
    </div>
</card>


@endsection