<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>for of generator</title>
  </head>
  <body>
    <script type="text/javascript">
    function* lyrics() {
        yield `But don't tell my heart`;
        yield `My achy breaky heart`;
        yield `I just don't think he'd understand`;
        yield `And if you tell my heart`;
        yield `My achy breaky heart`;
        yield `He might blow up and kill this man`;
      }
      const achy = lyrics();
      for (const line of achy) {
        console.log(line);
      }
    </script>
  </body>
</html>
