<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Destructing Arrays</title>
  </head>
  <body>
    <script type="text/javascript">
      const details = ['Duy Luong', 123, 'luposolitario.000webhostapp.com/']
      const [name, id, website] = details;
      console.log(name, id, website);

      const data = 'Game, Book, 2017, 23';
      const [item1, item2, year, age] = data.split(',');
      console.log(item1, item2, year, age);

      const team = ['Duy', 'Phong', 'Dung', 'Linh', 'Son'];
      const [captain, support,...jungle] = team;
    </script>
  </body>
</html>
