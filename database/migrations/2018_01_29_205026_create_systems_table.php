<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateSystemsTable extends Migration { public function up() { Schema::create('systems', function (Blueprint $sp5bbfa0) { $sp5bbfa0->increments('id'); $sp5bbfa0->string('name', 100)->unique(); $sp5bbfa0->longText('value')->nullable(); $sp5bbfa0->timestamps(); }); } public function down() { Schema::dropIfExists('systems'); } }