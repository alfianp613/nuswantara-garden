@extends('layouts/main')

@section('container')
<card class="card" style="width: 18rem">
    <div class="card-body">
        <form id="formtable" method="post" action="/donasi/{{$project->slug}}/{{auth()->user()->id}}">
            @csrf
            <div class="mb-3">
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
            

            <button type="submit" class="btn btn-primary">
                Bayar
            </button>
        </form>
    </div>
</card>
@endsection