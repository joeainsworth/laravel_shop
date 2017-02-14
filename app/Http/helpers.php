<?php

function showCurrency($number)
{
	return "&pound;" . number_format($number, 2);
}