<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The ... Operator</title>

    <style>
    body {
      min-height: 100vh;
      font-family: sans-serif;
      background: #ffc600;
      text-transform: uppercase;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 50px;
      color:white;
      text-shadow: 3px 3px 0 rgba(0,0,0,0.2);
    }
    .jump span {
      display: inline-block;
      transition: transform 0.2s;
      cursor:url('http://csscursor.info/source/santahand.png'), default;
    }
    .jump span:hover {
      transform: translateY(-20px) rotate(10deg) scale(2);
    }
  </style>
  </head>

  <body>
    <h2 class="jump">SPREADS!</h2>
    <script type="text/javascript">
    const featured = ['Deep Dish', 'Pepperoni', 'Hawaiian'];
    const specialty = ['Meatzza', 'Spicy Mama', 'Margherita'];
    const pizzas = [...featured, 'veg', ...specialty];
    const fridayPizzas1 = pizzas; // dùng cách này thì biến fridayPizzas1 đc tham chiếu từ pizzas
    const fridayPizzas2 = [...pizzas]; //dùng cách này thì sẽ đc biến mới

    // const jump = document.querySelector('.jump');
    // let jumpText = jump.innerHTML;
    //
    // jumpText =[...jumpText];
    // let converted = jumpText.map(char => {
    //   return `<span>${char}</span>`;
    // });
    // converted = converted.reduce((sentence, string) =>{
    //   return `${sentence}${string || ''}`;
    // },'');
    // jump.innerHTML = converted;

    // Answer
    const heading = document.querySelector('.jump');
    heading.innerHTML = sparanWrap(heading.textContent);
    function sparanWrap(word) {
      return [...word].map(letter => `<span>${letter}</span>`).join('');
    }
    </script>
  </body>
</html>
