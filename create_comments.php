<?php
    if(isset($_POST['feedback'])){
        $name = $_POST['name'];
        $text = $_POST['text'];
        $uid = $_SESSION['uid'];

        $uid_query = "SELECT session_id FROM feedback";
        $uid_result = $link -> query($uid_query);
        $uid_result = $uid_result -> fetch_assoc();

        if(array_search($uid, $uid_result) == false){
            if( input_checker($name) == true and input_checker($text) == true){
                if (strlen($name) > 2 and strlen($text) > 9){
                    $set_feedback = "INSERT INTO feedback (name, text, session_id) VALUES ('$name', '$text', $uid)";
                    $link->query($set_feedback);
                }
                else{
                    echo '
                        <hr class="hr">
                        <p class="form__error">Введите больше символов</p>
                        <form method="post" name="feedback" class="feedback__form">
                            <div class="feedback__container">
                                <input type="text" name="name" placeholder="Имя" class="feedback__form__name" pattern="^[А-Яа-яЁё\sa-zA-Z\s]+$">
                                <input type="submit" name="feedback" value="Оставить отзыв" class="feedback__form__submit">
                            </div>
                            <textarea type="text" name="text" placeholder="Отзыв" class="feedback__form__text" pattern="^[А-Яа-яЁё\sa-zA-Z\s]+$"></textarea>
                        </form>';
                    }
            }
            else{
                echo '
                        <hr class="hr">
                        <p class="form__error">Вы ввели недопустимые символы</p>
                        <form method="post" name="feedback" class="feedback__form">
                            <div class="feedback__container">
                                <input type="text" name="name" placeholder="Имя" class="feedback__form__name" pattern="^[А-Яа-яЁё\sa-zA-Z\s]+$">
                                <input type="submit" name="feedback" value="Оставить отзыв" class="feedback__form__submit">
                            </div>
                            <textarea type="text" name="text" placeholder="Отзыв" class="feedback__form__text" pattern="^[А-Яа-яЁё\sa-zA-Z\s]+$"></textarea>
                        </form>';
            }
        }
    }
    else{
        echo '
        <hr class="hr">
        <form method="post" name="feedback" class="feedback__form">
            <div class="feedback__container">
                <input type="text" name="name" placeholder="Имя" class="feedback__form__name" pattern="^[А-Яа-яЁё\sa-zA-Z\s]+$">
                <input type="submit" name="feedback" value="Оставить отзыв" class="feedback__form__submit">
            </div>
            <textarea type="text" name="text" placeholder="Отзыв" class="feedback__form__text" pattern="^[А-Яа-яЁё\sa-zA-Z\s]+$"></textarea>
        </form>';
    }
?>
