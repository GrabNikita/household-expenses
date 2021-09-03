<template>
    <header class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <router-link class="navbar-brand" v-bind:to="'/'">{{ appName }}</router-link>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                v-bind:aria-label="toggleNavigationLabel"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <slot></slot>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "TheHeader",
    props: ['homeUrl', 'appName', 'toggleNavigationLabel'],
}
</script>
<style lang="scss">
    header {
        grid-area: header;
    }
</style>
