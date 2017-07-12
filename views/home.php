<?php

$db->insert("lunaticos", array("id" => 2, "nome" => "Felipe"));

$query = $db->select("lunaticos", array("id" => 2));

print_r($query);