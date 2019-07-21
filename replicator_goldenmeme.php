<?php


mkdir("iconsymbols");
mkdir("data");
mkdir("php");
mkdir("uploadimages");
mkdir("symbol");
mkdir("symbols");
mkdir("goldenratio");
mkdir("replicator");

copy("https://raw.githubusercontent.com/LafeLabs/geometron5/master/php/replicator.txt","symbol/replicator.php");

mkdir("symbol/data");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbol/data/currentjson.txt","symbol/data/currentjson.txt");

copy("https://raw.githubusercontent.com/LafeLabs/mapfactory5/master/php/replicator.txt","replicator.php");


copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/README.md","README.md");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/data/currentMap.txt","data/currentMap.txt");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/php/replicator_artbox.txt","php/replicator_goldenmeme.txt");


copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/artbox.svg","symbols/algebraphiderive.svg");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/template.svg","symbols/blackgoldentriangle.svg");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/layout.svg","symbols/bluegoldenspiral.svg");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/artbox.svg","symbols/goldenrectangle.svg");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/template.svg","symbols/goldenspiralblack.svg");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/layout.svg","symbols/pentagram.svg");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/artbox.svg","symbols/rainbowpentagram1.svg");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/template.svg","symbols/rainbowspiral.svg");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/layout.svg","symbols/rainbowstar.svg");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/template.svg","symbols/yellowgoldenspiral.svg");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/symbols/layout.svg","symbols/yellowgoldentriangle.svg");


copy("https://raw.githubusercontent.com/LafeLabs/thing/master/php/replicator.txt","goldenratio/replicator.php");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/goldenratio/README.md","goldenratio/README.md");


copy("https://raw.githubusercontent.com/LafeLabs/thing/master/php/replicator.txt","replicator/replicator.php");
copy("https://raw.githubusercontent.com/LafeLabs/goldenmeme/master/replicator/README.md","replicator/README.md");


?>
<a href = "replicator.php">CLICK TO REPLICATE GOLDENMEME MAP</a>
<style>
a{
    font-size:3em;
}
</style>
