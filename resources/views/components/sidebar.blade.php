<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link" style="text-align: center">
        <span class="brand-text font-weight-light">Livewire App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">TUTORIAL</li>
                <li class="nav-item">
                    <a href="{{ route('component') }}" class="nav-link">
                        <p>
                            Component
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('route', 'SkyGod') }}" class="nav-link">
                        <p>
                            Route
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('propertybinding') }}" class="nav-link">
                        <p>
                            Property Binding
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('action') }}" class="nav-link">
                        <p>
                            Action
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('lifecycle') }}" class="nav-link">
                        <p>
                            Life Cycle Hook
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('validation') }}" class="nav-link">
                        <p>
                            Form Validation
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('crud') }}" class="nav-link">
                        <p>
                            CRUD
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
