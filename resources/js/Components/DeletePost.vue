<template>
    <div>
        <div>
            <jet-danger-button @click.native="confirmPostDeletion">
                Delete Post
            </jet-danger-button>
        </div>

        <!-- Delete Account Confirmation Modal -->
        <jet-dialog-modal :show="confirmingPostDeletion" @close="confirmingPostDeletion = false">
            <template #title>
                Delete Post
            </template>

            <template #content>
                Are you sure you want to delete this post?
            </template>

            <template #footer>
                <jet-secondary-button @click.native="confirmingPostDeletion = false">
                    Nevermind
                </jet-secondary-button>

                <jet-danger-button class="ml-2" @click.native="deleteTask" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Delete Post
                </jet-danger-button>
            </template>
        </jet-dialog-modal>
    </div>
</template>

<script>
import JetButton from '../Jetstream/Button'
import JetDialogModal from '../Jetstream/DialogModal'
import JetDangerButton from '../Jetstream/DangerButton'
import JetInput from '../Jetstream/Input'
import JetInputError from '../Jetstream/InputError'
import JetSecondaryButton from '../Jetstream/SecondaryButton'

export default {
    components: {
        JetButton,
        JetDangerButton,
        JetDialogModal,
        JetInput,
        JetInputError,
        JetSecondaryButton,
    },
    props: [
      'post'
    ],
    data() {
        return {
            confirmingPostDeletion: false,
            deleting: false,

            form: this.$inertia.form({
                '_method': 'DELETE',
            }, {
                bag: 'deletePost'
            })
        }
    },

    methods: {
        confirmPostDeletion() {
            this.confirmingPostDeletion = true;
        },

        deleteTask() {
            this.form.post(route('posts.destroy', this.post.id), {
                preserveScroll: true
            }).then(response => {
                if (! this.form.hasErrors()) {
                    this.confirmingPostDeletion = false;
                }
            })
        },
    },
}
</script>
