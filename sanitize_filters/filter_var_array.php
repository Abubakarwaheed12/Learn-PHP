<?php
    $var= array(
    "stname" => "abu bakar waheed",
    "stmarks"=> "900",
    "stemail"=> "abubakarwaheed6346528@gmail.com"
    ); 
            $filters=array(
                "stname"=> FILTER_SANITIZE_STRING,
                "stmarks"=> array(
                    "filter"=>FILTER_VALIDATE_INT,
                    "options"=>array(
                        "min_range"=>1,
                        "max_range"=>100
                    )
                    ),
                "stemail"=> FILTER_SANITIZE_EMAIL
            );

                    echo "<pre>";
                    print_r(filter_var_array($var ,$filters));
                    echo "</pre>";
   
?>