<?php require_once "blocks/header.php";?>
<main>
    <div class="container">
        <div class="reg_user">
            <form action="php/reguser.php" method="post" id="reg_form">
                <h1>Регистрация</h1>
                <br>
                <h5 class="sub__title">Личный данные и полис</h5>
                <div class="cols">
                    <p>
                        <label for="">Имя</label>
                        <input type="text" placeholder="" name="name" required>
                    </p>
                    <p>
                        <label for="">Фамилия</label>
                        <input type="text" placeholder="" name="surname" required>
                    </p>
                    <p>
                        <label for="">Отчество</label>
                        <input type="text" placeholder="" name="secondname" required>
                    </p>
                    <!-- <p>
                        <label for="">Пол</label>
                        <select name="gender" id="gender" required>
                            <option value="man">Мужчина</option>
                            <option value="woman">Женщина</option>
                        </select>
                    </p> -->

                </div>

                <h5 class="sub__title">Данные для идентификации</h5>
                <div class="cols">
                    <p>
                        <label for="">Логин</label>
                        <input type="text" placeholder="" name="login" id="login_res">
                    </p>
                    <p>
                        <label for="">Email</label>
                        <input type="email" placeholder="" name="mail" >
                    </p>
                    <p>
                        <label for="">Пароль</label>
                        <input type="password" placeholder="" name="pass_reg" id="pass_reg">
                    </p>
                    <p>
                        <label for="">Повторите пароль</label>
                        <input type="password" placeholder="" name="pass_rep" id="pass_rep">
                    </p>
                    <p>
                        <input type="checkbox" placeholder="" name="" required>
                        <label for="">Согласение на обработку</label>
                    </p>
                    <p class="errormsg"></p>
                </div>
                <input type="submit" value="Зарегистрироваться" class="subbtn" >
            </form>

        </div>
    </div>
</main>
<?php require_once "blocks/footer.php";?>