function initVue() {

  new Vue({

    el: '#app',
    data: {

      'films':[],
      'select': '',
      'year': '',
    },
    mounted: function() {

      axios.get("data.php")
        .then(data => {

          this.films = data.data;
        })
        .catch(function(e){

          this.error = e;
        });
    },
    computed: {

      // Serve per aggiungere genres in option senza ripetizione
      genres: function () {
        const genres = [];
        for (let i = 0; i < this.films.length; i++) {

          let elem = this.films[i];
          if (!genres.includes(elem.genre)) {

            genres.push(elem.genre);
          }

        }

        return genres;

      },
      // Serve per filtrare genres
      filter: function () {
        let filterPosters = [];
        const posts = this.films;
        if (this.select != '') {

          filterPosters = posts.filter((post) => post.genre == this.select);
        }
        else{

          filterPosters = this.films;
        }

        return filterPosters

      },
      // Serve per ordinare gli films per anni
      order: function () {
          const order = this.filter.sort(
          function (a, b) {
            if (a.year < b.year) {

              return -1;
            }
            else if (a.year > b.year) {

              return 1;
            }

              return 0;
            }

          );

          return order;

      }

    }

  });

}

function init() {

  initVue();
}

document.addEventListener('DOMContentLoaded', init);
