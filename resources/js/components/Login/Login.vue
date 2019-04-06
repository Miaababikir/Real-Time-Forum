<template>
    <div>
        <v-container>
            <form @submit.prevent="login">
                <v-text-field
                    v-model="form.email"
                    label="E-mail"
                    type="email"
                    required
                ></v-text-field>
                <v-text-field
                    v-model="form.password"
                    label="Password"
                    type="password"
                    required
                ></v-text-field>
                <v-btn color="green" type="submit">Login</v-btn>
            </form>
        </v-container>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    email: null,
                    password: null
                }
            }
        },
        methods: {
            login() {
                axios.post('/api/auth/login', this.form)
                    .then(response => console.log(response.data))
                    .catch(error => console.log(error));
            }
        }
    };
</script>

<style scoped></style>
