<?php
namespace App\Exceptions; use App\Library\Response; use Exception; use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler; use Illuminate\Support\Facades\Log; class Handler extends ExceptionHandler { protected $dontReport = array(); protected $dontFlash = array('password', 'password_confirmation'); public function report(Exception $spe412c9) { parent::report($spe412c9); } public function render($sp2f63b0, Exception $spa9e936) { if ($spa9e936 instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) { return $sp2f63b0->expectsJson() ? response()->json(array('message' => '记录未找到'), 404) : response()->view('errors._', array('code' => 404, 'message' => '记录未找到'), 404); } elseif ($spa9e936 instanceof \Illuminate\Auth\AuthenticationException) { return $sp2f63b0->expectsJson() ? response()->json(array('message' => '您需要登录您的账户再进行此操作'), 401) : response()->view('errors._', array('code' => 401, 'message' => '您需要登录您的账户再进行此操作'), 401); } elseif ($spa9e936 instanceof \Illuminate\Auth\Access\AuthorizationException) { return $sp2f63b0->expectsJson() ? response()->json(array('message' => '未授权的操作'), 403) : response()->view('errors._', array('code' => 403, 'message' => '未授权的操作'), 403); } elseif ($spa9e936 instanceof \Illuminate\Validation\ValidationException) { return parent::render($sp2f63b0, $spa9e936); } elseif ($spa9e936 instanceof \Illuminate\Session\TokenMismatchException) { return $sp2f63b0->expectsJson() ? response()->json(array('message' => '请刷新页面后重试'), 403) : response()->view('errors._', array('code' => 403, 'message' => '请刷新页面后重试'), 403); } elseif ($spa9e936 instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) { return $sp2f63b0->expectsJson() ? response()->json(array('message' => '页面未找到'), 404) : response()->view('errors._', array('code' => 404, 'message' => '页面未找到'), 404); } elseif ($spa9e936 instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException) { return $sp2f63b0->expectsJson() ? response()->json(array('message' => '请求方法不允许'), 405) : response()->view('errors._', array('code' => 405, 'message' => '请求方法不允许'), 405); } elseif ($spa9e936 instanceof \Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException) { Log::error('Uncaught a ServiceUnavailableHttpException', array('Exception' => $spa9e936)); return $sp2f63b0->expectsJson() ? response()->json(array('message' => '当前服务不可用，请稍后重试'), 503) : response()->view('errors._', array('code' => 503, 'message' => '当前服务不可用，请稍后重试'), 503); } elseif ($spa9e936 instanceof \Symfony\Component\HttpKernel\Exception\HttpException) { $sp7541ad = $sp2f63b0->expectsJson(); switch ($sp7541ad) { case 429: return $sp2f63b0->expectsJson() ? response()->json(array('message' => '您的请求过于频繁，请稍后重试'), 429) : response()->view('errors._', array('code' => 429, 'message' => '您的请求过于频繁，请稍后重试'), 429); break; default: Log::error('Uncaught a UnknownHttpException', array('Exception' => $spa9e936)); return $sp2f63b0->expectsJson() ? response()->json(array('message' => '当前服务不可用，请稍后重试'), $sp7541ad) : response()->view('errors._', array('code' => $sp7541ad, 'message' => '当前服务不可用，请稍后重试'), $sp7541ad); } } Log::error('Uncaught Exception', array('Exception' => $spa9e936)); if (config('app.debug')) { return parent::render($sp2f63b0, $spa9e936); } else { return $sp2f63b0->expectsJson() ? response()->json(array('message' => '未知错误，请联系客服'), 500) : response()->view('errors._', array('code' => 500, 'message' => '未知错误，请联系客服'), 500); } } }