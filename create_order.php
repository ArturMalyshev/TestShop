<?php
    function send_mail(string $to,  string $name, string $item_price, string $item_name) {
        mail($to, 'Спасибо за покупку', ''.$name.' Благодарим вас за покупку нашего товара: '.$item_name.' цена: '.$item_price.'');
    }


    if(isset($_GET['item'])){
        $item_id = $_GET['item'];
        if(isset($_POST['buy'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $item_info = "SELECT * FROM Goods WHERE id='$item_id'";
            $item_result = $link -> query($item_info);
            $item = $item_result -> fetch_assoc();

            $item_name = $item['name'];
            $item_price = $item['price'];

            $buy_query = "INSERT INTO orders (item_id, item_price, user_name, user_email, user_phone) VALUES ('$item_id', '$item_price', '$name', '$email', '$phone')";
            $link -> query($buy_query);

            send_mail($email, $name, $item_price, $item_name);

            echo '<script> document.location.href = "thanks.html" </script>';
        }
    }
?>