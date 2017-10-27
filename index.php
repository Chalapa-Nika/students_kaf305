
<?php
 $name = $_GET['name'];
            $surname = $_GET['surname'];
            $telephone = $_GET['telephone'];
            $name = htmlspecialchars(name);
            $surname = htmlspecialchars($surname);
            $telephone = htmlspecialchars($telephone);
            $name = urldecode($name);
            $surname = urldecode($surname);
            $telephone = urldecode($telephone);
            $name = trim($name);
            $surname = trim($surname);
            $telephone = trim($telephone);
            if (mail("verysha71@gmail.com", "Заявка с сайта", "Имя:".$name.". Фамилия: ".$surname. "Телефон: ".$telephone ,"From: verysha71@gmail.com \r\n")){
            echo "Сообщение успешно отправлено";
            } else {
            echo "При отправке сообщения возникли ошибки";
            }
            
            ?>