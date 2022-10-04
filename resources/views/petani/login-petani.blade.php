@extends('layouts/login')

@section('container')
<div class="row">
    <!-- section one -->
    <div class="col text-center">
        <section class="one">
            <h1>INI SLIDER</h1>
        </section>
    </div>
    <!-- end section one -->

    <!-- section two -->
    <div class="col text-center">
        <section class="two">
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
            {{ session('success')}}
            </div>
            @endif

            @if (session()->has("loginError"))
            <div class="alert alert-danger" role="alert">
                {{ session('loginError')}}
                </div>
            @endif
            <card class="card" style="width: 18rem">
                <div class="card-body">
                    <form
                        id="formtable"
                        method="post"
                        action="postform.php"
                    >
                        <div class="mb-3">
                            <label
                                for="exampleInputEmail1"
                                class="form-label"
                                >Email address</label
                            >
                            <input
                                type="email"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                            />
                            <div id="emailHelp" class="form-text">
                                We'll never share your email with
                                anyone else.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label
                                for="inputPassword5"
                                class="form-label"
                                >Password</label
                            >
                            <input
                                type="password"
                                id="inputPassword5"
                                class="form-control"
                                aria-describedby="passwordHelpBlock"
                            />
                            <div
                                id="passwordHelpBlock"
                                class="form-text"
                            >
                                Must be 8-20 characters long.
                            </div>
                        </div>
                        <a
                        href="/homepetani"
                        class="btn btn-primary"
                        >LOGIN</a>
                        {{-- <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            LOGIN
                        </button> --}}
                        <a
                            href="/signup-petani"
                            class="btn btn-secondary"
                            >SIGN UP</a
                        >
                    </form>
                </div>
            </card>
        </section>
    </div>
    <!-- end section two -->
</div>
@endsection