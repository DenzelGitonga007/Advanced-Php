<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling</title>
</head>
<body>
    <?php
        // Creating the file
        function createFile() {
            $filename = "new_file.txt";
            $file = fopen($filename, "w");

                if ($file == false) {
                    die("File not created");
                }else {
                    // What to write
                    fwrite($file, "Testing file handling");
                    fclose($file);
                }
        }
        function readContent() {
            $filename = "new_file.txt";
            $file = fopen($filename, "r");

                if ($file == false) {
                    die("File not found"); // If the file is not found, the error is handled here.
                }else {
                    // Opening the file
                    $filesize = filesize($filename);
                    $filetext = fread($file, $filesize);

                fclose($file);
                echo "File name is : " . $filename . "<br>";
                echo "File size is : " . $filesize . "<br>";
                echo $filetext;
                }
        }
        // Calling the functions
        createFile();
        readContent();
    ?>
</body>
</html>