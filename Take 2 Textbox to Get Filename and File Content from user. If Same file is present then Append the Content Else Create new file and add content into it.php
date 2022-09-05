<?php
if (isset ($_POST['filename'])) 
{
    $filename = $_POST['txt1'];
    $filecontent = $_POST['txt2'];
    echo $filename, $filecontent;

    $filename = $filename;
    touch($filename);
    file_put_contents ($filename,$filecontent);
    echo file_get_contents($filename);

if (file_exists($filename))
{
    echo "File is Present";
}
else{
    echo "File is not Present";
}
}
?>
<html>
    <form method="post">
        File Name:<input type="text" name="txt1"/><br/>
        Add Content:<input type="text" name="txt2"/><br/>
        <input type="submit" name="filename" value="submit"/>
</form>
</html>