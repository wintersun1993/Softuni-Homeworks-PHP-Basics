<form method="post">
    <input type="text" name="tags"/>
    <input type="submit"/>
</form>
<?php
if (isset($_POST['tags'])) {
    $string = $_POST['tags'];
    $explode = explode(",", $string);
    $c = array_count_values($explode);
    $val = array_search(max($c), $c);
    arsort($c);
    foreach ($c as $key => $value) {
        echo "$key : $value times <br>";
    }
    echo "<p>Most Frequent Tag is: $val </p>";
}
?>
