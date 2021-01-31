<template>
    <Dashboard>
        <div id="projects" class="w-full pt-3 pl-10 pr-10 pb-10">
            <div class="box-border rounded h-32 w-96  bg-gray-200 hover:bg-purple-400 mt-10 transition duration-700 ease-in-out" v-for="project in projects" :key="project.id">
                <div class="w-96 pt-10 text-center">
                    <h1>{{project.name}}</h1>
                    <h2>{{project.updated_at}}</h2>
                </div>
            </div>
            
        </div>
    </Dashboard>
</template>

<script>
    import Dashboard from '@/Pages/Dashboard'

export default {
    props: {
        projects: {

        }
    },
    components: {
        Dashboard,
    },
}
</script>

<style>

</style>