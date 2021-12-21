<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item {{ request()->is('/') ? 'active': ''}}">
        <a href="/" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>Home</p>
        </a>
      </li>
      
      <li class="nav-item {{ request()->is('/absensi') ? 'active': ''}}">
        <a href="/absensi" class="nav-link">
          <i class="nav-icon fas fa-pencil-square"></i>
          <p>Absensi</p>
        </a>
      </li>
      
      <li class="nav-item {{ request()->is('/crew') ? 'active': ''}}">
        <a href="/crew" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>Crew</p>
        </a>
      </li>
      
      <li class="nav-item {{ request()->is('/gallery') ? 'active': ''}}">
        <a href="/gallery" class="nav-link">
          <i class="nav-icon fas fa-camera"></i>
          <p>Gallery</p>
        </a>
      </li>
      
      {{-- multi-level --}}
      {{-- <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Multi Menu
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../../index.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Menu I</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Menu II</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../index3.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Menu III</p>
            </a>
          </li>
        </ul>
      </li> --}}
      
      
      
      
    
    </ul>
</nav>