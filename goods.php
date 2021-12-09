<?php
    $query_goods = "SELECT * FROM Goods";
    $result_goods = $link -> query($query_goods);
    while($goods = $result_goods -> fetch_assoc()){
        $id = $goods['id'];
        $image = $goods['image'];
         echo '<li class="items__product">
            <img class="product__img" src="img/tovar/'.$image.'" alt="tovar image" loading="lazy">
            <div class="product__text">
                <p class="product__name">
                    '.$goods['name'].'
                </p>
                <p class="product__description">
                    '.$goods['description'].'
                </p>
                <a href="?item='.$id.'|#buy" class="product__button">
                    <p class="product__button__text">
                        '.$goods['price'].' ₽
                    </p>
                </a>
            </div>
        </li>';
    }
?>