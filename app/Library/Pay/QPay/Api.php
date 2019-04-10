<?php
namespace App\Library\Pay\QPay; use App\Library\Helper; use App\Library\Pay\ApiInterface; use Illuminate\Support\Facades\Log; require_once __DIR__ . '/qpay_mch_sp/qpayMchAPI.class.php'; class Api implements ApiInterface { private $url_notify = ''; public function __construct($spae6a5b) { $this->url_notify = SYS_URL_API . '/pay/notify/' . $spae6a5b; } function goPay($sp42f333, $sp79d97c, $spf49dcd, $spa1a573, $sp39c1e2) { if (!isset($sp42f333['mch_id']) || !isset($sp42f333['mch_key'])) { throw new \Exception('请设置 mch_id 和 mch_key'); } $sp5e6808 = array('out_trade_no' => $sp79d97c, 'body' => $spf49dcd, 'device_info' => 'qq_19060', 'fee_type' => 'CNY', 'notify_url' => $this->url_notify, 'spbill_create_ip' => Helper::getIP(), 'total_fee' => $sp39c1e2, 'trade_type' => 'NATIVE'); $spef663e = new \QpayMchAPI('https://qpay.qq.com/cgi-bin/pay/qpay_unified_order.cgi', null, 10); $sp2e6041 = $spef663e->req($sp5e6808, $sp42f333); $sp594fbb = \QpayMchUtil::xmlToArray($sp2e6041); if (!isset($sp594fbb['code_url'])) { Log::error('Pay.QPay.goPay, order_no:' . $sp79d97c . ', error:' . json_encode($sp594fbb)); if (isset($sp594fbb['err_code_des'])) { throw new \Exception($sp594fbb['err_code_des']); } if (isset($sp594fbb['return_msg'])) { throw new \Exception($sp594fbb['return_msg']); } throw new \Exception('获取支付数据失败'); } header('location: /qrcode/pay/' . $sp79d97c . '/qq?url=' . urlencode($sp594fbb['code_url'])); die; } function verify($sp42f333, $sp7b72fc) { $spf1c6fe = isset($sp42f333['isNotify']) && $sp42f333['isNotify']; $spef663e = new \QpayMchAPI('https://qpay.qq.com/cgi-bin/pay/qpay_order_query.cgi', null, 10); if ($spf1c6fe) { $sp5e6808 = $spef663e->notify_params(); if (!$spef663e->notify_verify($sp5e6808, $sp42f333)) { echo '<xml><return_code>FAIL</return_code></xml>'; return false; } call_user_func_array($sp7b72fc, array($sp5e6808['out_trade_no'], $sp5e6808['total_fee'], $sp5e6808['transaction_id'])); echo '<xml><return_code>SUCCESS</return_code></xml>'; return true; } else { $sp79d97c = @$sp42f333['out_trade_no']; $sp5e6808 = array('out_trade_no' => $sp79d97c); $sp2e6041 = $spef663e->req($sp5e6808, $sp42f333); $sp594fbb = \QpayMchUtil::xmlToArray($sp2e6041); if (array_key_exists('trade_state', $sp594fbb) && $sp594fbb['trade_state'] == 'SUCCESS') { call_user_func_array($sp7b72fc, array($sp594fbb['out_trade_no'], $sp594fbb['total_fee'], $sp594fbb['transaction_id'])); return true; } else { return false; } } } }