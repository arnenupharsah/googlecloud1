<?php

//Creating directory to store files
//Designing user interface

?>
<form method="POST" enctype="multipart/form-data" action="upload.php">
    <input type="file" name="file">
    <input type="submit"  value="Upload">
</form>

<?php   

//Creating file to upload
//Displaying all uploaded files

$files=scandir("uploads");
for($a = 2;$a<count($files);$a++){
    //Displaying links to download
    //Making it download

?>

<p>
    <a download="<?php echo $files[$a] ?>" href="../uploads/<?php echo $files[$a]?>"><?php echo $files[$a]?></a>||| <a href="../uploads/<?php echo $files[$a]?>"><?php echo $files[$a]?></a>
</p>
<?php
}
?>
