<template>
    <v-app toolbar>
        <v-navigation-drawer
            persistent
            light
            clipped
            enable-resize-watcher
            v-model="drawer"
        >
            <v-list dense>
                <v-list-tile @click="navigateTo('/')">
                    <v-list-tile-action>
                        <v-icon>message</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Start a Conversation</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
            <v-divider></v-divider>
            <v-list dense>
                <v-list-tile @click="logout">
                    <v-list-tile-action>
                        <v-icon>exit_to_app</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Logout</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar class="white" light fixed>
            <v-toolbar-side-icon class="orange--text text--darken-3" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-toolbar-title class="brown--text text--darken-4">Toolbar</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-menu offset-y>
                <v-btn flat class="orange--text text--darken-3" slot="activator">Hi You.<v-icon right dark>face</v-icon></v-btn>
                <v-list>
                    <v-list-tile @click="logout">
                        <v-list-tile-title>Logout</v-list-tile-title>
                    </v-list-tile>
                </v-list>
            </v-menu>
        </v-toolbar>
        <main>
            <v-container fluid class="pr-2 pl-2">
                <router-view></router-view>
            </v-container>
        </main>
    </v-app>
</template>

<script>
    export default {
        data() {
            return {
                drawer: ''
            }
        },
        created() {

        },
        methods: {
            logout() {
                axios.post('/logout')
                    .then(function() {
                        window.location.href="/";
                    });
            },
            navigateTo(path) {
                this.$router.push(path);
            }
        },
        computed: {

        }
    }
</script>
