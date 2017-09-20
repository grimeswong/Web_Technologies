<?php
    $dataArray = [
                ["sName" => "Gervase", "sNumber" => "s1234567", "mark" => "95", "comments" => "Well done"],
                ["sName" => "Grimes", "sNumber" => "s2193948", "mark" => "90", "comments" => "Excellent"],
                ["sName" => "Karen", "sNumber" => "s4567123", "mark" => "60", "comments" => "Not too bad"],
                ["sName" => "Rex", "sNumber" => "s0002011", "mark" => "100", "comments" => "Good job"]
            ]
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
                <h1>Students Exam Results</h1>    
                
                
                
            </div>
            
        </div>
        
        <div class="container">
            
            <table class="table">
               
                <thead>
                    <tr>
                        <th>Student Number</th>
                        <th>Student Name</th>
                        <th>Mark</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <?php           /* must end with the ";" notation that is very import, and comma between the data and tags */    
                    foreach ($dataArray as $data )  /* dataArray is the array name, $data is the element of array which is use any name */      
                    {
                        echo "<tbody>";
                            echo "<tr>";
                                echo "<td>" .$data["sNumber"], "</td>";
                                echo "<td>" .$data["sName"], "</td>";
                                echo "<td>" .$data["mark"], "</td>";
                                echo "<td>" .$data["comments"], "</td>";
                            echo "</tr>";
                        echo "</tbody>";
                    }
                ?>
            </table>
        </div>
        
        
        
    </body>

</html>