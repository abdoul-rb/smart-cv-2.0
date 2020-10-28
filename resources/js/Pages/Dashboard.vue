<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                Mon panel d'administration
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">
                    <div class="my-4 mx-4 sm:mx-0">
                        <div class="grid sm:grid-cols-3 gap-8">
                            <div class="bg-b-dashboard rounded-lg px-8 py-6 h-32">
                                <h4 class="text-gray-600 text-md font-bold tracking-widest">Skills</h4>
                                <h5 class="text-white text-5xl font-bold tracking-wider">72</h5>
                            </div>
                            <div class="bg-b-dashboard rounded-lg px-8 py-6 h-32">
                                <h4 class="text-gray-600 text-md font-bold tracking-widest">Projects</h4>
                                <h5 class="text-white text-5xl font-bold tracking-wider">9</h5>
                            </div>
                            <div class="bg-b-dashboard rounded-lg px-8 py-6 h-32">
                                <h4 class="text-gray-600 text-md font-bold tracking-widest">Visits</h4>
                                <h5 class="text-white text-5xl font-bold tracking-wider">132</h5>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-3 gap-8 mt-8">
                            <div class="col-span-1 sm:col-span-2 bg-b-dashboard rounded-lg px-4 py-6 h-64"></div>
                            <div class="">
                                <div class="bg-b-dashboard rounded-lg px-4 py-6 h-32"></div>
                                <div class="bg-b-dashboard rounded-lg px-4 py-6 h-24 mt-8"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
    }
</script>
