<?php
if(isset($_POST['submit'])) {
  function foo(){
    echo 'done1';
    $input=$_POST['input'];
    echo $input;
  };
   foo();
}
?>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <label for="in">Chuỗi kí tự</label>
    <input type="text" name="input">
    <input type="button" name="submit" value="Submit">
</form>
<?php

 ?>
