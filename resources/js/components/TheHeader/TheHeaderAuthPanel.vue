<template>
    <ul class="navbar-nav ml-auto">
        <li v-if="!authed" class="nav-item">
            <router-link class="nav-link" to="/login">Login</router-link>
        </li>
        <li v-if="!authed" class="nav-item">
            <router-link class="nav-link" to="/register">Register</router-link>
        </li>
        <li v-if="authed" class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                userName
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a
                    class="dropdown-item"
                    to="/logout"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                >Logout</a>
                <form
                    id="logout-form"
                    action="/logout"
                    method="POST"
                    class="d-none"
                >
                    <input type="hidden" name="_token" v-bind:value="csrfToken">
                </form>
            </div>
        </li>
    </ul>
</template>

<script>
export default {
    name: "TheHeaderAuthPanel",
    computed: {
        user() {
            return this.$store.getters.getUser;
        },
        csrfToken() {
            return this.$store.getters.getCsrfToken;
        },
        authed() {
            return this.$store.getters.getAuthed;
        },
    },
}
</script>
