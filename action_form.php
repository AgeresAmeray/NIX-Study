<?php
$string = $_POST['string'];
if (empty($string)) {
    echo "Please, enter text";
}

$strRev = '';
for ($i = mb_strlen($string, "UTF-8"); $i >= 0; $i--) {
    $strRev .= mb_substr($string, $i, 1, "UTF-8");
}

echo $strRev . '<br>' . '<input type="button" onclick="history.back();" value="Back">';
