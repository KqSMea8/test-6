<?php
class AlipayOfflineMarketShopPublicBindRequest { private $isAll; private $shopIds; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setIsAll($sp514a82) { $this->isAll = $sp514a82; $this->apiParas['is_all'] = $sp514a82; } public function getIsAll() { return $this->isAll; } public function setShopIds($sp3c8f79) { $this->shopIds = $sp3c8f79; $this->apiParas['shop_ids'] = $sp3c8f79; } public function getShopIds() { return $this->shopIds; } public function getApiMethodName() { return 'alipay.offline.market.shop.public.bind'; } public function setNotifyUrl($spa494d1) { $this->notifyUrl = $spa494d1; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16dca6) { $this->returnUrl = $sp16dca6; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp1a9aed) { $this->terminalType = $sp1a9aed; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp60612e) { $this->terminalInfo = $sp60612e; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5fdd78) { $this->prodCode = $sp5fdd78; } public function setApiVersion($spba8ce5) { $this->apiVersion = $spba8ce5; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($spd4b745) { $this->needEncrypt = $spd4b745; } public function getNeedEncrypt() { return $this->needEncrypt; } }