<template>
    <ul class="navbar-nav ml-auto">
        <li v-if="true" class="nav-item">
            <router-link class="nav-link" v-bind:to="loginUrl">{{ loginButtonLabel }}</router-link>
        </li>
        <li v-if="true" class="nav-item">
            <router-link class="nav-link" v-bind:to="registerUrl">{{ registerButtonLabel }}</router-link>
        </li>
        <li v-if="false" class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                userName
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" v-bind:to="logoutUrl"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ logoutButtonLabel }}</a>
                <form id="logout-form" v-bind:action="logoutUrl" method="POST" class="d-none">
                    <input type="hidden" name="_token" value="csrfToken">
                </form>
            </div>
        </li>
    </ul>
</template>

<script>
export default {
    name: "TheHeaderAuthPanel",
    props: [
        'loginUrl', 'loginButtonLabel',
        'registerUrl', 'registerButtonLabel',
        'logoutUrl', 'logoutButtonLabel',
    ],
}
</script>
