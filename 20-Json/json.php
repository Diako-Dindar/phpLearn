<?php

function jsonToObject($jsonFile)
{
        $config = file_get_contents($jsonFile);
        $getJson = json_decode($config);
        $getJson->name.PHP_EOL;
        $getJson->freinds[0];
        $getJson->name = "Diako Dindar";
        return $getJson;
}
function objectToJson($objectFile)
{
    $setJson = json_encode($objectFile);
    file_put_contents('new-json.json', $setJson);
}

$result = jsonToObject('json.json');
if (file_exists('new-json.json')) {
    echo "this file exists!";
} else {
    objectToJson($result);
}
