<?php
 $playlist1 = array(
    array("genre"=>"HipHop","auteur"=>"John Williams","title"=>"My Girl"),
    array("genre"=>"Jazz","auteur"=>"John Coltrane","title"=>"New York"),
    array("genre"=>"HipHop","auteur"=>"Shakira","title"=>"Obsession")
 );
 function printArray($item, $key){
    echo "<br>$key" . " : " . "<i> $item </i>";   
}
array_walk_recursive($playlist1, "printArray");

$playlist2 = array(
    array("genre"=>"Latin","auteur"=>"Caetano Veloso","title"=>"Cafe Atlantico")
); 

$playlistNew = array_merge($playlist1,$playlist2);

function printTracks($item){
    $result = implode("|", $item);
    echo $result;
}

printTracks($playlistNew);
?>