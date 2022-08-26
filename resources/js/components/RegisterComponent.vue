<template>
<form>
    <p>
    <label>Name :</label>
    <input type="txt" v-model="name" required>
    </p>
    <p>
    <label>Age :</label>
    <input type="number" v-model="age" required>
    </p>
    <p>
    <label>Email :</label>
    <input type="email" v-model="email" required>
    </p>
    <p>
    <label>Password :</label>  
    <input type="password" v-model="password" required>    
    </p>
    <div class="button">
        <button class="submit" @click="handleSubmit" type="button">Sign up here</button>
    </div>
</form>
</template>

<script>
    import axios from 'axios';
    export default{
    data() {
        return {
            email: '',
            password: ''
        }
    },
    methods: {
   
        handleSubmit() {
            let age = this.age;
            let name = this.name;
            let email = this.email;
            let password = this.password;
            const regex = /^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$/;
            //Validate password field length
            // this.password = regex.this.password?
            // '' : 'Password should be more than 6 characters long!';
            if (regex.test(this.password)) {
                console.log("success"); 
            } else {
                console.log("hide error"); 
            }
            axios.post('/api/register', {
                age,
                name,
                email,
                password
            })
            .then(response => {
                console.log("response =>>>>>>>>>>.", response);
            })
            .catch(err => {
                console.log("err =>>>>>>>>>>.", err);
            })
        }
    }
    
}
</script>