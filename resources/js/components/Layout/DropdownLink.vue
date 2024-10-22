<template>
    <a :href="route"
        class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
        v-html="text">
    </a>
</template>

<script>
export default {
    name: "DropdownLink",
    props: {
        route: {
            type: Text,
            default: '#',
        },
        text: {
            type: Text,
            default: 'Click Me',
        }
    }
}
</script>

<style scoped lang="scss">

</style>
