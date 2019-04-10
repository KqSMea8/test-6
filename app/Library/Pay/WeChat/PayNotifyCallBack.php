<?php
namespace App\Library\Pay\WeChat; require_once __DIR__ . '/lib/WxPay.Api.php'; require_once __DIR__ . '/lib/WxPay.Notify.php'; require_once 'wxLog.php'; class PayNotifyCallBack extends \WxPayNotify { private $successCallback = null; public function __construct($sp7b72fc) { $this->successCallback = $sp7b72fc; } public function QueryOrder($sp8b5f2d) { $spf7fa80 = new \WxPayOrderQuery(); $spf7fa80->SetTransaction_id($sp8b5f2d); $sp594fbb = \WxPayApi::orderQuery($spf7fa80); \WxLog::DEBUG('query:' . json_encode($sp594fbb)); if (array_key_exists('return_code', $sp594fbb) && array_key_exists('result_code', $sp594fbb) && $sp594fbb['return_code'] == 'SUCCESS' && $sp594fbb['result_code'] == 'SUCCESS') { return true; } return false; } public function NotifyProcess($sp631d11, &$sp32b59e) { \WxLog::DEBUG('call back:' . json_encode($sp631d11)); if (!array_key_exists('transaction_id', $sp631d11)) { $sp32b59e = '输入参数不正确'; \WxLog::DEBUG('begin process 输入参数不正确'); return false; } if (!$this->QueryOrder($sp631d11['transaction_id'])) { $sp32b59e = '订单查询失败'; \WxLog::DEBUG('begin process 订单查询失败'); return false; } if ($this->successCallback) { call_user_func_array($this->successCallback, array($sp631d11['out_trade_no'], $sp631d11['total_fee'], $sp631d11['transaction_id'])); } return true; } }