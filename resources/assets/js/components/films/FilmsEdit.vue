
<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Edit film</div>
            <div class="panel-body">
                <form v-on:submit.prevent="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Название фильма</label>
                            <input type="text" v-model="film.name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Оценка фильма</label>
                            <input type="number" min="0" max="10" v-model="film.mark" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Отзыв о фильме</label>
                            <input type="text" v-model="film.review" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Год фильма</label>
                            <input type="number" v-model="film.year" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Update</button>
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
            saveForm() {
                var app = this;
                var newFilm = app.film;
                axios.patch('/api/v1/films/' + app.filmId, newFilm)
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your film");
                    });
            }
        }
    }
</script>
