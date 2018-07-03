<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1530534102UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if(Schema::hasColumn('users', 'male')) {
                $table->dropColumn('male');
            }
            if(Schema::hasColumn('users', 'female')) {
                $table->dropColumn('female');
            }
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
                        $table->tinyInteger('male')->nullable()->default('0');
                $table->tinyInteger('female')->nullable()->default('0');
                
        });

    }
}
