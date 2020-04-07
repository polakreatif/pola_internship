<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = "
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque magna ipsum, vestibulum sed blandit eget, efficitur molestie leo. Pellentesque eget lectus malesuada, sagittis diam eget, tincidunt arcu. Nullam mollis, dui vel dictum lacinia, velit turpis feugiat tellus, vel dapibus ante leo vulputate velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In a neque scelerisque ligula ullamcorper semper sit amet sed leo. Maecenas scelerisque lectus ut enim gravida tincidunt. Pellentesque volutpat commodo placerat. Donec sit amet orci ut erat viverra aliquam. Aenean lacinia efficitur porta.

            Sed in dignissim sapien. Vestibulum efficitur iaculis odio, eget efficitur ipsum tempor vitae. Nullam ac tempor ante. Nullam malesuada maximus est ac rutrum. Praesent tellus ante, egestas vitae orci in, volutpat elementum diam. Donec sem lorem, feugiat vel nisl in, mattis laoreet nisi. Donec a viverra odio. Donec bibendum magna et ante auctor, vel rutrum nulla mollis.

            Sed lacinia interdum scelerisque. Pellentesque semper congue libero, nec euismod lectus malesuada quis. Nunc id pharetra elit. Ut congue nec felis et gravida. Mauris eu laoreet neque. Phasellus dictum volutpat ex sit amet varius. Sed ultrices in metus id auctor. Aliquam gravida risus id fermentum placerat.
            
            Curabitur vel nulla quis augue eleifend malesuada ultrices at lacus. Ut eget feugiat nulla, malesuada aliquet eros. Nunc id rhoncus lectus. Nullam ultrices maximus dui in egestas. Curabitur convallis mattis sapien et commodo. Donec pretium neque tortor, non sollicitudin velit finibus ut. Nunc accumsan molestie consequat. Donec dignissim scelerisque eros sed elementum.
            
            Aenean eu odio sed leo lacinia porttitor vel vel mauris. Donec tristique, urna at vulputate mattis, arcu ante dignissim magna, a feugiat quam sem nec erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque lacinia nisi ac magna sagittis tincidunt. Nullam imperdiet interdum risus, ut mattis justo suscipit nec. Vestibulum ut molestie nisi. Nam eget hendrerit lectus. Vivamus tempor, lectus sit amet maximus malesuada, urna tortor bibendum enim, vitae ultrices velit ex quis lectus. Donec ac pulvinar nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris placerat pellentesque egestas. Proin dictum sollicitudin orci, gravida vehicula magna rhoncus id. Aliquam porta erat libero, ornare blandit mauris commodo sed. In nec arcu non ipsum vulputate ullamcorper. Aliquam imperdiet, nunc ut sodales vulputate, tellus dolor imperdiet ipsum, sit amet posuere felis nibh et massa. Nam fringilla congue sem, a convallis ex porta at.
        
        ";

        $blog01 = new Blog;
        $blog01->title = "diskon barbar akhir tahun | nomer 3 paling jedar";
        $blog01->description = $description;
        $blog01->mediaUrl = "media01.jpg";
        $blog01->categoryId = 5;
        $blog01->save();

        $blog02 = new Blog;
        $blog02->title = "laundry pamungkas ala bima sakti";
        $blog02->description = $description;
        $blog02->mediaUrl = "media02.jpg";
        $blog02->categoryId = 1;
        $blog02->save();

        $blog03 = new Blog;
        $blog03->title = "hidup sehat bersama laundry jone";
        $blog03->description = $description;
        $blog03->mediaUrl = "media03.jpg";
        $blog03->categoryId = 4;
        $blog03->save();

        $blog04 = new Blog;
        $blog04->title = "paket produk baru di awal tahun baru.";
        $blog04->description = $description;
        $blog04->mediaUrl = "media04.jpg";
        $blog04->categoryId = 1;
        $blog04->save();
        $blog04 = new Blog;
        
        $blog05 = new Blog;
        $blog05->title = "diskon sampai 90% di akhir tahun.";
        $blog05->description = $description;
        $blog05->mediaUrl = "media05.jpg";
        $blog05->categoryId = 5;
        $blog05->save();

        $blog06 = new Blog;
        $blog06->title = "undian hadiah senilai 1 Milyar dalam rangka ualng tahun Laundry jone";
        $blog06->description = $description;
        $blog06->mediaUrl = "media06.jpg";
        $blog06->categoryId = 5;
        $blog06->save();
    }
}
