<template>
    <div class="wrapper">
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <app-breadcrumd :list="list"></app-breadcrumd>
            <section class="content">
                <router-view></router-view>
            </section>
        <!-- /.content-header -->
    </div>
    </div>
</template>

<script>
import Header from "./components/header/header";
import Aside from "./components/aside/aside.vue";
import Breadcrumb from "./components/breadcrumb/breadcrumb";
import Footer from "./components/footer/footer";

export default {
    name: "App",
    components: {
        Header,
        Aside,
        Breadcrumb,
        Footer,
    }
}
</script>

<style>

</style>