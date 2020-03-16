<template>

</template>

<script>

    export default {
        created() {

            this.$store.dispatch('destroyToken');
            this.$store.commit('change', false);
            console.log('user logout successfully ' + this.$store.getters.isAuthenticated);
            this.$router.push({ name: 'home' });

        }  }
</script>

<style scoped>

</style>