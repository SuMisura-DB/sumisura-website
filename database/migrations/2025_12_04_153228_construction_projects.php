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
        /* Construction Projects - Obras */
        Schema::create('construction_projects', function (Blueprint $table) {

            /* General Columns */
            $table->id();
            $table->string('name');
            $table->char('ref', 16)->nullable()->unique();

            /* Client Name */
            $table->string('client_name');
            
            /* Descriptions */
            $table->mediumText('description');
            $table->mediumText('summary');

            /* Development Status */
            $table->boolean('in_development')->default(false)->comment('Indicates whether the project is still being constructed');
            $table->date('completion_date')->nullable()->default(null)->comment('For projects construction completion date');

            /* Area */
            $table->unsignedInteger('net_area')->nullable()->default(null)
                ->comment('The constructed area without outside spaces.');
            $table->unsignedInteger('gross_area')->nullable()->default(null)
                ->comment('The total area of the property. Including outside spaces and walls.');
            $table->unsignedInteger('terrain_area')->nullable()->default(null)
                ->comment('If the property has a big area with a house in it, this field should be used to express that area.');

            /* Floors */
            $table->unsignedTinyInteger('floors')->nullable()->default(null);

            /* Address */
            $table->char('address', 255)->nullable()->default(null);
            $table->unsignedSmallInteger('zipcode1')->nullable()->default(null);
            $table->unsignedSmallInteger('zipcode2')->nullable()->default(null);

            /* Coordinates */
            $table->float('latitude', 12, 9)->nullable()->default(null);
            $table->float('longitude', 12, 9)->nullable()->default(null);

            /* Youtube ID */
            $table->char('youtube_id', 255)->nullable()->default(null);

            /* Featured */
            $table->boolean('is_featured')->default(false);

            /* Visibility & Active */
            $table->boolean('visibility')->default(true);
            $table->boolean('active')->default(true);

            $table->timestamps();
        });

        /* Categorização de Obra (Remodelação, Renovação, Construção Nova, etc.) */
        Schema::create('construction_projects_category', function (Blueprint $table){
            $table->id();
            $table->string('name', 30)->unique();
        });

        // Opções base
        DB::table('construction_projects_category')->insert([
            ['name' => 'Construção Nova'],
            ['name' => 'Renovação'],
            ['name' => 'Remodelação'], 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('construction_projects');
        Schema::dropIfExists('construction_projects_category');
    }
};
