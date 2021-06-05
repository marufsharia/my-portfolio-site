<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateSiteSettingsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('site_settings', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('user_id');
                $table->string('site_title')->default('BlogFolio');
                $table->string('favicon')->nullable();
                $table->string('primary_color')->default('#d82c2e');
                $table->string('secondary_color')->default('#d82c2e');
                $table->string('header_title')->nullable()
                    ->default("HI, I\'m XYZ");
                $table->string('header_sub_title')->nullable()
                    ->default('Web Developer from ABC');
                $table->string('name')->nullable()->default('XYZ');
                $table->string('designation')->nullable()
                    ->default('Photographer - Jr. Developer');
                $table->string('download_link')->nullable()->default('#');
                $table->string('service_section_title')->nullable()->default("HERE\'S WHAT I\'M DOING");
                $table->string('service_section_sub_title')->nullable()
                    ->default('I introduce the most creative and original ideas for my customers');
                $table->text("service_section_description")->nullable();
                $table->string('footer_copyright_text')->default('&copy; BlogFolio ' . date('Y'));
                $table->enum('status', [0, 1, 2])->default(1);
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
            Schema::dropIfExists('site_settings');
        }
    }
