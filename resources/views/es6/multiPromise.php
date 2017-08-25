<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
      // const weather = new Promise((resolve) => {
      //   setTimeout(() => {
      //     resolve({ temp: 29, conditions: 'Sunny with Clouds'});
      //   }, 2000);
      // });
      // const tweets = new Promise((resolve) => {
      //   setTimeout(() => {
      //     resolve(['I like cake', 'BBQ is good too!']);
      //   }, 500);
      // });
      // Promise
      //   .all([weather, tweets])
      //   .then(responses => {
      //     console.log(responses);
      //   });
      const postsPromise = fetch('http://localhost:8000/Response/basic');
      const streetCarsPromise = fetch('http://data.ratp.fr/api/datasets/1.0/search/?q=paris');

      Promise
        .all([postsPromise, streetCarsPromise])
        .then (responses => {
          return Promise.all(responses.map(res => res.json()));
        })
        .then(responses => {
          console.log(responses);
        })
    </script>
  </body>
</html>
