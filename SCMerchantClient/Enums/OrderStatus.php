<?php

namespace SpectroCoin\SCMerchantClient\Enums;

if (!defined('ABSPATH')) {
	die('Access denied.');
}

class OrderStatusEnum
{
	public static $New = 1;
	public static $Pending = 2;
	public static $Paid = 3;
	public static $Failed = 4;
	public static $Expired = 5;
}