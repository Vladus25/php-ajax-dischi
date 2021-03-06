<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- VueAXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <!-- MY JS -->
    <script src="script.js"></script>

  </head>
  <body>

    <div id="app" class="container">
      <div class="select-genre">
        <label>Filter for Type:</label>
        <select v-model="select">
          <option value='' selected>All</option>
          <option v-for="genre in genres">{{genre}}</option>
        </select>
      </div>
      <ul>
        <li v-for="film in order" class="films">
          <div>
            <img :src="film.poster">
            <h2>Title: {{film.title}}</h2>
            <h3>Author: {{film.author}}</h3>
            <h3>Genre: {{film.genre}}</h3>
            <h3>Year: {{film.year}}</h3>
          </div>
        </li>
      </ul>
    </div>

  </body>
</html>
