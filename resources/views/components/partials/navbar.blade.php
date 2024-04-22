<nav class="navbar navbar-expand-lg bg-body-tertiary shadow sticky-top">
  <div class="container">
      <a class="navbar-brand" href="#">Sistema de Gestion de Inventario </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ url ('') }}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('products.index') }}">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('suppliers.index') }}">Suppliers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Users</a>
              </li>
              <li class="nav-item">
                <!-- Separador vertical -->
                <span class="navbar-vertical-divider"></span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
          </ul>
      </div>
  </div>
</nav>


