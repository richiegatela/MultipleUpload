<?php 
    include("includes/header.php");
    
?>
<div class="container">
        <div class="card p-4 mt-4">
            <form action="utilities/file.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <div class="card p-4">
                    <input type="file" name="fileToUpload[]" multiple>
                </div>              
                <button class="btn btn-primary mt-2" type="submit">
                    <i class="fas fa-cloud-upload-alt text-center "></i></span> Upload
                </button>
            </form>
        </div>  
    </div>
