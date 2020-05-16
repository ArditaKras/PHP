<?php
$a[] = "ardita.kras@hotmail.com";
$a[] = "rajmondeshllaku@gmail.com";
$a[] = "rina_bajra@gmail.com";
$a[] = "albinazekaj@gmail.com";
$a[] = "edon.gashi@studentet.uni-pr.edu";
$a[] = "tinaavdyli@gmail.com";
$a[] = "artanb@outlook.com";
$a[] = "donjeta.k@gmail.com";
$a[] = "donjeta_berisha@studentet.uni-pr.edu";
$a[] = "nisisahiti@studentet.uni-pr.edu";
$a[] = "qendresabajrami@gmail.com";
$a[] = "lindakrasniqi@outlook.com";
$a[] = "teuterrusta@outlook.com";
$a[] = "amandagashi@gmail.com";
$a[] = "butrintshabani@outlook.com";
$a[] = "leartgllareva@outlook.com";
$a[] = "trimlushaj@gmail.com";
$a[] = "taulantzekaj@outlook.com";
$a[] = "lekedervishi@outlook.com";
$a[] = "zgjimvuqiqi@gmail.com";
$a[] = "jonibytyqi@outlook.com";
$a[] = "elisagashi@outlook.com";
$a[] = "jonirrustemi@gmail.com";


$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $email) {
        if (stristr($q, substr($email, 0, $len))) {
            if ($hint === "") {
                $hint = $email;
            } else {
                $hint .= ", $email";
            }
        }
    }
}
echo '<h5 style="color:white;">';
echo $hint === "" ? "no suggestion" : $hint;
echo "</h5>";
?>
