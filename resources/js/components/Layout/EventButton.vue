<template>
    <button
        v-html="text"
        v-on:click.prevent="dispatch"
        type="submit"
        class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"
    ></button>
</template>

<script>
export default {
    name: "EventButton",
    props: {
        text: {
            type: Text,
        },
        name: {
            type: Text
        },
        value: {
            type: Text,
            default: ''
        }
    },
    methods: {
        dispatch() {
            let event = new CustomEvent(this.name, { detail: this.value });

            document.dispatchEvent(event);
        }
    }
}
</script>

<style scoped>

</style>
