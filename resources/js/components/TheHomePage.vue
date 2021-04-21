<template>
    <div class="home-page-wrapper">
        <receipts-list></receipts-list>
    </div>
</template>

<script>
import ReceiptsList from './Receipts/ReceiptsList';
export default {
    name: "TheHomePage",
    components: {ReceiptsList},
}
</script>

<style scoped>

</style>
