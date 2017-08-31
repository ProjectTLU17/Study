<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sets</title>
  </head>
  <body>
    <script type="text/javascript">
      const people = new Set();
      people.add('Wes');
      people.add('Snickers');
      people.add('Kait');
      for (const person of  people) {
      console.log(person);
      }
      const students = new Set(['Wes', 'Kara', 'Tony']);
      const dogs = ['Snickers', 'Sunny'];
      const dogSet = new Set(dogs);
      //
      var num = 5;
      for (let i = 0; i < num; i++){
        console.log(i);
    }
    </script>
  </body>
</html>
