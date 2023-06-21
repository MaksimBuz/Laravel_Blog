  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="pt-3 sidebar">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('admin.main.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Главная</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.category.index')}}" class="nav-link">
            <i class="fa-solid fas fa-list"></i>
            <p> Категории</p>
          </a>
        </li>
          <li class="nav-item">
          <a href="{{ route('admin.tag.index')}}" class="nav-link">
            <i class="fa-solid fas fa-tag"></i>
            <p> Тэги</p>
          </a>
        </li>
      </li>
      <li class="nav-item">
      <a href="{{ route('admin.post.index')}}" class="nav-link">
        <i class="fa-solid fas fa-file"></i>
        <p> Посты</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('admin.user.index')}}" class="nav-link">
        <i class="fa-solid fas  fa-user"></i>
        <p> Пользователи</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('main.index')}}" class="nav-link">
        <i class="fa-solid fas fa-sitemap"></i>
        <p> Перейти на сайт</p>
      </a>
    </li>
      </ul>
    </div>
  </aside>