<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // global
        $title = "Laundry Jone | Professional Laundry just for You";
        $description = "Loundry Jone adalah perusahaan jasa loundry sejak tahun 2003.
            Hingga sekarang kami telah memiliki 983 cabang tersebar di seluruh Indonesia. 
            Kami mengedepankan kualitas hasil dan pelayanan kepada pelangan,
            dengan harga yang kompetitif.
            Jutaan keluarga dan masyarakat telah mempercayakan loundry kepada kami.
            Ingin loundry ? Loundry Jone aja tempatnya.";

        // jumbotron
        $mediaJumbotron = "https://picsum.photos/1200/550";
        $titleJumbotron = "Laundry Jone";
        $text01Jumbotron = "Professional Laundry just for You";
        $text02Jumbotron = "SOLUSI kebutuhan LOUNDRY ANDA, sekarang hanya TINGGAL KLIK. Siap antar jemput seluruh Indonesia.";
        $textDownload = "download now";

        // About Us
        $mediaAboutUs = "https://picsum.photos/500/350";
        $titleAboutUs = "Siapa Kami ?";

        // Caraousel

        return view('home', [
            "title" => $title, 
            "description" => $description,
            "mediaJumbotron" => $mediaJumbotron,
            "titleJumbotron" => $titleJumbotron,
            "text01Jumbotron" => $text01Jumbotron,
            "text02Jumbotron" => $text02Jumbotron,
            "textDownload" => $textDownload,
            "mediaAboutUs" => $mediaAboutUs,
            "titleAboutUs" => $titleAboutUs,
            "mediaCarousel" => $mediaCarousel,
        ]);
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
