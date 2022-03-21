<?php
namespace Modules\Category\Database\Migrations;
use Modules\Category\Entities\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('meta_title')->nullable();
            $table->string('slug');
            $table->string('description', 1000);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
        //Seed Data
        \Modules\Category\Entities\Category::create(
            [ 'title' =>'Commercial bank','slug' => 'commercial-bank','status' => 1],
            [ 'title' =>'Govt bank','slug' => 'govt-bank','status' => 1]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }

}
