<?php // phpcs:ignoreFile ?>
<?php 
// jscpd:ignore-start

include("connect.php"); 
include("functions.php");

/* @phpstan-ignore-line */ /** @psalm-suppress RiskyTruthyFalsyComparison, UndefinedGlobalVariable */ /** @psalm-suppress RiskyTruthyFalsyComparison, UndefinedGlobalVariable */ if($_POST[$setcolor]){
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, InvalidScalarArgument */ /** @psalm-suppress UndefinedGlobalVariable, InvalidScalarArgument */ setcookie("antoyau", "$setcolor", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}
/* @phpstan-ignore-line */ /** @psalm-suppress RiskyTruthyFalsyComparison, UndefinedGlobalVariable */ /** @psalm-suppress RiskyTruthyFalsyComparison, UndefinedGlobalVariable */ if($_POST[$setsize]){
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, InvalidScalarArgument */ /** @psalm-suppress UndefinedGlobalVariable, InvalidScalarArgument */ setcookie("antoyau1", "$setsize", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}

if (!$_COOKIE['antoyau']){
/* @phpstan-ignore-line */ /** @psalm-suppress RiskyTruthyFalsyComparison, UndefinedGlobalVariable */ /** @psalm-suppress RiskyTruthyFalsyComparison, UndefinedGlobalVariable */ if(!$_POST[$color]){
$color = 1;
}
/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, InvalidScalarArgument */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, InvalidScalarArgument */ setcookie("antoyau", "$color", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}
else {

/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $cssgrab = $_COOKIE['antoyau'];

}

if (!$_COOKIE['antoyau1']){
/* @phpstan-ignore-line */ /** @psalm-suppress RiskyTruthyFalsyComparison, UndefinedGlobalVariable */ /** @psalm-suppress RiskyTruthyFalsyComparison, UndefinedGlobalVariable */ if(!$_POST[$size]){
$size = "11px";
}
/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, InvalidScalarArgument */ /** @psalm-suppress PossiblyUndefinedGlobalVariable, InvalidScalarArgument */ setcookie("antoyau1", "$size", time()+7*24*3600, "/", ".antoyau.com", 0);
header("location: http://www.antoyau.com/index.php");
exit;
}
else {

/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $sizegrab = $_COOKIE['antoyau1'];

}

/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $mintage = $cssgrab;
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $mintage1 = $sizegrab;

/* @phpstan-ignore-line */ top_header();

?>
<?php // jscpd:ignore-end ?>
