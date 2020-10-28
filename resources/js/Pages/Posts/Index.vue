<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>
        <div class="pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <PostList :posts="posts"/>
            </div>
        </div>
    </app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout'
import PostList from '../../Components/PostList'
export default {
    props: ['posts'],
    components: {
        AppLayout,
        PostList
    }
}
</script>
