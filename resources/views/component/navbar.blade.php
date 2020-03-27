<!-- Navbar -->
<nav class="bg-white sticky-top shadow-lg" >
    <div class="container-fluid">
        <!-- Navbar -> max Medium Screen -->
        <div class="d-block d-md-none">
            <div class="d-flex justify-content-between py-3">
                <a style="text-decoration: none; color: black; cursor: pointer; font-size: 23px;" href="#">Laundry Jone</a>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fas fa-list"></i>
                </button>
            </div>
            
        </div>

        <!-- Navbar -> min Medium Screen -->
        <div class="d-none d-md-block">
            <div class="row justify-content-between py-3 ">
                <div class="col-md-3">
                    <div class="d-flex">
                        <a style="text-decoration: none; color: black; cursor: pointer; font-size: 23px;" href="#">Laundry Jone</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="mx-2 my-2" style="text-decoration: none; color: black; cursor: pointer;">
                            Tentang Kami
                        </a>
                        <a href="#" class="mx-2 my-2" style="text-decoration: none; color: black; cursor: pointer;">
                            Blog
                        </a>
                        <a href="#" class="mx-2 my-2" style="text-decoration: none; color: black; cursor: pointer;">
                            Franchise
                        </a>
                        <a href="#" class="mx-2 my-2" style="text-decoration: none; color: black; cursor: pointer;">
                            Karir
                        </a>
                        <a href="#" class="mx-2 my-2" style="text-decoration: none; color: black; cursor: pointer;">
                            Kontak
                        </a>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</nav>

<!-- Menu modal in less Medium Screen -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-2" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <ul class="list-group text-center">
                <a href="#" class="list-group-item list-group-item-action">
                    Tentang Kami
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Blog
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Franchise
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Karir
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Kontak Kami
                </a>
                <li class="list-group-item">
                    <button 
                        type="button" 
                        class="btn w-100 text-danger" 
                        data-dismiss="modal" 
                        aria-label="Close"
                    >
                        <span aria-hidden="true">tutup</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>