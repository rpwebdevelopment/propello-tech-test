<template>
    <form id="logout-form" method="POST" action="/logout">
        <csrf></csrf>
        <dropdown-link text="Log Out" @click.prevent="submitForm"></dropdown-link>
    </form>
</template>

<script>

import CSRF from "./CSRF.vue";
import DropdownLink from "./DropdownLink.vue";

export default {
    name: "LogoutForm",
    components: {
        DropdownLink,
        'csrf': CSRF,
    },
    methods: {
        submitForm() {
            document.getElementById('logout-form').submit();
        }
    }
}
</script>

<style scoped>

</style>
