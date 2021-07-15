<template>

        <div class="card mt-5" style="width: 700px; margin-left:400px;">
            <div id="login" v-if="!seen" >
                <div class="card-header">
                    <b><i>LOGIN</i></b>
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <!--        <label for="email" class="form-label"><b>Email</b></label>-->
                        <input type="mail" class="form-control" v-model="input.email" name="email" id="email" placeholder="Enter Email">
                    </div>

                    <div class="mb-3">
                        <!--        <label for="password" class="form-label"><b>Password</b></label>-->
                        <input type="password" class="form-control" v-model="input.password" name="password" id="password" placeholder="Enter Password">
                    </div>


                    <button type="button" class="btn btn-primary" v-on:click="login()">Login</button><br><br>
                    New User? <router-link to="/signup"> Signup </router-link>
                </div>
            </div>

            <!--    <div v-else>
                  <User_Login />
                </div>-->
        </div>

<!--    <div>-->
<!--        <a href="/home">home</a>-->
<!--    </div>-->
</template>

<script>
import axios from "axios";

export default {
name: "login",
    data() {
        return {
            input: {

                email: "",
                password: "",

            },
            seen: false
        }
    },
    methods: {
        login() {
            axios.post('/api/login',this.input).then((result)=>{
                /*if(result.data.status == 'Success')
                {
                    this.seen = true
                    this.data = result.data.data
                    localStorage.setItem('isAuth', true)
                    this.$router.push({ name: 'home' })
                    //  window.location.href = '/dashboard';
                     alert(result.data.message)

                }
                else
                {
                    alert(result.data.message)
                }*/
                this.$router.push('/home')
            });
        }
    },
    /*mounted() {
      let user = localStorage.getItem('user-info');
      if(!user)
      {
        this.$router.push({name:'User_SignUp'})
      }
    }*/
}
</script>

<style scoped>

</style>
