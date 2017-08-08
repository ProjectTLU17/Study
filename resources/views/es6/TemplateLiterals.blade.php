<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
      // const name = 'Duy';
      // const age = '23';
      // const sentence = `My name is ${name} and I\'m ${age} years old.`;
      // console.log(sentence);
      const person = {
        name: "Duy",
        age: "23",
        job: 'freelancer',
        city: 'Hanoi'
      };
      const dogs = [
        { name: 'Sunny', age: 1},
        { name: 'Milo', age: 1},
        { name: 'Lad', age: 1},
      ];
      const markup1 = `
        <div class="person">
          <h2>
          ${person.name}
            <span class="job">${person.job}</span>
          </h2>
          <p class="location">${person.city}</p>
          <p class="age">${person.age}</p>
        </div>
      `;
      document.body.innerHTML = markup1;
      const markup2 = `
        <ul class="dogs">
          ${dogs.map(dog => `<li>${dog.name} is ${dog.age}</li>`).join('')}
        </ul>
      `;
      document.body.innerHTML = markup2;
      const song = {
        name: 'Fired',
        artist: 'Flu',
        fearturing: 'Smiley'
      };
      const markup3 = `
        <div class="song">
          <p>
            ${song.name} - ${song.artist}
            ${song.fearturing ? `(Fearuring ${song.fearturing})`:'(Fearuring None)'}
          </p>
        </div>
      `;
      document.body.innerHTML = markup3;
      const beer = {
        name: 'Belgian Wit',
        keywords: ['pale','cloudy','spiced','crisp']
      };
      function rederKeywords(keywords) {
        return `
          <ul>
            ${keywords.map(keyword => `<li>${keyword}</li>`).join('')}
          </ul>
        `;
      }

      const markup4 = `
        <div class="beer">
          <h2>${beer.name}</h2>
          ${rederKeywords(beer.keywords)}
        </div>
      `;
      console.log(markup4);
      document.body.innerHTML = markup4;
    </script>
  </body>
</html>
