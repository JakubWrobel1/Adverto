<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->timestamp('updated_at')->nullable();
        });
        Schema::table('images', function (Blueprint $table) {
            $table->timestamp('created_at')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('updated_at');
        });
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('created_at');
        });
    }
};
