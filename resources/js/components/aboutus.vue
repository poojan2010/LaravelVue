<template>
    <div>

        <sidebar />

    <div class="text">
        <center> ABOUT US PAGE </center>
    </div>
<!--    <div>
        <footer />
    </div>-->
    </div>
</template>

<script>
//import Navbar from "./navbar";
import Sidebar from "./sidebar";

export default {
    name: "aboutus",
    components: { Sidebar}
}
</script>

<style scoped>

.text
{
    font-size: 36px;
    padding-top: 70px;
}

</style>
