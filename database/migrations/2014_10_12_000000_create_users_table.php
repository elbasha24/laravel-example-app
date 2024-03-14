<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->text('phone')->nullable();
            $table->text('address')->nullable();
            $table->enum('role', ['admin', 'agent','user'])->default('user');
            $table->enum('status', ['active', 'isActive'])->default('active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};


//   $table->string('username')->unique();
//   $table->unsignedBigInteger('role_id')->default(2); // 1 is admin, 2 is user by default
//   $table->foreignId('role_id')
//       ->references('id')
//       ->on('roles')
//           $table->string(User::COLUMN_EMAIL)->unique();
// $table->timestamp(User::COLUMN_EMAIL_VERIFIED_AT)->nullable();
// $table->string(User::PASSWORD);
// $table->rememberToken();
// $table->timestampsTz();
// $table->boolean('is_admin')->default(false);

/*

This code is a migration script written in PHP for Laravel, a popular PHP framework. Migrations are used to manage changes to the database schema over time. In this specific migration, a new table called users is being created. Here's a breakdown of the code:

Lines 2-4: These lines include necessary classes and namespaces for working with Laravel's database and schema facilities.

Lines 7-24: This is the up method, which is called when you run php artisan migrate. It contains the logic for creating the users table.

Lines 9-17: These lines define the columns of the users table.
$table->id(); creates an auto-incrementing primary key.
$table->string('name'); creates a string type column for the user's name.
$table->string('username')->nullable(); creates an optional string type column for the user's username.
$table->string('email')->unique(); creates a unique string type column for the user's email address.
$table->timestamp('email_verified_at')->nullable(); creates an optional timestamp column to store the email verification timestamp.
$table->string('password'); creates a string type column for the user's password.
$table->string('photo')->nullable(); creates an optional string type column for the user's photo.
$table->text('phone')->nullable(); creates an optional text type column for the user's phone number.
$table->text('address')->nullable(); creates an optional text type column for the user's address.
$table->enum('role', ['admin', 'agent','user'])->default('user'); creates an enumerated type column for the user's role, with possible values of 'admin', 'agent', or 'user', and defaults to 'user'.
$table->enum('status', ['active', 'inactive'])->default('active'); creates an enumerated type column for the user's status, with possible values of 'active' or 'inactive', and defaults to 'active'.
$table->rememberToken(); creates a column for Laravel's "remember me" functionality.
$table->timestamps(); creates two timestamp columns: created_at and updated_at.
Lines 26-30: This is the down method, which is called when you run php artisan migrate:rollback. It contains the logic for dropping the users table.

In summary, this code creates a users table with various columns to store user-related information in a Laravel application.




*/ 