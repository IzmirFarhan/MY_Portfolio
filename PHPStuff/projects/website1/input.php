<!-- IMPORTANT: 
***Now we are going to add a while loop so that we can repeatedly ganerate the password using a button*** 
***Now we are going to save this password inside a file so that people can save it along with editing its name
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <title>Document</title>
</head>
<body>
    <div class="pack">
    <h1>
        <?php
            if($_SERVER["REQUEST_METHOD"] == 'POST'){
                $name = $_POST["Name"];
                $length = $_POST["Length"];

                echo "Title: " . $name . "<br>";

                // we put the btn ganerate gain in the passGanerate function
                    function passGanerator($length){
                        $characters = 'abcdefghijflmnopqrzABCDEFGHIJKLMNOP1234567890';
                        $charactersLength = strlen($characters);
                        $randomPass = '';
        
                        for($x = 0; $x < $length; $x++) {
                        $randomPass .= $characters[rand(0, $charactersLength - 1)];
                        }
    
                        return $randomPass;
                    }
    
                    $randomPass = passGanerator($length);
                    echo "Password has been added";


                $file = fopen("{$name}.txt", "w");
                fwrite($file, "Name: " . $name);
                fwrite($file, "Password: " . $randomPass);
                fclose($file);
            }
        ?>
    </h1>
    </div>
    <div class="back">
        <a href="homePage.php">Back</a>   
    </div>

    <dev class="footer">

    </dev>
</body>
</html>