<template>
    <form @submit.prevent="editPost" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
        <DeletePost :post="post"/>
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
            <button type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
              Save Changes
            </button>
          </span>
            <span class="w-full mt-6 inline-flex rounded-md shadow-sm">

          </span>
        </div>
    </form>
</template>
<script>
import JetInputError from '../Jetstream/InputError'
import DeletePost from './DeletePost'
export default {
    props:['post'],
    components:{
        JetInputError,
        DeletePost
    },
    data(){
        return {
            form: this.$inertia.form({
                title: this.post.title,
                preview: this.post.preview,
                content: this.post.content
            })
        }
    },
    methods: {
        editPost(){
            this.form.patch(route('posts.update', this.post.id), {
                preserveScroll: true
            })
        },
    }
}
</script>
