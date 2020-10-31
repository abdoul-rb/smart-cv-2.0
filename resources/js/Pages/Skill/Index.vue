<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">Skills</h2>
        </template>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-8">
            <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-indigo-500" v-if="$page.flash.success">
                <svg class="stroke-current text-gray-200 w-5 h-auto inline-block mr-5 align-middle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                <span class="inline-block align-middle mr-8">{{ $page.flash.success }}</span>
            </div>
            <section class="overflow-hidden sm:rounded-lg py-3 mb-3">
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-8 mx-4 sm:mx-0">
                    <div class="bg-b-dashboard rounded-md flex" v-for="skill in this.skills" v-bind:key="skill.id">
                        <div class="hidden sm:block bg-blue-900 flex items-center justify-center rounded-l-md px-6 py-5">
                            <div class="text-white text-md font-semibold uppercase">{{ skill.name[0] }}</div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-5 gap-4 items-center rounded-l-sm leading-none pr-6">
                            <div class="sm:col-span-4 leading-snug px-6 py-3 sm:px-3 sm:py-0">
                                <div class="text-white w-full text-sm font-semibold">{{ skill.name }}</div>
                                <div class="hidden sm:block text-gray-400 text-sm font-semibold">{{ skill.category }}</div>
                            </div>
                            <div class="hidden sm:block sm:col-span-1 p-2">
                                <div class="relative">
                                    <div @click="open =! open">
                                        <button class=" focus:outline-none focus:text-gray-500 focus:border-gray-500 transition duration-150 ease-in-out">
                                            <svg class="stroke-current text-gray-300 w-auto h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Full Screen Dropdown Overlay -->
                                    <div v-show="open" class="fixed inset-0 z-40" @click="open = false">
                                    </div>
                                    <transition
                                        enter-active-class="transition ease-out duration-200"
                                        enter-class="transform opacity-0 scale-95"
                                        enter-to-class="transform opacity-100 scale-100"
                                        leave-active-class="transition ease-in duration-75"
                                        leave-class="transform opacity-100 scale-100"
                                        leave-to-class="transform opacity-0 scale-95">
                                        <div v-show="open"
                                             class="absolute w-48 z-50 rounded-md shadow-lg origin-top-right mt-2"
                                             style="display: none;"
                                             @click="open = false">
                                            <div class="bg-white rounded-md shadow-xs py-1">
                                                <inertia-link href="#" class="block px-4 py-1 text-xs font-semibold leading-tight text-gray-900 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Edit</inertia-link>
                                                <div class="border-t border-gray-100"></div>
                                                <inertia-link href="#" class="block px-4 py-1 text-xs font-semibold leading-tight text-gray-900 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Show</inertia-link>
                                                <div class="border-t border-gray-100"></div>
                                                <inertia-link href="#" @click="deleteSkill(skill)" type="button" class="block px-4 py-1 text-xs font-semibold leading-tight text-gray-900 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Delete</inertia-link>
                                            </div>
                                        </div>
                                    </transition>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <aside class="my-6">
                <h2 class="font-semibold text-xl text-gray-400 leading-tight">Add new Skill</h2>
                <form class="" @submit.prevent="submit" ref="formSkill">
                    <div class="grid grid-cols-6 gap-6 items-center py-3">
                        <div class="col-span-6 sm:col-span-6 lg:col-span-1">
                            <label for="name" class="block text-sm font-semibold leading-5 text-gray-200">The Skill</label>
                            <input id="name" class="mt-1 form-input block w-full py-3 px-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" v-model="form.name">
                            <div class="font-medium text-xs text-red-700 uppercase mt-2" v-if="validation.name">{{ validation.name[0] }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                            <label for="category" class="block text-sm font-semibold leading-5 text-gray-200">Class</label>
                            <input id="category" class="mt-1 form-input block w-full py-3 px-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" v-model="form.category">
                            <div class="font-medium text-xs text-red-700 uppercase mt-2" v-if="validation.category">{{ validation.category[0] }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                            <label for="notes" class="block text-sm font-semibold leading-5 text-gray-200">Notes</label>
                            <input id="notes" class="mt-1 form-input block w-full py-3 px-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" v-model="form.notes">
                            <div class="font-medium text-xs text-red-700 uppercase mt-2" v-if="validation.notes">{{ validation.notes[0] }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 lg:col-span-1 items-center pt-6">
                            <button type="submit" class="flex items-center outline-none bg-blue-900 p-1 lg:p-2 rounded-full">
                                <svg class="fill-current text-white h-6 w-6"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"/>
                                </svg>
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
        props: ['skills'],
        data() {
            return {
                open: false,
                form : {
                    name: null,
                    category: null,
                    notes: null
                },
                validation : {}
            }
        },
        methods: {
            async deleteSkill(skill) {
                if (!window.confirm('Are you sure you want to delete this skill ? ')) {
                    return
                }
                try {
                    this.skills = this.skills.filter((s) => s.id !== skill.id)
                } catch (e) {
                    console.log(e)
                }
            },
            async submit () {
                this.$inertia.post('/dashboard/skills', this.form)
            },
        },
        mounted() {}
    }
</script>
