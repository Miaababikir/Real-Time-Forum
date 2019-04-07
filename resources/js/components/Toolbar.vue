<template>
    <div>
        <template>
            <v-toolbar>
                <v-toolbar-title>Miaababikir</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items class="hidden-sm-and-down">

                    <v-btn flat v-for="item in items" :key="item.title" v-if="item.show">
                        <router-link :to="item.to">
                            {{ item.title }}
                        </router-link>
                    </v-btn>
                </v-toolbar-items>
            </v-toolbar>
        </template>
    </div>
</template>

<script>
    export default {
        created() {
            EventBus.$on('logout', ()=> {
                User.logout();
            })
        },

        data() {
            return {
                items: [
                    {title: 'Forum', to: '/forum', show: true},
                    {title: 'Ask Question', to: '/ask', show: true},
                    {title: 'Category', to: '/categories', show: true},
                    {title: 'Login', to: '/login', show: !User.loggedIn()},
                    {title: 'Logout', to: '/logout', show: User.loggedIn()},
                ]
            }
        }
    };
</script>

<style scoped></style>
