<?php
class AlipayMicropayOrderConfirmpayurlGetRequest { private $alipayOrderNo; private $amount; private $memo; private $receiveUserId; private $transferOutOrderNo; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setAlipayOrderNo($sp3a627b) { $this->alipayOrderNo = $sp3a627b; $this->apiParas['alipay_order_no'] = $sp3a627b; } public function getAlipayOrderNo() { return $this->alipayOrderNo; } public function setAmount($spda7912) { $this->amount = $spda7912; $this->apiParas['amount'] = $spda7912; } public function getAmount() { return $this->amount; } public function setMemo($sp6c0aff) { $this->memo = $sp6c0aff; $this->apiParas['memo'] = $sp6c0aff; } public function getMemo() { return $this->memo; } public function setReceiveUserId($sp18ca85) { $this->receiveUserId = $sp18ca85; $this->apiParas['receive_user_id'] = $sp18ca85; } public function getReceiveUserId() { return $this->receiveUserId; } public function setTransferOutOrderNo($spb630e5) { $this->transferOutOrderNo = $spb630e5; $this->apiParas['transfer_out_order_no'] = $spb630e5; } public function getTransferOutOrderNo() { return $this->transferOutOrderNo; } public function getApiMethodName() { return 'alipay.micropay.order.confirmpayurl.get'; } public function setNotifyUrl($spa494d1) { $this->notifyUrl = $spa494d1; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16dca6) { $this->returnUrl = $sp16dca6; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp1a9aed) { $this->terminalType = $sp1a9aed; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp60612e) { $this->terminalInfo = $sp60612e; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5fdd78) { $this->prodCode = $sp5fdd78; } public function setApiVersion($spba8ce5) { $this->apiVersion = $spba8ce5; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($spd4b745) { $this->needEncrypt = $spd4b745; } public function getNeedEncrypt() { return $this->needEncrypt; } }