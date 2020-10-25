<template>
    <section class="col-span-6">
        <div class="col-span-6">
            <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" :alt="project.name" class="w-full h-full rounded opacity-50 object-cover shadow-lg hover:opacity-100 transition delay-400 duration-300 ease-in-out" v-if="project.name === 'Ahrello'"/>
            <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" :alt="project.name" class="w-full h-full rounded opacity-50 object-cover shadow-lg hover:opacity-100 transition delay-400 duration-300 ease-in-out" v-if="project.name === 'Blogify'"/>
            <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" :alt="project.name" class="w-full h-full rounded opacity-50 object-cover shadow-lg hover:opacity-100 transition delay-400 duration-300 ease-in-out" v-if="project.name === 'Seloger224'"/>
            <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" :alt="project.name" class="w-full h-full rounded opacity-50 object-cover shadow-lg hover:opacity-100 transition delay-400 duration-300 ease-in-out" v-if="project.name === 'Megatek'"/>
        </div>
        <div class="col-span-6 pt-2">
            <h1 class="text-white font-baloo text-4xl font-medium leading-8 tracking-wide my-4">{{ project.name }}</h1>
            <p class="bg-black rounded shadow-lg text-thin text-md leading-relaxed tracking-wide text-gray-300 max-w-md px-6 py-6">
                {{ project.description }}
            </p>
            <div class="mt-3">
                   <span v-for="skill in project.skills" class="text-sm font-normal leading-4 text-gray-200 px-2 py-1 mr-2 mt-2">
                        {{ skill }}
                    </span>
            </div>
        </div>
        <div class="my-2 text-left">
            <a :href="project.git" class="inline-block pr-2 py-2" title="Voir le depôt" target="_blank">
                <svg class="stroke-current text-gray-200 hover:text-teal-300 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                </svg>
            </a>
            <a :href="project.url" class="inline-block px-2 py-2" title="Accéder au site" target="_blank">
                <svg class="stroke-current text-gray-200 hover:text-teal-300 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line>
                </svg>
            </a>
        </div>
    </section>
</template>

<script>
    export default {
        data () {
            return {
                //
            }
        },
        props : {
            project : {
                required : true,
                type : Object
            }
        }
    }
</script>
