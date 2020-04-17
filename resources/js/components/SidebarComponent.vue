<template>
    <div class="left-side-menu">
        <div class="slimscroll-menu">
            <div class="user-box text-center">
                <img
                    src="template/images/users/user-1.jpg"
                    alt="user-img"
                    title="Mat Helme"
                    class="rounded-circle img-thumbnail avatar-lg"
                />
                <div class="dropdown">
                    <a
                        href="#"
                        class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                        data-toggle="dropdown"
                        >Nowak Helme</a
                    >
                    <div class="dropdown-menu user-pro-dropdown">
                        <a
                            href="javascript:void(0);"
                            class="dropdown-item notify-item"
                        >
                            <i class="fe-user mr-1"></i>
                            <span>My Account</span>
                        </a>
                        <a
                            href="javascript:void(0);"
                            class="dropdown-item notify-item"
                        >
                            <i class="fe-settings mr-1"></i>
                            <span>Settings</span>
                        </a>
                        <a
                            href="javascript:void(0);"
                            class="dropdown-item notify-item"
                        >
                            <i class="fe-lock mr-1"></i>
                            <span>Lock Screen</span>
                        </a>
                        <a
                            href="javascript:void(0);"
                            class="dropdown-item notify-item"
                        >
                            <i class="fe-log-out mr-1"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
                <p class="text-muted">Admin Head</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="text-muted">
                            <i class="mdi mdi-settings"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="#" class="text-custom">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div id="sidebar-menu">
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Navigation</li>

                    <li>
                        <router-link :to="'/home'">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span>Dashboard</span>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="'/members'">
                            <i class="mdi mdi-format-font"></i>
                            <span>Keanggotaan</span>
                        </router-link>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-invert-colors"></i>
                            <span> Events </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><router-link :to="'/event/category'">Kategori Event</router-link></li>
                            <li><router-link :to="'/event/add'">Tambah Event</router-link></li>
                            <li><router-link :to="'/events'">Daftar Event</router-link></li>
                        </ul>
                    </li>

                    <li>
                        <router-link :to="{ name: 'presence' }">
                            <i class="mdi mdi-email"></i>
                            <span>Absensi</span>
                        </router-link>
                    </li>
                </ul>
            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->
    </div>
</template>
