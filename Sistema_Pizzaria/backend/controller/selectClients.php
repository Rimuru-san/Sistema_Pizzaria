<?php

// caminho indentificando como se eu estivesse dentro da pasta frontend ???????????????
include('../backend/bd_crud/crud.php');

$db = new Database();
$db->connect();

$table = 'client';
$lines = '*';
$join = null;
$where = null;
$order = 'id DESC';
$limit = null;

$db->select($table, $lines, $join, $where, $order, $limit);

$clients = $db->getResult();
