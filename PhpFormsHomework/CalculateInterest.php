<html>
<body>
<form method="post">
    Enter amount : <input type="text" name="amount"/><br>
    <input type="radio" name="currency" value="$"/>USD
    <input type="radio" name="currency" value="EUR"/>Euro
    <input type="radio" name="currency" value="BGN"/>BGN<br>
    Compound interest amount : <input type="text" name="interest"/><br>
    <select name="period">
        <option value="6">6 Months</option>
        <option value="12">12 Months</option>
        <option value="24">2 Years</option>
        <option value="60">5 Years</option>
    </select>
    <input type="submit" name="submit"/>
</form>
<?php
if (isset($_POST["submit"])) {
    $amount = intval($_POST['amount']);
    $compound = intval($_POST['interest']);
    $interest = ($compound / 12);
    $months = intval($_POST['period']);
    $endsum = 0;
    for ($i = 0; $i < $months; $i++) {
        $endsum = $amount + ($amount / (100 / $interest));
        $amount = $endsum;
    }
    echo $_POST['currency'] . ' ' . round($amount, 2);
}
?>
</body>
</html>
