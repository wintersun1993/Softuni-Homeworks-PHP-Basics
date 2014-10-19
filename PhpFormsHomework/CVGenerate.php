<html>
<body>
<form method="post">
    <fieldset>
        <legend>Personal Information</legend>
        <input type="text" name="fName" placeholder="First Name...."/><br>
        <input type="text" name="lName" placeholder="Last Name...."/><br>
        <input type="email" name="email" placeholder="Email...."/><br>
        <input type="text" name="phone" placeholder="Phone Number...."/><br>
        <label for="female">Female</label>
        <input type="radio" name="gender" value="female" id="female"/>
        <label for="male">Male</label>
        <input type="radio" name="gender" value="male" id="male"/><br>
        Birth Date<br>
        <input type="text" name="birth" placeholder="dd/mm/yyyy"/><br>
        Nationality<br>
        <select name="nation"/>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Madagascar">Madagascar</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Last Work Position</legend>
        Company name <input type="text" name="company"/><br>
        From <input type="text" name="from" placeholder="dd/mm/yyyy"/><br>
        To <input type="text" name="to" placeholder="dd/mm/yyyy"/><br>
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>
        Programming languages<br>

        <div id="complang">
            <input type="text" name="lang"/>
            <select name="level">
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
            </select>
        </div>
    </fieldset>
    <fieldset>
        <legend>Other skills</legend>
        Languages<br>

        <div id="others">
            <input type="text" name="levelLang"/>
            <select name="comprehence">
                <option>Comprehension</option>
                <option>High</option>
                <option>Low</option>
            </select>
            <select name="read">
                <option>Reading</option>
                <option>High</option>
                <option>Low</option>
            </select>
            <select name="write">
                <option>Writing</option>
                <option>High</option>
                <option>Low</option>
            </select>
        </div>
        <label for="A">A</label>
        <input type="checkbox" name="A" id="A"/>
        <label for="B">B</label>
        <input type="checkbox" name="B" id="B"/>
        <label for="A">C</label>
        <input type="checkbox" name="C" id="C"/>
    </fieldset>
    <input type="submit" name="submit" value="Generate CV"/>


</form>

<?php

//Липсва добавяне на нови полета.Ще се опитам да го направя когато имам повече време.
if (isset($_POST['fName']) && isset($_POST['lName']) && isset($_POST['email']) && isset($_POST['phone']) &&
    isset($_POST['gender']) && isset($_POST['birth']) && isset($_POST['nation']) && isset($_POST['company']) && isset($_POST['from']) &&
    isset($_POST['to']) && isset($_POST['lang']) && isset($_POST['comprehence']) && isset($_POST['read']) &&
    isset($_POST['write'])
) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $nation = $_POST['nation'];
    $company = $_POST['company'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $lang = $_POST['lang'];
    $level = $_POST['level'];
    $speakLang = $_POST['levelLang'];
    $comprehence = $_POST['comprehence'];
    $read = $_POST['read'];
    $write = $_POST['write'];
    $driverA = '';
    $driverB = '';
    $driverC = '';
    if (isset($_POST['A'])) {
        $driverA = 'A';
    }
    if (isset($_POST['B'])) {
        $driverB = 'B';
    }
    if (isset($_POST['C'])) {
        $driverC = 'C';
    }
    if (!preg_match('/[^A-Za-z]/', $fName) && !preg_match('/[^A-Za-z]/', $lName)
        && !preg_match('/[^A-Za-z0-9 ]/', $company) && strlen($fName) <= 20 && strlen($fName) >= 2 &&
        strlen($lName) <= 20 && strlen($lName) >= 2 &&
        strlen($company) <= 20 && strlen($company) >= 2 &&
        !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $birth) &&
        !preg_match('/[^0-9\+\-\s]/', $phone)
    ) {
        echo "<table border=\"1\"><th colspan=\"2\">Personal Information</th>
                <tr><td>First Name</td><td>$fName</td></tr>
                <tr><td>Last Name</td><td>$lName</td></tr>
                <tr><td>Email</td><td>$email</td></tr>
                <tr><td>Phone Number</td><td>$phone</td></tr>
                <tr><td>Gender</td><td>$gender</td></tr>
                <tr><td>Birth Date</td><td>$birth</td></tr>
                <tr><td>Nationality</td><td>$nation</td></tr></table>
                <table border=\"1\"><th colspan=\"2\">Last Work Postion</th>
                <tr><td>Company</td><td>$company</td></tr>
                <tr><td>From</td><td>$from</td></tr>
                <tr><td>To</td><td>$to</td></tr></table>
                <table border=\"1\"><th colspan=\"2\">Computer Skills</th>
                <tr><td>Programming languages</td><td><table border=\"1\"><tr><td><b>Language</b></td><td><b>Skill Level</b></td></tr><tr><td>$lang</td><td>$level</td></tr></table></td></table>
                <table border=\"1\"><th colspan=\"2\">Other Skills</th>
                <tr><td>Languages</td><td><table border=\"1\"><tr><td><b>Language</b></td><td><b>Comprehence</b></td><td><b>Read</b></td><td><b>Write</b></td></tr><tr><td>$speakLang</td><td>$comprehence</td><td>$read</td><td>$write</td></tr></table><tr><td>Drivers Licence</td><td>$driverA $driverB $driverC</td></tr>";
    } else {
        echo "Wrong Input.";
    }

} else {
    echo "Wrong Input.";
}
?>

</body>
</html>
