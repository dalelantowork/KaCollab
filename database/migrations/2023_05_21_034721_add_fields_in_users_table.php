<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nationality')->nullable()->after('zip_code');
            $table->string('civil_status')->nullable()->after('zip_code');
            $table->date('birthdate')->nullable()->after('zip_code');
            $table->string('birthplace')->nullable()->after('zip_code');
            $table->string('gender')->nullable()->after('zip_code');
            $table->string('spouse_name')->nullable()->after('zip_code');
            $table->string('occupation')->nullable()->after('zip_code');
            $table->string('emergency_name')->nullable()->after('zip_code');
            $table->longText('emergency_address')->nullable()->after('zip_code');
            $table->string('emergency_contact')->nullable()->after('zip_code');
            $table->string('tin')->nullable()->after('zip_code');
            $table->string('photo')->nullable()->after('email');
            $table->string('valid_id')->nullable()->after('email');
            $table->string('signature')->nullable()->after('email');
            $table->string('contact_no')->nullable()->after('email');
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
            //
        });
    }
};
