<template>
    <app-layout header="Author">
        <div class="w-2/3 bg-gray-200 mx-auto p-6 shadow">
            <form @submit.prevent="submit" class="flex flex-col items-center">
                <h1>Add New Author</h1>

                <div class="pt-4">
                    <input
                        type="text"
                        name="name"
                        placeholder="Full Name"
                        class="rounded px-4 py-2 w-64"
                        v-model="form.name"
                    />
                    <div v-if="errors.name"
                        class="text-red-600 p-2">{{ errors.name }}</div>
                </div>
                <div class="pt-4">
                    <input
                        type="text"
                        name="dob"
                        placeholder="Date of Birth"
                        class="rounded px-4 py-2 w-64"
                        v-model="form.dob"
                    />
                    <div v-if="errors.dob"
                        class="text-red-600 p-2">{{ errors.dob }}</div>
                </div>
                <div class="pt-4">
                    <button
                        type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4"
                    >
                        Add
                    </button>
                </div>
            </form>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    components: { AppLayout },
    props: {
        errors: Object
    },
    data() {
        return {
            form: {
                name: null,
                dob: null
            }
        };
    },
    methods: {
        submit() {
            this.$inertia.post("/authors", this.form);
        }
    }
};
</script>
