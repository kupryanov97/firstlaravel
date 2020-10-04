
<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Подробнее о фильме: {{film.name}}</div>
            <div class="panel-body">
                <form v-on:submit.prevent="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Оценка фильма</label>
                            <p>{{film.mark}}/10</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Описание фильма</label>
                            <p>{{film.review}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Год выхода</label>
                            <p>{{film.year}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <router-link :to="{name: 'editFilm', params: {id: film.id}}" class="btn btn-xs btn-default">
                                Edit
                            </router-link>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.filmId = id;
            axios.get('/api/v1/films/' + id)
                .then(function (resp) {
                    app.film = resp.data;
                })
                .catch(function () {
                    alert("Could not load your film")
                });
        },
        data: function () {
            return {
                filmId: null,
                film: {
                    name: '',
                    mark: '',
                    review: '',
                    year: '',
                }
            }
        },
        methods: {

        }
    }
</script>
