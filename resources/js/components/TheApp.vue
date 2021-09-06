<template>
    <div id="the-app">
        <the-header></the-header>
        <the-content></the-content>
        <the-footer></the-footer>
    </div>
</template>

<script>
import TheHeader from './TheHeader/TheHeader';
import TheHeaderMainMenu from './TheHeader/TheHeaderMainMenu';
import TheHeaderMainMenuItem from './TheHeader/TheHeaderMainMenuItem';
import TheHeaderAuthPanel from './TheHeader/TheHeaderAuthPanel';
import TheContent from './TheContent';
import TheFooter from './TheFooter';

export default {
    name: "TheApp",
    components: {
        TheFooter,
        TheContent,
        TheHeader,
    },
}
</script>

<style lang="scss">
#app {
    display: grid;
    grid-template-rows: [start] 3rem [after-header] auto [before-footer] 3rem [end];
    grid-template-columns: [start] 1fr [end];
    grid-template-areas:
            "header"
            "content"
            "footer";
    grid-gap: 1rem;
}

main {
    grid-area: content;
}
</style>
