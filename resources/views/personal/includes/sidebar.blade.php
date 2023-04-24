<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('personal.main.index') }}" class="brand-link">
            <img src="{{asset('image/logo.svg')}}" alt="SST Logo" class="brand-image img-circle elevation-3 " style="opacity: .8">
            <span class="brand-text font-weight-light">Личный кабинет</span>
        </a>
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->


            <li class="nav-item">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-heart"></i>
                    <p>
                        Понравившиеся посты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.commented.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-comment"></i>
                    <p>
                        Комментарии
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Лента новостей
                    </p>
                </a>
            </li>


        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
