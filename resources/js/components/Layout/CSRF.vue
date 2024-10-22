<template>
    <input type="hidden" name="_token" v-model="csrf">
</template>

<script>
export default {
    name: "CSRF",
    data() {
        return {
            csrf: ''
        }
    },
    beforeMount() {
        this.csrf = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute('content');
    }
}
</script>

<style scoped>

</style>
