<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Extending Classes and using super()</title>
  </head>
  <body>
    <script type="text/javascript">
      class Animal {
        constructor(name) {
          this.name = name;
          this.thirst = 100;
          this.belly =[];
        }
        drink() {
          this.thirst -=10;
          return this.thirst;
        }
        eat(food) {
          this.belly.push(food);
          return this.belly;
        }
      }
      const rhino = new Animal('Rhiney');
      //extending
      class Dog extends Animal {
        constructor(name, breed) {
          super(name); // call Animal first and push name into it
          this.breed = breed;
        }
        bark() {
          console.log(`Bark Bark I'm a dog`);
        }
      }
      const snickers = new Dog ('Snicker', 'King Charles');
    </script>
  </body>
</html>
