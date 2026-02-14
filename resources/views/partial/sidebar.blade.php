<aside class="main-sidebar sidebar-dark-primary elevation-4">
<ul class="nav nav-pills nav-sidebar flex-column" 
    data-widget="treeview" role="menu" data-accordion="false">

  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-folder"></i>
      <p>
        Quản lý danh mục
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>

    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('category.index') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Xem danh sách</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('category.create') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Thêm mới</p>
        </a>
      </li>
    </ul>
  </li>

</ul>


  </aside>