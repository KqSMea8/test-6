<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateCouponsTable extends Migration { public function up() { Schema::create('coupons', function (Blueprint $sp5bbfa0) { $sp5bbfa0->increments('id'); $sp5bbfa0->integer('user_id'); $sp5bbfa0->integer('category_id')->default(-1); $sp5bbfa0->integer('product_id')->default(-1); $sp5bbfa0->integer('type')->default(\App\Coupon::TYPE_REPEAT); $sp5bbfa0->integer('status')->default(\App\Coupon::STATUS_NORMAL); $sp5bbfa0->string('coupon', 100); $sp5bbfa0->integer('discount_type'); $sp5bbfa0->integer('discount_val'); $sp5bbfa0->integer('count_used')->default(0); $sp5bbfa0->integer('count_all')->default(1); $sp5bbfa0->string('remark')->nullable(); $sp5bbfa0->dateTime('expire_at')->nullable(); $sp5bbfa0->timestamps(); $sp5bbfa0->index(array('user_id', 'coupon')); }); } public function down() { Schema::dropIfExists('coupons'); } }