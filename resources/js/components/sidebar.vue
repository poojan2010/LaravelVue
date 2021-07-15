<template>
    <div>
        <div>
            <nav class="navbar fixed-top" style="background-color: #2c3e50;">
                <div class="container">
                    <a class="navbar-brand" href="#" style="margin-left: -90px; font-size: 34px; color: #CCCCCC" >Dashboard</a>

                    <a href="/logout" type="submit" id="btn" class="btn btn-light">logout</a>
                </div>
            </nav>
        </div>

        <div>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

            <!-- Sidebar -->
            <div class="w3-sidebar w3-grey w3-bar-block" style="width:16%; height:84%;margin-top:20px;">
                <h2 class="w3-bar-item"><b></b></h2><br>

                <div class="w3-dropdown-hover">
                    <button class="w3-button"><h4><router-link to="/home" class="w3-bar-item w3-button">Home</router-link></h4></button>
                </div>

                <div class="w3-dropdown-hover">
                    <button class="w3-button"><h4><router-link to="/product" class="w3-bar-item w3-button">Product</router-link></h4></button>
                </div>

                <div class="w3-dropdown-hover">
                    <button class="w3-button"><h4><router-link to="/aboutus" class="w3-bar-item w3-button">About Us</router-link></h4></button>
                </div>

                <div class="w3-dropdown-hover">
                    <button class="w3-button"><h4><router-link to="/contactus" class="w3-bar-item w3-button">Contact Us</router-link></h4></button>
                </div>

            </div>
        </div>

        <div class="fixed-bottom">
            <footer>
                <center >Copyright @ 2021</center>
            </footer>
        </div>
    </div>
</template>

<script>
export default {
    name: "sidebar"
}
</script>

<style scoped>

footer{
    background-color: #2c3e50;
    padding: 10px;
    font-size: 20px;
    text-align: center;
    color: #CCCCCC;
    bottom: 0px;
    position: fixed;
    width: 100%;
}

</style>
