<template>
    <div class="mt-6 grid gap-16 pt-10 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
        <div v-for="post in posts" :key="post.id">
            <InertiaLink :href="route('posts.show', post.id)" class="block">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                    {{ post.title }}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {{ post.preview }}
                </p>
            </InertiaLink>
            <div class="mt-3">
                <InertiaLink :href="route('posts.show', post.id)"
                   class="text-base leading-6 font-semibold text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
                    Read full post
                </InertiaLink>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['posts']
}
</script>
