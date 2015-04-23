<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>

$(document).ready(function(){
$("#hide").click(function(){

$("#other").hide();
$("#other1").hide();
});
$("#fotograf").click(function(){
    if ($('#fotograf:checked').val() !== undefined)
          {
            $("#other").show(); //Чекнуто
            $("#other1").show();
          }
    else
          {
            $("#other").hide();
            $("#other1").hide(); //НЕ чекнуто
          }

});
});


</script>
<form action='' method='post'>




<h1>Реєстрація</h1>
<h1>&ensp;</h1>
<?php if(isset($regok)) {?>
<p style="color:green"> Ви успішно зареєструвалися</p> 
<? } ?>
<?php if(isset($errors)) {?>
 
<p style="color:red">  Ви НЕ зареєструвалися </p>

<?php } ?>
<h4>
  <table align="center">
    <tr>
      <td align="left">ПІП:</td>
      <td><input type="text" name="lastnamer" class="form-control" placeholder="Прізвище"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="text" name="firstnamer" class="form-control" placeholder="Ім'я"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="text" name="middlenamer"class="form-control" placeholder="По батькові"></td>
    </tr>
      </tr>
    
    <tr>
      <td align="left">Логін:</td>
      <td><input type="text" name="loginr" value="" class="form-control" placeholder="Login"></td>
    </tr>
    <tr> </tr>
    <tr>
      <td align="left">Пароль:</td>
      <td><input type="password" name="passwordr" class="form-control" id="exampleInputPassword1" placeholder="******"></td>
    </tr>
    <tr>
      <td align="left">Щераз пароль:</td>
      <td><input type="password" name="passwordtr" class="form-control" id="exampleInputPassword1" placeholder="******"></td>
    </tr>
    <tr>
      <td align="left">Email:</td>
      <td><input type="email" name="emailr" class="form-control" id="exampleInputEmail2" placeholder="user@gmail.com"></td>
    </tr>
    <tr>
      <td align="left">Капча:</td>
      <td><input type="text" class="form-control" placeholder="Код з картинки"></td>
    </tr>
    <tr>
      <td>Категорія користувача: </td>
      <td> <!--<input type="checkbox"  > Фотограф -->
<select class="form-control" name="roler" >
  <option value="1" id="user">Гість</option>
  <option value="3" id="fotograf">Фотограф</option>
  <option value="2" id="admin">Адміністратор</option>
 
</select>






      </td>
    </tr>

    <tr id="other" style="display:none">
      <td>Опис: </td>
      <td><input type="text" class="form-control" placeholder="Опис"></td>
    </tr>
     <tr id="other1" style="display:none">
      <td>Інша інформація: </td>
      <td><textarea rows="5" cols="45" name="text"></textarea></td>
    </tr>

   

    </tr>
    <tr>
      <td>Додати мініатюру</td>
      <td><div class="form-group">
          <input type="file" id="exampleInputFile">
        </div></td>
    </tr>
    <tr>
          <td></td>
          <td align="center"><a href="/" class="btn btn-default btn-lg active" role="button">Назад</a></button>
           <button type="submit" name="btnreg" class="btn btn-default btn-lg active">Реєстрація</button></td>
        </tr>
  </table>
</h4>

</form>