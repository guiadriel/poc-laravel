<template>
    <div class="modal"
        id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header b-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Faça o login</h1>
                <button type="button"
                        class="btn-close"
                        @click="toggleModal()"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-box"  @submit.prevent="handleSignIn">
                    <div class="row">
                        <div class="col form-field">
                            <label for="email">Seu Email:</label>
                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   id="email"
                                   maxlength="255"
                                   v-model="form.email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-field mt-3">
                            <label for="password">Sua Senha:</label>
                            <input type="password"
                                   class="form-control"
                                   name="password"
                                   id="password"
                                   maxlength="255"
                                   v-model="form.password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mt-5">
                            <button class="btn btn-primary">Entrar</button>
                        </div>
                        <div class="col-8 mt-5 text-end">
                            <p class="my-0 line-height-45">Ainda não tenho conta, <a href="#"><strong>fazer cadastro</strong></a></p>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Modal } from 'bootstrap-module';

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
