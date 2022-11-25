<nav class="navbar bg-info mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>

        <button type="button"
            class="btn btn-primary"
            @click="$refs.signin.toggleModal()">Entrar (Vue)</button>
        <v-signin ref="signin"/>

    </div>
</nav>
