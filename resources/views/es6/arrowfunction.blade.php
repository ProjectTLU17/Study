<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    .wrap {
      min-height: 100vh;
      display:flex;
      justify-content: center;
      align-items: center;
      font-family: sans-serif;
      font-weight: 100;
      color:white;
    }
    .box {
      background:black url(https://unsplash.it/1500/1500?image=560&blur=0.5) center fixed no-repeat;
      width:50px;
      height:50px;
      padding:50px;
      transition: width 0.2s, height 0.6s;
      position: relative;
    }
    .box.opening {
      width:500px;
      height:500px;
    }
    .box h2 {
      position: absolute;
      width:100%;
      font-size: 100px;
      transform:translateX(-200%);
      transition: all 0.5s;
      top:0;
    }
    .box p {
      position: absolute;
      width:100%;
      transform:translateX(200%);
      transition: all 0.5s;
      bottom:0;
    }
    .box.open > * {
      transform:translateX(0%);
    }
  </style>
  </head>
  <body>
    <p>Hello ES6</p>
    <div class="wrap">
    <div class="box">
      <h2>Wes Bos</h2>
      <p >@wesbos</p>
    </div>
</div>
    <script>
    /////////////////////////////////////////////////////////////
      //let,var,const
      // {
      //   const name='wes';
      //   console.log(name);
      // }
      // for (let i = 0; i < 10; i++) {
      //   console.log(i);
      //   setTimeout(function(){
      //     console.log('the number is '+i);
      //   },1000);
      // }
    /////////////////////////////////////////////////////////////
      //arrow function & this
      // const names=['henry','nancy','luzy'];
      // const fullname=names.map(function(name){
      //   return `${name} alpha`;
      // });
      // const fullname2=names.map((name)=>{
      //   return `${name} delta`;
      // });
      // const fullname3=names.map(name=>{
      //   return `${name} delta`;
      // });
      // const fullname4=names.map(name=>`${name} name4`);
      // const fullname5=names.map(()=>` name5`);
      // console.log(fullname5);
      // const sayMyName=(name)=>alert(`Hello ${name} !!!`);
      // sayMyName('Duy');
      // const race='1000m Jump';
      // const winners=['Hunter','Singa','IMda'];
      // const win=winners.map((winners,i)=>({name: winners, race: race, place: i}));
      // console.table(win);
      // const ages=[23,53,1,2,5521,23,24,1,254];
      // const old=ages.filter(age=>age>=60);
      // console.log(old);
      const box=document.querySelector('.box');
      box.addEventListener('click',function(){
          let first = 'opening';
          let second = 'open';
          if(this.classList.contains(first)){
            [first,second]=[second,first];
          }
          this.classList.toggle(first);
          setTimeout(()=>{
            this.classList.toggle(second);
          },500);
      });

      /////////////////////////////////////////////////////////////

    </script>
  </body>
</html>
