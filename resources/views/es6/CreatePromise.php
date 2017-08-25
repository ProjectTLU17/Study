
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Promises!</title>
</head>
<body>
<script>
const postsPromise = fetch('http://localhost:8000/Response/basic');
postsPromise
  .then(data => data.json())
  .then(data => { console.log(data) })
  .catch((err) => {
    console.error(err);
  });


  const p = new Promise((resolve, reject) => {
    setTimeout(() => {
      reject(Error('Err wes isn\'t cool'));
    }, 1000);
  });
  p
    .then(data => {
      console.log(data);
    })
    .catch(err => {
      console.error(err);
    });
</script>
</body>
</html>
