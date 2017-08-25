<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Spread Examples</title>
</head>
<body>
  <div class="people">
    <p>Wes</p>
    <p>Kait</p>
    <p>Randy</p>
  </div>
  <script type="text/javascript">
    const people1 = Array.from(document.querySelectorAll ('.people p'));
    // or
    const people2 = [...document.querySelectorAll ('.people p')];
    const name = people1.map((person) => person.textContent);

    const deepDish = {
      pizzaName: 'Deep Dish',
      size: 'Medium',
      ingredients: ['Marinara', 'Italian Sausage', 'Dough', 'Cheese']
    };
      const shoppingList = ['Milk', 'Flour', ...deepDish.ingredients];

      const comments = [
        { id: 209384, text: 'I love your dog!' },
        { id: 523423, text: 'Cuuute! 🐐' },
        { id: 632429, text: 'You are so dumb' },
        { id: 192834, text: 'Nice work on this wes!' },
      ];
      const id = 632429;
      const commentIndex = comments.findIndex(comment => comment.id === id);

      const newComments = [...comments.slice(0,commentIndex), ...comments.slice(commentIndex + 1)];
      console.log(newComments);
  </script>

  </body>
</html>
