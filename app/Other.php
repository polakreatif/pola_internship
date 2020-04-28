<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    protected $table = 'others';
	protected $primaryKey = 'id';

    protected $fillable = [
        
        'cs_title', 'cs_caption', 'cs_address_title', 'cs_address', 'cs_phone_title', 'cs_phone', 'cs_email_title', 'cs_email', 'cs_work_hours_title', 'cs_work_hours',

        'buletin_title', 'buletin_caption',

        'main_address_title', 'main_address', 'main_phone', 'main_email',

        'cs_footer_title', 'warranty_label', 'safety_guide_label', 'help_page_label',
        'warranty_link', 'safety_guide_link', 'help_page_link',

        'about_us_title', 'profil_label', 'vision_and_mision_label', 'career_label',
        'profil_link', 'vision_and_mision_link', 'career_link',

        'sosial_media_title', 'sosial_media_caption',
        'instragram_link', 'twitter_link', 'facebook_link', 'youtube_link',

        'updated_by'
    ];
}
