<template>
    <div class="wrapper">
        <Header></Header>
        <Aside></Aside>
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <Breadcrumb></Breadcrumb>
            <section class="content">
                <router-view></router-view>
            </section>
        <!-- /.content-header -->
        </div>
        <Footer></Footer>
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