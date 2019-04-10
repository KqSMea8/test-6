<?php
class AlipayMemberCardQueryRequest { private $bizCardNo; private $cardMerchantInfo; private $cardUserInfo; private $extInfo; private $requestFrom; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setBizCardNo($sp8a67f1) { $this->bizCardNo = $sp8a67f1; $this->apiParas['biz_card_no'] = $sp8a67f1; } public function getBizCardNo() { return $this->bizCardNo; } public function setCardMerchantInfo($sp12fa92) { $this->cardMerchantInfo = $sp12fa92; $this->apiParas['card_merchant_info'] = $sp12fa92; } public function getCardMerchantInfo() { return $this->cardMerchantInfo; } public function setCardUserInfo($spd3485a) { $this->cardUserInfo = $spd3485a; $this->apiParas['card_user_info'] = $spd3485a; } public function getCardUserInfo() { return $this->cardUserInfo; } public function setExtInfo($sp94f9ce) { $this->extInfo = $sp94f9ce; $this->apiParas['ext_info'] = $sp94f9ce; } public function getExtInfo() { return $this->extInfo; } public function setRequestFrom($sp129227) { $this->requestFrom = $sp129227; $this->apiParas['request_from'] = $sp129227; } public function getRequestFrom() { return $this->requestFrom; } public function getApiMethodName() { return 'alipay.member.card.query'; } public function setNotifyUrl($spa494d1) { $this->notifyUrl = $spa494d1; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16dca6) { $this->returnUrl = $sp16dca6; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp1a9aed) { $this->terminalType = $sp1a9aed; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp60612e) { $this->terminalInfo = $sp60612e; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5fdd78) { $this->prodCode = $sp5fdd78; } public function setApiVersion($spba8ce5) { $this->apiVersion = $spba8ce5; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($spd4b745) { $this->needEncrypt = $spd4b745; } public function getNeedEncrypt() { return $this->needEncrypt; } }