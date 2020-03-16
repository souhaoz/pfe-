<template>

    <div id="app">
        <router-view name="header"></router-view>
        <main>
            <fade-transition origin="center" mode="out-in" :duration="250">
                <router-view v-bind:csrf_token="csrf_token"   />
               <!-- <login v-bind:csrf_token="csrf_token" v-if="!this.$store.getters.isAuthenticated"></login>-->

            </fade-transition>
        </main>
        <!--<router-view name="footer"></router-view>-->
    </div>
</template>
<script>
    import { FadeTransition } from "vue2-transitions";

    export default {
        name: "App",
        props: ['csrf_token'],
        components: {
            FadeTransition
        }
    };
</script>
