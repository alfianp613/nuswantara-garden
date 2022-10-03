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
        <ul class="nabar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Halo, {{auth()->user()->nama}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">My Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="">
                  <button type="submit" class="dropdown-item">Log Out</button>
                </form>
            </ul>
          </li>

          @endauth
        </ul>
          
        
      </div>
    </div>
</nav>