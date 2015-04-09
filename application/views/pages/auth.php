<?php if (isset($error)) { ?>
    <p style="color:red">Невірний пароль</p>
<?php } ?>
<?php if (isset($noerror)) { ?>
    <p style="color:green">Ви успішно залогінилися</p>
<?php } ?>
<form action="" method="post">
    <div id="container">

        <table align="center">
            <h1>Вхід</h1>
            <label for="username">

                <tr>
                    <td><h3>
                            Логін:</td>
                    <td><input type="text" name="login"></td>
                    </h3>
                </tr>
            </label>

            <label for="username">

                <tr>
                    <td><h3>
                            Пароль:</td>
                    <td><input type="password" name="password"></td>
                    </h3>
                </tr>
            </label>
 

            <tr>
                <td></td>
                <td align="center">
                    <button type="submit" value="Вхід" name="btauth">Вхід</button>
                      <!--    <a href="<?php //echo URL::site('pages/register');?>" class="btn btn-default btn-lg active" role="button">Реєстрація</a></button> -->
                </td>

            </tr>
    </div>
    </table>

    </div>
</form>