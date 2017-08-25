<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class</title>
  </head>
  <body>
    <script type="text/javascript">
    // create class
    class Dog {
      constructor(name, breed) {
        this.name = name;
        this.breed = breed;
      }
      bark() {
        console.log(`Bark bark! My name is ${this.name}`);
      }
      cuddle() {
        console.log(`I love you owner!`);
      }
      static info() {
        console.log(`A dog is better than a cat by 10 times`);
      }
      get description() {
        return `${this.name} is a ${this.breed} type of dog`;
      }
      set nicknames(value) {
        this.nick = value.trim(); // tạo thêm thuộc tính cho object
      }
      get nicknames() {
        return this.nick.toUpperCase();
      }
    }
    //or
    // const Dog = class {
    //
    // }
    const snicker = new Dog ('snicker', 'King Charles');
    const sunny = new Dog ('sunny', 'Golden Retriever');
    </script>
  </body>
</html>
