<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inheritance review</title>
  </head>
  <body>
    <script type="text/javascript">
      function Dog(name, breed) {
        this.name = name;
        this.bress = breed;
      }
      Dog.prototype.bark = function() {
        console.log(`Bark bark! My name is ${this.name}`);
      }
      const snicker = new Dog ('snicker', 'King Charles');
      const sunny = new Dog ('sunny', 'Golden Retriever');
      Dog.prototype.bark = function() {
        console.log(`Bark bark! My name is ${this.name} and I'm a ${this.breed}`);
      }
    </script>
  </body>
</html>
