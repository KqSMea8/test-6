<?php
class AlipayEbppBillPayRequest { private $alipayOrderNo; private $dispatchClusterTarget; private $extend; private $merchantOrderNo; private $orderType; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setAlipayOrderNo($sp3a627b) { $this->alipayOrderNo = $sp3a627b; $this->apiParas['alipay_order_no'] = $sp3a627b; } public function getAlipayOrderNo() { return $this->alipayOrderNo; } public function setDispatchClusterTarget($sp0753c9) { $this->dispatchClusterTarget = $sp0753c9; $this->apiParas['dispatch_cluster_target'] = $sp0753c9; } public function getDispatchClusterTarget() { return $this->dispatchClusterTarget; } public function setExtend($sp61bc39) { $this->extend = $sp61bc39; $this->apiParas['extend'] = $sp61bc39; } public function getExtend() { return $this->extend; } public function setMerchantOrderNo($sp6040c6) { $this->merchantOrderNo = $sp6040c6; $this->apiParas['merchant_order_no'] = $sp6040c6; } public function getMerchantOrderNo() { return $this->merchantOrderNo; } public function setOrderType($spc56ac8) { $this->orderType = $spc56ac8; $this->apiParas['order_type'] = $spc56ac8; } public function getOrderType() { return $this->orderType; } public function getApiMethodName() { return 'alipay.ebpp.bill.pay'; } public function setNotifyUrl($spa494d1) { $this->notifyUrl = $spa494d1; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16dca6) { $this->returnUrl = $sp16dca6; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp1a9aed) { $this->terminalType = $sp1a9aed; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp60612e) { $this->terminalInfo = $sp60612e; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5fdd78) { $this->prodCode = $sp5fdd78; } public function setApiVersion($spba8ce5) { $this->apiVersion = $spba8ce5; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($spd4b745) { $this->needEncrypt = $spd4b745; } public function getNeedEncrypt() { return $this->needEncrypt; } }