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
                <router-link to="/signup">
                    <v-btn color="blue" type="submit">Sign Up</v-btn>
                </router-link>
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
        created() {
            if (User.loggedIn()) {
                this.$router.push('forum');
            }
        },
        methods: {
            login() {
                User.login(this.form);
            }
        }
    };
</script>

<style scoped></style>
