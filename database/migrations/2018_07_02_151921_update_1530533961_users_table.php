<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1530533961UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if(Schema::hasColumn('users', 'femail')) {
                $table->dropColumn('femail');
            }
            
        });
Schema::table('users', function (Blueprint $table) {
            
if (!Schema::hasColumn('users', 'female')) {
                $table->tinyInteger('female')->nullable()->default('0');
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
            $table->dropColumn('female');
            
        });
Schema::table('users', function (Blueprint $table) {
                        $table->tinyInteger('femail')->nullable()->default('0');
                
        });

    }
}
