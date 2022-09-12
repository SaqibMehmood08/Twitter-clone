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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger("user_id");
              $table->string("carrer")->nullable();
               $table->string("email")->nullable();
                $table->string("username")->nullable();
                 $table->text("tweet")->nullable();
                  $table->string("image")->nullable();
                    $table->string("profile")->nullable();
                    $table->string("cover")->nullable();
                     $table->string("bio")->nullable();
                      $table->string("location")->nullable();
                      $table->string("website")->nullable();
                  $table->index("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
