<?php
namespace App\Http\Controllers\Merchant; use App\Library\Helper; use App\Library\Response; use App\System; use Illuminate\Http\Request; use App\Http\Controllers\Controller; class Category extends Controller { function get(Request $sp2f63b0) { $sp5ea5e7 = $sp2f63b0->post('current_page', 1); $sp67decc = $sp2f63b0->post('per_page', 20); $spd92986 = $this->authQuery($sp2f63b0, \App\Category::class); $sp11a77c = $sp2f63b0->post('search', false); $sp971b24 = $sp2f63b0->post('val', false); if ($sp11a77c && $sp971b24) { if ($sp11a77c == 'simple') { return Response::success($spd92986->get(array('id', 'name'))); } elseif ($sp11a77c == 'id') { $spd92986->where('id', $sp971b24); } else { $spd92986->where($sp11a77c, 'like', '%' . $sp971b24 . '%'); } } $sp68b3e7 = $sp2f63b0->post('enabled'); if (strlen($sp68b3e7)) { $spd92986->whereIn('enabled', explode(',', $sp68b3e7)); } $sp176180 = $spd92986->withCount('products')->orderBy('sort')->paginate($sp67decc, array('*'), 'page', $sp5ea5e7); foreach ($sp176180->items() as $sp4366e7) { $sp4366e7->setAppends(array('url')); } return Response::success($sp176180); } function sort(Request $sp2f63b0) { $spae6a5b = (int) $sp2f63b0->post('id', -1); if (!$spae6a5b) { return Response::forbidden(); } $sp4366e7 = $this->authQuery($sp2f63b0, \App\Category::class)->findOrFail($spae6a5b); $sp4366e7->sort = (int) $sp2f63b0->post('sort', 1000); $sp4366e7->save(); return Response::success(); } function edit(Request $sp2f63b0) { $spae6a5b = (int) $sp2f63b0->post('id'); $spdbb9e7 = $sp2f63b0->post('name'); $sp68b3e7 = (int) $sp2f63b0->post('enabled'); $spfb09a9 = $sp2f63b0->post('sort'); $spfb09a9 = $spfb09a9 === NULL ? 1000 : (int) $spfb09a9; if (System::_getInt('filter_words_open') === 1) { $sp62a480 = explode('|', System::_get('filter_words')); if (($sp7210a9 = Helper::filterWords($spdbb9e7, $sp62a480)) !== false) { return Response::fail('提交失败! 分类名称包含敏感词: ' . $sp7210a9); } } if ($spfb09a9 < 0 || $spfb09a9 > 1000000) { return Response::fail('排序需要在0-1000000之间'); } $sp4f77a3 = $sp2f63b0->post('password'); $spd10715 = $sp2f63b0->post('password_open') === 'true'; $sp4366e7 = $this->authQuery($sp2f63b0, \App\Category::class)->find($spae6a5b); if (!$sp4366e7) { $sp4366e7 = new \App\Category(); $sp4366e7->user_id = $this->getUserIdOrFail($sp2f63b0); } $sp4366e7->name = $spdbb9e7; $sp4366e7->sort = $spfb09a9; $sp4366e7->password = $sp4f77a3; $sp4366e7->password_open = $spd10715; $sp4366e7->enabled = $sp68b3e7; $sp4366e7->saveOrFail(); return Response::success(); } function enable(Request $sp2f63b0) { $sp125d2b = $sp2f63b0->post('ids', ''); if (strlen($sp125d2b) < 1) { return Response::forbidden(); } $sp68b3e7 = (int) $sp2f63b0->post('enabled'); $this->authQuery($sp2f63b0, \App\Category::class)->whereIn('id', explode(',', $sp125d2b))->update(array('enabled' => $sp68b3e7)); return Response::success(); } function delete(Request $sp2f63b0) { $sp125d2b = $sp2f63b0->post('ids', ''); if (strlen($sp125d2b) < 1) { return Response::forbidden(); } $this->authQuery($sp2f63b0, \App\Category::class)->whereIn('id', explode(',', $sp125d2b))->delete(); return Response::success(); } }