<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createFilm'}" class="btn btn-success">Добавить фильм</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Список фильмов</div>
            <div class="panel-body">
                    <div class="cards" v-for="film, index in films">
                        <div class="card">
                        <img src="https://kvmarvel.ru/wp-content/uploads/2019/01/avengers-endgame-final-poster.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>{{ film.name }}</b></h4> 
                            <p>{{ film.mark }}</p> 
                            <p>{{ film.review }}</p> 
                            <p>{{ film.year }}</p> 
                                                        <router-link :to="{name: 'editFilm', params: {id: film.id}}" class="btn btn-xs btn-default">
                                Edit
                            </router-link>
                            <a href="#"
                               class="btn btn-xs btn-danger"
                               v-on:click="deleteEntry(film.id, index)">
                                Delete
                            </a>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                films: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/api/v1/films')
                .then(function (resp) {
                    app.films = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load films");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/api/v1/films/' + id)
                        .then(function (resp) {
                            app.films.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete film");
                        });
                }
            }
        }
    }
</script>
<style>
.cards{
    width:30%;
    display:inline-block;
}
.card {
    display: flex;
    flex-wrap: wrap;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 90%;
    position: relative;
    min-width: 185px;
   left:10%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
</style>