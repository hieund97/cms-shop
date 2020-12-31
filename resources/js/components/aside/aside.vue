<template>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a :href="home_url" class="brand-link">
            <img src="dist/img/VueShopLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">VUE SHOP</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                    <li class="nav-item" v-for="(menu, k) in listMenu" :key="k">
                        <a :href="menu.url" class="nav-link">
                            <i :class="`nav-icon ` + menu.icon"></i>
                            <p>
                                {{ menu.name }}
                                <i class="right fas fa-angle-left" v-if="menu.child"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" v-if="menu.child">
                            <li class="nav-item" v-for="(child, index) in menu.child" :key="index">
                                <a :href="child.url" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ child.name }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</template>

<script>
export default {
    name: "Aside",
    data() {
        return {
            home_url: '',
            listMenu: [],
            errors: [],
        }
    },

    created(){
        this.getListMenu();
    },

    methods: {
        getListMenu() {
            axios.get('/api/get-list-menu')
            .then(response => {
                this.listMenu = response.data.data;
                this.home_url = response.data.home_url;
            })
            .catch(error => {
                
            })
        }
    }
}
</script>

<style>

</style>