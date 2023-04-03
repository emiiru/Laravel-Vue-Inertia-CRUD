<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import {Head,Link} from '@inertiajs/vue3';
    const props = defineProps({
        topics: Array
    });

</script>

<template>

    <Head title="Topics" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Topics</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                    <Link class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="/topics/create">Create</Link>

                    <div class="relative overflow-x-auto pt-5">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Slug
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Created
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Updated
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="topic in topics" :key="topic.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ topic.name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ topic.slug }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ topic.created_at }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ topic.updated_at }}
                                    </td>
                                    <td class="text-center">
                                        <Link class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900" :href="`/topics/${topic.id}/edit`">Edit</Link>
                                        <Link class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-red-900" :href="`/topics/${topic.id}/delete`" method="delete" as="button">Delete</Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
