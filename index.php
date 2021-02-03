<!DOCTYPE html>
<html>
    <head>
        <title>Товары</title>
        <meta charset='utf-8'>
        <link href='style.css' rel='stylesheet'>
    </head>
    <body>
    <section class="products">
        <ul class="products__list">
        <?php
        $productsJson = file_get_contents('product.json');
        $productsArray = json_decode($productsJson);
        
        foreach($productsArray as $value){
            foreach($value as $val){
                ?><li class="products__item"><?php
                foreach($val as $index=>$item){
                    if($index == 'img'){
                        ?><img class="products__image" src="<?php echo $item; ?>" widht="125" height="180" alt="Кресло"><?php
                    }else if($index == 'name'){
                        ?><p class="products__name"><?php  echo $item;  ?></p><?php
                    }else if($index == 'price'){
                        ?><p class="products__price"><?php echo $item. " ";  ?><span>&#8381;</span></p><?php
                    }
                }
                    ?><button class="products__button" type="button">Купить</button>
                </li><?php
            }
        }  ?>
        </ul>
    </section>
    <section class="form">
        <form class="form__list" action="send.php" method="POST">
            <span class="form__toggle">&times;</span>
            <input type="text" name="userName" placeholder="Ваше имя" id="userName_field" required>
            <input type="tel" name="userPhone" placeholder="Ваш телефон" id="userPhone_field" required>
            <input type="email" name="userEmail" placeholder="Ваше email" id="userEmail_field" required>
            <input type="text" name="productName" value="Товар: Парикмахерское кресло" id="productName__field">
            <button class="form__button" type="submit">Оставить заявку</button>
        </form>
    </section>
        <script src="script.js"></script>
    </body>
</html>