<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List</div>
                    <div class="card-body">
                        <ul>
                            <li v-for="item in list" :key="item.id">
                                {{ item.title }}
                            </li>
                        </ul>
                        <div v-if="loading">
                            Carregando resultados...
                        </div>
                        <div v-else>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-link"
                                        @click="handleLoadMore">Ver mais</button>
                            </div>
                            Página: {{ page }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                list: [],
                page: 0,
                loading: false,
            }
        },
        methods: {
            async handleLoadMore() {
                this.page++;
                const skip = this.page * 5;
                this.loading = true;
                const response = await axios.get(`https://dummyjson.com/posts?limit=5&skip=${skip}`)

                const { posts } = response.data;
                this.list.push(...posts);
                this.loading = false;
            }
        },
        mounted() {
            this.handleLoadMore();
        }
    }
</script>
