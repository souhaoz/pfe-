<template>
<div>

            <form  @submit.prevent="edit($route.params.id)">
                <div>
                    <label for="email">Email:</label><br>
                    <input id="email" type="text" v-model="email" required/>
                </div>
                <div>
                    <label for="password">Password</label><br>
                    <input id="password"  v-model="password" required/>
                </div>

                <button  variant="primary" type="submit">Edit</button>
            </form>

     </div>
</template>


<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                email:'' ,
                password:''
            }
        },
        methods: {
            edit(id) {
                let config = {
                    headers: {
                        'Content-Type': 'application/ld+json'
                    }
                }
                axios.put('https://127.0.0.1:8000/api/users/' + id, {
                    email: this.email,
                    password: this.password,

                }, config)

                    .then((resp) => {
                        if (resp.data.log === 'update success !') {
                            this.items.push(resp.data.data)
                            alert(resp.data.log)
                        }
                        console.log(resp.data)
                    })
            }
        }}
</script>

<style scoped>

</style>





















