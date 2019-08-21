<ul class="sidebar-menu" data-widget="tree">
        <li class="header"><h5><b>MENÚ SUPERADMINISTRADOR</b></h5></li>
        <!-- Optionally, you can add icons to the links -->
        <li {{ request()->is('admin') ? 'class=active' : ''}}>
          <a href="#"><i class="fa fa-dashboard">
            </i> <span>Inicio</span>
          </a>
        </li>

<!--        <li class="treeview" {{ request()->is('admin.users*') ? 'active' : ''}}>
          <a href="#"><i class="fa fa-users"></i> <span>Menú Usuarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
-->            
            <li {{ request()->is('admin.users.index') ? 'class=active' : ''}}><a href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i>Usuarios</a></li>            
<!--          </ul>
        </li>
-->
<!--        <li class="treeview" {{ request()->is('admin') ? 'active' : ''}}>
          <a href="#"><i class="fa fa-building"></i> <span>Menú Conjuntos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
-->            
            <li {{ request()->is('admin.users.index') ? 'class=active' : ''}}><a href="{{ route('admin.unidades.index') }}"><i class="fa fa-university"></i>Conjuntos</a></li>
<!--            <li {{ request()->is('admin.users.create') ? 'class=active' : ''}}><a href="{{ route('admin.users.create') }}"><i class="fa fa-plus"></i>Crear Conjunto</a></li>
          </ul>
        </li>
-->
<!--        <li class="treeview" {{ request()->is('admin') ? 'active' : ''}}>
          <a href="#"><i class="fa fa-home"></i> <span>Menú Apato/Casa</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">

-->          
            <li {{ request()->is('admin.users.index') ? 'class=active' : ''}}><a href="{{ route('admin.bloques.index') }}"><i class="fa fa-building"></i>Bloques/Interiores</a></li>

            


<!--            
          <li {{ request()->is('admin.users.create') ? 'class=active' : ''}}><a href="{{ route('admin.users.create') }}"><i class="fa fa-plus"></i>Crear Conjunto</a></li>
                    </ul>
                  </li>
-->
        
        <li {{ request()->is('admin') ? 'class=active' : ''}}>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="fa fa-sign-out">
            </i> <span>Salir</span>
          </a>         
   
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
  </ul>
    