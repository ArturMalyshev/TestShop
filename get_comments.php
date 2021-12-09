<article class="feedback">
    <?php
        $query_feedback = "SELECT * FROM feedback";
        $result_feedback = $link -> query($query_feedback);
        while($feedback = $result_feedback -> fetch_assoc()){
            echo '
                <section class="feedback__section">
                    <p class="feedback__section__name">
                        '.$feedback['name'].'
                    </p>
                    <p class="feedback__section__text">
                       '.$feedback['text'].'
                    </p>
                </section>';
        }
    ?>
</article>