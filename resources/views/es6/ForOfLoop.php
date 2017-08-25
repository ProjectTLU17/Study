<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Hi I'm Duy 1</p>
    <p>Hi I'm Duy 2</p>
    <p>Hi I'm Duy 3</p>
    <p>Hi I'm Duy 4</p>
    <p>Hi I'm Duy 5</p>
    <p>Hi I'm Duy 6</p>
    <p>Hi I'm Duy 7</p>
    <p>Hi I'm Duy 8</p>
    <p>Hi I'm Duy 9</p>
    <p>Hi I'm Duy 10</p>
    <script type="text/javascript">
        /* eslint-disable */
       Array.prototype.shuffle = function() {
         var i = this.length, j, temp;
         if ( i == 0 ) return this;
         while ( --i ) {
          j = Math.floor( Math.random() * ( i + 1 ) );
          temp = this[i];
          this[i] = this[j];
          this[j] = temp;
        }
        return this;
      };
      const cuts = ['Chuck', 'Brisket', 'Shank', 'Short Rib'];
      cuts.shop = 'MM Meats';

      for (const index in cuts) {
         console.log(cuts[index]);
       }
      // cuts.forEach((cut) =>{
      //   console.log(cut);
      // });
      //
      // for (var cut of cuts) {
      //   console.log(cut);
      // }
      //
      // for (const [i, cut] of cuts.entries()) {
      //   console.log(`${cut} is the ${i + 1} item`);
      // }
      //
      // function addUpNumbers (){
      //   let total = 0;
      //   for (num of arguments) {
      //     total += num;
      //   }
      //   return total
      // }
      // console.log(addUpNumbers(19,321,52,2,5,1));
      //
      // const name = 'Duy';
      // for (const char of name) {
      //   console.log(char);
      // }
      // const ps = document.querySelectorAll('p');
      // for (const paragraph of ps) {
      //   paragraph.addEventListener('click',function(){
      //     console.log(this.textContent);
      //   })
      // }
    </script>
  </body>
</html>
