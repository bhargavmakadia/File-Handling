<?php
if (isset ($_POST['filename'])) 
{
    $filename = $_POST['txt1'];
    $filecontent = $_POST['txt2'];;
    echo $filename, $filecontent;

    $filename = "$filename";
    $handle = fopen($filename,'w');
    fwrite($handle,"$filecontent");
    fclose($handle);

    $filename = "$filename";
    $handle=fopen($filename,'r');
    $data = fread($handle,filesize($filename));
    echo $data;
    fclose($handle);
    $handle = fopen($filename,'a');
    fwrite($handle,"$filecontent");
    fclose ($handle);
    $handle=fopen($filename,'r');
    $data=fread($handle,filesize($filename));
    echo $data;
    fclose ($handle);
}
?>
<html>
    <form method="post">
        File Name:<input type="text" name="txt1"/><br/>
        Add Content:<input type="text" name="txt2"/><br/>
        <input type="submit" name="filename" value="submit"/>
</form>
</html>