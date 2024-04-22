<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <a href="{{ route('Landing-page') }}"><div class="logo-src">BookShareHub</div></a>
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
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>
        <div class="app-header__content">
            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <i class="fa fa-angle-down opacity-8"></i>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <a class="account-tab" href="{{ route('profile.edit') }}"><button
                                                    type="button" tabindex="0" class="dropdown-item">Edit
                                                    Profile</button></a>
                                            <button type="button" tabindex="0"
                                                class="dropdown-item">Settings</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="account-tab" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();"><button
                                                        type="button" tabindex="0"
                                                        class="dropdown-item">Logout</button></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  mx-3 header-user-info">
                                    <div class="widget-heading">
                                        {{ Auth::user()->name }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-main">
        @include('layouts.sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>
        </div>
    </div>
</div>
