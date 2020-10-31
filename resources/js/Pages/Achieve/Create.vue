<template>
    <app-layout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-200 leading-tight">New project / <span v-model="form.name">{{ form.name }}</span></h2>
                <inertia-link :href="index_url" class="text-blue-600 text-xs font-bold underline uppercase">Back</inertia-link>
            </div>
        </template>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-8">
            <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-indigo-500" v-if="$page.flash.success">
                <svg class="stroke-current text-gray-200 w-5 h-auto inline-block mr-5 align-middle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                <span class="inline-block align-middle mr-8">
                    {{ $page.flash.success }}
                </span>
            </div>
            <aside class="">
                <form class="" @submit.prevent="submit" enctype="multipart/form-data">
                    <div class="grid grid-cols-6 gap-4 py-3">
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="name" class="block text-sm font-semibold leading-5 text-gray-200">Le projet</label>
                            <input type="text" id="name" class="mt-1 form-input block w-full py-3 px-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-none focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" :class="{ 'border-red-700' : $page.errors.name }" v-model="form.name">
                            <div class="font-medium text-xs text-red-700 mt-2" v-if="$page.errors.name">{{ $page.errors.name[0] }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <label for="git" class="block text-sm font-semibold leading-5 text-gray-200">Le depôt</label>
                            <input type="text" id="git" class="mt-1 form-input block w-full py-3 px-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-none focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" :class="{ 'border-red-700' : $page.errors.git_url }" v-model="form.git_url">
                            <div class="font-medium text-xs text-red-700 mt-2" v-if="$page.errors.git_url">{{ $page.errors.git_url[0] }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <label for="link" class="block text-sm font-semibold leading-5 text-gray-200">Where is it ?</label>
                            <input type="text" id="link" class="mt-1 form-input block w-full py-3 px-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-none focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" v-model="form.link">
                            <div class="font-medium text-xs text-red-700 mt-2" v-if="$page.errors.link">{{ $page.errors.link[0] }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                            <label for="description" class="block text-sm font-semibold leading-5 text-gray-200">Talk about this project</label>
                            <textarea id="description" rows="4" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" v-model="form.description"></textarea>
                            <div class="font-medium text-xs text-red-700 mt-2" v-if="$page.errors.description">{{ $page.errors.description[0] }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <label for="notes" class="block text-sm font-semibold leading-5 text-gray-200">Notes</label>
                            <textarea id="notes" rows="4" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" v-model="form.notes"></textarea>
                            <div class="font-medium text-xs text-red-700 mt-2" v-if="$page.errors.notes">{{ $page.errors.notes[0] }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                            <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="mt-1 text-sm text-gray-600">
                                        <button class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">Upload a file</button>
                                    </p>
                                    <p class="mt-1 text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                            <label for="" class="block text-sm font-semibold leading-5 text-gray-200">Les stacks</label>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-1" v-for="(stack, index) in form.stacks" v-bind:key="index">
                                    <input type="text" id="" class="mt-1 form-input block w-full py-3 px-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-none focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" v-model="form.stacks[index].name">
                                </div>
                                <div class="col-span-1 pt-1 flex">
                                    <button type="button" class="flex items-center bg-blue-900 outline-none focus:outline-none p-1 lg:p-3 rounded-full mr-3" @click.prevent="addStacks" v-if="form.stacks.length < 10">
                                        <svg class="fill-current text-white h-6 w-6"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"/>
                                        </svg>
                                    </button>
                                    <button type="button" class="flex items-center bg-blue-900 outline-none focus:outline-none p-1 lg:p-3 rounded-full" @click.prevent="removeStacks" v-if="form.stacks.length > 4">
                                        <svg class="stroke-current text-red-800 h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2 mt-2">
                            <button type="submit" class="py-4 px-6 bg-blue-900 rounded-md text-md leading-4 font-semibold text-gray-200 focus:outline-none focus:border-indigo-300 focus:shadow-none active:text-blue-800 transition duration-150 ease-in-out">
                                Save save save !!!
                            </button>
                        </div>
                    </div>
                </form>
            </aside>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Button from "@/Jetstream/Button";
    export default {
        components: { Button, AppLayout, },
        props: ['index_url'],
        data() {
            return {
                open: false,
                form : {
                    name: null,
                    description: null,
                    git_url: null,
                    link: null,
                    notes: null,
                    image: null,
                    stacks: [
                        { name: null }
                    ]
                },
                validation : {}
            }
        },
        methods: {
            async submit () {
                this.$inertia.post('/dashboard/achieves', this.form)
            },
            addStacks () {
                this.form.stacks.push({ name: null })
            },
            removeStacks () {
                this.form.stacks.pop()
            }
        },
        mounted() {
            console.log(this.form.stacks)
        }
    }
</script>
