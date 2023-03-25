<?php
            if($_SERVER["REQUEST_METHOD"] == 'POST'){
                $name = $_POST["Name"];
                $length = $_POST["Length"];
            }else{
                echo "<h1>Useranme or password is invalid</h1>";
            }
        ?>