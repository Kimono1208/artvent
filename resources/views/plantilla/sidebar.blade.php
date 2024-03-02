{{-- @extends('plantilla.plantilla_adm')

@section('sidebar') --}}
<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="{{ asset('./assets/img/logo-ct.png') }} " class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">ArtVent</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">

<li class="nav-item">
  <a class="nav-link text-white " href="{{ route("dashboard") }}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>

    <span class="nav-link-text ms-1">Dashboard</span>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link text-white " href="{{ route("piezas.index") }}">

      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">table_view</i>
      </div>

    <span class="nav-link-text ms-1">Piezas</span>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link text-white " href="{{ route("clientes.index") }}">

      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">receipt_long</i>
      </div>

    <span class="nav-link-text ms-1">Clientes</span>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link text-white " href="{{ route("eventos.index") }}">

      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">view_in_ar</i>
      </div>

    <span class="nav-link-text ms-1">Eventos</span>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link text-white " href="{{ route("toldos.index") }}">

      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
      </div>

    <span class="nav-link-text ms-1">Toldos</span>
  </a>
</li>

    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
    </li>


@if (Auth::user()->isAdmin() || Auth::user()->isWorker())


<li class="nav-item">
  <a class="nav-link text-white " href="{{ route("piezas.index") }}">

      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">person</i>
      </div>

    <span class="nav-link-text ms-1">Lo ve el admin y worker</span>
  </a>
</li>
@endif

@if (Auth::user()->isAdmin())
<li class="nav-item">
  <a class="nav-link text-white " href="{{ route("piezas.index") }}">

      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">login</i>
      </div>

    <span class="nav-link-text ms-1">Solo lo ve el admin</span>
  </a>
</li>
@endif

@if (Auth::user()->isWorker())

<li class="nav-item">
    <a class="nav-link text-white " href="{{ route("piezas.index") }}">

        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">assignment</i>
        </div>

        <span class="nav-link-text ms-1">Solo lo ve el worker</span>
    </a>
</li>
@endif
    </ul>
  </div>
{{-- @endsection --}}
