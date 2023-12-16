<?php



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('forms')) {
            Schema::create('forms', function (Blueprint $table) {
                $table->id();
                $table->string('heading');
                $table->string('imageFile')->nullable();
                $table->text('review');
                $table->text('fullreview');

                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
