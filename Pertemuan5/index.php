<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Indexed Arrays</title>
    </head>
    <body>
        <h1>Indexed Arrays</h1>


        <ul>
            <li>
                <a href="index.php">Indexed Array</a>
            </li>
            <li>
                <a href="aa.php">Associative Array</a>
            
          </ul>
          <hr>
          <?php
        $laptop = Array("Ace","Asus","Msi","Macbook"),ss
        // var_dump(+$laptop);
        echo $laptop[0];
        ?>
        <table border="1" style="border-collapse;
        <ol>

            <!--memanggil array dengan for-->
            <?php
                 for ($i=0; $i < 100; $i++){
                    echo "<li>$laptop[$i]</li>";
                 }
                    // for ($i=0; $i < 100; $i++){
                    //      echo "<li>UMSU</li>";+
                    // }
            ?>
                <li><?php echo $laptop[0]; ?></li>
                <li><?php echo $laptop[1]; ?></li>
                <li><?php echo $laptop[2]; ?></li>
                <li><?php echo $laptop[3]; ?></li>