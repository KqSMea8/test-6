<?php
class AlipayMobileShakeUserQueryRequest { private $dynamicId; private $dynamicIdType; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setDynamicId($sp30f55d) { $this->dynamicId = $sp30f55d; $this->apiParas['dynamic_id'] = $sp30f55d; } public function getDynamicId() { return $this->dynamicId; } public function setDynamicIdType($sp674087) { $this->dynamicIdType = $sp674087; $this->apiParas['dynamic_id_type'] = $sp674087; } public function getDynamicIdType() { return $this->dynamicIdType; } public function getApiMethodName() { return 'alipay.mobile.shake.user.query'; } public function setNotifyUrl($spa494d1) { $this->notifyUrl = $spa494d1; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16dca6) { $this->returnUrl = $sp16dca6; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp1a9aed) { $this->terminalType = $sp1a9aed; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp60612e) { $this->terminalInfo = $sp60612e; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5fdd78) { $this->prodCode = $sp5fdd78; } public function setApiVersion($spba8ce5) { $this->apiVersion = $spba8ce5; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($spd4b745) { $this->needEncrypt = $spd4b745; } public function getNeedEncrypt() { return $this->needEncrypt; } }