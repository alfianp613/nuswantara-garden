@extends('layouts/petani')

@section('container')
<card class="card" style="width: 30rem">
    <div class="card-body">
        <form id="formtable" method="post" action="postform.php">
            <div class="mb-3">
                <label class="form-label">Nama Project</label>
                <input
                    type="text"
                    class="form-control"
                    id="project"
                    aria-describedby="projectHelp"
                />
            </div>

            <div class="mb-3">
                <label class="form-label">Target Dana</label>
                <input
                    type="number"
                    class="form-control"
                    id="danatarget"
                    aria-describedby="danaHelp"
                />
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi Project</label>
                <input
                    type="text"
                    id="inputproject"
                    class="form-control"
                    aria-describedby="project"
                />
            </div>

            <button type="submit" class="btn btn-primary">
                Uploud
            </button>
        </form>
    </div>
</card>
@endsection