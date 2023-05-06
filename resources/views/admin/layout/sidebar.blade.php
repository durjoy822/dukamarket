<aside class="sidebar-wrapper">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{asset('admin')}}/assets/images/logo-icon.png" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Roksyn</h5>
        </div>
        <div class="sidebar-close ">
            <span class="material-symbols-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav" data-simplebar="true">

        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <div class="parent-icon"><span class="material-symbols-outlined">home</span>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                    </div>
                    <div class="menu-title">Category Module</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin-category.index')}}"><span class="material-symbols-outlined">arrow_right</span>Category Index </a>
                    </li>
                    <li> <a href="{{route('admin-category.add')}}"><span class="material-symbols-outlined">arrow_right</span> Category Add</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                    </div>
                    <div class="menu-title">Sub-category Module</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin-subcategory.index')}}"><span class="material-symbols-outlined">arrow_right</span>Sub-category index</a>
                    </li>
                    <li> <a href="{{route('admin-subcategory.add')}}"><span class="material-symbols-outlined">arrow_right</span>Sub-category Add</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                    </div>
                    <div class="menu-title">Brand Module</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin-brand.index')}}"><span class="material-symbols-outlined">arrow_right</span>Brand index</a>
                    </li>
                    <li> <a href="{{route('admin-brand.add')}}"><span class="material-symbols-outlined">arrow_right</span>Branad Add</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                    </div>
                    <div class="menu-title">Unit Module</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin-unit.index')}}"><span class="material-symbols-outlined">arrow_right</span>Unit index</a>
                    </li>
                    <li> <a href="{{route('admin-unit.add')}}"><span class="material-symbols-outlined">arrow_right</span>Unit Add</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                    </div>
                    <div class="menu-title">Porduct Module</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin-product.index')}}"><span class="material-symbols-outlined">arrow_right</span>Product index</a>
                    </li>
                    <li> <a href="{{route('admin-product.add')}}"><span class="material-symbols-outlined">arrow_right</span>Product Add</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                    </div>
                    <div class="menu-title">User Module</div>
                </a>
                <ul>
                    <li> <a href="app-emailbox.html"><span class="material-symbols-outlined">arrow_right</span>User index</a>
                    </li>
                    <li> <a href="app-chat-box.html"><span class="material-symbols-outlined">arrow_right</span>User Add</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                    </div>
                    <div class="menu-title">Customer Module</div>
                </a>
                <ul>
                    <li> <a href="app-emailbox.html"><span class="material-symbols-outlined">arrow_right</span>Customer index</a>
                    </li>
                    <li> <a href="app-chat-box.html"><span class="material-symbols-outlined">arrow_right</span>Customer Add</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!--end navigation-->


    </div>
    <div class="sidebar-bottom dropdown dropup-center dropup">
        <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
            <div class="user-img">
                <img src="{{asset('admin')}}/assets/images/avatars/01.png" alt="">
            </div>
            <div class="user-info">
                <h5 class="mb-0 user-name">{{Auth::guard('admin')->user()->name}}</h5>
                <p class="mb-0 user-designation">UI Engineer</p>
            </div>
        </div>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{route('admin.profile')}}"><span class="material-symbols-outlined me-2">
                  account_circle
                  </span><span>Profile</span></a>
            </li>
            <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  tune
                  </span><span>Settings</span></a>
            </li>
            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}"><span class="material-symbols-outlined me-2">
                  dashboard
                  </span><span>Dashboard</span></a>
            </li>
            <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  account_balance
                  </span><span>Earnings</span></a>
            </li>
            <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  cloud_download
                  </span><span>Downloads</span></a>
            </li>
            <li>
                <div class="dropdown-divider mb-0"></div>
            </li>
            <li><a class="dropdown-item" href="{{route('admin.logout')}}"><span class="material-symbols-outlined me-2">
                  logout
                  </span><span>Logout</span></a>
            </li>
        </ul>
    </div>
</aside>
