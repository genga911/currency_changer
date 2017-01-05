<?php
/**
 * Created by PhpStorm.
 * User: jamesd
 * Date: 03.01.17
 * Time: 12:51
 */

require_once './classes/calculator.class';

$changer = new Calculator($_GET["from"], $_GET["to"], $_GET["cnt"]);

echo $changer->convertCurrencies();