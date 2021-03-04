<?php

echo '<div class="offertes">';
echo '<form action="" method="post">';
// echo '<img class="test" src="data:image/jpg;base64,' . base64_encode($img) . '" />';
echo "<br /> naam auto:" . $naam;
echo "<br /> prijs auto:" . $prijs;
echo "<br /> merk auto:" . $merken;
echo "<br /> jaar van bouw:" . $jaar;
echo "<input type='hidden' name='id' value='" . $id . "' />";
echo "<br />";
echo "<br /> persoon:" . $voornaam;
echo "<br /> email persoon:" . $email;
echo '<input class="button" type="submit" value=" offertes delete ">';
echo '</form>';
echo '</div>';
echo "<hr />";
