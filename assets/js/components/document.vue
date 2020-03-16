<template>
    <div>
    <form @submit.prevent="submitForm">
        <div>
            <label for="Name">Name:</label><br>
            <input id="Name" type="text" v-model="Name" required/>
        </div>
        <div>
            <label for="Path">Path</label><br>
            <input id="Path"  v-model="Path" required/>
        </div>
        <div>
            <label for="Size">Size</label><br>
            <input id="Size" type="number" v-model="Size" required/>
        </div>
        <div>
            <label for="Extension">Extension:</label><br>
            <textarea id="Extension" v-model="Extension" ></textarea>
        </div>

        <button  variant="primary" type="submit">Submit</button>
        <div>
            <p v-if="success"> {{ success }}</p>
            <pre>{{ response }}</pre>
        </div>
    </form>
</div>
</template>

<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                Name: '',
                Size:'',
                Extension: '',
                Path: '',
                response: '',
                success: ''
            }
        },
        methods: {

            submitForm() {
                let config = {
                    headers: {
                        'Content-Type': 'application/ld+json'
                    }
                }
                axios.post('https://127.0.0.1:8000/api/documents', {
                    Name: this.Name,
                    Size: this.Size,
                    Extension: this.Extension,
                    Path: this.Path

                },config)
                    .then(response => {
                        console.log(response);
                        this.response = response.data;
                        this.success = 'Data saved successfully';
                        this.response = JSON.stringify(response, null, 2)
                    }).catch(error => {
                    this.response = 'Error: ' + error.response.status
                })
                this.Name = '';
                this.Extension = '';
                this.Path = '';
                this.Size = '';
            }
        }
    }
</script>

<style scoped>

</style>