<?php
// phpcs:ignoreFile
// jscpd:ignore-start



/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $fcwhost = "mysql.antoyau.com"; //216.26.131.80 
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $fcwusername = "antoyau"; 
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $fcwpassword2 = "gigspage1"; 
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $fcwdb_name = "antoyau";
$fcwdb_type = "mysql";



/* @phpstan-ignore-line */ /** @psalm-suppress UnresolvableInclude, UndefinedGlobalVariable */ include($path."db_".$fcwdb_type.".php");
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $stream = new db;
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedClass */ $stream->connect();

// jscpd:ignore-end
