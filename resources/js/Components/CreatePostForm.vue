<template>
    <form @submit.prevent="createPost" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">

        <div class="sm:col-span-2">
            <label for="title" class="block text-sm font-medium leading-5 text-gray-700">Post Title</label>
            <jet-input-error :message="form.error('title')" class="mt-2" />
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="title" v-model='form.title' class="form-input py-3 px-4 block w-full transition ease-in-out duration-150">
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="preview" class="block text-sm font-medium leading-5 text-gray-700">Post Preview</label>
            <jet-input-error :message="form.error('preview')" class="mt-2" />
            <div class="mt-1 relative rounded-md shadow-sm">
                <textarea id="preview" v-model="form.preview" rows="2" class="form-textarea py-3 px-4 block w-full transition ease-in-out duration-150"></textarea>
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="content" class="block text-sm font-medium leading-5 text-gray-700">Post Content</label>
            <jet-input-error :message="form.error('content')" class="mt-2" />
            <div class="mt-1 relative rounded-md shadow-sm">
                <textarea id="content" v-model="form.content" rows="20" class="form-textarea py-3 px-4 block w-full transition ease-in-out duration-150"></textarea>
            </div>
        </div>
        <div class="sm:col-span-2">
          <span class="w-full inline-flex rounded-md shadow-sm">
            <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
              Create Post
            </button>
          </span>
        </div>
    </form>
</template>
<script>
import JetInputError from '../Jetstream/InputError'
export default {
    components:{
        JetInputError
    },
    data(){
        return {
            form: this.$inertia.form({
                title: '',
                preview: '',
                content: ''
            })
        }
    },
    methods: {
        createPost(){
            this.form.post(route('posts.index'), {
                preserveScroll: true
            })
        },
    }
}
</script>
