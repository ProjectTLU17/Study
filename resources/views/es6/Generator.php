<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Generators</title>
  </head>
  <body>
    <script>
      function* listPeople() {
        let i = 0;
        yield 'Wes';
        yield 'Kait'
        yield 'Duy';
      }
      const people = listPeople();
      people.next();
      const inventors = [
         { first: 'Albert', last: 'Einstein', year: 1879 },
         { first: 'Isaac', last: 'Newton', year: 1643 },
         { first: 'Galileo', last: 'Galilei', year: 1564 },
         { first: 'Marie', last: 'Curie', year: 1867 },
         { first: 'Johannes', last: 'Kepler', year: 1571 },
         { first: 'Nicolaus', last: 'Copernicus', year: 1473 },
         { first: 'Max', last: 'Planck', year: 1858 },
       ];
       function* loop(arr) {
         for (const item of arr) {
           yield item;
         }
       }
       const inventorGen = loop(inventors);
    </script>
  </body>
</html>
