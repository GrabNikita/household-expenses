<template>
    <ul class="navbar-nav ml-auto">
        <li v-if="isGuest" class="nav-item"><a class="nav-link" v-bind:href="loginUrl">{{ loginButtonLabel }}</a></li>
        <li v-if="isGuest" class="nav-item"><a class="nav-link" v-bind:href="registerUrl">{{ registerButtonLabel }}</a></li>
        <li v-if="!isGuest" class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ userName }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" v-bind:href="logoutUrl"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ logoutButtonLabel }}</a>
                <form id="logout-form" v-bind:action="logoutUrl" method="POST" class="d-none">
                    <input type="hidden" name="_token" v-bind:value="csrfToken">
                </form>
            </div>
        </li>
    </ul>
</template>

<script>
export default {
    name: "TopPanelAuthPanel",
    props: [
        'loginUrl', 'loginButtonLabel',
        'registerUrl', 'registerButtonLabel',
        'logoutUrl', 'logoutButtonLabel',
        'userName', 'isGuest',
        'csrfToken',
    ],
}
</script>

<style scoped>

</style>
