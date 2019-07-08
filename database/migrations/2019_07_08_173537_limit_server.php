<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LimitServer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('slug', 190)->change();
        });

        Schema::table('data_types', function (Blueprint $table) {
            $table->string('slug', 190)->change();
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->string('slug', 190)->change();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug', 190)->change();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->string('name', 190)->change();
        });
        Schema::table('permissions', function (Blueprint $table) {
            $table->string('key', 190)->change();
        });
        Schema::table('settings', function (Blueprint $table) {
            $table->string('key', 190)->change();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('email', 190)->change();
        });
        Schema::table('translations', function (Blueprint $table) {
            $table->string('table_name', 190)->change();
            $table->string('column_name', 190)->change();
            $table->string('foreign_key', 190)->change();
            $table->string('locale', 190)->change();
        });
        Schema::table('menus', function (Blueprint $table) {
            $table->string('name', 190)->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('categories', function (Blueprint $table) {
            $table->string('slug', 250)->change();
        });

        Schema::table('data_types', function (Blueprint $table) {
            $table->string('slug', 250)->change();
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->string('slug', 250)->change();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug', 250)->change();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->string('name', 250)->change();
        });
        Schema::table('permissions', function (Blueprint $table) {
            $table->string('key', 250)->change();
        });
        Schema::table('settings', function (Blueprint $table) {
            $table->string('key', 250)->change();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('email', 250)->change();
        });
        Schema::table('translations', function (Blueprint $table) {
            $table->string('table_name', 250)->change();
            $table->string('column_name', 250)->change();
            $table->string('foreign_key', 250)->change();
            $table->string('locale', 250)->change();
        });
        Schema::table('menus', function (Blueprint $table) {
            $table->string('name', 250)->change();
        });
    }
}
