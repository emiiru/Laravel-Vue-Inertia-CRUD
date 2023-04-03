<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { reactive } from 'vue';
    import {Head,Link,router } from '@inertiajs/vue3';

    const form = reactive({
        name: null,
        content: null,
    })

    function submit() {
        router.post('/topics/store', form)
    }

</script>

<template>

    <Head title="Create Topic" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Topic</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">


                    <div class="relative overflow-x-auto pt-5">


                        <form @submit.prevent="submit">
                            <div class="mb-6">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic
                                    Name</label>
                                <input type="text" id="name" v-model="form.name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Topic Name" autofocus autocomplete="off" required>
                            </div>
                            <div class="mb-6">

                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic
                                    Content</label>
                                <textarea id="content" v-model="form.content" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write your content here..." required></textarea>

                            </div>
                            <Link class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="/topics">back</Link>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 float-right">Submit</button>
                        </form>


                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
