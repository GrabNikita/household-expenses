<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <a class="navbar-brand" v-bind:href="homeUrl">{{ appName }}</a>
        <div class="container">
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
    </nav>
</template>

<script>
export default {
    name: "TopPanel",
    props: ['homeUrl', 'appName', 'toggleNavigationLabel'],
}
</script>

