<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{route('contact')}} ">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/{id}">category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('kids.index')}}">kids</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('kids.create')}}">Create</a>
        </li>
      </ul>
    </div>
  </div>
</nav>