<DOCTYPE HTML>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css"/>
        </head>
        <body>
            <h2> Multidimensional Array </h2>
            <table>
                <tr>
                    <th>Judul Film</th>
                    <th>Tahun</th>
                    <th>Rating</th>
                </tr>
                <?php
                    $movie = array(
                        array("nama"=>"Avengers: Invinity War","thn"=> 2018, "rat"=> 8.7),
                        array("nama"=>"The Avengers", "thn"=>2012, "rat"=>"8.1"),
                        array("nama"=>"Guardians of the Galaxy", "thn"=>2014, "rat"=>8.1),
                        array("nama"=>"Iron Man", "thn"=>2018, "rat"=>7.9)
                    );

                        foreach($movie as $key => $value){
                            echo "<tr>";
                            echo "<td>".$value["nama"]."</td>";
                            echo "<td>".$value["thn"]."</td>";
                            echo "<td>".$value["rat"]."</td>";
                            echo "</tr>";
                        }
                        
                        
                    
                   
                ?>
            </table>
        </body>
    </html>
