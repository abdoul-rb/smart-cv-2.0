<template>
    <nav class="font-baloo">
        <div class="flex items-center justify-between flex-wrap px-4 lg:px-24 py-5">
            <div class="font-semibold text-md tracking-tight uppercase">
                <inertia-link href="/">
                    <strong class="text-white">Abdoul</strong>
                    <strong class="text-orange-700">Rahim</strong>
                </inertia-link>
            </div>
            <!-- Hamburger menu:  -->
            <div class="sm:hidden" @click="isOpen = !isOpen">
                <button class="outline-none mt-2">
                    <svg class="fill-current w-6 h-6 text-white" v-if="isOpen == false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                    <svg class="fill-current w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" v-if="isOpen == true" viewBox="0 0 20 20">
                        <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
                    </svg>
                </button>
            </div>
            <div class="sm:flex sm:flex-row sm:items-center" :class="isOpen ? 'flex flex-col text-right' : 'hidden'">
                <inertia-link href="#about" class="text-gray-400 text-sm font-semibold uppercase block lg:inline-block hover:text-white px-4 py-3">A propos</inertia-link>
                <inertia-link href="#skills" class="text-gray-400 text-sm font-semibold uppercase block lg:inline-block hover:text-white px-4 py-3">Compétences</inertia-link>
                <inertia-link href="#achieve" class="text-gray-400 text-sm font-semibold uppercase block lg:inline-block hover:text-white px-4 py-3">Réalisations</inertia-link>
                <inertia-link href="#contact" class="text-gray-400 text-sm font-semibold uppercase block lg:inline-block hover:text-white px-4 py-3">Contact</inertia-link>
                <inertia-link :href="cv_link" class="text-teal-400 text-xs font-medium uppercase rounded-lg border border-teal-400 transition duration-500 ease-in-out transform hover:-translate-x-1 hover:scale-95 py-2 px-6 ml-2" target="_blank" ref="nofollow noopener noreferrer" title="Téléchargez mon CV">Mon CV</inertia-link>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        data () {
            return {
                isOpen: false
            }
        },
        props : {
            cv_link : {
                required : false,
                type : String
            }
        }
    }
</script>
