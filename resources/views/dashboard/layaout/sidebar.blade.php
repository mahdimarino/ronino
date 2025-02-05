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
            <li class="nav-label"><label class="content-label">PRODUCTS</label></li>
            <li class="nav-item">
                <a href="{{ route('dashboard.products.create') }}" @class(['nav-link', 'active'=>
                    (Str::startsWith(Route::currentRouteName(), 'blogs.') && (Route::currentRouteName()
                    !== "products.create"))])>
                    <i class="fa fa-pencil-alt"></i> Add Product
                </a>
            </li>
          
            <li class="nav-item">
                <a href="{{ route('dashboard.products.index') }}" @class([ 'nav-link' , 'active'=> (Route::currentRouteName() ==
                    'dashboard.products.index')
                    ])>
                    <i class="fa fa-list"></i> Product list
                </a>
            </li>
            {{-- //////////////////////////////////////////////////////////////////////// --}}
            <li class="nav-label"><label class="content-label">COLORS</label></li>
            <li class="nav-item">
                <a href="{{ route('dashboard.colors.create') }}" @class(['nav-link', 'active'=>
                    (Str::startsWith(Route::currentRouteName(), 'colors.') && (Route::currentRouteName()
                    !== "colors.create"))])>
                    <i class="fa fa-pencil-alt"></i> Add Color
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.colors.index') }}" @class([ 'nav-link' , 'active'=> (Route::currentRouteName() ==
                    'dashboard.colors.index')
                    ])>
                    <i class="fa fa-list"></i> Color list
                </a>
            </li>
            {{-- //////////////////////////////////////////////////////////////////////// --}}
            <li class="nav-label"><label class="content-label">PARTWEARS</label></li>
            <li class="nav-item">
                <a href="{{ route('dashboard.partwears.create') }}" @class(['nav-link', 'active'=>
                    (Str::startsWith(Route::currentRouteName(), 'partwears.') && (Route::currentRouteName()
                    !== "partwears.create"))])>
                    <i class="fa fa-pencil-alt"></i> Add Partwear
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.partwears.index') }}" @class([ 'nav-link' , 'active'=> (Route::currentRouteName() ==
                    'dashboard.partwears.index')
                    ])>
                    <i class="fa fa-list"></i> Partwear list
                </a>
            </li>
            {{-- //////////////////////////////////////////////////////////////////////// --}}
            <li class="nav-label"><label class="content-label">CATEGORIES</label></li>
            <li class="nav-item">
                <a href="{{ route('dashboard.categories.create') }}" @class(['nav-link', 'active'=>
                    (Str::startsWith(Route::currentRouteName(), 'categories.') && (Route::currentRouteName()
                    !== "categories.create"))])>
                    <i class="fa fa-pencil-alt"></i> Add Category
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.categories.index') }}" @class([ 'nav-link' , 'active'=> (Route::currentRouteName() ==
                    'dashboard.categories.index')
                    ])>
                    <i class="fa fa-list"></i> Category list
                </a>
            </li>

            {{-- //////////////////////////////////////////////////////////////////////// --}}
            <li class="nav-label"><label class="content-label">GSM</label></li>
            <li class="nav-item">
                <a href="{{ route('dashboard.gsms.create') }}" @class(['nav-link', 'active'=>
                    (Str::startsWith(Route::currentRouteName(), 'gsms.') && (Route::currentRouteName()
                    !== "gsms.create"))])>
                    <i class="fa fa-pencil-alt"></i> Add GSM
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.gsms.index') }}" @class([ 'nav-link' , 'active'=> (Route::currentRouteName() ==
                    'dashboard.gsms.index')
                    ])>
                    <i class="fa fa-list"></i> GSM list
                </a>
            </li>
            {{-- //////////////////////////////////////////////////////////////////////// --}}
            <li class="nav-label"><label class="content-label">SIZE</label></li>
            <li class="nav-item">
                <a href="{{ route('dashboard.sizes.create') }}" @class(['nav-link', 'active'=>
                    (Str::startsWith(Route::currentRouteName(), 'sizes.') && (Route::currentRouteName()
                    !== "sizes.create"))])>
                    <i class="fa fa-pencil-alt"></i> Add Size
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.sizes.index') }}" @class([ 'nav-link' , 'active'=> (Route::currentRouteName() ==
                    'dashboard.sizes.index')
                    ])>
                    <i class="fa fa-list"></i> Size list
                </a>
            </li>
            
        </ul>
        
    </div>
</div>