<template>
    <div id="the-app">
        <the-header
            home-url="/"
            app-name="Household expenses"
            toggle-navigation-label="Toggle navigation"
        >
            <the-header-main-menu>
                <the-header-main-menu-item
                    url="markets"
                    title="Markets"
                ></the-header-main-menu-item>
                <the-header-main-menu-item
                    url="manufacturers"
                    title="Manufacturers"
                ></the-header-main-menu-item>
                <the-header-main-menu-item
                    url="products"
                    title="Products"
                ></the-header-main-menu-item>
                <the-header-main-menu-item
                    url="receipts"
                    title="Receipts"
                ></the-header-main-menu-item>
            </the-header-main-menu>
            <the-header-auth-panel
                login-url="login"
                login-button-label="Login"
                register-url="register"
                register-button-label="Register"
                logout-url="logout"
                logout-button-label="Logout"
                csrf-token="asd"
            ></the-header-auth-panel>
        </the-header>
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
        TheHeaderAuthPanel,
        TheHeaderMainMenuItem,
        TheHeaderMainMenu,
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
