<?php
namespace App\Http\Controllers\Shop; use App\Category; use App\Product; use App\Library\Response; use Carbon\Carbon; use Illuminate\Http\Request; use App\Http\Controllers\Controller; class Coupon extends Controller { function info(Request $sp2f63b0) { $sp97f886 = (int) $sp2f63b0->post('category_id', -1); $sp18574f = (int) $sp2f63b0->post('product_id', -1); $sp09ef00 = $sp2f63b0->post('coupon'); if (!$sp09ef00) { return Response::fail('请输入优惠券'); } if ($sp97f886 > 0) { $sp4366e7 = Category::findOrFail($sp97f886); $sp203bcb = $sp4366e7->user_id; } elseif ($sp18574f > 0) { $spf667ee = Product::findOrFail($sp18574f); $sp203bcb = $spf667ee->user_id; } else { return Response::fail('请先选择分类或商品'); } $sp0e8248 = \App\Coupon::where('user_id', $sp203bcb)->where('coupon', $sp09ef00)->where('expire_at', '>', Carbon::now())->whereRaw('`count_used`<`count_all`')->get(); foreach ($sp0e8248 as $sp09ef00) { if ($sp09ef00->category_id === -1 || $sp09ef00->category_id === $sp97f886 && ($sp09ef00->product_id === -1 || $sp09ef00->product_id === $sp18574f)) { $sp09ef00->setVisible(array('discount_type', 'discount_val')); return Response::success($sp09ef00); } } return Response::fail('优惠券信息无效'); } }