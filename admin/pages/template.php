<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>

<body>
    <?php
    //    $image = imagecreatefromstring($blob); 
    //    $image = imagecreatefromstring($blob); 
    //    $image = imagecreatefromstring($blob); 
    //    $image = imagecreatefromstring($blob); 
    //    $image = imagecreatefromstring($blob); 
    //header("Content-Type: image/jpeg");


    echo '<img class="test"  src="./upload/'.$id.'/'.$img.'" />';
    // echo '<img class="test" src="data:image/jpg;base64,' . base64_encode($img) . '" />';
    echo "<input type='hidden' name='$id' value='" . $id . "' />";
    echo "<input type='hidden' name='$naam' id='$naam' value='" . $naam . "' />";
    echo "<input type='hidden' name='$merken' id='$merken'value='" . $merken . "' />";
    echo "<input type='hidden' name='$jaar' id='$jaar' value='" . $jaar . "' />";
    echo "<input type='hidden' name='$prijs' id='$prijs' value='" . $prijs . "' />  ";
    echo "<br /> titel:" . $naam;
    echo "<br /> prijs:" . $prijs;
    echo "<hr />";
















//    $image = imagecreatefromstring($blob); 
// function urlsafe_b64encode($string) {
//     $data = base64_encode($string);
//     $data = str_replace(array('+','/','='),array('-','_',''),$data);
//     return $data;
// }
// $image = urlsafe_b64encode($img);
//    $menu = <<<HTML
//    <form action="./showroom.php" method="post">
//    <div class="contentItem">
//      <div class="row">
//      <div  class="menutitle" name="id">$merken</div>
//         <!-- <div class="price" name="prijs">$image</div> -->
//      </div>
//         <img src="data:image/jpg;base64,'.$image.'" />
//         <img class="auto_img" src="data:image/jpg;base64,'.base64_encode($image).'" />
//         <input class="button" type="submit" value="$merken">
//    </div>
//    </form>
// HTML;
//     echo $menu;
   
// $menu = <<<HTML
// <div class="contentItem">
//     <div class="row">
//         <div class="menutitle">$titel</div>
//         <div class="price">€$prijs</div>
//     </div>
//     <img src="$img">
//     <button >Kopen</button>
// </div>
// HTML;
// echo $menu;
