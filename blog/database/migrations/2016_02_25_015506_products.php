<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Products
 *
 * @author  The scaffold-interface created at 2016-02-25 01:55:06pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('products',function (Blueprint $table){

        $table->increments('id');
        
        $table->string('title');
        
        $table->string('content');
        
        /**
         * Foreignkeys section
         */
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('products');
     }
}
