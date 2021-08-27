<html>
<head>
    <title>Input Panel</title>
    <link href="cpStyle.css" rel="stylesheet" type="text/css">
</head>

<?php
function formKeep($keep) {
    echo isset($_POST[$keep]) ? $_POST[$keep] : '0';
}
?>

<?php
function optionKeep($opr, $keep) {
    echo (isset($_POST[$opr]) && $_POST[$opr] == $keep) ? 'selected="selected"' : '';
}
?>

<body>
<h1>Control Panel</h1>
<form method="post">
    <label>Match Title:
    <input type="text" name="matchTitle" id="matchTitle" value="<?php formKeep("matchTitle"); ?>"><br/><br/>
    </label>
    <label>Countries: <br/>
    <select id="country1" name="country1">
        <option disabled selected value>Choose...</option>
        <option value="Afghanistan" <?php optionKeep("country1", "Afghanistan"); ?>>Afghanistan</option>
        <option value="Australia" <?php optionKeep("country1", "Australia"); ?>>Australia</option>
        <option value="Bangladesh" <?php optionKeep("country1", "Bangladesh"); ?>>Bangladesh</option>
        <option value="England" <?php optionKeep("country1", "England"); ?>>England</option>
        <option value="India" <?php optionKeep("country1", "India"); ?>>India</option>
        <option value="Ireland" <?php optionKeep("country1", "Ireland"); ?>>Ireland</option>
        <option value="New Zealand" <?php optionKeep("country1", "New Zealand"); ?>>New Zealand</option>
        <option value="Pakistan" <?php optionKeep("country1", "Pakistan"); ?>>Pakistan</option>
        <option value="South Africa" <?php optionKeep("country1", "South Africa"); ?>>South Africa</option>
        <option value="Sri Lanka" <?php optionKeep("country1", "Sri Lanka"); ?>>Sri Lanka</option>
        <option value="West Indies" <?php optionKeep("country1", "West Indies"); ?>>West Indies</option>
        <option value="Zimbabwe" <?php optionKeep("country1", "Zimbabwe"); ?>>Zimbabwe</option>
    </select>
    <select id="country2" name="country2">
        <option disabled selected value>Choose...</option>
        <option value="Afghanistan" <?php optionKeep("country2", "Afghanistan"); ?>>Afghanistan</option>
        <option value="Australia" <?php optionKeep("country2", "Australia"); ?>>Australia</option>
        <option value="Bangladesh" <?php optionKeep("country2", "Bangladesh"); ?>>Bangladesh</option>
        <option value="England" <?php optionKeep("country2", "England"); ?>>England</option>
        <option value="India" <?php optionKeep("country2", "India"); ?>>India</option>
        <option value="Ireland" <?php optionKeep("country2", "Ireland"); ?>>Ireland</option>
        <option value="New Zealand" <?php optionKeep("country2", "New Zealand"); ?>>New Zealand</option>
        <option value="Pakistan" <?php optionKeep("country2", "Pakistan"); ?>>Pakistan</option>
        <option value="South Africa" <?php optionKeep("country2", "South Africa"); ?>>South Africa</option>
        <option value="Sri Lanka" <?php optionKeep("country2", "Sri Lanka"); ?>>Sri Lanka</option>
        <option value="West Indies" <?php optionKeep("country2", "West Indies"); ?>>West Indies</option>
        <option value="Zimbabwe" <?php optionKeep("country2", "Zimbabwe"); ?>>Zimbabwe</option>
    </select></label><br/><br/>
    <label>Marks: <br/>
    <input type="number" id="c1marks" name="c1marks" value="<?php formKeep("c1marks"); ?>">
    <input type="number" id="c2marks" name="c2marks" value="<?php formKeep("c2marks"); ?>">
    </label><br/><br/>
    <label>Wickets: <br/>
        <input type="number" id="c1wickets" name="c1wickets" value="<?php formKeep("c1wickets"); ?>">
        <input type="number" id="c2wickets" name="c2wickets" value="<?php formKeep("c2wickets"); ?>">
    </label><br/><br/>
    <label>Overs: <br/>
        <input type="text" id="c1overs" name="c1overs" value="<?php formKeep("c1overs"); ?>">
        <input type="text" id="c2overs" name="c2overs" value="<?php formKeep("c2overs"); ?>">
    </label><br/><br/>
    <input type="submit" name="submit" value="Submit">

</form>

<?php
if(isset($_REQUEST["submit"])) {
    $matchTitle = $_REQUEST["matchTitle"];
    $country1 = $_POST["country1"];
    $country2 = $_POST["country2"];
    $c1marks = $_REQUEST["c1marks"];
    $c2marks = $_REQUEST["c2marks"];
    $c1wickets = $_REQUEST["c1wickets"];
    $c2wickets = $_REQUEST["c2wickets"];
    $c1overs = $_REQUEST["c1overs"];
    $c2overs = $_REQUEST["c2overs"];

    $file = "data.txt";
    $txtFile = fopen($file, "w");
    $txt = "<h2>".$matchTitle."</h2>"."\n";
    fwrite($txtFile, $txt);
    $txt = "<table><tr><th>".$country1."</th><th>".$country2."</th></tr>"."\n";
    fwrite($txtFile, $txt);
    $txt = "<tr><td id='score'>".$c1marks."/".$c1wickets."</td><td id='score'>".$c2marks."/".$c2wickets."</td></tr>"."\n";
    fwrite($txtFile, $txt);
    $txt = "<tr><td id='over'>".$c1overs." ov"."</td><td id='over'>".$c2overs." ov"."</td></tr></table>"."\n";
    fwrite($txtFile, $txt);
    fclose($txtFile);

}
?>

</body>
</html>