<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>
    <div id="app">
        <header>
            <img src="./assets/img/spotify_logo.png" width="40" alt="">
        </header>
        <main>
            <div class="container mt-4 mb-4">
                <div class="row row-cols-3 g-5">

                    <div class="col" v-for="(disc, index) in discs">
                        <div class="card text-center text-white d-flex align-items-center p-4" data-bs-toggle="modal" :data-bs-target="'#modalCard' + index">
                            <img :src=" disc.poster" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{disc.title}}</h5>
                                <p class="card-text">{{disc.author}}</p>
                                <h5>{{disc.year}}</h5>
                            </div>
                        </div>
                    </div>

                </div>



                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" :id="'modalCard' + index" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" v-for="(disc, index) in discs">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-body d-flex align-items-center text-white flex-column gap-2">
                                <img :src="disc.poster" alt="">
                                <h5 class="card-title">{{disc.title}}</h5>
                                <p class="card-text">{{disc.author}}</p>
                                <h5>{{disc.year}}</h5>
                                <p class="card-text">Genre: {{disc.genre}}</p>
                            </div>

                        </div>
                    </div>
                </div>




            </div>
        </main>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="main.js"></script>

</html>