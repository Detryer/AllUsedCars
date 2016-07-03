<form action="" method="get">
    <fieldset>
        <legend>Быстрый поиск</legend>
        <div class="search_field">
            <select name="brand">
            <option value="all"><b>Выберите марку</b></option>
                <?php require_once ("../handlers/fast_search_handler.php");
                 Search::filter("brand", "brands")?>
            </select>
        </div>
        <div class="search_field">
            <label for="model">Модель</label>
            <select id="model">
            <option value="">Выберите модель</option>
<!--                 <?php Search::filter("models", "model")?>
 -->            </select>
        </div>
<!--         <div class="search_field">
            <label for="year">Год</label>
            <select id="year">
            <option value="">Выберите марку</option>
            <? //= year() ?>
            </select>
        </div> -->
        <div class="search_field">
            <label for="city">Город</label>
            <select id="city">
            <option value="">Выберите город</option>
                <!--                --><? //= city() ?>
            </select>
        </div>
    </fieldset>
</form>