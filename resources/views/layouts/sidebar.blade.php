<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboard</li>
                <li class="p-1">
                    <a href="{{ route('dashboard') }}" class="mm-active">
                        <i class='bx bxs-dashboard'></i>
                        Dashboard
                    </a>
                </li>
                <li class="p-1">
                    <a href="{{ route('add-book.index') }}" class="mm-active">
                        <i class='bx bxs-book-add'></i>
                        Add New books
                    </a>
                </li>
                <li class="p-1">
                    <a href="#" class="mm-active">
                        <i class='bx bxs-book-add'></i>
                        My Collection
                    </a>
                </li>
                {{--  <li class="app-sidebar__heading">Dropdown</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Elements
                        <i class="fa fa-angle-down opacity-8"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="elements-buttons-standard.html">
                                <i class="metismenu-icon"></i>
                                Buttons
                            </a>
                        </li>
                        <li>
                            <a href="elements-dropdowns.html">
                                <i class="metismenu-icon">
                                </i>Dropdowns
                            </a>
                        </li>
                        <li>
                            <a href="elements-icons.html">
                                <i class="metismenu-icon">
                                </i>Icons
                            </a>
                        </li>
                    </ul>
                </li>  --}}
            </ul>
        </div>
    </div>
</div>
