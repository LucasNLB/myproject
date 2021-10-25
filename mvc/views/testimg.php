<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>hello</h2>
<?php
if(pg_num_rows($data["imgview"]) > 0){
    while($row = pg_fetch_assoc($data["imgview"])){

        echo $row["id"];

    }
}
?>
    

            

        
</body>
</html>