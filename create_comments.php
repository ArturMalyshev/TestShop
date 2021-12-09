<?php
    if(isset($_POST['feedback'])){
        $name = $_POST['name'];
        $text = $_POST['text'];
        if ($name != '' and $name != ' ' and $text != '' and $text != ' '){
            $set_feedback = "INSERT INTO feedback (name, text) VALUES ('$name', '$text')";
            $link->query($set_feedback);
        }
    }

    else{
        echo '
        <hr class="hr">
        <form method="post" name="feedback" class="feedback__form">
            <div class="feedback__container">
                <input type="text" name="name" placeholder="Имя" class="feedback__form__name">
                <input type="submit" name="feedback" value="Оставить отзыв" class="feedback__form__submit">
            </div>
            <textarea type="text" name="text" placeholder="Отзыв" class="feedback__form__text"></textarea>
        </form>';
    }

?>