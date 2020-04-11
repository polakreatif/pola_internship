<?php

namespace App\Http\Controllers;

// use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // global
        // $title = "Laundry Jone | Professional Laundry just for You";
        // $description = "Loundry Jone adalah perusahaan jasa loundry sejak tahun 2003.
        //     Hingga sekarang kami telah memiliki 983 cabang tersebar di seluruh Indonesia. 
        //     Kami mengedepankan kualitas hasil dan pelayanan kepada pelangan,
        //     dengan harga yang kompetitif.
        //     Jutaan keluarga dan masyarakat telah mempercayakan loundry kepada kami.
        //     Ingin loundry ? Loundry Jone aja tempatnya.";

        // // jumbotron
        // $mediaJumbotron = "https://picsum.photos/1200/550";
        // $titleJumbotron = "Laundry Jone";
        // $text01Jumbotron = "Professional Laundry just for You";
        // $text02Jumbotron = "SOLUSI kebutuhan LOUNDRY ANDA, sekarang hanya TINGGAL KLIK. Siap antar jemput seluruh Indonesia.";
        // $textDownload = "download now";

        // // About Us
        // $mediaAboutUs = "https://picsum.photos/500/350";
        // $titleAboutUs = "Siapa Kami ?";

        // // Caraousel
        // $mediaCarousel = array(
        //     "https://picsum.photos/1200/550",
        //     "https://picsum.photos/1200/551",
        //     "https://picsum.photos/1200/552",
        //     "https://picsum.photos/1200/553",
        //     "https://picsum.photos/1200/554"
        // );


        // // Product
        // $titleProduct = "Layanan Kami";
        //     // Cuci Pakaian
        // $products[0]['title'] = "Cuci Pakaian";
        // $products[0]['data'][0]['title'] = "Express Satuan";
        // $products[0]['data'][0]['normalPrice'] = "25.000";
        // $products[0]['data'][0]['discountPrice'] = "19.900";
        // $products[0]['data'][0]['desc'] = "
        //     Paket cuci pakaian (baju, celana, dalaman, dll) satuan. 
        //     Dijamin jadi 1/2 hari (12 jam).
        //     Bersih, wangi, higienis, seperti baru.";
        // $products[0]['data'][1]['title'] = "Reguler Satuan";
        // $products[0]['data'][1]['normalPrice'] = "25.000";
        // $products[0]['data'][1]['discountPrice'] = "19.900";
        // $products[0]['data'][1]['desc'] = "
        //     Paket cuci pakaian (baju, celana, dalaman, dll) satuan. 
        //     Dijamin jadi 3 hari (3 x 24 jam).
        //     Bersih, wangi, higienis, seperti baru.";
        // $products[0]['data'][2]['title'] = "Express Kiloan";
        // $products[0]['data'][2]['normalPrice'] = "25.000";
        // $products[0]['data'][2]['discountPrice'] = "19.900";
        // $products[0]['data'][2]['desc'] = "
        //     Paket cuci pakaian (baju, celana, dalaman, dll) kiloan. 
        //     Dijamin jadi 1/2 hari (12 jam).
        //     Bersih, wangi, higienis, seperti baru.
        //     Minimal 2 kilo.";
        // $products[0]['data'][3]['title'] = "Reguler Kiloan";
        // $products[0]['data'][3]['normalPrice'] = "25.000";
        // $products[0]['data'][3]['discountPrice'] = "19.900";
        // $products[0]['data'][3]['desc'] = "
        //     Paket cuci pakaian (baju, celana, dalaman, dll) kiloan. 
        //     Dijamin jadi 3 hari (3 x 24 jam).
        //     Bersih, wangi, higienis, seperti baru.
        //     Minimal 2 kilo.";
        // $products[0]['data'][4]['title'] = "Cuci Aja";
        // $products[0]['data'][4]['normalPrice'] = "(normal)";
        // $products[0]['data'][4]['discountPrice'] = "(diskon 20%)";
        // $products[0]['data'][4]['desc'] = "
        //     Ada paket Cuci Aja (baju, celana, dalaman, dll).
        //     Bersih, wangi, higienis, seperti baru, sudah dilipat.
        //     Waktu menyesuaikan pilihan paket satuan/kiloan.
        //     Harga menyesuaikan pilihan paket satuan/kiloan dengan diskon.";
        // $products[0]['data'][5]['title'] = "Setrika Aja";
        // $products[0]['data'][5]['normalPrice'] = "(normal)";
        // $products[0]['data'][5]['discountPrice'] = "(diskon 40%)";
        // $products[0]['data'][5]['desc'] = "
        //     Pakaian udah dicuci ?
        //     Tenang, ada paket Setrika Aja (baju, celana, dalaman, dll).
        //     Harum, wangi, rapi, licin.
        //     Waktu menyesuaikan pilihan paket satuan/kiloan.
        //     Harga menyesuaikan pilihan paket satuan/kiloan dengan diskon";
        //     // Cuci Karpet
        // $products[1]['title'] = "Cuci Karpet";
        // $products[1]['data'][0]['title'] = "Express Besar";
        // $products[1]['data'][0]['normalPrice'] = "95.000";
        // $products[1]['data'][0]['discountPrice'] = "89.999";
        // $products[1]['data'][0]['desc'] = "
        //     Paket cuci karpet ukuran besar. 
        //     Dijamin jadi 3 hari (3 x 24 jam).
        //     Bersih, wangi, higienis, gak bau apek, seperti baru.";
        // $products[1]['data'][1]['title'] = "Reguler Besar";
        // $products[1]['data'][1]['normalPrice'] = "65.000";
        // $products[1]['data'][1]['discountPrice'] = "59.999";
        // $products[1]['data'][1]['desc'] = "
        //     Paket cuci karpet ukuran besar. 
        //     Dijamin jadi 7 hari (7 x 24 jam).
        //     Bersih, wangi, higienis, gak bau apek, seperti baru.";
        // $products[1]['data'][2]['title'] = "Express Sedang";
        // $products[1]['data'][2]['normalPrice'] = "55.000";
        // $products[1]['data'][2]['discountPrice'] = "49.999";
        // $products[1]['data'][2]['desc'] = "
        //     Paket cuci karpet ukuran sedang. 
        //     Dijamin jadi 3 hari (3 x 12 jam).
        //     Bersih, wangi, higienis, gak bau apek, seperti baru.";
        // $products[1]['data'][3]['title'] = "Reguler Sedang";
        // $products[1]['data'][3]['normalPrice'] = "35.000";
        // $products[1]['data'][3]['discountPrice'] = "29.999";
        // $products[1]['data'][3]['desc'] = "
        //     Paket cuci karpet ukuran sedang. 
        //     Dijamin jadi 7 hari (7 x 12 jam).
        //     Bersih, wangi, higienis, gak bau apek, seperti baru.";
        //     // Cuci Sepatu
        // $products[2]['title'] = "Cuci Sepatu";
        // $products[2]['data'][0]['title'] = "Express Besar";
        // $products[2]['data'][0]['normalPrice'] = "35.000";
        // $products[2]['data'][0]['discountPrice'] = "29.999";
        // $products[2]['data'][0]['desc'] = "
        //     Paket cuci sepatu ukuran besar. 
        //     Dijamin jadi 1/2 hari (12 jam).
        //     Bersih, wangi, higienis, seperti baru.";
        // $products[2]['data'][1]['title'] = "Reguler Besar";
        // $products[2]['data'][1]['normalPrice'] = "25.000";
        // $products[2]['data'][1]['discountPrice'] = "19.999";
        // $products[2]['data'][1]['desc'] = "
        //     Paket cuci sepatu ukuran besar. 
        //     Dijamin jadi 3 hari (3 x 24 jam).
        //     Bersih, wangi, higienis, seperti baru.";
        // $products[2]['data'][2]['title'] = "Express Sedang";
        // $products[2]['data'][2]['normalPrice'] = "25.000";
        // $products[2]['data'][2]['discountPrice'] = "19.999";
        // $products[2]['data'][2]['desc'] = "
        //     Paket cuci sepatu ukuran sedang. 
        //     Dijamin jadi 1/2 hari (12 jam).
        //     Bersih, wangi, higienis, seperti baru.";
        // $products[2]['data'][3]['title'] = "Reguler Sedang";
        // $products[2]['data'][3]['normalPrice'] = "15.000";
        // $products[2]['data'][3]['discountPrice'] = "9.999";
        // $products[2]['data'][3]['desc'] = "
        //     Paket cuci sepatu ukuran sedang. 
        //     Dijamin jadi 3 hari (3 x 24 jam).
        //     Bersih, wangi, higienis, seperti baru.";


        // Blogs
        // $blogs = Blog::orderBy('created_at', 'desc')->limit(4)->get();

        // for ($i=0; $i < count($blogs); $i++) { 
        //     $category = $blogs[$i]->category;
        // }
        

        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
