<?php
    function send_mail(string $to,  string $name, string $item_price, string $item_name, string $description, string $phone, string $item_id) {
        mail($to, 'Спасибо за покупку', ' '.$name.' Благодарим вас за покупку нашего товара: '.$item_name.', описание: '.$description.'. Цена: '.$item_price.'');
        mail('art.mal.kon@yandex.ru', 'Новый заказ!', 'Новый заказ: ID: '.$item_id.', '.$item_name.', описание: '.$description.'. Цена: '.$item_price.'. Имя - '.$name.', email: '.$to.', телефон: '.$phone.'');
    }

    if(isset($_GET['item'])){
        $item_id = $_GET['item'];
        if(isset($_POST['buy'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $item_id = substr($item_id, 0, -1);
            if (input_checker($item_id) == true and
                input_checker($name) == true and
                filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $item_info = "SELECT * FROM Goods WHERE id='$item_id'";
                $item_result = $link->query($item_info);
                $item = $item_result->fetch_assoc();

                $item_name = $item['name'];
                $item_price = $item['price'];
                $item_description = $item['description'];

                $buy_query = "INSERT INTO orders (item_id, item_price, user_name, user_email, user_phone) VALUES ('$item_id', '$item_price', '$name', '$email', '$phone')";
                $link->query($buy_query);

                send_mail($email, $name, $item_price, $item_name, $item_description, $phone ,$item_id);

                echo '<script> document.location.href = "thanks.html" </script>';
            }
        }
    }
?>
