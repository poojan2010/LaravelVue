<template>
    <div class="card mt-5" style="width: 700px; margin-left:400px; ">
        <div id="login" v-if="!seen" >
            <div class="card-header">
                <b><i>SIGNUP</i></b>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <input type="text" class="form-control" v-model="input.name" name="name" id="name" placeholder="Enter Name">
                </div>

                <div class="mb-3">
                    <input type="mail" class="form-control" v-model="input.email" name="email" id="email" placeholder="Enter Email">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" v-model="input.password" name="password" id="password" placeholder="Enter Password">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" v-model="input.password_confirmation" name="password_confirmation" id="password_confirmation" placeholder="Enter Confirm Password">
                </div>
                <button type="button" class="btn btn-primary" v-on:click="signup()">SignUp</button><br><br>
                Already User? <router-link to="/login"> Login </router-link>
            </div>
        </div>

        <!--    <div v-else>-->
        <!--      <User_Login />-->
        <!--    </div>-->
    </div>
</template>

<script>
import axios from 'axios'
// import User_Login from "./User_Login";
export default {
    name: "signup",
    // components: {User_Login},
    data() {
        return {
            input: {
                name: "",
                email: "",
                password: "",
                password_confirmation: "",
            },
            seen: false
        }
    },
    methods: {
        signup() {
            axios.post('/api/signup',this.input).then((result)=>{
                /*if(result.data.status == 'Success')
                {
                    this.seen = true
                    this.data = result.data
                    this.$router.push('/login')

                    /!* localStorage.setItem("user-info",JSON.stringify(this.data))
                     this.$router.push({name:'User_Login'})*!/
                }
                else
                {
                    alert(result.data.message)
                }*/
                this.$router.push('/login')
            });
        }
    },
    /*mounted() {
      let user = localStorage.getItem('user-info');
      if(user)
      {
        this.$router.push({name:'User_Login'})
      }
    }*/
}
</script>

<style scoped>

</style>
