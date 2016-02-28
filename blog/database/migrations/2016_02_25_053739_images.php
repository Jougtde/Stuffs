<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Images
 *
 * @author  The scaffold-interface created at 2016-02-25 05:37:39pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Images extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('images',function (Blueprint $table){

        $table->increments('id');
        
        $table->string('url');
        
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
        Schema::drop('images');
     }
}
