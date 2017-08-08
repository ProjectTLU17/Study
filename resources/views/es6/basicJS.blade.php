<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learning ES6</title>
  </head>
  <body>
    <div id="errorMessage">

    </div>
    <script type="text/javascript">
      "use strict";
      //IIFE keyword
      var x = 2;
      (function callIIFE(x){
        alert('IIFE' + ' ' + x);
      })(x);
      // // //class //Object
      // function Person(_firstName, _lastName, _age){
      //   this.firstName = _firstName || "unknow";
      //   this.lastName =_lastName || "unknow";
      //   this.age =_age || "unknow";
      //   this.getFullName = function(){
      //     return this.firstName + " " + this.lastName;
      //   }
      // }
      // var person1 = new Person();
      // console.log(Object.keys(person1));
      // for (var variable in person1) {
      //   if (person1.hasOwnProperty(variable)) {
      //     console.log(variable);
      //   }
      // }
      // Object.defineProperties(person1,"firstName",{
      //   writable:false,
      //   enumerable:true
      // });
      // console.log(Object.keys(person1));
      // function Dog() {
      //   var _firstName = "unknow";
      //   var _lastName = "unknow";
      //   Object.defineProperties(this,{
      //     "firstName": {
      //       set:function(value) {
      //         _firstName = value;
      //       },
      //       get:function(){
      //         return _firstName;
      //       }
      //     },
      //     "lastName": {
      //       set:function(value) {
      //         _lastName = value;
      //       },
      //       get:function(){
      //         return _lastName;
      //       }
      //     }
      //   });
      // }
      // var Dog1 = new Dog();
      // Dog1.firstName = "Sunny";
      // Dog1.lastName = "Solitario"
      // console.log(Dog1.firstName + " " + Dog1.lastName);
      // var person1 = new Person("Nguyen", "Linh");
      // console.log(person1.lastName + ' ' + person1.firstName);
      // console.log(person1.getFullName());
      // var person2 = new Person();
      // person2.firstName = "Luong";
      // person2.lastName = "Duy";
      // console.log(person2.lastName + ' ' + person2.firstName);
      // var arr1 = [1, 2, 3, 4, 5];
      // console.log(arr1);
      // var arr2 = new Array();
      // arr2[0] = 'hehe';
      // arr2[1] = 'hihi';
      // arr2[2] = 'hoho';
      // for (var i = 0; i < arr2.length; i++) {
      //   console.log(arr2[i]);
      // }
      // function ShowMessage(arg1,arg2){
      //   alert('Notice ' + arguments[0] + ' ' + arguments[1]);
      // }
      // function calculate(){
      //   function add(a, b){
      //     return a + b;
      //   }
      //   return add;
      // }
      // var age = prompt('How old are you ?');
      // var ageNumber = parseInt(age);
      // if (ageNumber < 16) {
      //   alert('Bạn chưa đủ tuổi !!!');
      // }else {
      //   alert('Vào đi cưng \' ');
      // }
      // for (let i = 0; i < 5; i++) {
      //   setTimeout(()=>{
      //     console.log(i,' dfd');
      //   },1000);
      // }
      // // try catch
      // try {
      //   var a = 2;
      //   var b = 2;
      //   var r = a/b;
      //   //throw 'error when divide';
      //   throw {
      //     code: 101,
      //     message: "Error",
      //   }
      // } catch (e) {
      //   //alert(e.message);
      //   document.getElementById("errorMessage").innerHTML = e.message;
      // } finally {
      //   console.log('finally block executed.');
      // }
    </script>
  </body>
</html>
