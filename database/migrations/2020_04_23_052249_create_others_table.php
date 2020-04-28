<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('cs_title', 255);
            $table->string('cs_caption', 255)
                ->nullable()->default('');
            $table->string('cs_address_title', 255);
            $table->string('cs_address', 255);
            $table->string('cs_phone_title', 255);
            $table->string('cs_phone', 255);
            $table->string('cs_email_title', 255);
            $table->string('cs_email', 255);
            $table->string('cs_work_hours_title', 255);
            $table->string('cs_work_hours', 255);

            $table->string('buletin_title', 255);
            $table->string('buletin_caption', 255)
                ->nullable()
                ->default('');

            $table->string('main_address_title', 255)
                ->nullable()
                ->default('');
            $table->string('main_address', 255);
            $table->string('main_phone', 255);
            $table->string('main_email', 255);

            $table->string('cs_footer_title', 255);
            $table->string('warranty_label', 255);
            $table->string('warranty_link', 255);
            $table->string('safety_guide_label', 255);
            $table->string('safety_guide_link', 255);
            $table->string('help_page_label', 255);
            $table->string('help_page_link', 255);

            $table->string('about_us_title', 255);
            $table->string('profil_label', 255);
            $table->string('profil_link', 255);
            $table->string('vision_and_mision_label', 255);
            $table->string('vision_and_mision_link', 255);
            $table->string('career_label', 255);
            $table->string('career_link', 255);

            $table->string('sosial_media_title', 255);
            $table->string('sosial_media_caption', 255)
                ->nullable()
                ->default('');;
            $table->string('instagram_link', 255)
                ->nullable()
                ->default('');
            $table->string('twitter_link', 255)
                ->nullable()
                ->default('');
            $table->string('facebook_link', 255)
                ->nullable()
                ->default('');
            $table->string('youtube_link', 255)
                ->nullable()
                ->default('');

            $table->unsignedBigInteger('updated_by')->nullable($value = true);
            $table->timestamps();

            $table->foreign('updated_by')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('others');
    }
}
