<template>
    <app-layout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-200 leading-tight">Projects</h2>
                <inertia-link :href="create_url" class="outline-none bg-blue-900 text-center p-1 rounded-full">
                    <svg class="fill-current text-white h-4 w-4"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"/>
                    </svg>
                </inertia-link>
            </div>
        </template>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-8">
            <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-indigo-500" v-if="$page.flash.success">
                <svg class="stroke-current text-gray-200 w-5 h-auto inline-block mr-5 align-middle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                <span class="inline-block align-middle mr-8">{{ $page.flash.success }}</span>
            </div>
            <div class="grid lg:grid-cols-3 gap-4 mt-4">
                <inertia-link href="#" class="rounded shadow bg-blue-500 transform hover:-translate-y-2 transtion transition-all duration-500 px-8 py-12" v-for="project in achieves" :key="project.id">
                    <div class="w-9/12 space-y-2 text-white">
                        <h4 class="text-3xl font-semibold tracking-wide leading-7">{{ project.name }}</h4>
                        <h5 class="text-xs font-semibold uppercase">{{ project.link }}</h5>
                    </div>
                    <p class="text-sm text-gray-200 my-3">{{ project.description }}</p>
                    <p class="mt-6">
                        <span class="text-sm text-gray-300 font-bold mr-2" v-for="stack in project.stacks">{{ stack.name }}</span>
                    </p>
                </inertia-link>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: { AppLayout },
        props: ['achieves', 'create_url'],
        mounted() {
            console.log(this.achieves)
        }
    }
</script>
