<?php
class AlipaySecurityRiskDetectRequest { private $buyerAccountNo; private $buyerBindBankcard; private $buyerBindBankcardType; private $buyerBindMobile; private $buyerGrade; private $buyerIdentityNo; private $buyerIdentityType; private $buyerRealName; private $buyerRegDate; private $buyerRegEmail; private $buyerRegMobile; private $buyerSceneBankcard; private $buyerSceneBankcardType; private $buyerSceneEmail; private $buyerSceneMobile; private $currency; private $envClientBaseBand; private $envClientBaseStation; private $envClientCoordinates; private $envClientImei; private $envClientImsi; private $envClientIosUdid; private $envClientIp; private $envClientMac; private $envClientScreen; private $envClientUuid; private $itemQuantity; private $itemUnitPrice; private $jsTokenId; private $orderAmount; private $orderCategory; private $orderCredateTime; private $orderItemCity; private $orderItemName; private $orderNo; private $partnerId; private $receiverAddress; private $receiverCity; private $receiverDistrict; private $receiverEmail; private $receiverMobile; private $receiverName; private $receiverState; private $receiverZip; private $sceneCode; private $sellerAccountNo; private $sellerBindBankcard; private $sellerBindBankcardType; private $sellerBindMobile; private $sellerIdentityNo; private $sellerIdentityType; private $sellerRealName; private $sellerRegDate; private $sellerRegEmail; private $sellerRegMoile; private $transportType; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setBuyerAccountNo($spcfc28b) { $this->buyerAccountNo = $spcfc28b; $this->apiParas['buyer_account_no'] = $spcfc28b; } public function getBuyerAccountNo() { return $this->buyerAccountNo; } public function setBuyerBindBankcard($sp9f2890) { $this->buyerBindBankcard = $sp9f2890; $this->apiParas['buyer_bind_bankcard'] = $sp9f2890; } public function getBuyerBindBankcard() { return $this->buyerBindBankcard; } public function setBuyerBindBankcardType($sp02f028) { $this->buyerBindBankcardType = $sp02f028; $this->apiParas['buyer_bind_bankcard_type'] = $sp02f028; } public function getBuyerBindBankcardType() { return $this->buyerBindBankcardType; } public function setBuyerBindMobile($sp260d36) { $this->buyerBindMobile = $sp260d36; $this->apiParas['buyer_bind_mobile'] = $sp260d36; } public function getBuyerBindMobile() { return $this->buyerBindMobile; } public function setBuyerGrade($sp8e8718) { $this->buyerGrade = $sp8e8718; $this->apiParas['buyer_grade'] = $sp8e8718; } public function getBuyerGrade() { return $this->buyerGrade; } public function setBuyerIdentityNo($spdc8bc8) { $this->buyerIdentityNo = $spdc8bc8; $this->apiParas['buyer_identity_no'] = $spdc8bc8; } public function getBuyerIdentityNo() { return $this->buyerIdentityNo; } public function setBuyerIdentityType($spb80fbd) { $this->buyerIdentityType = $spb80fbd; $this->apiParas['buyer_identity_type'] = $spb80fbd; } public function getBuyerIdentityType() { return $this->buyerIdentityType; } public function setBuyerRealName($sp4c93cd) { $this->buyerRealName = $sp4c93cd; $this->apiParas['buyer_real_name'] = $sp4c93cd; } public function getBuyerRealName() { return $this->buyerRealName; } public function setBuyerRegDate($sp0c0ec6) { $this->buyerRegDate = $sp0c0ec6; $this->apiParas['buyer_reg_date'] = $sp0c0ec6; } public function getBuyerRegDate() { return $this->buyerRegDate; } public function setBuyerRegEmail($sp952d4a) { $this->buyerRegEmail = $sp952d4a; $this->apiParas['buyer_reg_email'] = $sp952d4a; } public function getBuyerRegEmail() { return $this->buyerRegEmail; } public function setBuyerRegMobile($sp58477e) { $this->buyerRegMobile = $sp58477e; $this->apiParas['buyer_reg_mobile'] = $sp58477e; } public function getBuyerRegMobile() { return $this->buyerRegMobile; } public function setBuyerSceneBankcard($sp2936d2) { $this->buyerSceneBankcard = $sp2936d2; $this->apiParas['buyer_scene_bankcard'] = $sp2936d2; } public function getBuyerSceneBankcard() { return $this->buyerSceneBankcard; } public function setBuyerSceneBankcardType($sp29ac7e) { $this->buyerSceneBankcardType = $sp29ac7e; $this->apiParas['buyer_scene_bankcard_type'] = $sp29ac7e; } public function getBuyerSceneBankcardType() { return $this->buyerSceneBankcardType; } public function setBuyerSceneEmail($spb4e0d5) { $this->buyerSceneEmail = $spb4e0d5; $this->apiParas['buyer_scene_email'] = $spb4e0d5; } public function getBuyerSceneEmail() { return $this->buyerSceneEmail; } public function setBuyerSceneMobile($specade5) { $this->buyerSceneMobile = $specade5; $this->apiParas['buyer_scene_mobile'] = $specade5; } public function getBuyerSceneMobile() { return $this->buyerSceneMobile; } public function setCurrency($spe74dfd) { $this->currency = $spe74dfd; $this->apiParas['currency'] = $spe74dfd; } public function getCurrency() { return $this->currency; } public function setEnvClientBaseBand($sp51d0ac) { $this->envClientBaseBand = $sp51d0ac; $this->apiParas['env_client_base_band'] = $sp51d0ac; } public function getEnvClientBaseBand() { return $this->envClientBaseBand; } public function setEnvClientBaseStation($sp5003e3) { $this->envClientBaseStation = $sp5003e3; $this->apiParas['env_client_base_station'] = $sp5003e3; } public function getEnvClientBaseStation() { return $this->envClientBaseStation; } public function setEnvClientCoordinates($spa808e6) { $this->envClientCoordinates = $spa808e6; $this->apiParas['env_client_coordinates'] = $spa808e6; } public function getEnvClientCoordinates() { return $this->envClientCoordinates; } public function setEnvClientImei($spd5febe) { $this->envClientImei = $spd5febe; $this->apiParas['env_client_imei'] = $spd5febe; } public function getEnvClientImei() { return $this->envClientImei; } public function setEnvClientImsi($sp7cd584) { $this->envClientImsi = $sp7cd584; $this->apiParas['env_client_imsi'] = $sp7cd584; } public function getEnvClientImsi() { return $this->envClientImsi; } public function setEnvClientIosUdid($sp61588a) { $this->envClientIosUdid = $sp61588a; $this->apiParas['env_client_ios_udid'] = $sp61588a; } public function getEnvClientIosUdid() { return $this->envClientIosUdid; } public function setEnvClientIp($sp7cf0a4) { $this->envClientIp = $sp7cf0a4; $this->apiParas['env_client_ip'] = $sp7cf0a4; } public function getEnvClientIp() { return $this->envClientIp; } public function setEnvClientMac($sp2830a4) { $this->envClientMac = $sp2830a4; $this->apiParas['env_client_mac'] = $sp2830a4; } public function getEnvClientMac() { return $this->envClientMac; } public function setEnvClientScreen($spd2e05e) { $this->envClientScreen = $spd2e05e; $this->apiParas['env_client_screen'] = $spd2e05e; } public function getEnvClientScreen() { return $this->envClientScreen; } public function setEnvClientUuid($sp3b68ee) { $this->envClientUuid = $sp3b68ee; $this->apiParas['env_client_uuid'] = $sp3b68ee; } public function getEnvClientUuid() { return $this->envClientUuid; } public function setItemQuantity($spef569c) { $this->itemQuantity = $spef569c; $this->apiParas['item_quantity'] = $spef569c; } public function getItemQuantity() { return $this->itemQuantity; } public function setItemUnitPrice($spe480d2) { $this->itemUnitPrice = $spe480d2; $this->apiParas['item_unit_price'] = $spe480d2; } public function getItemUnitPrice() { return $this->itemUnitPrice; } public function setJsTokenId($sp8ed1ec) { $this->jsTokenId = $sp8ed1ec; $this->apiParas['js_token_id'] = $sp8ed1ec; } public function getJsTokenId() { return $this->jsTokenId; } public function setOrderAmount($spe3b741) { $this->orderAmount = $spe3b741; $this->apiParas['order_amount'] = $spe3b741; } public function getOrderAmount() { return $this->orderAmount; } public function setOrderCategory($sp347a9e) { $this->orderCategory = $sp347a9e; $this->apiParas['order_category'] = $sp347a9e; } public function getOrderCategory() { return $this->orderCategory; } public function setOrderCredateTime($spa05a6d) { $this->orderCredateTime = $spa05a6d; $this->apiParas['order_credate_time'] = $spa05a6d; } public function getOrderCredateTime() { return $this->orderCredateTime; } public function setOrderItemCity($sp648bfa) { $this->orderItemCity = $sp648bfa; $this->apiParas['order_item_city'] = $sp648bfa; } public function getOrderItemCity() { return $this->orderItemCity; } public function setOrderItemName($spa7d93a) { $this->orderItemName = $spa7d93a; $this->apiParas['order_item_name'] = $spa7d93a; } public function getOrderItemName() { return $this->orderItemName; } public function setOrderNo($spf32927) { $this->orderNo = $spf32927; $this->apiParas['order_no'] = $spf32927; } public function getOrderNo() { return $this->orderNo; } public function setPartnerId($spfa9051) { $this->partnerId = $spfa9051; $this->apiParas['partner_id'] = $spfa9051; } public function getPartnerId() { return $this->partnerId; } public function setReceiverAddress($sp8e40dd) { $this->receiverAddress = $sp8e40dd; $this->apiParas['receiver_address'] = $sp8e40dd; } public function getReceiverAddress() { return $this->receiverAddress; } public function setReceiverCity($sp4421dc) { $this->receiverCity = $sp4421dc; $this->apiParas['receiver_city'] = $sp4421dc; } public function getReceiverCity() { return $this->receiverCity; } public function setReceiverDistrict($sp654f81) { $this->receiverDistrict = $sp654f81; $this->apiParas['receiver_district'] = $sp654f81; } public function getReceiverDistrict() { return $this->receiverDistrict; } public function setReceiverEmail($spca3d2a) { $this->receiverEmail = $spca3d2a; $this->apiParas['receiver_email'] = $spca3d2a; } public function getReceiverEmail() { return $this->receiverEmail; } public function setReceiverMobile($sp88567b) { $this->receiverMobile = $sp88567b; $this->apiParas['receiver_mobile'] = $sp88567b; } public function getReceiverMobile() { return $this->receiverMobile; } public function setReceiverName($sp0e2a38) { $this->receiverName = $sp0e2a38; $this->apiParas['receiver_name'] = $sp0e2a38; } public function getReceiverName() { return $this->receiverName; } public function setReceiverState($sp03511e) { $this->receiverState = $sp03511e; $this->apiParas['receiver_state'] = $sp03511e; } public function getReceiverState() { return $this->receiverState; } public function setReceiverZip($sp30ed77) { $this->receiverZip = $sp30ed77; $this->apiParas['receiver_zip'] = $sp30ed77; } public function getReceiverZip() { return $this->receiverZip; } public function setSceneCode($sp68852e) { $this->sceneCode = $sp68852e; $this->apiParas['scene_code'] = $sp68852e; } public function getSceneCode() { return $this->sceneCode; } public function setSellerAccountNo($spd6d869) { $this->sellerAccountNo = $spd6d869; $this->apiParas['seller_account_no'] = $spd6d869; } public function getSellerAccountNo() { return $this->sellerAccountNo; } public function setSellerBindBankcard($sp9270e5) { $this->sellerBindBankcard = $sp9270e5; $this->apiParas['seller_bind_bankcard'] = $sp9270e5; } public function getSellerBindBankcard() { return $this->sellerBindBankcard; } public function setSellerBindBankcardType($spf5f843) { $this->sellerBindBankcardType = $spf5f843; $this->apiParas['seller_bind_bankcard_type'] = $spf5f843; } public function getSellerBindBankcardType() { return $this->sellerBindBankcardType; } public function setSellerBindMobile($spd8d6df) { $this->sellerBindMobile = $spd8d6df; $this->apiParas['seller_bind_mobile'] = $spd8d6df; } public function getSellerBindMobile() { return $this->sellerBindMobile; } public function setSellerIdentityNo($spfed8b8) { $this->sellerIdentityNo = $spfed8b8; $this->apiParas['seller_identity_no'] = $spfed8b8; } public function getSellerIdentityNo() { return $this->sellerIdentityNo; } public function setSellerIdentityType($spc69101) { $this->sellerIdentityType = $spc69101; $this->apiParas['seller_identity_type'] = $spc69101; } public function getSellerIdentityType() { return $this->sellerIdentityType; } public function setSellerRealName($spf5cd92) { $this->sellerRealName = $spf5cd92; $this->apiParas['seller_real_name'] = $spf5cd92; } public function getSellerRealName() { return $this->sellerRealName; } public function setSellerRegDate($sp83cc38) { $this->sellerRegDate = $sp83cc38; $this->apiParas['seller_reg_date'] = $sp83cc38; } public function getSellerRegDate() { return $this->sellerRegDate; } public function setSellerRegEmail($sp264551) { $this->sellerRegEmail = $sp264551; $this->apiParas['seller_reg_email'] = $sp264551; } public function getSellerRegEmail() { return $this->sellerRegEmail; } public function setSellerRegMoile($spa5b009) { $this->sellerRegMoile = $spa5b009; $this->apiParas['seller_reg_moile'] = $spa5b009; } public function getSellerRegMoile() { return $this->sellerRegMoile; } public function setTransportType($sp4c9679) { $this->transportType = $sp4c9679; $this->apiParas['transport_type'] = $sp4c9679; } public function getTransportType() { return $this->transportType; } public function getApiMethodName() { return 'alipay.security.risk.detect'; } public function setNotifyUrl($spa494d1) { $this->notifyUrl = $spa494d1; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16dca6) { $this->returnUrl = $sp16dca6; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp1a9aed) { $this->terminalType = $sp1a9aed; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp60612e) { $this->terminalInfo = $sp60612e; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5fdd78) { $this->prodCode = $sp5fdd78; } public function setApiVersion($spba8ce5) { $this->apiVersion = $spba8ce5; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($spd4b745) { $this->needEncrypt = $spd4b745; } public function getNeedEncrypt() { return $this->needEncrypt; } }