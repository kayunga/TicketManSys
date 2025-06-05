{{-- <!-- Sidebar -->
<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">{{ config('app.name', 'Laravel') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#house-fill" /></svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/pm">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#gear-wide-connected" /></svg>
                        ATM Maintenance
                    </a>
                </li>
                <hr>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-body-secondary text-uppercase">
                    <span>User Management</span>

                </h6>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/users/add-user">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#plus-circle" /></svg>
                        Add Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/users/edit-user">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#list" /></svg>
                        Edit Users
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/report">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#graph-up" /></svg>
                        Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/atm-manage">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#puzzle" /></svg>
                        ATM Management
                    </a>
                </li>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#gear-wide-connected" /></svg>
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#door-closed" /></svg>
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> --}}

<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">{{ config('app.name', 'Laravel') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#house-fill" /></svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/pm">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#gear-wide-connected" /></svg>
                        ATM Maintenance
                    </a>
                </li>
                <hr>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-body-secondary text-uppercase">
                    <span>User Management</span>
                </h6>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/users/add-user">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#plus-circle" /></svg>
                        Add Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/users/edit-user">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#list" /></svg>
                        Edit Users
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/report">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#graph-up" /></svg>
                        Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/atm-manage">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#puzzle" /></svg>
                        ATM Management
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#gear-wide-connected" /></svg>
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#door-closed" /></svg>
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
