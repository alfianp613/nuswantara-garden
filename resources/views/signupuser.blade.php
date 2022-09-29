@extends('layouts/login')

@section('container')
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
                          <label class="form-label"
                              >Username</label
                          >
                          <input
                              type="text"
                              class="form-control"
                              name="user-name"
                          />
                      </div>
                      <div class="mb-3">
                          <label class="form-label"
                              >Nama Lengkap</label
                          >
                          <input
                              type="text"
                              class="form-control"
                              name="user-namelengkap"
                          />
                      </div>
                      <div class="mb-3">
                          <label class="form-label"
                              >Tanggal Lahir</label
                          >
                          <input
                              type="date"
                              class="form-control"
                              name="orderdate"
                          />
                      </div>
                      <div class="mb-3">
                          <label class="form-label"
                              >Nomor Telepon</label
                          >
                          <input
                              type="text"
                              class="form-control"
                              name="user-notelp"
                          />
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

                      {{-- <button
                          type="submit"
                          class="btn btn-primary"
                      >
                          SIGN UP
                      </button> --}}
                      <a
                          href="/login-user"
                          class="btn btn-primary"
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