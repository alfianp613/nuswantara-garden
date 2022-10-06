
        <style>
          /* CSS NAVBAR */
          /* color navbar n toggler */
          .navbar {
              background-color: #2c4a44;
          }
          .active{
            color: #ece3d4;
          }
          /* 3 lines inside toggler */
          .custom-toggler .navbar-toggler-icon {
              background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(179,187,153, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
          }
          /* border toggler */
          .custom-toggler.navbar-toggler {
              border-color: #b3bb99;
          }
          /* color text */
          .navbar-brand {
              color: #b3bb99;
              font-weight: bold;
          }
          .navbar-brand:hover {
              color: #ece3d4;
          }
          .nav-link {
              color: #b3bb99;
          }
          .nav-link:hover {
              color: #ece3d4;
          }
          /* CSS NAVBAR END */
      </style>
      <nav class="navbar navbar-expand-lg fixed-top">
          <!-- navbar-light bg-light -->
          <div class="container-fluid">
              
              <a class="navbar-brand" href="/"><img src="/img/logohead.png" alt="logo" height="30px"> NUSWANTARA</a>
              <button
                  class="navbar-toggler custom-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarNavAltMarkup"
                  aria-controls="navbarNavAltMarkup"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
              >
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div
                  class="collapse navbar-collapse justify-content-end"
                  id="navbarNavAltMarkup"
              >
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link {{ ($title==="Home")? "active" : "" }}" href="/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ ($title==="Project")? "active" : "" }}" href="/project">Project</a>
                  </li>
                </ul> 
                
                <ul class="nabar-nav ms-auto" style="list-style-type: none;padding: 0;">
                  @if(auth()->check())
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown">
                      Halo, {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/user/{{auth()->user()->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg> My Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                          </svg> Log Out</button>
                        </form>
                    </ul>
                  </li>
                  @endif
                </ul>
              </div>
          </div>
      </nav>

<!-- end header section -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/home">User</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title==="Home")? "active" : "" }}" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title==="Project")? "active" : "" }}" href="/project">Project</a>
          </li>
        </ul> 
        @if(auth()->check())
        <ul class="nabar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Halo, {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/profiluser">My Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Log Out</button>
                </form>
            </ul>
          </li>
          @endif
        </ul>
          
        
      </div>
    </div>
</nav>