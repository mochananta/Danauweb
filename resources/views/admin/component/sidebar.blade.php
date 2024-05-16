  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <!-- Tables Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Konten</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('berita.view') }}">
              <i class="bi bi-circle"></i><span>Data Artikel</span>
            </a>
          </li>
          <li>
            <a href="{{ route('recentpost.view') }}">
              <i class="bi bi-circle"></i><span>Data Postingan</span>
            </a>
          </li>
<<<<<<< HEAD
          
          <li>
            <a href="{{ route('kegiatan.view') }}">
              <i class="bi bi-circle"></i><span>Data Kegiatan</span>
            </a>
          </li>
          {{-- <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li> --}}
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>
=======
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7

          
          <li>
            <a href="{{ route('promo.view')}}">
              <i class="bi bi-circle"></i><span>Data Promo</span>
            </a>
          </li>
          <li>
            <a href="{{ route('kegiatan.view')}}">
              <i class="bi bi-circle"></i><span>Data Kegiatan</span>
            </a>
          </li>

        </ul>
      </li>
      <!-- End Tables Nav -->

      <!-- Contact Page Nav -->
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li> --}}
      <!-- End Contact Page Nav -->

      <!-- Log Out Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" type="submit" href="{{ route('admin.logout') }}">
          <i class="bi bi-box-arrow-right"></i>
          <span>Log Out</span>
        </a>
      </li>
      <!-- End Log Out Page Nav -->

    </ul>
    
  </aside>
  <!-- End Sidebar-->

  

  {{-- KODE TIDAK DIPAKAI --}}
  {{-- <li class="nav-item">
    <a class="nav-link collapsed" href="pages-faq.html">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li> --}}

  {{-- <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.html">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li>< --}}

  {{-- <li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.html">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li> --}}

  {{-- <li class="nav-item">
    <a class="nav-link collapsed" href="pages-error-404.html">
      <i class="bi bi-dash-circle"></i>
      <span>Error 404</span>
    </a>
  </li> --}}

  {{-- <li class="nav-item">
    <a class="nav-link collapsed" href="pages-blank.html">
      <i class="bi bi-file-earmark"></i>
      <span>Blank</span>
    </a>
  </li> --}}

  {{-- <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li> --}}

          {{-- <li class="nav-heading">Pages</li> --}}