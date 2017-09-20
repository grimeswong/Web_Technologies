<?php

    $search =$_GET["title"];   
    
    require_once "week11.php";
    $data = getGames($search);
    
    
?>



<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    
    <body>
        
        
        <div class="jumbotron">
            <div class="container">
                <h1>Grimes's Game Emporium</h1>
            </div>
        </div>
        
        <div class="container" id="search"> <!-- Search Form -->
            <form class="form-inline">
                <fieldset>
                    <label>Title
                        <input type="text" class="form-control" placeholder="Please enter a gametitle" name="title" />
                    </label>
                    <input type="submit" value="Search" class="btn btn-default" method="get" action="index.php" />
                    
                </fieldset>
                
            </form>
        </div>
        
        <div class="container" id="data"> <!-- Display Data -->
        
            <table class="table">
                <thead>
                    <td>TITLE</td>
                    <td>DEVELOPER</td>
                    <td>PUBLISHER</td>
                    <td>PRICE</td>
                    <td>PLATFORM</td>
                </thead>
                
                <tbody>
                    
                    <?php
                        foreach ($data as $value) {
                            echo "<tbody>";
                                echo "<tr>";
                                    echo "<td>" .$value["TITLE"], "</td>";
                                    echo "<td>" .$value["DEVELOPER"], "</td>";
                                    echo "<td>" .$value["PUBLISHER"],"</td>";
                                    echo "<td>" .$value["PRICE"], "</td>";
                                    echo "<td>" .$value["PLATFORM"], "</td>";
                                echo "</tr>";
                            echo "</tbody>";
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
        
        
    </body>
</html>