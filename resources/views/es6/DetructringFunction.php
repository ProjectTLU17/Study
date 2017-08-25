<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Destructring</title>
  </head>
  <body>

    <script type="text/javascript">
      let inRing = 'Duy Luong';
      let onSide = 'The Weed';

      // new mothos swap
      [inRing, onSide] = [onSide, inRing];
      //console.log(inRing, onSide);

      //Destructring Function
      function convertCurrency(amount) {
        const converted = {
          USD: amount * 0.76,
          GPB: amount * 0.53,
          AUD: amount * 1.01,
        };
        return converted;
      }
      const hundo = convertCurrency(100);
      console.log(hundo.AUD);
      //Also use destructring Objects
      const {USD, GPB, AUD} = convertCurrency(120);
      console.log(USD, GPB, AUD);

      //another way wwhen use object
      function tipCalc ({total = 0, tip = 0.15, tax = 0.13} = {}){
        return total + (tip * total) + (tax * total);
      }
      const bill = tipCalc();
      console.log(bill);
    </script>
  </body>
</html>
