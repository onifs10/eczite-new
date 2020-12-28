<template>
    <div class="reg-container">
        <div class="reg">
            <div class="reg-header">
                <div class="header-main">
                    <h1>Register</h1>
                </div>
                <div class="header-p"><small>to get updates from us, please kindly register here</small></div>
                <div v-if="error" class="error" > {{errors.message}}</div>
                <div v-if="submitted" class="success"> Thanks For Registering</div>
            </div>
            <form class="reg-form" @submit.prevent="submitForm">
                <div class="inputGroup">
                    <input type="text"  v-model="form.name" name="name" id="name" required>
                    <label for="name" class="label-name"><span class="label-content" :class="{errorInput : NameError}">Full Name</span></label>
                </div>
                <div v-if="errors.name" class="error-text" > {{errors.name}}</div>
                <div class="inputGroup">
                    <input type="text" v-model="form.number" required="required" id="number" name="phone_no">
                    <label for="number"   class="label-name"><span class="label-content" v-bind:class="{errorInput : NumError}" >Phone Number</span></label>
                </div>
                <div v-if="errors.number" class="error-text" > {{errors.number}}</div>
                <div class="inputGroup">
                    <select  name="type" id="type">
                        <option value="passenger" selected>
                            passenger
                        </option>
                        <option value="driver">
                            driver
                        </option>
                    </select>
                    <label v-model="form.type" for="type" class="label-name"><span v-bind:class="{errorInput : TypeError} "  class="label-content">Account type</span></label>
                </div>
                <div v-if="errors.type" class="error-text" > {{errors.type}}</div>
                <div class="submit inputGroup-button">
                    <input class="btn-signup " type="submit" value="Submit"/>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
        name : 'Form',
        data(){
             return {
                 form : {
                     name: null,
                     number : null,
                     type : "passenger"
                 },
                 submitted : false,
                 errors : {
                     message : null,
                     number : null,
                     name : null,
                     type : null
                 },
                 NameError: false,
                 NumError : false,
                 TypeError : false,
                 error : false
             }
        },
        methods : {
            submitForm() {
                axios.post('api/register',this.form)
                .then((r) => {
                    console.log(
                        r.data.message
                    )
                    this.clearForm();
                    this.submitted = !this.submitted;
                })
                .catch((e) => {
                    this.error = !this.error
                    let { message , errors : {number  , name   , type}} = e.response.data;
                    if(!!message) {
                        this.errors.message = message;
                    }
                    if(!!number) {
                        this.errors.number = number[0];
                        this.NumError = !this.NumError;
                    }
                    if(!!name) {
                        this.errors.name = name[0];
                        this.NameError = !this.NameError;
                    }
                    if(!!type) {
                        this.errors.type = type[0];
                        this.TypeError = !this.TypeError;
                    }
                })
            },
            clearForm() {
                this.form.name = null;
                this.form.number = null;
            }
        }
    }
</script>

<style scoped>
    .error{
        color: darkred;
        background-color: rgba(255,0,0,0.2);
        border: red 5px;
        border-radius: 5px;
        padding: 10px;
        font-size: 0.7em;
    }
    .success {
        color: darkgreen;
        background-color: rgba(0,255,0,0.2);
        border: green 5px;
        border-radius: 5px;
        padding: 10px;
        font-size: 0.7em;
    }
    .error-text{
        font-size: 0.6em;
        color: red;
    }
    .errorInput{
        color: red !important;
    }
</style>
