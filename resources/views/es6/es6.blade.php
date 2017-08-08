<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="bio">

    </div>

    <script type="text/javascript">
      const dict = {
        HTML: 'Hyper Text Markup Language',
        CSS: 'Cascading Style Sheets',
        JS: ' Javascript'
      };

      function addAbbreviations(strings, ...values){
        const abbreviated = values.map(value => {
          if (dict[value]) {
            return `<abbr title="${dict[value]}" >${value}</abbr>`;
          }
          return value;
        });
        return strings.reduce((sentence, string, i) => {
          return `${sentence}${string}${abbreviated[i] || ''}  `;
        }, '');
      }

      const firt = 'Duy';
      const last = 'Luong';
      const sentence = addAbbreviations `Hello my name is ${firt}
        ${last} and I love to code ${'HTML'}, ${'CSS'} and ${'JS'}`;

      const bio = document.querySelector('.bio');
      const p = document.createElement('p');
      p.innerHTML = sentence;
      bio.appendChild(p);
    </script>
  </body>
</html>
