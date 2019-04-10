<?php
class AlipayZdatafrontCommonQueryRequest { private $cacheInterval; private $queryConditions; private $serviceName; private $visitBiz; private $visitBizLine; private $visitDomain; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setCacheInterval($spca660a) { $this->cacheInterval = $spca660a; $this->apiParas['cache_interval'] = $spca660a; } public function getCacheInterval() { return $this->cacheInterval; } public function setQueryConditions($sp574457) { $this->queryConditions = $sp574457; $this->apiParas['query_conditions'] = $sp574457; } public function getQueryConditions() { return $this->queryConditions; } public function setServiceName($sp7097df) { $this->serviceName = $sp7097df; $this->apiParas['service_name'] = $sp7097df; } public function getServiceName() { return $this->serviceName; } public function setVisitBiz($spb85b34) { $this->visitBiz = $spb85b34; $this->apiParas['visit_biz'] = $spb85b34; } public function getVisitBiz() { return $this->visitBiz; } public function setVisitBizLine($spb6709c) { $this->visitBizLine = $spb6709c; $this->apiParas['visit_biz_line'] = $spb6709c; } public function getVisitBizLine() { return $this->visitBizLine; } public function setVisitDomain($spe74c27) { $this->visitDomain = $spe74c27; $this->apiParas['visit_domain'] = $spe74c27; } public function getVisitDomain() { return $this->visitDomain; } public function getApiMethodName() { return 'alipay.zdatafront.common.query'; } public function setNotifyUrl($spa494d1) { $this->notifyUrl = $spa494d1; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16dca6) { $this->returnUrl = $sp16dca6; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp1a9aed) { $this->terminalType = $sp1a9aed; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp60612e) { $this->terminalInfo = $sp60612e; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5fdd78) { $this->prodCode = $sp5fdd78; } public function setApiVersion($spba8ce5) { $this->apiVersion = $spba8ce5; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($spd4b745) { $this->needEncrypt = $spd4b745; } public function getNeedEncrypt() { return $this->needEncrypt; } }