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
          <card class="card" style="width: 18rem">
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
              <div class="card-body">
                  <form
                      id="formtable"
                      method="post"
                      action="/login-user"
                  >
                  @csrf
                      <div class="mb-3">
                          <label
                          for="email"
                              class="form-label  @error('email') is-invalid @enderror"
                              >Email address</label
                          >
                          <input
                              type="email"
                              class="form-control"
                              id="email"
                              name='email'
                              value="{{ old('email') }}"
                              autofocus
                              required
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
                          <label
                            for="password"
                              class="form-label"
                              >Password</label
                          >
                          <input
                              type="password"
                              id="password"
                              name="password"
                              class="form-control  @error('password') is-invalid @enderror"
                              requireds
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
                      
                      <button
                          type="submit"
                          class="btn btn-primary"
                      >
                          LOG IN
                      </button>
                      <a
                          href="/signup-user"
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