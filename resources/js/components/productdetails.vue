<template>
   <div>
        <sidebar />

        <div class="row" style="padding-top: 80px;">
            <div class="col-2">
            </div>
            <div class="col-3">
                <img v-bind:src="/images/+products.image" class="card-img-top rounded"  style="height:400px;">
            </div>
            <div class="col-4">
                <br><br><br>
                <h1>{{ products.name }}</h1>
                <br>
                <h3>Price</h3>
                <i>{{ products.price }}</i>
                <br><br>
                <h3>Description</h3>
                <i>{{ products.description }}</i>
                <br><br><br>
            </div>
        </div>

   </div>
</template>

<script>
import axios from "axios";

import Sidebar from "./sidebar";
export default {
    name: "productdetails",
    components: {
        Sidebar,
    },
    data() {
        return {
            products:''
        }
    },
    methods: {
        productDetail() {
            axios.get('/api/productdetails/' +this.$route.params.id).then(resp => {
                this.products = resp.data
            })
        },
    },
    mounted(){
        this.productDetail()
    }
}
</script>

<style scoped>

</style>
