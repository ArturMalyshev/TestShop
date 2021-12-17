<?php
    $rowsInFeedback = "SELECT COUNT(id) FROM feedback";
    $rowsInFeedback = $link -> query($rowsInFeedback);
    $rowsInFeedback = $rowsInFeedback -> fetch_assoc();
    if ($rowsInFeedback['COUNT(id)'] != 0){
        echo '<hr class="hr">
        <article class="feedback">';
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
        echo '</article>';
    }
?>
