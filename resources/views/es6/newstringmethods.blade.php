<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <script type="text/javascript">
      const course = 'RFB2';
      const flightNumber = '20-AC2018-jz';
      const accountNumber = '825242631RT0001';
      const make = 'BMW';
      const model = 'x5';
      const colour = 'Royal Blue';
      // .startsWith()
      console.log(course.startsWith('RFB'));
      console.log(flightNumber.startsWith('AC',3));
      // .endsWith()
      console.log(accountNumber.endsWith('01'));
      console.log(accountNumber.endsWith('RT',11));
      // .includes()
      console.log(accountNumber.includes('42'));
      // .repeat()
      function leftPad(str,length = 20){

        return `> ${' '.repeat(length-str.length)}${str}`;
      }
      console.log(leftPad(make));
      console.log(leftPad(model));
      console.log(leftPad(colour));
    </script>
  </body>
</html>
