<template>
    <div>
        <template>
            <v-toolbar>
                <v-toolbar-title>Miaababikir</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items class="hidden-sm-and-down">

                    <v-btn flat>
                        <router-link to="/">
                            Forum
                        </router-link>
                    </v-btn>
                    <v-btn flat>
                        <router-link to="">
                            Ask Question
                        </router-link>
                    </v-btn>
                    <v-btn flat>
                        <router-link to="">
                            Category
                        </router-link>
                    </v-btn>
                    <v-btn flat>
                        <router-link to="/login">
                            Login
                        </router-link>
                    </v-btn>
                </v-toolbar-items>
            </v-toolbar>
        </template>
    </div>
</template>

<script>
    export default {};
</script>

<style scoped></style>
