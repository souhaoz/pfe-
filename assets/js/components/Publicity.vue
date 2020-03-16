<template>
    <div>
        <form @submit.prevent="submitForm">
            <div>
                <label for="Transmitter">Transmitter:</label><br>
                <input id="Transmitter" type="text" v-model="Transmitter" required/>
            </div>
            <div>
                <label for="Activated">Activated:</label><br>
                <input id="Activated" type="checkbox" v-model="Activated" />
                {{Activated ? "yes" : "no"}}

            </div>
            <div>
                <label for="Title">Title</label><br>
                <input id="Title" type="text" v-model="Title" required/>
            </div>
            <div>
                <label for="Contents">Contents:</label><br>
                <input id="Contents" type="text" v-model="Contents" ></input>
            </div>
            <div>
                <label for="CreatedAt">CreatedAt:</label><br>
                <input id="CreatedAt" type="date" v-model="CreatedAt" ></input>
            </div>
            <div>
                <label for="UpdatedAt">UpdatedAt:</label><br>
                <input id="UpdatedAt"   type="date" v-model="UpdatedAt" ></input>
            </div>



            <label for="doc">Choose a file:</label>

            <input type="file" id="doc" name="doc" multiple>

            <div>
                <label for="Documents">Documents</label><br>
                <input id="Documents"   type="number" v-model="Documents" ></input>
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
                Transmitter: '',
                Activated:true,
                Title: '',
                Contents: '',
                UpdatedAt:'',
                CreatedAt:'',
                documents:0,
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
                axios.post('https://127.0.0.1:8000/api/publicities', {

                    Transmitter:this.Transmitter ,
                    Activated: this.Activated,
                    Title:this.Title ,
                    Contents:this.Contents ,
                    UpdatedAt:this.UpdatedAt ,
                    CreatedAt:this.CreatedAt,
                    documents:this.documents
                },config)
                    .then(response => {
                        console.log(response);
                        this.response = response.data;
                        this.success = 'Data saved successfully';
                        this.response = JSON.stringify(response, null, 2)
                    }).catch(error => {
                    this.response = 'Error: ' + error.response.status
                })
                this.Transmitter='' ;
                this.Activated=true;
                this.Title ='' ;
                this.Contents ='' ;
                this.UpdatedAt =new Date(0) ;
                this.CreatedAt=new Date(0)  ;
                this.documents='';
            }
        }
    }
</script>

<style scoped>

</style>