<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateFilesTable extends Migration { public function up() { Schema::create('files', function (Blueprint $sp5bbfa0) { $sp5bbfa0->increments('id'); $sp5bbfa0->integer('user_id'); $sp5bbfa0->string('driver'); $sp5bbfa0->string('path'); $sp5bbfa0->string('url'); $sp5bbfa0->timestamp('created_at'); }); DB::unprepared('ALTER TABLE `files` CHANGE COLUMN `created_at` `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP;'); } public function down() { Schema::dropIfExists('files'); } }