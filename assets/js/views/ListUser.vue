    <template>
    <section class="section section-hero section-shaped section-lg my-0">
        <div class="shape shape-style-1 shape-image">

        </div>

        <div>
            <br/>
            <br/>
            <br/>

            <card type="" shadow
                  header-classes=" pb-5"
                  body-classes="px-lg-5 py-lg-5"
                  class="card-login-0">
                <div class="text-center  mb-4" >
                    <h1 class="text-white">List of Users</h1>
                    <br><br>
                </div>

            <table>
                <tbody>
                <tr>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<th>Id</th>
                    &nbsp;&nbsp;&nbsp;<th>Email</th>
                    &nbsp;&nbsp;&nbsp;<th>Password</th>
                    &nbsp;&nbsp;&nbsp; <th>Role</th>
                    &nbsp;&nbsp;&nbsp; <th></th>

                </tr>
                <tr v-for="todo in user" :key="todo.id" >
                    &nbsp;&nbsp;&nbsp;  <td>{{todo.id}}</td>
                    &nbsp;&nbsp;&nbsp;<td>{{todo.email}}</td>
                    &nbsp;&nbsp;&nbsp; <td>{{todo.password}}</td>
                    &nbsp;&nbsp;&nbsp;<td>{{todo.roles}}</td>

                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    <td><router-link  v-bind:to="'/editUser/' + todo.id">Edit</router-link></td>
                    <td><button class="btn btn-link" v-on:click='Delete(todo.id)'>Delete</button></td>


                </tr>
                </tbody>
            </table>
            </card>
        </div>
    </section>


</template>

<script>
    import  axios from 'axios'
    export default {
        data(){return{

            user: {
                email:'',
                password:''
            }

        }},
        mounted () {

            axios
                .get('https://127.0.0.1:8000/api/users')
                .then(response => {this.user = response.data['hydra:member'],

                    console.log(response.data)}
                )

        },
        methods:{

            Delete(id){

                axios.delete('https://127.0.0.1:8000/api/users/'+id)
                .then((response) => {
                        console.log(response.data);

                    })

            },

        }

    }

</script>

<style scoped>

</style>