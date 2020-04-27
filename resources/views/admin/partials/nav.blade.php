<ul class="sidebar-menu">
    <li class="header">NAVEGACIÓN</li>
    <!-- Optionally, you can add icons to the links -->
    <li {{ request()->is('admins') ? 'class=active' : ''}}>
        <a href="{{ route('admin') }}">
            <i class="fa fa-home"></i> <span>Inicio</span>
        </a>
    </li>
    {{--<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>--}}
    <li class="treeview {{ request()->is('admins/posts*') ? 'active' : ''}}">
        <a href="#"><i class="fa fa-bars"></i> <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li {{ request()->is('admins/posts') ? 'class=active' : ''}}><a href="{{ route('admin.posts.index') }}"><i class="fa fa-eye"></i>Ver Todos</a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModal3"><i class="fa fa-plus"></i>Crear Nuevo</a></li>
        </ul>
    </li>
</ul>