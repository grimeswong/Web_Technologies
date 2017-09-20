<?php
    $array = [5,4,3,2,1];
    $assArray = ["one" => "one", "two" => "two", "three"=> "three"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Array & Associative Array in PHP
        </title>
    </head>
    <body>
            <?= $assArray["one"] ?>
            <?php 
                echo "<br/>" . $assArray["two"];
            ?>
            <?= "<br/>" . $assArray["three"] ?>
            
            <table>
                <tbody>
                <?php 
                    foreach ($assArray as $item) {
                        echo "<tr>";
                        echo "<td>" . $item . "</td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
            <ul>
                <?php
                    foreach ($array as $item) {
                ?>
                        <li><?= $item ?></li>
                <?php
                    }
                ?>
            </ul>
    </body>
</html>