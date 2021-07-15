<template>
    <div>
        <sidebar />

        <div>
            <head>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            </head>

            <div style="padding-top: 80px; margin-left: 280px;">
                <input type="search" v-model="search" placeholder="Search...">
            </div>
            <div class="margin">
                <table class="table table-striped" border="1px">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr v-for="list in searchProduct" :key="list.id">
                        <td> {{list.id}} </td>
                        <td> {{list.name}} </td>
                        <td> <img v-bind:src="/images/+list.image" /> </td>
                        <td>
                            <button class="btn btn-outline-info" v-on:click="viewdata(list.id)">View Details</button>
<!--                        <a v-bind:href="'/api/productdetails/'+ list.id">View Details</a>-->
                        </td>
                    </tr>
                    </tbody>
                </table>
                <pagination style="margin-left: 450px;"
                            :meta_data="meta_data"
                            v-on:next="showData">
                </pagination>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Pagination from "./pagination";

import Sidebar from "./sidebar";

export default {
name: "home",

     components: {
            Sidebar,
            Pagination,
     },
    data() {
        return {
            products: [],
            search:'',
            meta_data: {
                last_page: null,
                current_page: 1,
                prev_page_url: null
            }
        }
    },
    methods: {
        showData(page = 1) {
            axios.get('/api/products?page='+page).then(resp => {
                // console.warn('resp', resp)
                this.products = resp.data.data

                this.meta_data.last_page = resp.data.last_page;
                this.meta_data.current_page = resp.data.current_page;
                this.meta_data.prev_page_url = resp.data.prev_page_url;
            })
        },
        viewdata(id){
            this.$router.push('/productdetails/'+id)
        },
    },
    mounted(){
        this.showData()
    },
    computed: {
        searchProduct : function (){
            return this.products.filter((list) => {
                return list.name.toLowerCase().match(this.search.toLowerCase());
            });
        },
    }
}
</script>

<style scoped>

img{
    height:80px;
    width:80px;
}
.margin{
    margin-left: 280px;
    padding-top: 30px;
    padding-bottom: 70px;
}

</style>
