<html>
<body>
<form method="post">
    <label for="tag">Enter HTML tag:</label><br>
    <input type="text" name="tag" id="tag"/>
    <input type="submit" name="submit"/>
</form>
<?php
session_start();
$_SESSION['count'];
//ТАГОВЕТЕ СА КОПИРАНИ ОТ ФОРУМА !
$alltags = array('a', 'abbr', 'acronym', 'address', 'applet', 'area', 'b', 'base', 'basefont',
    'bdo', 'bgsound', 'big', 'blockquote', 'blink', 'body', 'br', 'button', 'caption', 'center', 'cite', 'code',
    'col', 'colgroup', 'dd', 'dfn', 'del', 'dir', 'dl', 'div', 'dt', 'embed', 'em', 'fieldset', 'font', 'form',
    'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html', 'iframe', 'img', 'input',
    'ins', 'isindex', 'i', 'kbd', 'label', 'legend', 'li', 'link', 'marquee', 'menu', 'meta', 'noframe',
    'noscript', 'optgroup', 'option', 'ol', 'p', 'pre', 'q', 's', 'samp', 'script', 'select', 'small', 'span', 'strike',
    'strong', 'style', 'sub', 'sup', 'table', 'td', 'th', 'tr', 'tbody', 'textarea', 'tfoot', 'thead', 'title',
    'tt', 'u', 'ul', 'var');
//ТАГОВЕТЕ СА КОПИРАНИ ОТ ФОРУМА !
if (isset($_POST['submit'])) {
    if (in_array($_POST['tag'], $alltags)) {
        $_SESSION['count']++;
        echo "<b>VALID HTML TAG! <br> SCORE:</b>" . " <b>" . $_SESSION['count'] . "</b>";
    } else {
        echo "<b>INVALID HTML TAG! <br> SCORE:</b>" . " <b>" . $_SESSION['count'] . "</b>";
    }
}
?>
</body>
</html>

