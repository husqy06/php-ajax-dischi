<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <div id="root">
        <header>
            <img src="./img/logo.png" alt="">

            <select v-model="selected" class="select">
                <option value="">Seleziona il genere</option>
                <option value="Rock">Rock</option>
                <option value="Pop">Pop</option>
                <option value="Jazz">Jazz</option>
                <option value="Metal">Metal</option>
            </select>
        </header>

        <main>
            <div class="container">
                <div v-for="(disc, index) in getfilterdisc()" class="album-container">
                    <img :src="disc.poster" alt="">
                    <span class="title">{{ disc.title }}</span>
                    <span class="subtitle">{{ disc.author }}</span>
                    <span class="subtitle">{{ disc.year }}</span>
                </div>
            </div>
        </main>
    </div>
    <script src="./js/main.js"></script>
</body>
</html>