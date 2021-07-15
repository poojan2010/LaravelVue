<template>
    <div>
        <nav class="navbar fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#" style="margin-left: -90px; font-size: 34px; color: #CCCCCC" >Dashboard</a>
                <button class="btn btn-light" v-on:click="logout">Logout</button>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "navbar",
    methods: {
        logout() {
            localStorage.removeItem("isAuth")
            this.$router.push({name: 'User_Login'})
        }
    }
}
</script>

<style scoped>

.navbar{
    height: 70px;
    background-color: #2c3e50;

}

</style>
