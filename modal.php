<article id="buy" class="modal">
    <section class="modal__window">
        <a href="#exit" class="modal__window__button">x</a>
        <p class="modal__window__header">Заказать</p>
        <form method="post" name="buy" class="modal__window__form">
            <input type="text" name="name" placeholder="Имя" class="modal__window__form__input" pattern="^[А-Яа-яЁё\sa-zA-Z\s]+$">
            <input type="email" name="email" placeholder="Email" class="modal__window__form__input" pattern="^[a-zA-Z0-9@.\s]+$">
            <input name="phone" value="" placeholder="Телефон" class="modal__window__form__input_phone">
            <input type="submit" name="buy" value="Купить" class="modal__window__form__submit">
        </form>
    </section>
</article>

<?php
    include ('create_order.php');
?>

<!-- pattern="^[0-9\s]+$" -->