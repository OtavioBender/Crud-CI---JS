<nav class="navbar navbar-dark fixed-top  flex-md-nowrap p-0 shadow" style="background-color: #8B0000">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= base_url()?>principal">Teste Crud C4</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?= base_url()?>login/logout">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Menu</span>
          <a class="d-flex align-items-center text-muted" href="" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>principal" style="color: #8B0000">
              <span data-feather="file"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>registro" style="color: #8B0000" >
              <span data-feather="shopping-cart"></span>
              Criar novo usuario
            </a>
					</li>
           <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>user" style="color: #8B0000" >
              <span data-feather="shopping-cart"></span>
              Consulta de Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>produto" style="color: #8B0000" >
              <span data-feather="shopping-cart"></span>
              Criar produto
            </a>
          </li>
        </ul>
      </div>
    </nav>
