<?php namespace Octohelp\Importexport\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEntriesTable extends Migration
{

    public function up()
    {
        Schema::create('octohelp_importexport_entries', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->date('dob');
            $table->string('occupation');
            $table->string('city');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('octohelp_importexport_entries');
    }

}
