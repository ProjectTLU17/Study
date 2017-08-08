<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Arrow Functions Exercise</title>
</head>
<body>

<ul>
  <li data-time="5:17">Flexbox Video</li>
  <li data-time="8:22">Flexbox Video</li>
  <li data-time="3:34">Redux Video</li>
  <li data-time="5:23">Flexbox Video</li>
  <li data-time="7:12">Flexbox Video</li>
  <li data-time="7:24">Redux Video</li>
  <li data-time="6:46">Flexbox Video</li>
  <li data-time="4:45">Flexbox Video</li>
  <li data-time="4:40">Flexbox Video</li>
  <li data-time="7:58">Redux Video</li>
  <li data-time="11:51">Flexbox Video</li>
  <li data-time="9:13">Flexbox Video</li>
  <li data-time="5:50">Flexbox Video</li>
  <li data-time="5:52">Redux Video</li>
  <li data-time="5:49">Flexbox Video</li>
  <li data-time="8:57">Flexbox Video</li>
  <li data-time="11:29">Flexbox Video</li>
  <li data-time="3:07">Flexbox Video</li>
  <li data-time="5:59">Redux Video</li>
  <li data-time="3:31">Flexbox Video</li>
</ul>

<script>
  //pre-practice
  // const numbers = [3,62,234,7,23,74,23,76,92];
  // const numFiltered = numbers.filter(number => number > 70);

  // Select all the list items on the page and convert to array
  const items = Array.from(document.querySelectorAll('[data-time]'));
  // Filter for only the elements that contain the word 'flexbox'
  const filtered = items
    .filter(item => item.textContent.includes('Flexbox'))
  // map down to a list of time strings
  .map(item => item.dataset.time)
  // map to an array of seconds
  .map(item => {
    const parts = item.split(":").map(part => parseFloat(part));
    return (parts[0] * 60 ) + parts[1];
  })
  // reduce to get total
  .reduce((total, value) =>{
    return  total + value;
  },0);
  // 🔥 This can also be done in a single .reduce(), but we're practicing arrow functions here, so chain them!
</script>
</body>
</html>
