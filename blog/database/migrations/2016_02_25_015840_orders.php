<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Orders
 *
 * @author  The scaffold-interface created at 2016-02-25 01:58:40pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('orders',function (Blueprint $table){

        $table->increments('id');
        
        $table->string('title');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('client_id')->unsigned();
        $table->foreign('client_id')->references('id')->on('clients');

        
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
        Schema::drop('orders');
     }
}
