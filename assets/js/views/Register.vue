<template>
    <section class="section section-hero section-shaped section-lg my-0">
        <div class="shape shape-style-1 shape-image">
        </div>
        <div class="container pt-lg-md">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <card type="" shadow
                          header-classes="pb-5"
                          body-classes="px-lg-5 py-lg-5"
                          class="card-login">
                        <template>
                            <div class="text-center mb-4">
                                <h1 style="color: #fd7c00">REGISTER</h1>
                                <br><br>
                            </div>

                            <form @submit.prevent="submitForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row myinputstylefocus">

                                            <div class="col-lg-1 icon-color" style="padding-top:10px;">
                                                <i class="fa  fa-user fa-2x"></i>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="form-group">
                                                    <input
                                                            id="login" v-model="user.login"
                                                            class="myinputstyle form-control mb-3 "
                                                            type="text" >
                                                    <label class="form-control-placeholder" for="login">Login
                                                    </label>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row myinputstylefocus">

                                            <div class="col-lg-1 icon-color" style="padding-top:10px;">
                                                <i class="fa fa-envelope fa-lg"></i>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="form-group">
                                                    <input
                                                            type="email"  name="email"  v-model="user.email"

                                                            class="form-control mb-3 myinputstyle" :class="{ 'is-invalid': submitted && $v.user.email.$error }"
                                                            id="email"
                                                            required />

                                                    <label class="form-control-placeholder" for="email">Email
                                                    </label>
                                                    <div v-if="submitted && $v.user.email.$error" class="invalid-feedback">
                                                        <span v-if="!$v.user.email.required">Email is required</span>
                                                        <span v-if="!$v.user.email.email">Email is invalid</span>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-lg-10">
                                                <input type="checkbox" id="Activated"

                                                        v-model="user.activated" />
                                                <label for="Activated">Activated</label>
                                                <!--   <div class="form-group">
                                                      <input
                                                              type="checkbox"  name="activated"  v-model="user.activated"

                                                              class="form-control "
                                                              id="activated"
                                                              required />

                                                      <label class="form-control-placeholder" for="activated">Activated
                                                      </label>

                                                  </div>-->
                                              </div>





                                         </div>


                                         <div class="row myinputstylefocus">

                                             <div class="col-lg-1 icon-color" style="padding-top:10px;">
                                                 <i class="fa fa-file-image-o fa-lg"></i>
                                             </div>
                                             <div class="col-lg-10">
                                                 <div class="form-group">
                                                     <input
                                                             id="photo"
                                                             class="myinputstyle form-control mb-3 "
                                                             type="file" >
                                                     <label class="form-control-placeholder" for="photo">
                                                     </label>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>




                                     <div class="col-md-6">
                                         <div class="row myinputstylefocus">
                                             <div class="col-lg-1 icon-color" style="padding-top:10px;">
                                                 <i class="fa  fa-unlock-alt fa-2x "></i>
                                             </div>

                                             <div class="col-lg-10">
                                                 <div class="form-group">

                                                     <input type="password" v-model="user.password" id="password" name="password"  class="form-control mb-3 myinputstyle" :class="{ 'is-invalid': submitted && $v.user.password.$error }" />
                                                     <label class="form-control-placeholder" for="password">password</label>
                                                     <div v-if="submitted && $v.user.password.$error" class="invalid-feedback">
                                                         <span v-if="!$v.user.password.required">Password is required</span>
                                                         <span v-if="!$v.user.password.minLength">Password must be at least 6 characters</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>




                                         <div class="row myinputstylefocus">
                                             <div class="col-lg-1 icon-color" style="padding-top:10px;">
                                                 <i class="fa  fa-unlock-alt fa-2x "></i>
                                             </div>

                                             <div class="col-lg-10">
                                                 <div class="form-group">

                                                     <input type="password"  id="confirmPassword" name="confirmPassword" v-model="user.confirmPassword"       class="form-control mb-3 myinputstyle" :class="{ 'is-invalid': submitted && $v.user.confirmPassword.$error }" />
                                                     <label class="form-control-placeholder" for="confirmpassword">
                                                         Confirm password
                                                     </label>
                                                     <div v-if="submitted && $v.user.confirmPassword.$error" class="invalid-feedback">
                                                         <span v-if="!$v.user.confirmPassword.required">Confirm Password is required</span>
                                                         <span v-else-if="!$v.user.confirmPassword.sameAsPassword">Passwords must match</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div><!--
                                         <base-input alternative
                                                     type="password"
                                                     placeholder="Password"
                                                     addon-left-icon="ni ni-lock-circle-open">
                                         </base-input>-->
                                        <!--   <div class="text-white font-italic">
                                               <small  class="text-black">password strength:
                                                   <span class="text-success font-weight-700">strong</span>
                                               </small>
                                           </div>
                                           <base-checkbox type="myorange">
                                               <span>I agree with the
                                                   <a href="#" class="text-dark" >Privacy Policy</a>
                                               </span>
                                           </base-checkbox>-->
                                        <div class="text-right">
                                            <button type="myorange" class="my-4">Create account</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </template>
                    </card>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    import { required, email, minLength, sameAs } from "vuelidate/lib/validators";
    import axios from 'axios'
    export default {
        data() {
            return {
                user: {
                    login:"",
                    email: "",
                    password: "",
                    confirmPassword: "",
                    activated:false
                },
                submitted: false
            };
        },
        validations: {
            user: {
                email: { required, email },
                password: { required, minLength: minLength(6) },
                confirmPassword: { required, sameAsPassword: sameAs('password') }
            }
        },
        methods: {
            submitForm() {
                //const token = localStorage.getItem('token')
               // console.log(token);
              //  var headers = new Headers();
               // headers.append('Authorization', this.$store.getters.getToken);


               // console.log(headers);
                this.submitted = true;

                // stop here if form is invalid
                this.$v.$touch();
                if (this.$v.$invalid) {
                    return;
                }
                alert("SUCCESS!! :-)\n\n" + JSON.stringify(this.user));
                let config = {
                    headers: {
                        'Content-Type': 'application/ld+json'
                    }
                }
                axios.post('https://127.0.0.1:8000/api/users-api',{
                    email: this.user.email,
                    password: this.user.password,
                    login:this.user.login,
                    activated:this.user.activated
                    //,
                    //roles: this.roles,
                    //apiToken: this.apiToken

                },config)
                    .then(response => {
                        console.log(response);
                       // console.log(localStorage.getItem('token'));
                        this.response = response.data;
                        this.success = 'Data saved successfully';
                        this.response = JSON.stringify(response, null, 2)
                    }).catch(error => {
                    this.response = 'Error: ' + error.response.status
                })
                this.user.email = '';
                //  this.roles = '';
                this.user.password = '';
                this.user.login = '';
                this.user.activated = false;
                //this.apiToken = '';
            }
        },
        created() {
            console.log(this.$store.getters.isAuthenticated)
        }
    }
</script>
<style>
</style>
