<template>
<section class="section section-hero section-shaped section-lg my-0">
    <div class="shape shape-style-1 shape-image">

    </div>
    <div class="container pt-lg-md">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <card type="" shadow
                      header-classes=" pb-5"
                      body-classes="px-lg-5 py-lg-5"
                      class="card-login">
                    <template>
                        <div class="text-center mb-4" >
                            <h1 style="color: #fd7c00">LOGIN</h1>
                            <br>
                        </div>
                        <form method="post" v-on:submit.prevent="sendLogin" class="form-group">
                            <div class="row myinputstylefocus">

                                <div class="col-lg-1 icon-color" style="padding-top:10px;">
                                    <i class="fa  fa-user fa-2x"></i>
                                </div>
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <input
                                                name="email"
                                                id="inputEmail"
                                                v-model="user.email"
                                                class="myinputstyle form-control mb-3 "
                                                type="email" required>
                                        <label class="form-control-placeholder" for="inputEmail">Login
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <div class="row myinputstylefocus">
                                <div class="col-lg-1 icon-color" style="padding-top:10px;">
                                    <i class="fa  fa-unlock-alt fa-2x "></i>
                                </div>

                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <input
                                                name="password"
                                                id="inputPassword"
                                                v-model="user.password"
                                                class="form-control mb-3 myinputstyle"
                                                type="password" required>
                                        <label class="form-control-placeholder" for="inputPassword">
                                            Password
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="_csrf_token" v-model="csrf_token">
                            <base-checkbox>
                                Remember me
                            </base-checkbox>
                            <div class="text-center">
                                <button class="btn btn-lg btn-warning" style="background-color: #fd7c00;border: none" type="submit">
                                    Sign in
                                </button>
                            </div>
                        </form>

                        <div v-if="isError === true">
                            <div class="alert alert-danger" role="alert">
                                {{ errorMessage }}
                            </div>
                        </div>
                    </template>
                </card>
            </div>
        </div>
    </div>
</section>
</template>
<script>
    /*
  export default {
    name: 'FormsPage',
    components: {
    }
  }*/

    export default {
        props: ['csrf_token', 'last_email'],
        name: "Login",
        data() {
            return {user:{
                    email: '',
                    password: ''},
                isError: false,
                errorMessage: ''
            }
        },
        beforeCreate() {
        },
        created () {
            if (this.$props.last_email !== 'undefined') {
                this.email = this.$props.last_email;
            }
            console.log('Login componenet:' + this.$store.getters.isAuthenticated);
         //   if (this.$store.getters.isAuthenticated === true) {
             //   this.$router.push('/')
           // }
        },
        methods: {
            sendLogin () {
                console.log('send login form');
                fetch('/login', { //api/users-api
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify({
                        'email': this.user.email,
                        'password': this.user.password,
                        '_csrf_token': this.$props.csrf_token

                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log('data : ', data);

                        if (data.token !== undefined ) {


                            console.log('the user is ',this.user);
                            this.$store.commit('change', true);
                            this.$store.commit('token', data.token);
                            console.log('user authenticated successfully ' + this.$store.getters.isAuthenticated);
                            console.log(this.$store.getters.getToken);
                            localStorage.setItem('token',data.token);
                            //console.log(localStorage.getItem('token'));
                            this.$router.push('/');

                        }
                        else {
                            console.log(data.message);
                            //localStorage.removeItem('token');
                            //console.log(localStorage.getItem('token'));
                        }
                    })

                /*
                                      if (data === 'authenticated') {
                                          this.$store.commit('change', true);

                                          console.log('user authenticated successfully ' + this.$store.getters.isAuthenticated);
                                          console.log(this.$store.getters.getToken);
                                          this.$router.push('/');
                                      } else {
                                          this.isError = true;
                                          this.errorMessage = data
                                      }
                                  })
                */
                /* .then(data => {
                    console.log("data ",data['hydra:member'])
                    /*
                 if (data === 'authenticated') {
                        this.$store.commit('change', true);
                        console.log('user authenticated successfully ' + this.$store.getters.isAuthenticated);
                        this.$router.push('/');
                    } else {
                        this.isError = true;
                        this.errorMessage = data

                    })  }*/
            }
        }
    }
</script>
