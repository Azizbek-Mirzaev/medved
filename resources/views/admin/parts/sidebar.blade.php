  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">@yield('title')</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/dist/img/user2-160x160.jpg"
               class="img-circle elevation-2"
               alt="User Image">
        </div>
        <div class="info">
          <a href="/admin" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-header">Справочник</li>
              <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Пользователи
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.posts.index')}}"  class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Новый Пост
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.about.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    О Нас
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Категории
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.article.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Новости
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.contacts.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Контакты
                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
