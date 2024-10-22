<template>
    <modal ref="modal" :name="name">
        <form :method="method" :action="action" class="p-6">
            <csrf></csrf>

            <slot></slot>

            <div class="mt-6 flex justify-end">
                <button
                    @click.prevent="closeModal"
                    v-html="cancelText"
                    type="button"
                    class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                ></button>

                <button
                    v-html="submitText"
                    type="submit"
                    class="ms-3 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                ></button>
            </div>
        </form>
    </modal>
</template>

<script>

import CSRF from "../Layout/CSRF.vue";

export default {
    name: "FormModal",
    components: {
        csrf: CSRF,
    },
    props: {
        name: {
            type: String,
        },
        action: {
            type: String,
        },
        method: {
            type: String,
            default: 'POST',
        },
        submitText: {
            type: String,
            default: 'Submit'
        },
        cancelText: {
            type: String,
            default: 'Cancel'
        }
    },
    methods: {
        closeModal() {
            this.$refs.modal.closeModal();
        }
    }
}
</script>

<style scoped>

</style>
