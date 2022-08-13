<?php
if(isset($_POST)){
@$metin = @$_POST['metin'];

echo  str_word_count($metin);
}
?>

<html>

<form action="" method="post">

    <input type="text" name="metin">
    <input type="submit" value="hesapla">

</form>

</html>
