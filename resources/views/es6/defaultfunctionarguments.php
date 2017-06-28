<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
      function calculateBill(total, tax = 0.13, tip = 0.15) {
        return total + (total * tax) + (total * tip);
      }
      const totalBill = calculateBill(100, undefined, 0.15);
      console.log(totalBill);
    </script>
  </body>
</html>
