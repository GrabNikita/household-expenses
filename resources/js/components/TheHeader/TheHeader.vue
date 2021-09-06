<template>
    <header class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <router-link class="navbar-brand" to="/">Household expenses</router-link>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <the-header-main-menu></the-header-main-menu>
                <the-header-auth-panel></the-header-auth-panel>
            </div>
        </div>
    </header>
</template>

<script>
import TheHeaderMainMenu from './TheHeaderMainMenu';
import TheHeaderAuthPanel from './TheHeaderAuthPanel';

export default {
    name: "TheHeader",
    components: {
        TheHeaderMainMenu,
        TheHeaderAuthPanel,
    }
}
</script>
<style lang="scss">
    header {
        grid-area: header;
    }
</style>
