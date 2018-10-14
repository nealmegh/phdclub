<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInfoToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('country_phd', 191);
            $table->timestamp('birthday')->nullable();
            $table->string('gender', 191)->nullable();
            $table->string('topic', 191)->nullable();
            $table->string('institution', 191)->nullable();
            $table->string('supervisor', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->string('state', 191)->nullable();
            $table->string('zip', 191)->nullable();
            $table->string('upload_identity')->nullable();
            $table->timestamp('upload_date')->nullable();
            $table->boolean('upload_status')->default(false);
            $table->boolean('identity_approval')->default(false);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('country_phd');
            $table->dropColumn('birthday');
            $table->dropColumn('gender');
            $table->dropColumn('topic');
            $table->dropColumn('institution');
            $table->dropColumn('supervisor');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('zip');
            $table->dropColumn('upload_identity');
            $table->dropColumn('upload_date');
            $table->dropColumn('upload_status');
            $table->dropColumn('identity_approval');
        });
    }
}
