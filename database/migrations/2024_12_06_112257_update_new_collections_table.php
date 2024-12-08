<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNewCollectionsTable extends Migration
{
    public function up()
    {
        Schema::table('new_collections', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();  // Tidak boleh NULL
            $table->string('description')->nullable(false)->change();  // Tidak boleh NULL
        });
    }

    public function down()
    {
        Schema::table('new_collections', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('description')->nullable()->change();
        });
    }
}
