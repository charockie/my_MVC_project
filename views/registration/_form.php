<div class="container">
    <div class="row">
        <div class="span12">
            <div class="" id="loginModal">
                <div class="modal-body">
                    <div class="well">
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="login">
                                <form class="form-horizontal" action='/main/registration' method="POST">
                                    <fieldset>
                                        <div id="legend">
                                            <legend class="text-center">Регистрация</legend>
                                        </div>

<!--                                        полоса прогресса-->
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0;">
                                                <span class="sr-only">завершено 60%</span>
                                            </div>
                                        </div>

<!--                                        шаг 1-->
<!--                                        выбор деятельности-->
                                        <div id="activity">
                                            <h3 class="text-center step">Шаг 1</h3>
                                            <h3 class="text-center">Выберите деятельность</h3>
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <label class="control-label"  for="username">Сельхоз производитель</label>
                                                    <div style="padding-left: 115px;"><input name="activity" value="manufacturer" type="radio" id="activity1"/><label for="activity1"></label></div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <label class="control-label"  for="username">Дистрибьютор</label>
                                                    <div style="padding-left: 115px;"><input name="activity" value="distributor" type="radio" id="activity2"/><label for="activity2"></label></div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <label class="control-label"  for="username">Покупатель зерна</label>
                                                    <div style="padding-left: 115px;"><input name="activity" value="buyer" type="radio" id="activity3"/><label for="activity3"></label></div>
                                                </div>
                                            </div>
                                        </div>

<!--                                        шаг 2-->
<!--                                        Для покупателя (buyer)-->
                                        <div id="buyer" hidden>
                                            <h3 class="text-center step">Шаг 1</h3>
                                            <h3 class="text-center">Выберите роль</h3>
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <label class="control-label"  for="username">Частное лицо</label>
                                                    <div style="padding-left: 115px;"><input name="role" value="private" type="radio" id="role1"/><label for="role1"></label></div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <label class="control-label"  for="username">Предприниматель</label>
                                                    <div style="padding-left: 115px;"><input name="role" value="businessman" type="radio" id="role2"/><label for="role2"></label></div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <label class="control-label"  for="username">Организация</label>
                                                    <div style="padding-left: 115px;"><input name="role" value="organization" type="radio" id="role3"/><label for="role3"></label></div>
                                                </div>
                                            </div>
                                        </div>
<!--                                        Для дистрибьютора и производителя (distributor, manufacturer)-->
                                        <div id="distrib_manufact" hidden>
                                            <h3 class="text-center step">Шаг 1</h3>
                                            <h3 class="text-center">Выберите роль</h3>
                                            <div class="row">
                                                <div class="col-md-6 text-center">
                                                    <label class="control-label"  for="username">Предприниматель</label>
                                                    <div style="padding-left: 210px;"><input name="role" value="businessman" type="radio" id="role4"/><label for="role4"></label></div>
                                                </div>
                                                <div class="col-md-6 text-center">
                                                    <label class="control-label"  for="username">Организация</label>
                                                    <div style="padding-left: 210px;"><input name="role" value="organization" type="radio" id="role5"/><label for="role5"></label></div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ДЛЯ ЧАСТНОГО-->
