<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_emicalculation
{
    public static function calculatevalue($lamount,$mi,$n)
    {
//$lamount = 260000; // Loan Amount
//$mi = 10.2; // Monthly interest %ge
//$n = 3; // No of Years
$ny = $n * 12; // No of months
$mic = ($mi/100) /12; // Monthly interest
$top = pow((1+$mic),$ny);
$bottom = $top - 1;
$sp = $top / $bottom;
$emi = (($lamount * $mic) * $sp);

        return $emi;
    }
}
