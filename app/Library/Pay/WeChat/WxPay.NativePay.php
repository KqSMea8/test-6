<?php
require_once __DIR__ . '/lib/WxPay.Api.php'; class NativePay { public function GetPrePayUrl($sp0881ad) { $sp931228 = new WxPayBizPayUrl(); $sp931228->SetProduct_id($sp0881ad); $sp8125c7 = WxpayApi::bizpayurl($sp931228); $spaf19c1 = 'weixin://wxpay/bizpayurl?' . $this->ToUrlParams($sp8125c7); return $spaf19c1; } private function ToUrlParams($sp7c3041) { $sp167a8e = ''; foreach ($sp7c3041 as $sp467973 => $sp06d9c9) { $sp167a8e .= $sp467973 . '=' . $sp06d9c9 . '&'; } $sp167a8e = trim($sp167a8e, '&'); return $sp167a8e; } public function unifiedOrder($spf7fa80) { return WxPayApi::unifiedOrder($spf7fa80); } }