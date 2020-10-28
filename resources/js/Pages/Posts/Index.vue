<template>
    <app-layout>
        <div class="bg-white min-h-screen py-10">
            <div class="bg-white mx-auto max-w-screen-xl px-4">
                <div class="text-center">
                    <h1 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        Read
                        <span class="text-indigo-600">Posts</span>
                    </h1>
                </div>
            </div>
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
