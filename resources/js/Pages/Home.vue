<template>
    <main class="root font-rubik overflow-x-hidden">
        <the-nav class="" />
        <header class="relative flex min-h-screen px-4 lg:px-24 py-0 md:py-10" id="about">
            <div class="w-full lg:w-11/12 my-8">
                <p class="text-lg text-teal-400 font-medium tracking-widest">Hello, je m'appelle</p>
                <p class="font-baloo text-3xl md:text-4xl lg:text-6xl text-gray-200 font-semibold tracking-wider">Abdoul Rahim Bah.</p>
                <p class="font-baloo text-2xl leading-7 font-medium md:text-4xl lg:text-5xl text-gray-400 md:font-semibold tracking-wide my-12 sm:my-4">Je suis {{ poste }}</p>
                <p class="max-w-xl text-lg text-gray-400 font-base my-10">{{ aboutme }}</p>
                <div class="my-16 sm:my-12 text-center md:text-left">
                    <a href="#contact" class="font-rubik text-md lg:text-xs text-teal-400 font-medium tracking-wider uppercase rounded-md md:rounded-lg border border-teal-400 px-24 lg:px-10 py-4">Me contacter</a>
                </div>
            </div>
            <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
                <div class="relative h-full max-w-screen-xl mx-auto">
                    <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="750" fill="none" viewBox="0 0 404 784">
                        <defs>
                            <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
                    </svg>
                </div>
            </div>
        </header>
        <div class="relative px-4 lg:px-24">
            <section class="" id="skills">
                <h2 class="inline-flex items-baseline text-3xl font-medium uppercase text-gray-300 tracking-wide">
                    <span class="inline-flex text-sm text-teal-400">
                        <svg class="stroke-current text-teal-400 h-4 w-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                        </svg>
                        <span class="mr-3">.</span>
                    </span>
                    <div>Compétences</div>
                </h2>
                <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-12 mx-2 py-4">
                    <div class="">
                        <h2 class="inline-flex items-center mb-0">
                            <span class="block text-5xl text-gray-800 opacity-50">01.</span>
                            <span class="block text-2xl font-medium text-teal-400 tracking-wider transform -translate-x-6">Frontend</span>
                        </h2>
                        <div class="font-medium text-lg text-gray-200 mb-3">
                            <span v-for="item in skills" v-if="item.category == 'Frontend'">{{ ' - ' + item.name }}</span>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="inline-flex items-center mb-0">
                            <span class="block text-5xl text-gray-800 opacity-50">02.</span>
                            <span class="block text-2xl font-medium text-teal-400 tracking-wider transform -translate-x-6">Backend</span>
                        </h2>
                        <div class="font-medium text-lg text-gray-200 mb-3">
                            <span v-for="item in skills" v-if="item.category == 'Backend'">{{ ' - ' + item.name }}</span>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="inline-flex items-center mb-0">
                            <span class="block text-5xl text-gray-800 opacity-50">03.</span>
                            <span class="block text-2xl font-medium text-teal-400 tracking-wider transform -translate-x-6">Devops</span>
                        </h2>
                        <div class="font-medium text-lg text-gray-200 mb-3">
                            <span v-for="item in skills" v-if="item.category == 'Devops'">{{ ' - ' + item.name }}</span>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="inline-flex items-center mb-0">
                            <span class="block text-5xl text-gray-800 opacity-50">04.</span>
                            <span class="block text-2xl font-medium text-teal-400 tracking-wider transform -translate-x-6">Outils</span>
                        </h2>
                        <div class="font-medium text-lg text-gray-200 mb-3">
                            <span v-for="item in skills" v-if="item.category == 'Tools'">{{ ' - ' + item.name }}</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="my-24 lg:my-32" id="achieve">
                <h2 class="inline-flex items-baseline text-3xl font-medium uppercase text-gray-300 tracking-wide" v-if="projects.length > 0">
                    <span class="inline-flex text-sm text-teal-400">
                        <svg class="stroke-current text-teal-400 h-4 w-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                        <span class="mr-3">.</span>
                    </span>
                    <div>Projets</div>
                </h2>
                <div class="grid grid-cols-6 lg:grid-cols-12 gap-16 row-gap-12 py-10">
                    <Project v-for="project in achieves" :key="project.id" :project="project" />
                </div>
            </section>
            <section class="text-center" id="contact">
                <h2 class="inline-flex items-baseline text-3xl font-medium uppercase text-gray-300 tracking-wide">
                    <span class="inline-flex text-sm text-teal-400">
                        <svg class="stroke-current text-teal-400 h-4 w-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="3 11 22 2 13 21 11 13 3 11"></polygon>
                        </svg>
                        <span class="mr-3">.</span>
                    </span>
                    <div>Me contacter</div>
                </h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-400 font-base my-6">
                    Je suis actuellement en poste en tant que Développeur web Jr. chez <inertia-link class="text-teal-400 text-md font-medium">Lafia Invest</inertia-link>.
                    Bien que je ne sois pas à la recherche de nouvelles opportunités en ce moment, je reste ouvert pour discuter.
                    Que vous ayez une question ou autre chose, je me ferais une joie de vous répondre.
                </p>
                <div class="max-w-2xl mx-auto inline-flex items-center mb-12 sm:mb-0">
                    <inertia-link href="#" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 px-3 py-1 mx-2" title="Github">
                        <svg class="stroke-current text-teal-400 w-5 h-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                        </svg>
                    </inertia-link>
                    <inertia-link href="#" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 px-3 py-1 mx-2" title="Gitlab">
                        <svg class="stroke-current text-teal-400 w-5 h-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z"></path>
                        </svg>
                    </inertia-link>
                    <inertia-link href="#" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 px-3 py-1 mx-2" title="LinkedIn">
                        <svg class="stroke-current text-teal-400 w-5 h-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </inertia-link>
                    <inertia-link href="#" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 px-3 py-1 mx-2" title="Instagram">
                        <svg class="stroke-current text-teal-400 w-5 h-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </inertia-link>
                </div>
                <div class="lg:my-12">
                    <a href="#contact" class="font-rubik text-md lg:text-sm text-teal-400 transition duration-500 ease-in-out hover:bg-teal-500 hover:text-white font-medium tracking-wider rounded-md md:rounded-lg border border-teal-400 px-24 lg:px-10 py-4">Say Hello.</a>
                </div>
            </section>
            <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
                <div class="relative h-full max-w-screen-xl mx-auto">
                    <svg class="absolute right-full bottom-0 transform translate-y-24 translate-x-1/4 lg:translate-x-1/4" width="404" height="600" fill="none" viewBox="0 0 404 784">
                        <defs>
                            <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                    </svg>
                </div>
            </div>
        </div>
        <the-footer />
    </main>
