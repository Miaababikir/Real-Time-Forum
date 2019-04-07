<template>
    <v-container>
        <v-container>
            <form @submit.prevent="signup">
                <v-text-field
                    v-model="form.name"
                    label="Name"
                    type="text"
                ></v-text-field>
                <span class="red--text" v-if="errors.name">{{ errors.name[0]}}</span>

                <v-text-field
                    v-model="form.email"
                    label="E-mail"
                    type="email"
                ></v-text-field>
                <span class="red--text" v-if="errors.email">{{ errors.email[0]}}</span>

                <v-text-field
                    v-model="form.password"
                    label="Password"
                    type="password"
                ></v-text-field>
                <span class="red--text" v-if="errors.password">{{ errors.password[0]}}</span>
                <v-text-field
                    v-model="form.password_confirmation"
                    label="Password confirmation"
                    type="password"
                ></v-text-field>
                <v-btn color="green" type="submit">Sign Up</v-btn>
                <router-link to="/login">
                    <v-btn color="blue" type="submit">Login</v-btn>
                </router-link>
            </form>
        </v-container>
    </v-container>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: null,
                    email: null,
                    password: null,
                    password_confiramtion: null,
                },
                errors: {}
            }
        },
        created() {
            if (User.loggedIn()) {
                this.$router.push('forum');
            }
        },
        methods: {
            signup() {
                axios.post('/api/auth/signup', this.form)
                    .then(response => {
                        User.responseAfterLogin(response);
                        this.$router.push('forum');
                    })
                    .catch(error => this.errors = error.response.data.errors);
            }
        }
    };
</script>

<style scoped></style>
