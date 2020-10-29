<template>
    <div>
        <button :class="classes" class="w-full text-left" v-if="as == 'button'">
            <slot></slot>
        </button>
        <inertia-link :href="href" :class="classes" v-else>
            <slot></slot>
        </inertia-link>
    </div>
</template>

<script>
    export default {
        props: ['active', 'href', 'as'],
        computed: {
            classes() {
                return this.active
                            ? 'block pl-2 pr-4 py-2 border-l-4 border-b-dashboard text-base font-semibold text-white bg-bb-dashboard focus:outline-none focus:text-gray-300 transition duration-150 ease-in-out'
                            : 'block pl-2 pr-4 py-2 border-l-4 border-transparent text-base font-semibold text-white hover:text-gray-400 focus:outline-none focus:text-gray-300 transition duration-150 ease-in-out'
            }
        }
    }
</script>
