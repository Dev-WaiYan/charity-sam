<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyStatusColumnInCampaignsTable extends Migration
{
    public function up()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->string('status')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->string('status')->nullable(false)->change();
        });
    }
}
