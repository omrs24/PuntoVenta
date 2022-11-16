  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="index.html">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#registrar-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-journal-plus"></i><span>Registrar</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="registrar-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="components-alerts.html">
                          <i class="bi bi-circle"></i><span>Producto</span>
                      </a>
                  </li>
                  <li>
                      <a href="components-accordion.html">
                          <i class="bi bi-circle"></i><span>Proveedor</span>
                      </a>
                  </li>
                  <li>
                      <a href="components-badges.html">
                          <i class="bi bi-circle"></i><span>Marca</span>
                      </a>
                  </li>
                  <li>
                      <a href="components-breadcrumbs.html">
                          <i class="bi bi-circle"></i><span>Categoria</span>
                      </a>
                  </li>

              </ul>
          </li><!-- End Registrar Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-box-seam"></i><span>Productos</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ URL::route('ProductsIndex') }}">
                          <i class="bi bi-circle"></i><span>Ver Todos</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Forms Nav -->



          <li class="nav-heading">Atajos</li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ URL::route('SalesIndex') }}">
                  <i class="bi bi-tag"></i>
                  <span>Registrar Venta</span>
              </a>
          </li><!-- End Profile Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="pages-faq.html">
                  <i class="bi bi-box-seam"></i>
                  <span>Registrar Producto</span>
              </a>
          </li><!-- End F.A.Q Page Nav -->

          <div class="d-none">

              <li class="nav-item">
                  <a class="nav-link collapsed" href="pages-register.html">
                      <i class="bi bi-card-list"></i>
                      <span>Register</span>
                  </a>
              </li><!-- End Register Page Nav -->

              <li class="nav-item">
                  <a class="nav-link collapsed" href="pages-login.html">
                      <i class="bi bi-box-arrow-in-right"></i>
                      <span>Login</span>
                  </a>
              </li><!-- End Login Page Nav -->

              <li class="nav-item">
                  <a class="nav-link collapsed" href="pages-error-404.html">
                      <i class="bi bi-dash-circle"></i>
                      <span>Error 404</span>
                  </a>
              </li><!-- End Error 404 Page Nav -->

              <li class="nav-item">
                  <a class="nav-link collapsed" href="pages-blank.html">
                      <i class="bi bi-file-earmark"></i>
                      <span>Blank</span>
                  </a>
              </li><!-- End Blank Page Nav -->
          </div>
      </ul>

  </aside><!-- End Sidebar-->