<template>
    <div>
        <sidebar />
        <div class="row">
            <div class="col-3" v-for="list in products" :key="list.id"  style="padding-top: 80px; margin-bottom: 60px; margin-right:-35px;">
                <div>
                    <div class="card" style="width: 14rem; margin-left: 250px;">
                        <a @click="viewdata(list.id)">
                            <img v-bind:src="/images/+list.image" class="card-img-top rounded" style="height:280px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";

import Sidebar from "./sidebar";

export default {
    name: "product",
    components: {
        Sidebar
    },
    data() {
        return {
            products:''
        }
    },
    methods: {
        showProduct() {
            axios.get('/api/product').then(resp => {
                // console.warn('resp', resp)
                this.products = resp.data
            })
        },
        viewdata(id){
            this.$router.push('/productdetails/'+id)
        },
    },
    mounted(){
        this.showProduct()
    }

}
</script>

<style scoped>

</style>



