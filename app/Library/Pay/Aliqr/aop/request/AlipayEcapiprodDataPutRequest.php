<?php
class AlipayEcapiprodDataPutRequest { private $category; private $charSet; private $collectingTaskId; private $entityCode; private $entityName; private $entityType; private $isvCode; private $jsonData; private $orgCode; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setCategory($sp4366e7) { $this->category = $sp4366e7; $this->apiParas['category'] = $sp4366e7; } public function getCategory() { return $this->category; } public function setCharSet($spaeb9db) { $this->charSet = $spaeb9db; $this->apiParas['char_set'] = $spaeb9db; } public function getCharSet() { return $this->charSet; } public function setCollectingTaskId($sp40734f) { $this->collectingTaskId = $sp40734f; $this->apiParas['collecting_task_id'] = $sp40734f; } public function getCollectingTaskId() { return $this->collectingTaskId; } public function setEntityCode($sp05ad5b) { $this->entityCode = $sp05ad5b; $this->apiParas['entity_code'] = $sp05ad5b; } public function getEntityCode() { return $this->entityCode; } public function setEntityName($sp4e6d99) { $this->entityName = $sp4e6d99; $this->apiParas['entity_name'] = $sp4e6d99; } public function getEntityName() { return $this->entityName; } public function setEntityType($spfd0a2a) { $this->entityType = $spfd0a2a; $this->apiParas['entity_type'] = $spfd0a2a; } public function getEntityType() { return $this->entityType; } public function setIsvCode($spc95904) { $this->isvCode = $spc95904; $this->apiParas['isv_code'] = $spc95904; } public function getIsvCode() { return $this->isvCode; } public function setJsonData($sp445cce) { $this->jsonData = $sp445cce; $this->apiParas['json_data'] = $sp445cce; } public function getJsonData() { return $this->jsonData; } public function setOrgCode($sp3eeb1c) { $this->orgCode = $sp3eeb1c; $this->apiParas['org_code'] = $sp3eeb1c; } public function getOrgCode() { return $this->orgCode; } public function getApiMethodName() { return 'alipay.ecapiprod.data.put'; } public function setNotifyUrl($spa494d1) { $this->notifyUrl = $spa494d1; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16dca6) { $this->returnUrl = $sp16dca6; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp1a9aed) { $this->terminalType = $sp1a9aed; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp60612e) { $this->terminalInfo = $sp60612e; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5fdd78) { $this->prodCode = $sp5fdd78; } public function setApiVersion($spba8ce5) { $this->apiVersion = $spba8ce5; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($spd4b745) { $this->needEncrypt = $spd4b745; } public function getNeedEncrypt() { return $this->needEncrypt; } }