<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentationProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentation_projects', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id')->index();
            $table->unsignedBigInteger('documentation_id')->index();
            $table->unsignedBigInteger('team_id')->index();
            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('documentation_id')->references('id')->on('documentations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('team_id')->references('id')->on('teams')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
        Schema::dropIfExists('documentation_projects');
    }
}
