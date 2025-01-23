<div class="sidebar">
    <div class="sidebar-header">
        
        <div>
            <a href="" class="sidebar-logo">
                <span><span class="brand-color">EL RONINO
            </a>
            <small class="sidebar-logo-headline">Analytics Dashboard</small>
        </div>
    </div>
    <div id="dpSidebarBody" class="sidebar-body">
        <ul class="nav nav-sidebar">
            <li class="nav-label"><label class="content-label">Dashboard</label></li>
            <li class="nav-item">
                <a href="{{ route('dashboard.blogs.blog-form') }}" @class(['nav-link', 'active'=>
                    (Str::startsWith(Route::currentRouteName(), 'blogs.') && (Route::currentRouteName()
                    !== "blogs.create"))])>
                    <i class="fa fa-pencil-alt"></i> Create Blog
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.colors.create') }}" @class(['nav-link', 'active'=>
                    (Str::startsWith(Route::currentRouteName(), 'colors.') && (Route::currentRouteName()
                    !== "colors.create"))])>
                    <i class="fa fa-pencil-alt"></i> Add Color
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.blogs.list') }}" @class([ 'nav-link' , 'active'=> (Route::currentRouteName() ==
                    'dashboard.index')
                    ])>
                    <i class="fa fa-list"></i> Blog list
                </a>
                <a href="" @class([ 'nav-link' , 'active'=> (Route::currentRouteName() ==
                    'dashboard.index')
                    ])>
                    <i class="fa fa-list"></i> Blog Categories
                </a>
            </li>
        </ul>
    </div>
</div>