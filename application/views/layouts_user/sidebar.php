
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3" style="font-size: 12pt;">
        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user');?>">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('berita'); ?>">
              <span data-feather="plus-circle"></span>
              Berita Terbaru
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('laporan'); ?>">
              <span data-feather="file-text"></span>
              Sigap Covid 19
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/logout'); ?>">
              <span data-feather="log-out"></span>
              Logout
            </a>
          </li>
        </ul>

        
      </div>
    </nav>