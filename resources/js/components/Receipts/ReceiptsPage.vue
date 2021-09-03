<template>
    <div class="receipts-page-wrapper">
        <receipts-list></receipts-list>
    </div>
</template>

<script>
import ReceiptsList from './ReceiptsList';

export default {
    name: "ReceiptsPage",
    components: {ReceiptsList},
}
</script>

<style scoped>

</style>
