<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/homepetani">Petani</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title==="Home")? "active" : "" }}" aria-current="page" href="/homepetani">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title==="Create Project")? "active" : "" }}" href="/create-project">Create Project</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item">Log Out</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
</nav>