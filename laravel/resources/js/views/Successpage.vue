<template>
    <div>
        <div class="text-center" style="height:100vh !important;weight:100vw !important;">
            Success Funding
            This is your reciept : {{ pdf_receipt }}
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pdf_receipt: any
        }
    },
}
</script>

<style>

</style>