<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付宝即时到账交易接口接口</title>
</head>
<?php  require_once 'alipay.config.php'; require_once 'lib/alipay_submit.class.php'; $sp79d97c = $_POST['WIDout_trade_no']; $spf49dcd = $_POST['WIDsubject']; $sp1ae8d8 = $_POST['WIDtotal_fee']; $spa1a573 = $_POST['WIDbody']; $spfcb594 = array('service' => $spcef7af['service'], 'partner' => $spcef7af['partner'], 'seller_id' => $spcef7af['seller_id'], 'payment_type' => $spcef7af['payment_type'], 'notify_url' => $spcef7af['notify_url'], 'return_url' => $spcef7af['return_url'], 'anti_phishing_key' => $spcef7af['anti_phishing_key'], 'exter_invoke_ip' => $spcef7af['exter_invoke_ip'], 'out_trade_no' => $sp79d97c, 'subject' => $spf49dcd, 'total_fee' => $sp1ae8d8, 'body' => $spa1a573, '_input_charset' => trim(strtolower($spcef7af['input_charset']))); $spfeadd4 = new AlipaySubmit($spcef7af); $sp8d2b8d = $spfeadd4->buildRequestForm($spfcb594, 'get', '确认'); echo $sp8d2b8d; ?>
</body>
</html><?php 