<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>extending array</title>
  </head>
  <body>
    <script type="text/javascript">
    class MovieCollection extends Array {
      constructor(name, ...items) {
        super(...items);
        this.name = name;
      }
      add(movie) {
        this.push(movie);
      }
      topRated(limit = 10) {
        return this.slice(0, limit).sort((a,b) => (a.stars > b.stars ? -1 : 1));
      }
    }
      const movies = new MovieCollection('Wes\'s Fav Movies',
        {name: "Bee Movies", stars:10 },
        {name: "Bee2 Movies", stars:20 },
        {name: "Bee3 Movies", stars:3 },
      );
      movies.add({name: 'Iron man',stars: 10});
    </script>
  </body>
</html>
