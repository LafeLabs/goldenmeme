<a href = "index.html">back to main</a>

<table id = "newtable">
    <tr>
        <td>new page name:</td>
        <td><input/></td>
    </tr>
    <tr>
        <td>new map factory name:</td>
        <td><input/></td>
    </tr>
</table>

<ul id = "mainlist">
<?php

// list directories as links


$files = scandir(getcwd());

foreach($files as $value){
    if($value{0} != "." && is_dir($value) && $value != "php" && $value != "jscode" && $value != "data" && $value != "html" && $value != "symbols" && $value != "symbol" && $value != "fonts" && $value != "icons" && $value != "iconsymbols" && $value != "uploadimages"){
                
        echo "\n<li><a href = \"".$value."/\">".$value."/</a></li>\n";
        
    }
}


?>
</ul>
<script>
inputs = document.getElementById("newtable").getElementsByTagName("input");    

inputs[0].onchange = function() {
    var newa = document.createElement("A");
    newa.innerHTML = "mkpage.php?dir=" + this.value;
    newa.href = "mkpage.php?dir=" + this.value;
    this.parentNode.appendChild(newa);
}
    
inputs[1].onchange = function() {
    var newa = document.createElement("A");
    newa.innerHTML = "mkdir.php?dir=" + this.value;
    newa.href = "mkdir.php?dir=" + this.value;
    this.parentNode.appendChild(newa);
}

    

</script>
<style>
    body{
        font-size:2em;
    }
    table{
        font-family:courier;
    }
    .button{
        cursor:pointer;
    }
    .button:hover{
        background-color:green;
    }
    .button:active{
        background-color:yellow;
    }
</style>