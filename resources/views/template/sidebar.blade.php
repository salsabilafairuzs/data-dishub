<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="/"><img src="/backend/assets/img/dishub-logo.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="/"><img src="/backend/assets/img/dishub-logo.png" alt="logo"/></a>
      </div>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ set_active(['dashboard.index']) }} ">
        <a href="/dashboard" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <!-- Layouts -->
      <!-- Components -->
      <!-- Cards -->
      <!-- User interface -->


      <!-- Forms & Tables -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Data Master</span></li>
     <!-- LLAJ -->
     <li class="menu-item {{ set_active(['kecelakaan.index', 'kendaraan.index']) }} {{ set_open(['kecelakaan.index', 'kendaraan.index']) }}">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-box"></i>
          <div data-i18n="User interface">LLAJ</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="/kecelakaan" class="menu-link {{ set_active(['kecelakaan.index']) }}">
              <div data-i18n="Accordion">Data Kecelakaan</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/kendaraan" class="menu-link {{ set_active(['kendaraan.index']) }} ">
              <div data-i18n="Alerts">Data Kendaraan</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/ruas-jalan" class="menu-link">
              <div data-i18n="Badges">Data Kondisi Ruas Jalan</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/flashing" class="menu-link">
              <div data-i18n="Buttons">Data Lokasi Flashing</div>
            </a>
          </li>
        </ul>
      </li>
      <!-- Forms -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-detail"></i>
          <div data-i18n="Form Layouts">Form Layouts</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="form-layouts-vertical.html" class="menu-link">
              <div data-i18n="Vertical Form">Vertical Form</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="form-layouts-horizontal.html" class="menu-link">
              <div data-i18n="Horizontal Form">Horizontal Form</div>
            </a>
          </li>
        </ul>
      </li>
      <!-- Tables -->
      <li class="menu-item">
        <a href="tables-basic.html" class="menu-link">
          <i class="menu-icon tf-icons bx bx-table"></i>
          <div data-i18n="Tables">Tables</div>
        </a>
      </li>
      <!-- Laporan -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Laporan</span></li>
      <li class="menu-item">
        <a
          href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
          target="_blank"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div data-i18n="Documentation">Laporan</div>
        </a>
      </li>
    </ul>
  </aside>
  <!-- / Menu -->