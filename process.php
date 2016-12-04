<?php

$file_max_weight = 20000000;

$ok_ext = array('jpg','png','gif','jpeg');

$destination = 'uploads/';

$file = $_FILES['file'];


$filename = explode(".", $file["name"]); 


$file_name = $file['name'];

$file_name_no_ext = isset($filename[0]) ? $filename[0] : null;

$file_extension = $filename[count($filename)-1];

$file_weight = $file['size'];

$file_type = $file['type'];

if( $file['error'] == 0 )
{
    if( in_array($file_extension, $ok_ext)):

        if( $file_weight <= $file_max_weight ):

                $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
            
                if( move_uploaded_file($file['C:\xampp\htdocs\wilson'], $destination.$fileNewName) ):
                    

                    echo" File uploaded !";

                else:

                    echo "can't upload file.";

                endif;


        else:

           echo "File too heavy.";

        endif;


    else:

        echo "File type is not supported.";

    endif;
}