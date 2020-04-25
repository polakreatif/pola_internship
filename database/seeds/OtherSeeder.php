<?php

use Illuminate\Database\Seeder;

class OtherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $other = new \App\Other;
        $other->id = 1;

        $other->cs_title = 'Layanan Konsumen';
        $other->cs_caption = '';
        $other->cs_address_title = 'Alamat';
        $other->cs_address = 'Jalan Mandurorejo nomer 123, Kajen, Kab. Pekalongan, Prov. Jawa Tengah, Indonesia.';
        $other->cs_email_title = 'Email Kami';
        $other->cs_email = 'cs@laundry.com';
        $other->cs_phone_title = 'Telepon Kami';
        $other->cs_phone = '082133170120';
        $other->cs_work_hours_title = 'Jam Kerja';
        $other->cs_work_hours = 'Senin - Jumat. 08.00 - 14.30';

        $other->buletin_title = 'Ikuti Buletin Kami';
        $other->buletin_caption = 'Dapatkan informasi seputar laundry, pakaian, tips-tips, dan kegiatan-kegiatan. Ada juga diskon, promo, giveaway dan bonus menarik lainnya.';

        $other->main_address_title = 'Kantor Pusat';
        $other->main_address = 'Jalan Mandurorejo nomer 123, Kajen, Kab. Pekalongan, Prov. Jawa Tengah, Indonesia.';
        $other->main_email = 'admin@laundry.com';
        $other->main_phone = '082133170120';

        $other->cs_footer_title = 'Layanan Konsumen';
        $other->warranty_label = 'Garansi';
        $other->warranty_link = 'domain.com/blog/garansi';
        $other->safety_guide_label = 'Panduan Keamanan';
        $other->safety_guide_link = 'domain.com/blog/panduan-keamanan';
        $other->help_page_label = 'Halaman Bantuan';
        $other->help_page_link = 'domain.com/blog/halaman-bantuan';

        $other->about_us_title = 'Tentang Kami';
        $other->profil_label = 'Profil Kami';
        $other->profil_link = 'domain.com/blog/profil-usaha';
        $other->vision_and_mision_label = 'Visi Misi';
        $other->vision_and_mision_link = 'domain.com/blog/visi-dan-misi';
        $other->career_label = 'Karir';
        $other->career_link = 'domain.com/blog/karir';

        $other->sosial_media_title = 'Ikuti Sosial Media Kami :';
        $other->sosial_media_caption = 'Jangan sampai ketinggalan! Dapatkan info diskon, promo, giveaway dan bonus menarik lainnya.';
        $other->instagram_link = 'instagram.com/ali.fata';
        $other->twitter_link = 'twitter.com/artfata';
        $other->facebook_link = 'facebook.com/artfata';
        $other->youtube_link = 'youtube.com/artfata';

        $other->save();
    }
}
