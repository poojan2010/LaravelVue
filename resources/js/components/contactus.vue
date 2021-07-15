<template>
    <div>
        <sidebar />

    <div class="text">
        <center> CONTACT US PAGE </center>
    </div>
<!--    <div>
        <footer />
    </div>-->
    </div>
</template>

<script>

import Sidebar from "./sidebar";

export default {
    name: "contactus",
    components: { Sidebar }
}
</script>

<style scoped>

.text
{
    font-size: 36px;
    padding-top: 70px;
}

</style>
