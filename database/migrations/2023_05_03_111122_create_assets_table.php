<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name')->nullable();
            $table->string('user')->nullable();
            $table->string('department')->nullable();
            $table->string('cable')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('brand_detail')->nullable();
            $table->string('cpu')->nullable();
            $table->integer('ram')->nullable();
            $table->string('ssd')->nullable();
            $table->string('hdd')->nullable();
            $table->string('card')->nullable();
            $table->string('password')->nullable();
            $table->string('mac_address')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('lcd_size')->nullable();
            $table->string('lcd_model')->nullable();
            $table->boolean('lcd')->default(0);
            $table->boolean('keyboard')->default(0);
            $table->boolean('mouse')->default(0);
            $table->boolean('printer')->default(0);
            $table->boolean('scanner')->default(0);
            $table->string('printer_type')->nullable();
            $table->string('acc_type')->nullable();
            $table->string('acc_brand')->nullable();
            $table->string('acc_sr_no')->nullable();
            $table->string('acc_model')->nullable();
            $table->string('acc_count')->nullable();
            $table->string('mouse_brand')->nullable();
            $table->string('mouse_model')->nullable();
            $table->string('keyboard_brand')->nullable();
            $table->string('keyboard_model')->nullable();
            $table->string('printer_brand')->nullable();
            $table->string('printer_model')->nullable();
            $table->string('scanner_brand')->nullable();
            $table->string('scanner_model')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systems');
    }
}
