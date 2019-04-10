<?php
namespace App\Mail; use Illuminate\Bus\Queueable; use Illuminate\Mail\Mailable; use Illuminate\Queue\SerializesModels; use Illuminate\Contracts\Queue\ShouldQueue; class ProductCountWarn extends Mailable { use Queueable, SerializesModels; public $product = null; public $count = null; public function __construct($spf667ee, $sp761f2d) { $this->product = $spf667ee; $this->count = $sp761f2d; } public function build() { return $this->subject('您的商品库存不足-' . config('app.name'))->view('emails.product_count_warn'); } }