<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="{{Route::is('admin.dashboard') ? 'nav-link':'nav-link collapsed'}}" href="{{route('admin.dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item menu-open">
        <a class="{{Route::is('employee*') ? 'nav-link':'nav-link collapsed'}}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#" aria-expanded="true">
          <i class="bi bi-menu-button-wide"></i><span>Database BKI BATAM</span><i class="bi bi-plus-lg ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('employee')}}" class="{{Route::is('employe*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>Employee</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('invoice')}}" class="{{Route::is('invoice*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>Performa Invoice</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('project23')}}" class="{{Route::is('project23*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>Project 2023</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('project24')}}" class="{{Route::is('project24*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>Project 2024</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('form')}}" class="{{Route::is('form*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>Form SPI</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('certificate')}}" class="{{Route::is('certificate*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>No Certificate</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('marine')}}" class="{{Route::is('marine*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>Marine</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('energy')}}" class="{{Route::is('energy*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>Energy</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('report')}}" class="{{Route::is('report*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>No Report</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('industri')}}" class="{{Route::is('industri*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>Industri</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('ndt')}}" class="{{Route::is('ndt*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>NDT</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('lab')}}" class="{{Route::is('lab*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>LAB</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('operasi')}}" class="{{Route::is('operasi*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>S.Operasi</span>
            </a>
          </li>
        </ul>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" nav-content="" collapse="" show="" style="">
          <li>
            <a href="{{route('rab')}}" class="{{Route::is('rab*') ? 'active':''}}">
              <i class="bi bi-circle"></i><span>RAB</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
    </ul>

  </aside><!-- End Sidebar-->
