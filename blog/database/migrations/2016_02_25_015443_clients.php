<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Clients
 *
 * @author  The scaffold-interface created at 2016-02-25 01:54:43pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('clients',function (Blueprint $table){

        $table->increments('id');
        
        $table->string('first_name');
        
        $table->string('last_name');
        
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
        Schema::drop('clients');
     }
}
