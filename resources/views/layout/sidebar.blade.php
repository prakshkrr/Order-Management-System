<aside class="main-sidebar sidebar-dark-primary elavation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">ORDER MANAGEMENT SYSTEM</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-colunm" data-widget="treeview" role="menu"
             data-accordion="false">
             <li class="nav-item has-treeview menu-close color-menu">
                 <a href="{{ route('color.index') }}" class="nav-link">
                     <i class="nav-icon fas fa-palette"></i>
                     <p>
                         COLOR
                         <i class="right fas fa-angle-down"></i>
                     </p>
                 </a>
             </li>
             <li class="nav-item has-treeview menu-close color-menu">
                <a href="{{ route('size.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-palette"></i>
                    <p>
                        SIZE
                        <i class="right fas fa-angle-down"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview menu-open">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            </ul>
        </nav>
    </div>
</aside>
