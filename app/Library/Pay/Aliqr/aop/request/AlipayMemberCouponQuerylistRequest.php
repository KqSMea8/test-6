<?php
class AlipayMemberCouponQuerylistRequest { private $merchantInfo; private $pageNo; private $pageSize; private $status; private $userInfo; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setMerchantInfo($spa59216) { $this->merchantInfo = $spa59216; $this->apiParas['merchant_info'] = $spa59216; } public function getMerchantInfo() { return $this->merchantInfo; } public function setPageNo($spdd06c9) { $this->pageNo = $spdd06c9; $this->apiParas['page_no'] = $spdd06c9; } public function getPageNo() { return $this->pageNo; } public function setPageSize($sp67decc) { $this->pageSize = $sp67decc; $this->apiParas['page_size'] = $sp67decc; } public function getPageSize() { return $this->pageSize; } public function setStatus($sp17830c) { $this->status = $sp17830c; $this->apiParas['status'] = $sp17830c; } public function getStatus() { return $this->status; } public function setUserInfo($sp3321a5) { $this->userInfo = $sp3321a5; $this->apiParas['user_info'] = $sp3321a5; } public function getUserInfo() { return $this->userInfo; } public function getApiMethodName() { return 'alipay.member.coupon.querylist'; } public function setNotifyUrl($spa494d1) { $this->notifyUrl = $spa494d1; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16dca6) { $this->returnUrl = $sp16dca6; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp1a9aed) { $this->terminalType = $sp1a9aed; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp60612e) { $this->terminalInfo = $sp60612e; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5fdd78) { $this->prodCode = $sp5fdd78; } public function setApiVersion($spba8ce5) { $this->apiVersion = $spba8ce5; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($spd4b745) { $this->needEncrypt = $spd4b745; } public function getNeedEncrypt() { return $this->needEncrypt; } }