</template>

<script>
    import theFooter from "@/Jetstream/Home/theFooter";
    import theNav from "@/Jetstream/Home/theNav";
    import Project from "@/Jetstream/Home/Project";
    import Contact from "@/Jetstream/Home/Contact";
    export default {
        components: { theFooter, theNav, Project, Contact },
        props: ['skills', 'achieves'],
        data () {
            return {
                projects : [
                    { name : 'Ahrello', description : 'Plateforme de mise en relation entre porteurs de projet et profil digitaux.', skills : ['Laravel', 'PHP', 'Tailwindcss', 'Vue.JS', 'Nuxt.JS'], url: 'https://www.ahrello.com/', git: 'https://github.com/Cheick-ahmed/ahrello.com', image: "megan-sanford-g_ssp9teiSA-unsplash.jpg" },
                    { name : 'Blogify', description : 'Réalisation d\'un CMS from scratch en PHP, permettant de gérer des articles de blog.', skills : ['PHP', 'HTML', 'CSS | SCSS', 'JavaScript', 'Docker'], url: 'https://cms-blog.online', git: 'https://gitlab.com/Come-Wasik/esgi-projet-annuel', image: 'ahrello.png' },
                    { name : 'Seloger224', description : 'Application web de mise en relation de particuliers à particuliers pour l\'achat, la vente et la location de bien immobilier.', skills : ['Laravel', 'PHP', 'Tailwindcss'], url: 'https://seloger224.com', git: 'https://github.com/abdoul-rb/seloger224', image: 'seloger224.jpeg' },
                    { name : 'Megatek', description : 'Site internet de fanfictions.', skills : ['Laravel', 'PHP', 'Tailwindcss'], url: 'https://megatek.com', git: 'https://gitlab.com/Come-Wasik/megatek', image: 'megatek.jpeg' }
                ],
                links : [],
                poste : 'Développeur web Fullstack Laravel/JS.',
                aboutme : 'Autodidacte, passionné d\'entrepreneuriat 😉 et de nouvelles technologies notamment de développement web, je travaille en agile pour contruire des applications web dynamiques et performantes.',
            }
        },
    }
</script>
