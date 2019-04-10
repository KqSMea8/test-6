<?php
namespace App\Http\Controllers\Admin; use App\Library\Response; use App\Order; use Illuminate\Http\Request; use App\Http\Controllers\Controller; class Dashboard extends Controller { function index(Request $sp2f63b0) { $spccba71 = array('today' => array('count' => 0, 'income' => 0, 'profit' => 0), 'yesterday' => array('count' => 0, 'income' => 0, 'profit' => 0)); $sp786dcc = Order::whereUserId(\Auth::Id())->whereDate('paid_at', \Carbon\Carbon::now()->toDateString())->where(function ($spd92986) { $spd92986->where('status', Order::STATUS_PAID)->orWhere('status', Order::STATUS_SUCCESS); })->selectRaw('COUNT(*) as `count`,SUM(`income`) as `income`,SUM(`income`-`cost`) as `profit`')->get()->toArray(); $sp45808f = Order::whereUserId(\Auth::Id())->whereDate('paid_at', \Carbon\Carbon::yesterday()->toDateString())->where(function ($spd92986) { $spd92986->where('status', Order::STATUS_PAID)->orWhere('status', Order::STATUS_SUCCESS); })->selectRaw('COUNT(*) as `count`,SUM(`income`) as `income`,SUM(`income`-`cost`) as `profit`')->get()->toArray(); if (isset($sp786dcc[0]) && isset($sp786dcc[0]['count'])) { $spccba71['today'] = array('count' => (int) $sp786dcc[0]['count'], 'income' => (int) $sp786dcc[0]['income'], 'profit' => (int) $sp786dcc[0]['profit']); } if (isset($sp45808f[0]) && isset($sp45808f[0]['count'])) { $spccba71['yesterday'] = array('count' => (int) $sp45808f[0]['count'], 'income' => (int) $sp45808f[0]['income'], 'profit' => (int) $sp45808f[0]['profit']); } $spccba71['need_ship_count'] = Order::whereUserId(\Auth::Id())->where('status', Order::STATUS_PAID)->count(); return Response::success($spccba71); } function clearCache() { if (function_exists('opcache_reset')) { opcache_reset(); } \Artisan::call('cache:clear'); return Response::success(); } }