<form method="post">
    <input type="text" name="tags"/>
    <input type="submit"/>
</form>
<?php
if (isset($_POST['tags'])) {
    $string = $_POST['tags'];
    $explode = explode(",", $string);
    $length = count($explode);
    for ($i = 0; $i < $length; $i++) {
        echo $i . ' : ' . $explode[$i] . "<br>";
    }
}
?>