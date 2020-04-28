@extends('layouts.app')

@section('header')
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center justify-center text-center pt-20">
        <div class="w-2xl md:w-3/5 py-6 text-center justify-center">
            <img src="/img/undraw_camera_mg5h.svg" alt="" style="width:75%">
        </div>
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <h1 class="text-6xl font-bold">Andipputra <span style="color:#3E3D54"> Photography</span></h1> 
                <p class="text-xl">Kami siap mengabadikan momen-momen terindahmu</p>
                <form class="w-full max-w-sm">
                    <div class="flex items-center border-b border-b-2 border-white py-2">
                      <input class="appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Masukan Email Kamu" aria-label="Full name">
                      <button class="flex-shrink-0 bg-whit hover:bg-gray-200 border-white hover:border-gray-200 text-sm border-2 hover:text-black text-white  py-1 px-2 rounded" type="button">
                        Kirimkan Penawaran
                      </button>
                    </div>
                  </form>
                <small class="text-xs">Masukan email anda dan kami akan memberikan penawaran menarik untuk anda </small>
        </div>
    </div>

    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
        <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
        </g>
        </g>
        </svg>
    </div>
@endsection

@section('about')
    <section class="border-b-2 border-white py-8 pt-20">
        
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-secondary">Tentang Kami</h1>
            <div class="w-full mb-4">	
                <div class="h-1 mx-auto bg-secondary w-64 opacity-75 my-0 py-0 rounded-t"></div>
            </div>
            
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-secondary text-xl text-justify">
                <p>Kami merupakan photographer yang berbasis di Jogjakarta, berdiri dari tahun 2018 kami telah banyak membantu mengabadikan momen-momen dihidup orang.
                    Kami dapat melakukan photoshoot untuk graduation, wedding, prewedding, dan acara berharga kalian lainnya.</p>
            </div>
            <div class="w-2xl md:w-3/5 py-6 text-center justify-center p-20 flex">
                <img src="/img/logo.png" alt="" style="width:50%">
            </div> 

        </div>
    </section>
@endsection

@section('service')
    <section class="border-b-2 border-white py-8 pt-20">
            
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-secondary">Layanan Kami</h1>
            <div class="w-full mb-4">	
                <div class="h-1 mx-auto bg-secondary w-64 opacity-75 my-0 py-0 rounded-t"></div>
            </div>
            
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 border-white text-white rounded-t rounded-b-none overflow-hidden shadow bg-secondary">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="/img/group.jpg" alt="group.jpeg">
                        <div class="px-6 py-4 mx-auto">
                            <div class="font-bold text-xl mb-2 text-center text-underline">Group Photoshoot</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 border-white text-white rounded-t rounded-b-none overflow-hidden shadow bg-secondary">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="/img/graduation.jpg" alt="graduation.jpeg">
                        <div class="px-6 py-4 mx-auto">
                            <div class="font-bold text-xl mb-2 text-center text-underline">Graduation Photoshoot</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 border-white text-white rounded-t rounded-b-none overflow-hidden shadow bg-secondary">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="/img/photoshoot.jpg" alt="photoshoot.jpeg">
                        <div class="px-6 py-4 mx-auto">
                            <div class="font-bold text-xl mb-2 text-center text-underline">Produk Photoshoot</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('portofolio')
<section class="border-b-2 border-white py-8 pt-20">
            
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
    
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-secondary">Portofolio</h1>
        <div class="w-full mb-4">	
            <div class="h-1 mx-auto bg-secondary w-64 opacity-75 my-0 py-0 rounded-t"></div>
        </div>
        
        <div class="carousel relative shadow-2xl bg-white">
                <div class="carousel-inner relative overflow-hidden w-full">
                <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div class="carousel-item absolute opacity-0" style="height:100%">
                    <img src="/img/graduation.jpg" alt="">
                </div>
                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                
                <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:100%">
                    <img src="/img/photoshoot.jpg" alt="">
                </div>
                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
                
                <!--Slide 3-->
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:100%">
                    <img src="/img/group.jpg" alt="">
                </div>
                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
    
                <!-- Add additional indicators for each slide-->
                <ol class="carousel-indicators">
                    <li class="inline-block mr-3">
                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                </ol>
                
            </div>
        </div>
        
    </div>
</section>
    
    {{-- <div class="container border-top">
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <h2 class="display-3 text-center py-5">Portofolio Kami</h2>
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/photoshoot.jpg" class="d-block w-100" alt="imagecap">
                </div>
                <div class="carousel-item">
                    <img src="/img/graduation.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/group.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> --}}
@endsection

@section('artikel')

    <section class="border-b-2 border-white py-8 pt-20">
	
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-secondary">Artikel Terbaru</h1>
            <div class="w-full mb-4">	
                <div class="h-1 mx-auto bg-secondary w-64 opacity-75 my-0 py-0 rounded-t"></div>
            </div>
            
            @foreach ($articles as $article)
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 border-white text-white rounded-t rounded-b-none overflow-hidden shadow bg-secondary">
                        <a href="/articles/{{$article->id_artikel}}" class="flex flex-wrap no-underline hover:no-underline">
                            <img src="/img/{{$article->gambar}}" alt="{{$article->gambar}}" class="height-auto">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-center text-underline">{{$article->judul}}</div>
                                <p class="text-base text-justify"> {{$article->isi}} </p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach   

        </div>
    </section>


@endsection