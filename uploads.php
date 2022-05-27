<?php
/**
 * Doc comment
 * PHP version 8.0
 * 
 * @category Description
 * @package  Package
 * @author   Chris <chrisocen4@gmail.com>
 * @license  MIT https://ocenchris.com/license
 * @link     https://github.com/chrisjrocen/signup-login
 */

if (isset($_POST['upload-submit'])) {

    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    //extracting the files extension
    $fileExt = explode('.', $fileName);

    //comverting the file extention to lower case
    $filesActualExt = strtolower(end($fileExt));

    //allowed file extensions 
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    //checking if the file has the allowed extension
    if (in_array($filesActualExt, $allowed)) {

        //checking if there was no error when uploading the file
        if ($fileError === 0) {

            //checking if the file is below the required size.
            //1,000,000kb = 1mb
            if ($fileSize < 1000000) {

                //giving it a new uique name
                $fileNameNew = uniqid('', true).".".$filesActualExt;

                //starting file upload.
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?upload=success");
            } else {
                echo "Your file is too big. Required lesss than 1 mb";
            }
        } else {
            echo "There was an error uploading the file";
        }
    } else {
        echo "Only jpeg, jpg, png and pdf are allowed!";
    }
} else {
    header("Location: index.php?error=url");
}
