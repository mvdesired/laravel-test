<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1530533749UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
if (!Schema::hasColumn('users', 'last_name')) {
                $table->string('last_name')->nullable();
                }
if (!Schema::hasColumn('users', 'dob')) {
                $table->date('dob')->nullable();
                }
if (!Schema::hasColumn('users', 'male')) {
                $table->tinyInteger('male')->nullable()->default('0');
                }
if (!Schema::hasColumn('users', 'femail')) {
                $table->tinyInteger('femail')->nullable()->default('0');
                }
if (!Schema::hasColumn('users', 'phone_number')) {
                $table->integer('phone_number')->nullable();
                }
if (!Schema::hasColumn('users', 'company_name')) {
                $table->string('company_name')->nullable();
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
            $table->dropColumn('last_name');
            $table->dropColumn('dob');
            $table->dropColumn('male');
            $table->dropColumn('femail');
            $table->dropColumn('phone_number');
            $table->dropColumn('company_name');
            
        });

    }
}
