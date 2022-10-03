@extends('layouts/login') @section('container')
<div class="row">
    <!-- section one -->
    <div class="col text-center">
        <section class="one">
            <h1>INI DESC</h1>
        </section>
    </div>
    <!-- end section one -->

    <!-- section two -->
    <div class="col text-center">
        <section class="two">
            <card class="card" style="width: 18rem">
                <div class="card-body">
                    <form id="formtable" method="post" action="/signup-user">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label"
                                >Email address</label
                            >
                            <input
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name='email'
                                id="email"
                                required
                                autofocus
                                value="{{ old('email') }}"
                            />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @else
                                <div class="form-text">
                                    We'll never share your email with anyone else.
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input
                                type="text"
                                class="form-control @error('username') is-invalid @enderror"
                                name="username"
                                id="username"
                                required
                                value="{{ old('username') }}"
                            />
                            @error('username')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input
                                type="text"
                                class="form-control @error('nama') is-invalid @enderror"
                                name="nama"
                                id="nama"
                                required
                                value="{{ old('nama') }}"
                            />
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input
                                type="date"
                                class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                name="tanggal_lahir"
                                id="tanggal_lahir"
                                required
                                value="{{ old('tanggal_lahir') }}"
                            />
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Telepon</label>
                            <input
                                type="text"
                                class="form-control @error('no_telepon') is-invalid @enderror"
                                name="no_telepon"
                                id="no_telepon"
                                required
                                value="{{ old('no_telepon') }}"
                            />
                            @error('no_telepon')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="inputPassword5" class="form-label"
                                >Password</label
                            >
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                required
                            />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @else
                            <div id="passwordHelpBlock" class="form-text">
                                Must be 8-20 characters long.
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            SIGN UP
                        </button>
                    </form>
                </div>
            </card>
        </section>
    </div>
    <!-- end section two -->
</div>
@endsection
