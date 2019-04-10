<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreatePaysTable extends Migration { public function up() { Schema::create('pays', function (Blueprint $sp5bbfa0) { $sp5bbfa0->increments('id'); $sp5bbfa0->string('name'); $sp5bbfa0->integer('sort')->default(1000); $sp5bbfa0->string('img'); $sp5bbfa0->string('driver'); $sp5bbfa0->string('way'); $sp5bbfa0->text('config'); $sp5bbfa0->text('comment')->nullable(); $sp5bbfa0->float('fee_system', 8, 4)->default(0.01); $sp5bbfa0->boolean('enabled'); $sp5bbfa0->timestamps(); }); } public function down() { Schema::dropIfExists('pays'); } }