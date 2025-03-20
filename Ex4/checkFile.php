<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Forms - Creation</title>
    </head>
    <body>
            <?php
                $name = $_FILES["downloadFile"]["name"];
                echo "File name          : " . $name . "</br>";

                $type = $_FILES["downloadFile"]["type"];
                echo "File type          : " . $type . "</br>";

                $source = $_FILES["downloadFile"]["tmp_name"];
                echo "File source        : " . $source . "</br>";

                $error = $_FILES["downloadFile"]["error"];
                echo "File error         : " . $error . "</br>";

                $size = $_FILES["downloadFile"]["size"];
                echo "File size          : " . $size . "</br>";

                $dateName = date("YmdHis") . ".jpg";
                echo "File dateName      : " . $dateName . "</br>";

                $destination = "D:\pappro\133\Ex4" . $dateName;
                echo "File destination   : " . $destination . "</br>";

                move_uploaded_file($source, $destination);

                echo "<img src='$dateName' alt='downloadFile'>";
            ?>
    </body>
</html>