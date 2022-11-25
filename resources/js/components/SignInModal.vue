<template>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
                <button type="button" class="btn-close" @click="toggleModal()" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form @submit.prevent="handleSignIn">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" v-model="form.email">
                    <hr>
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" v-model="form.password">
                    <button class="btn btn-primary mt-3" type="submit">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" @click="toggleModal()" >Fechar</button>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Modal } from 'bootstrap/dist/js/bootstrap.esm';

    export default {
        props: {
            visible: false,
        },
        data() {
            return {
                el: null,
                showModal: this.visible,
                form: {
                    email: '',
                    password: '',
                }
            }
        },
        methods: {
            toggleModal() {
                this.showModal = !this.showModal;
                if( this.showModal ) {
                    this.el.show();
                } else {
                    this.el.hide();
                }
            },
            handleSignIn() {
                alert(JSON.stringify(this.form));
            }
        },
        mounted() {
            this.el = new Modal(document.getElementById('staticBackdrop'));

        }
    }

</script>
