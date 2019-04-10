<?php
namespace App\Http\Controllers\Merchant; use App\Library\Response; use App\System; use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Illuminate\Support\Facades\Auth; use Illuminate\Support\Facades\Storage; class Card extends Controller { function get(Request $sp2f63b0, $spcb9083 = false, $sp39b9f0 = false, $spf85ed0 = false) { $spd92986 = $this->authQuery($sp2f63b0, \App\Card::class)->with(array('product' => function ($spd92986) { $spd92986->select(array('id', 'name')); })); $sp11a77c = $sp2f63b0->post('search', false); $sp971b24 = $sp2f63b0->post('val', false); if ($sp11a77c && $sp971b24) { if ($sp11a77c == 'id') { $spd92986->where('id', $sp971b24); } else { $spd92986->where($sp11a77c, 'like', '%' . $sp971b24 . '%'); } } $sp97f886 = (int) $sp2f63b0->post('category_id'); $sp18574f = $sp2f63b0->post('product_id', -1); if ($sp97f886 > 0) { if ($sp18574f > 0) { $spd92986->where('product_id', $sp18574f); } else { $spd92986->whereHas('product', function ($spd92986) use($sp97f886) { $spd92986->where('category_id', $sp97f886); }); } } $sp17830c = $sp2f63b0->post('status'); if (strlen($sp17830c)) { $spd92986->whereIn('status', explode(',', $sp17830c)); } $spb6808b = (int) $sp2f63b0->post('onlyCanSell'); if ($spb6808b) { $spd92986->whereRaw('`count_all`>`count_sold`'); } $sp9265a0 = $sp2f63b0->post('type'); if (strlen($sp9265a0)) { $spd92986->whereIn('type', explode(',', $sp9265a0)); } $sp8fa54f = $sp2f63b0->post('trashed') === 'true'; if ($sp8fa54f) { $spd92986->onlyTrashed(); } $spd92986->orderByRaw('product_id,type,status'); if ($spcb9083 === true) { $sp91d8bf = ''; $spd92986->chunk(100, function ($spddebb7) use(&$sp91d8bf) { foreach ($spddebb7 as $sp32a040) { $sp91d8bf .= $sp32a040->card . '
'; } }); $sp73b80d = 'export_cards_' . $this->getUserIdOrFail($sp2f63b0) . '_' . date('YmdHis') . '.txt'; $spd0fd48 = 'card_export/' . $sp73b80d; $spa2a84a = System::_get('storage_driver'); try { if (!Storage::disk($spa2a84a)->put($spd0fd48, $sp91d8bf)) { return Response::fail('文件生成失败'); } } catch (\Exception $spa9e936) { \Log::error('Card.export Exception: ' . $spa9e936->getMessage()); if (config('app.debug')) { return Response::fail($spa9e936->getMessage()); } else { return Response::fail('生成文件失败, 内部错误, 请联系客服'); } } $sp043003 = \App\File::insertGetId(array('user_id' => $this->getUserIdOrFail($sp2f63b0), 'driver' => $spa2a84a, 'path' => $spd0fd48, 'url' => Storage::disk($spa2a84a)->url($spd0fd48))); if ($sp043003 <= 0) { return Response::fail('数据库繁忙，插入文件记录失败'); } return Response::success($sp043003); } else { if ($sp39b9f0 === true) { if ($sp8fa54f) { $spd92986->forceDelete(); } else { $spd92986->delete(); } return Response::success(); } else { if ($sp8fa54f && $spf85ed0 === true) { $spd92986->restore(); return Response::success(); } else { $sp5ea5e7 = $sp2f63b0->post('current_page', 1); $sp67decc = $sp2f63b0->post('per_page', 20); $sp176180 = $spd92986->paginate($sp67decc, array('*'), 'page', $sp5ea5e7); return Response::success($sp176180); } } } } function export(Request $sp2f63b0) { return self::get($sp2f63b0, true); } function export_download($sp043003) { $sp52e5cb = \App\File::findOrFail($sp043003); $sp47ffde = Auth::getUser(); if ($sp47ffde->id !== $sp52e5cb->user_id) { $sp91d8bf = 'Access Denied'; $sp5d043d = 'your_are_sb.txt'; } else { $spa2a84a = System::_get('storage_driver'); $sp91d8bf = Storage::disk($spa2a84a)->get($sp52e5cb->path); $sp5d043d = pathinfo($sp52e5cb->path, PATHINFO_BASENAME); Storage::disk($spa2a84a)->delete($sp52e5cb->path); try { $sp52e5cb->delete(); } catch (\Exception $spa9e936) { } } $sp71f60e = array('Content-type' => 'text/plain', 'Content-Disposition' => sprintf('attachment; filename="%s"', $sp5d043d), 'Content-Length' => strlen($sp91d8bf)); return response()->make($sp91d8bf, 200, $sp71f60e); } function trash(Request $sp2f63b0) { $sp125d2b = $sp2f63b0->post('ids', ''); if (strlen($sp125d2b) < 1) { return Response::forbidden(); } $this->authQuery($sp2f63b0, \App\Card::class)->whereIn('id', explode(',', $sp125d2b))->delete(); return Response::success(); } function deleteTrashed(Request $sp2f63b0) { $sp125d2b = $sp2f63b0->post('ids', ''); if (strlen($sp125d2b) < 1) { return Response::forbidden(); } $this->authQuery($sp2f63b0, \App\Card::class)->whereIn('id', explode(',', $sp125d2b))->forceDelete(); return Response::success(); } function deleteAll(Request $sp2f63b0) { return $this->get($sp2f63b0, false, true); } function restoreTrashed(Request $sp2f63b0) { $sp125d2b = $sp2f63b0->post('ids', ''); if (strlen($sp125d2b) < 1) { return Response::forbidden(); } $spd92986 = $this->authQuery($sp2f63b0, \App\Card::class); $spd92986->whereIn('id', explode(',', $sp125d2b))->restore(); return Response::success(); } function restoreAll(Request $sp2f63b0) { return $this->get($sp2f63b0, false, false, true); } function add(Request $sp2f63b0) { $sp18574f = (int) $sp2f63b0->post('product_id'); $spddebb7 = $sp2f63b0->post('card'); $sp17830c = \App\Card::STATUS_NORMAL; $sp9265a0 = (int) $sp2f63b0->post('type', \App\Card::TYPE_ONETIME); $sp69fed5 = $sp2f63b0->post('is_check') === 'true'; if (str_contains($spddebb7, '<') || str_contains($spddebb7, '>')) { return Response::fail('卡密不能用 < 或 > 分割'); } if (\App\Card::where('user_id', \Auth::id())->where('status', \App\Card::STATUS_NORMAL)->count() > 10000) { return Response::fail('您的库存卡密已经超过10000张，本次添加失败'); } $spf667ee = $this->authQuery($sp2f63b0, \App\Product::class)->findOrFail($sp18574f); if ($sp9265a0 === \App\Card::TYPE_REPEAT) { if ($sp69fed5) { if (\App\Card::where('product_id', $sp18574f)->where('card', $spddebb7)->exists()) { return Response::fail('该卡密已经存在，添加失败'); } } $spf667ee->buy_max = 1; $spf667ee->saveOrFail(); $sp32a040 = new \App\Card(); $sp32a040->user_id = $this->getUserIdOrFail($sp2f63b0); $sp32a040->product_id = $sp18574f; $sp32a040->card = $spddebb7; $sp32a040->type = $sp9265a0; $sp32a040->status = $sp17830c; $sp32a040->count_sold = 0; $sp32a040->count_all = (int) $sp2f63b0->post('count_all', 1); if ($sp32a040->count_all < 1 || $sp32a040->count_all > 10000000) { return Response::forbidden('可售总次数不能超过10000000'); } $sp32a040->saveOrFail(); } else { $sp3fc9da = explode('
', $spddebb7); $sp5368ce = count($sp3fc9da); $spf24f02 = 50; if ($sp5368ce > $spf24f02) { return Response::fail('每次添加不能超过 ' . $spf24f02 . ' 张'); } $sp02f098 = array(); $sp91d8bf = ''; for ($sp3deb2c = 0; $sp3deb2c < $sp5368ce; $sp3deb2c++) { $sp32a040 = trim($sp3fc9da[$sp3deb2c]); if (strlen($sp32a040) < 1) { continue; } if (strlen($sp32a040) > 100) { return Response::fail('第 ' . $sp3deb2c . ' 张卡密 ' . $sp32a040 . ' 长度错误<br>卡密最大长度为100'); } if ($sp69fed5) { if (in_array($sp32a040, $sp02f098)) { continue; } $sp02f098[] = $sp32a040; } if ($sp91d8bf === '') { $sp91d8bf .= $sp32a040; } else { $sp91d8bf .= '<' . $sp32a040; } } if ($sp91d8bf === '') { return Response::fail('请输入合法的卡密'); } try { \App\Card::add_cards($this->getUserIdOrFail($sp2f63b0), $sp18574f, $sp9265a0, $sp17830c, $sp91d8bf, false); } catch (\Exception $spa9e936) { \Log::error('add_cards, function fatal error: ', array('exception' => $spa9e936)); return Response::fail($spa9e936->getMessage()); } } return Response::success(); } function edit(Request $sp2f63b0) { $spae6a5b = (int) $sp2f63b0->post('id'); $sp32a040 = $sp2f63b0->post('card'); $sp9265a0 = (int) $sp2f63b0->post('type', \App\Card::TYPE_ONETIME); $sp1d157c = $this->authQuery($sp2f63b0, \App\Card::class)->findOrFail($spae6a5b); if ($sp1d157c) { $sp1d157c->card = $sp32a040; $sp1d157c->type = $sp9265a0; if ($sp9265a0 === \App\Card::TYPE_REPEAT) { $spf667ee = $sp1d157c->product; $spf667ee->buy_max = 1; $spf667ee->saveOrFail(); $sp1d157c->count_all = (int) $sp2f63b0->post('count_all', 1); } else { $sp1d157c->count_all = 1; } $sp1d157c->saveOrFail(); } return Response::success(); } }