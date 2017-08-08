<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .hl{
        background: #ffc600;
      }
    </style>
  </head>
  <body>
    <script type="text/javascript">

      function highlight(strings, ...values) {
        let str = '';
        strings.forEach((string, i) =>{
          str += `${string} <span contenteditable class="hl">${values[i] || ''}</span>`;
        });
        return str;
      }
      const name = "Sickers";
      const age = '100';
      const gender = 'male';
      const sentence = highlight `My dog's name is ${name} and he is ${age} years old ${gender}`;
      document.body.innerHTML = sentence;
    </script>
  </body>
</html>