<!--                                        форма логин, пароль, повт.пароль-->
                                        <div id="input_form_private" hidden>
                                            <h3 class="text-center">Данные для входа в систему</h3>
                                            <div class="row">
                                                <div class="control-group col-md-6">
                                                    <!-- Email -->
                                                    <label class="control-label"  for="Email">Email*</label>
                                                    <div class="controls">
                                                        <input type="email" id="email" name="email" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <!-- Password-->
                                                    <label class="control-label" for="password">Пароль*</label>
                                                    <div class="controls">
                                                        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- rePassword-->
                                                    <label class="control-label" for="re_password">Пароль еще раз*</label>
                                                    <div class="controls">
                                                        <input type="password" id="re_password" name="re_password" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- форма контактные данные-->
                                            <h4 class="text-center">Контактные данные</h4>
                                            <div class="row col-md-12">
                                                <div class="control-group">
                                                    <!-- FIO-->
                                                    <label class="control-label"  for="fio">Ф.И.О.*</label>
                                                    <div class="controls">
                                                        <input type="text" id="fio" name="fio" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <!-- Phone-->
                                                    <label class="control-label"  for="tel">Контактный телефон*</label>
                                                    <div class="controls">
                                                        <input type="tel" id="tel" name="tel" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- направление-->
                                            <h4 class="text-center">Направление</h4>
                                            <div class="row">
                                                <div class="control-group">
                                                    <!-- direction -->
                                                    <div class="col-md-12">
                                                        <ul class="list-inline">
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Выбрать все</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Зерновые</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Масличные</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Бобовые</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Продукты переработки</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Бахчевые</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Нишевые культуры</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- адресс -->
                                            <h3 class="text-center">Данные для входа в систему</h3>
                                            <div class="row">
                                                <div class="control-group col-md-6">
                                                    <!--  -->
                                                    <label class="control-label"  for="region">Область</label>
                                                    <div class="controls">
                                                        <input type="text" id="region" name="region" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- city-->
                                                    <label class="control-label"  for="city">Населенный пункт</label>
                                                    <div class="controls">
                                                        <input type="text" id="city" name="city" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <!-- street -->
                                                    <label class="control-label" for="street">Улица</label>
                                                    <div class="controls">
                                                        <input type="text" id="street" name="street" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- house-->
                                                    <label class="control-label" for="house">Дом</label>
                                                    <div class="controls">
                                                        <input type="text" id="house" name="house" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- apartment-->
                                                    <label class="control-label" for="apartment">Квартира</label>
                                                    <div class="controls">
                                                        <input type="text" id="apartment" name="apartment" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="btn btn-lg btn-default pull-right private_btn">Далее</p>
                                            </div>
                                        </div>

                                        <!-- ФОТО ДЛЯ ЧАСТНОГО -->
                                        <!-- форма логин, пароль, повт.пароль -->
                                        <div id="input_form_private_file" hidden>
                                            <h3 class="text-center">Для ускорения процедуры подтверждения регистрации. Вы можете загрузить скан-копию Вашего паспорта (первая страница)</h3>
                                            <div class="row">
                                                <div class="control-group col-md-12">
                                                    <!-- FILE -->
                                                    <label class="control-label"  for="file">Выберите файл</label>
                                                    <div class="controls">
                                                        <input type="file" id="file" name="file" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <!-- Button -->
                                                <div class="controls">
                                                    <button class="btn btn-lg btn-default pull-right private_btn">Регистрация</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ДЛЯ ПРЕДПРИНИМАТЕЛЯ-->
                                        <!-- форма логин, пароль, повт.пароль-->
                                        <div id="input_form_businessman" hidden>
                                            <h3 class="text-center">Данные для входа в систему</h3>
                                            <div class="row">
                                                <div class="control-group col-md-6">
                                                    <!-- INN -->
                                                    <label class="control-label"  for="INN">ИНН*</label>
                                                    <div class="controls">
                                                        <input type="text" id="inn" name="inn" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <!-- Password-->
                                                    <label class="control-label" for="password">Пароль*</label>
                                                    <div class="controls">
                                                        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                                                    </div>

                                                    <!-- rePassword-->
                                                    <label class="control-label" for="re_password">Пароль еще раз*</label>
                                                    <div class="controls">
                                                        <input type="password" id="re_password" name="re_password" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- форма контактные данные-->
                                            <h4 class="text-center">Контактные данные</h4>
                                            <div class="row col-md-12">
                                                <div class="control-group col-md-6">
                                                    <!-- FLP-->
                                                    <label class="control-label"  for="flp">Наименование Ф.Л.П.*</label>
                                                    <div class="controls">
                                                        <input type="text" id="flp" name="flp" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- FIO contact -->
                                                    <label class="control-label"  for="fio">Ф.И.О. контактного лица*</label>
                                                    <div class="controls">
                                                        <input type="text" id="fio" name="fio" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <!-- Phone-->
                                                    <label class="control-label"  for="tel">Контактный телефон*</label>
                                                    <div class="controls">
                                                        <input type="tel" id="tel" name="tel" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- email-->
                                                    <label class="control-label"  for="email">Email*</label>
                                                    <div class="controls">
                                                        <input type="email" id="email" name="email" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <h4>Плательщик ПДВ:</h4>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="pdv" name="pdv" value="1" class="input-xlarge">
                                                            <label class="control-label"  for="pdv">Да</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="pdv" name="pdv" value="0" class="input-xlarge">
                                                            <label class="control-label"  for="pdv">Нет</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- направление-->
                                            <h4 class="text-center">Направление</h4>
                                            <div class="row">
                                                <div class="control-group">
                                                    <!-- direction -->
                                                    <div class="col-md-12">
                                                        <ul class="list-inline">
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Выбрать все</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Зерновые</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Масличные</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Бобовые</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Продукты переработки</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Бахчевые</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Нишевые культуры</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- адресс -->
                                            <h3 class="text-center">Данные для входа в систему</h3>
                                            <div class="row">
                                                <div class="control-group col-md-6">
                                                    <!--  -->
                                                    <label class="control-label"  for="region">Область</label>
                                                    <div class="controls">
                                                        <input type="text" id="region" name="region" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- city-->
                                                    <label class="control-label"  for="city">Населенный пункт</label>
                                                    <div class="controls">
                                                        <input type="text" id="city" name="city" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <!-- street -->
                                                    <label class="control-label" for="street">Улица</label>
                                                    <div class="controls">
                                                        <input type="text" id="street" name="street" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- house-->
                                                    <label class="control-label" for="house">Дом</label>
                                                    <div class="controls">
                                                        <input type="text" id="house" name="house" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- apartment-->
                                                    <label class="control-label" for="apartment">Квартира</label>
                                                    <div class="controls">
                                                        <input type="text" id="apartment" name="apartment" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <!-- Button -->
                                                <div class="controls">
                                                    <button class="btn btn-lg btn-default pull-right private_btn">Регистрация</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ДЛЯ ОРГАНИЗАЦИИ-->
                                        <!-- форма логин, пароль, повт.пароль-->
                                        <div id="input_form_organization" hidden>
                                            <h3 class="text-center">Данные для входа в систему</h3>
                                            <div class="row">
                                                <div class="control-group col-md-6">
                                                    <!-- INN -->
                                                    <label class="control-label"  for="edrpou">ЕДРПОУ*</label>
                                                    <div class="controls">
                                                        <input type="text" id="edrpou" name="edrpou" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <!-- Password-->
                                                    <label class="control-label" for="password">Пароль*</label>
                                                    <div class="controls">
                                                        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- rePassword-->
                                                    <label class="control-label" for="re_password">Пароль еще раз*</label>
                                                    <div class="controls">
                                                        <input type="password" id="re_password" name="re_password" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- форма контактные данные-->
                                            <h4 class="text-center">Контактные данные</h4>
                                            <div class="row col-md-12">
                                                <div class="control-group col-md-6">
                                                    <!-- FLP-->
                                                    <label class="control-label"  for="organization">Организация*</label>
                                                    <div class="controls">
                                                        <input type="text" id="organization" name="organization" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- FIO boss -->
                                                    <label class="control-label"  for="boss">Ф.И.О. директора*</label>
                                                    <div class="controls">
                                                        <input type="text" id="boss" name="boss" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- FIO contact -->
                                                    <label class="control-label"  for="fio">Ф.И.О. директора*</label>
                                                    <div class="controls">
                                                        <input type="text" id="fio" name="fio" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <!-- Phone-->
                                                    <label class="control-label"  for="tel">Контактный телефон*</label>
                                                    <div class="controls">
                                                        <input type="tel" id="tel" name="tel" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- email-->
                                                    <label class="control-label"  for="email">Email*</label>
                                                    <div class="controls">
                                                        <input type="email" id="email" name="email" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <h4>Плательщик ПДВ:</h4>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="pdv" name="pdv" value="1" class="input-xlarge">
                                                            <label class="control-label"  for="pdv">Да</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="pdv" name="pdv" value="0" class="input-xlarge">
                                                            <label class="control-label"  for="pdv">Нет</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- направление-->
                                            <h4 class="text-center">Направление</h4>
                                            <div class="row">
                                                <div class="control-group">
                                                    <!-- direction -->
                                                    <div class="col-md-12">
                                                        <ul class="list-inline">
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Выбрать все</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Зерновые</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Масличные</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Бобовые</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Продукты переработки</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Бахчевые</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="fio" name="direction" value="all" class="input-xlarge">
                                                                <label class="control-label"  for="fio">Нишевые культуры</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- адресс -->
                                            <h3 class="text-center">Данные для входа в систему</h3>
                                            <div class="row">
                                                <div class="control-group col-md-6">
                                                    <!--  -->
                                                    <label class="control-label"  for="region">Область</label>
                                                    <div class="controls">
                                                        <input type="text" id="region" name="region" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- city-->
                                                    <label class="control-label"  for="city">Населенный пункт</label>
                                                    <div class="controls">
                                                        <input type="text" id="city" name="city" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <!-- street -->
                                                    <label class="control-label" for="street">Улица</label>
                                                    <div class="controls">
                                                        <input type="text" id="street" name="street" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- house-->
                                                    <label class="control-label" for="house">Дом</label>
                                                    <div class="controls">
                                                        <input type="text" id="house" name="house" placeholder="" class="input-xlarge">
                                                    </div>
                                                    <!-- apartment-->
                                                    <label class="control-label" for="apartment">Квартира</label>
                                                    <div class="controls">
                                                        <input type="text" id="apartment" name="apartment" placeholder="" class="input-xlarge">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <!-- Button -->
                                                <div class="controls">
                                                    <button class="btn btn-lg btn-default pull-right private_btn">Регистрация</button>
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>