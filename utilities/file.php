<?php
include_once("upload.php");
$file= $_FILES['fileToUpload'];

$myFileName= $file['name'];
$myFileType= $file['type'];
$myFileTmpname= $file['tmp_name'];
$myFileSize= $file['size'];
$dir = "../uploads/";

foreach($myFileName as $index => $name){
    if(checkFileType($myFileType[$index])){
       if(checkSize($myFileSize[$index])){
           $targetDir = $dir .basename($myFileName[$index]);
            if(alreadyExists($targetDir)){
                if(goToDirectory($myFileTmpname[$index],$targetDir)){
                    echo "SUCCESSFULLY UPLOADED IMAGE/IMAGES! \n",$myFileName[$index],"<br><br>";
                    
                }
                }else{
                    echo "Failed to upload! \n";
            }

        }else{
            echo "Memory too big!\n";
        }
        }else{
            echo "Invalid!\n";
    }
}




$myFolder = "../uploads";
$output = scandir('../uploads');
foreach ($output as $output) {
    if ($output === '.' or $output === '..') continue;

    if (is_file($myFolder . '/' . $output)) {
        echo '
            <div class="col-md-3">
                <img src="'.$myFolder . '/' . $output.'" alt="..." style="width:250px; height:250px;">
            </div>';
    }
}

    
?>