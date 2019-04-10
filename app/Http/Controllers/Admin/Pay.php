<?php
namespace App\Http\Controllers\Admin; use App\Library\Helper; use function foo\func; use Illuminate\Http\Request; use App\Http\Controllers\Controller; use App\Library\Response; class Pay extends Controller { function get(Request $sp2f63b0) { $spd92986 = \App\Pay::orderBy('sort'); $sp68b3e7 = $sp2f63b0->post('enabled'); if (strlen($sp68b3e7)) { $spd92986->whereIn('enabled', explode(',', $sp68b3e7)); } $sp11a77c = $sp2f63b0->post('search', false); if ($sp11a77c == 'simple') { return Response::success($spd92986->get(array('id', 'name'))); } $sp176180 = $spd92986->get(); return Response::success($sp176180); } function stat(Request $sp2f63b0) { $spbaca1e = (int) $sp2f63b0->input('day', 7); $sp176180 = \App\Order::where(function ($spd92986) { $spd92986->where('status', \App\Order::STATUS_PAID)->orWhere('status', \App\Order::STATUS_SUCCESS); })->where('paid_at', '>=', Helper::getMysqlDate(-$spbaca1e + 1))->with(array('pay' => function ($spd92986) { $spd92986->select(array('id', 'name')); }))->groupBy('pay_id')->selectRaw('`pay_id`,COUNT(*) as "count",SUM(`paid`) as "sum"')->get()->toArray(); $sp7210a9 = array(); foreach ($sp176180 as $sp795ea1) { if (isset($sp795ea1['pay']) && isset($sp795ea1['pay']['name'])) { $sp086150 = $sp795ea1['pay']['name']; } else { $sp086150 = '未知方式#' . $sp795ea1['pay_id']; } $sp7210a9[$sp086150] = array((int) $sp795ea1['count'], (int) $sp795ea1['sum']); } return Response::success($sp7210a9); } function edit(Request $sp2f63b0) { $this->validate($sp2f63b0, array('id' => 'required|integer', 'name' => 'required|string', 'img' => 'required|string', 'driver' => 'required|string', 'way' => 'required|string', 'config' => 'required|string')); $spae6a5b = (int) $sp2f63b0->post('id'); $spdbb9e7 = $sp2f63b0->post('name'); $sp02df67 = $sp2f63b0->post('img'); $sp67119b = $sp2f63b0->post('comment'); $spa2a84a = $sp2f63b0->post('driver'); $sp834dfc = $sp2f63b0->post('way'); $sp42f333 = $sp2f63b0->post('config'); $sp68b3e7 = (int) $sp2f63b0->post('enabled'); $sp468ee2 = \App\Pay::find($spae6a5b); if (!$sp468ee2) { $sp468ee2 = new \App\Pay(); } $sp468ee2->name = $spdbb9e7; $sp468ee2->img = $sp02df67; $sp468ee2->comment = $sp67119b; $sp468ee2->driver = $spa2a84a; $sp468ee2->way = $sp834dfc; $sp468ee2->config = $sp42f333; $sp468ee2->enabled = $sp68b3e7; $sp468ee2->fee_system = $sp2f63b0->post('fee_system'); $sp468ee2->saveOrFail(); return Response::success(); } function comment(Request $sp2f63b0) { $spae6a5b = (int) $sp2f63b0->post('id', -1); if (!$spae6a5b) { return Response::forbidden(); } $sp468ee2 = \App\Pay::findOrFail($spae6a5b); $sp468ee2->comment = $sp2f63b0->post('comment'); $sp468ee2->save(); return Response::success(); } function sort(Request $sp2f63b0) { $spae6a5b = (int) $sp2f63b0->post('id', -1); if (!$spae6a5b) { return Response::forbidden(); } $sp468ee2 = \App\Pay::findOrFail($spae6a5b); $sp468ee2->sort = (int) $sp2f63b0->post('sort', 1000); $sp468ee2->save(); return Response::success(); } function fee_system(Request $sp2f63b0) { $spae6a5b = (int) $sp2f63b0->post('id'); if ($spae6a5b < 1) { return Response::forbidden(); } $sp468ee2 = \App\Pay::findOrFail($spae6a5b); $sp468ee2->fee_system = $sp2f63b0->post('fee_system'); $sp468ee2->saveOrFail(); return Response::success(); } function enable(Request $sp2f63b0) { $sp125d2b = $sp2f63b0->post('ids'); if (strlen($sp125d2b) < 1) { return Response::forbidden(); } $sp68b3e7 = (int) $sp2f63b0->post('enabled'); \App\Pay::whereIn('id', explode(',', $sp125d2b))->update(array('enabled' => $sp68b3e7)); return Response::success(); } function delete(Request $sp2f63b0) { $spae6a5b = (int) $sp2f63b0->post('id'); if ($spae6a5b < 1) { return Response::forbidden(); } \App\Pay::whereId($spae6a5b)->delete(); return Response::success(); } }