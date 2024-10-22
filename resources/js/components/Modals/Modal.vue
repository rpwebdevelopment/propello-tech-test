<template>
    <div v-show="open" class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50">
        <div class="fixed inset-0 transform transition-all" >
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <div class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-lg sm:mx-auto">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal",
    props: ['name'],
    data() {
        return {
            open: false,
        }
    },
    beforeMount() {
        let _this = this;

        document.addEventListener("open-modal", function ($event) {
            _this.open = $event.detail === _this.name;
        })
    },
    methods: {
        closeModal() {
            this.open = false;
        }
    }
}
</script>

<style scoped>

</style>
