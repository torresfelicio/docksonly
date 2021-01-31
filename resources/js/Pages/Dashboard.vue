<template>
    <app-layout>
        <div class="py-12">
            <div class=" flex items-stretch max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Sidebar/>
                <div class=" ml-10 flex-initial bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <slot></slot>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Sidebar from '@/Jetstream/Sidebar'

    export default {
        components: {
            AppLayout,
            Sidebar
        },
    }
</script>
