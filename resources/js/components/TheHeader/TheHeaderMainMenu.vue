<template>
    <nav class="mr-auto">
        <ul class="navbar-nav">
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
        </ul>
    </nav>
</template>

<script>
import TheHeaderMainMenuItem from './TheHeaderMainMenuItem';

export default {
    name: "TheHeaderMainMenu",
    components: {
        TheHeaderMainMenuItem
    }
}
</script>
