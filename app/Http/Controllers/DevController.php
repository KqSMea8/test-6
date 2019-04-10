<?php
namespace App\Http\Controllers; use App\System; use Illuminate\Http\Request; use Illuminate\Support\Facades\Log; use Illuminate\Support\Facades\Mail; class DevController extends Controller { private function check_readable_r($spa6888c) { if (is_dir($spa6888c)) { if (is_readable($spa6888c)) { $sp18d164 = scandir($spa6888c); foreach ($sp18d164 as $sp176c11) { if ($sp176c11 != '.' && $sp176c11 != '..') { if (!self::check_readable_r($spa6888c . '/' . $sp176c11)) { return false; } else { continue; } } } echo $spa6888c . '   ...... <span style="color: green">R</span><br>'; return true; } else { echo $spa6888c . '   ...... <span style="color: red">R</span><br>'; return false; } } else { if (file_exists($spa6888c)) { return is_readable($spa6888c); } } echo $spa6888c . '   ...... 文件不存在<br>'; return false; } private function check_writable_r($spa6888c) { if (is_dir($spa6888c)) { if (is_writable($spa6888c)) { $sp18d164 = scandir($spa6888c); foreach ($sp18d164 as $sp176c11) { if ($sp176c11 != '.' && $sp176c11 != '..') { if (!self::check_writable_r($spa6888c . '/' . $sp176c11)) { return false; } else { continue; } } } echo $spa6888c . '   ...... <span style="color: green">W</span><br>'; return true; } else { echo $spa6888c . '   ...... <span style="color: red">W</span><br>'; return false; } } else { if (file_exists($spa6888c)) { return is_writable($spa6888c); } } echo $spa6888c . '   ...... 文件不存在<br>'; return false; } private function checkPathPermission($spd0fd48) { self::check_readable_r($spd0fd48); self::check_writable_r($spd0fd48); } public function install() { $spa25725 = array(); @ob_start(); self::checkPathPermission(base_path('storage')); self::checkPathPermission(base_path('bootstrap/cache')); $spa25725['permission'] = @ob_get_clean(); return view('install', array('var' => $spa25725)); } public function test(Request $sp2f63b0) { } public function test_email() { if (!config('app.debug')) { die; } try { Mail::to('19060@qq.com')->Queue(new \App\Mail\AuthRegister()); return 'success'; } catch (\Exception $spa9e936) { return 'error-' . $spa9e936; } } public function test_alipay_fund_trans_config_dev() { if (!config('app.debug')) { die; } $sp42f333 = System::_get('alipay_fund_trans_config_dev'); $sp42f333 = json_decode($sp42f333, true); $sp42f333['gateway'] = 'https://openapi.alipaydev.com/gateway.do'; $sp1fe26e = date('YmdHis') . random_int(1000, 9999); var_dump($sp1fe26e); $sp7210a9 = (new \App\Library\AlipayFundTrans\Api())->trans($sp42f333, $sp1fe26e, 'fygtat8407@sandbox.com', '沙箱环境', '1', '转账备注'); if ($sp7210a9 === true) { echo '转账成功'; } else { echo '转账失败:' . $sp7210a9; } echo '<br>
'; $sp7210a9 = (new \App\Library\AlipayFundTrans\Api())->verify($sp42f333, $sp1fe26e); if ($sp7210a9 === true) { echo '验证成功'; } else { echo '验证失败:' . $sp7210a9; } } }