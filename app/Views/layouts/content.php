<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Tables</h4>
                    
                    <!-- Navigation Tabs -->
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#home-content" role="tab" aria-controls="home-content" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border-0" id="keranjang-tab" data-bs-toggle="tab" href="#keranjang-content" role="tab" aria-selected="false">Keranjang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="produk-tab" data-bs-toggle="tab" href="#produk-content" role="tab" aria-selected="false">Produk</a>
                                </li>
                            </ul>
                            <div>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share Report</a>
                                    <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Generate Report</a>
                                    <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export Data</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- HOME TAB CONTENT -->
                        <div class="tab-pane fade show active" id="home-content" role="tabpanel" aria-labelledby="home-tab">
                            <div class="mt-4">
                                
                                <div class="row mt-4">
                                    <div class="col-md-6 mb-4">
                                        <div class="card product-card h-100">
                                            <div class="card-body text-center">
                                                <img src="path/to/asus-tuf.jpg" alt="ASUS TUF A15" class="img-fluid mb-3">
                                                <h5 class="card-title">ASUS TUF A15 FA506NF</h5>
                                                <p class="card-text text-primary fw-bold">IDR 10,999,000</p>
                                                <button class="btn btn-info">Beli</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-4">
                                        <div class="card product-card h-100">
                                            <div class="card-body text-center">
                                                <img src="path/to/asus-vivobook.jpg" alt="Asus Vivobook 14" class="img-fluid mb-3">
                                                <h5 class="card-title">Asus Vivobook 14 A1404ZA</h5>
                                                <p class="card-text text-primary fw-bold">IDR 6,899,000</p>
                                                <button class="btn btn-info">Beli</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- KERANJANG TAB CONTENT -->
                        <div class="tab-pane fade" id="keranjang-content" role="tabpanel" aria-labelledby="keranjang-tab">
                            <div class="mt-4">
                                
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="data-tables-entries">
                                        <select class="form-select" style="width: auto; display: inline-block;">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                        </select> entries per page
                                    </div>
                                    <div class="data-tables-search">
                                        <input type="text" class="form-control" placeholder="Search..." style="width: 250px;">
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Foto</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Subtotal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ASUS TUF A15 FA506NF</td>
                                                <td>
                                                    <img src="path/to/asus-tuf.jpg" alt="ASUS TUF" style="width: 60px; height: 45px; object-fit: cover;">
                                                </td>
                                                <td>IDR 10,999,000</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <button class="btn btn-outline-secondary btn-sm me-1" type="button">-</button>
                                                        <input type="number" class="form-control text-center" value="1" style="width: 60px;" min="1">
                                                        <button class="btn btn-outline-secondary btn-sm ms-1" type="button">+</button>
                                                    </div>
                                                </td>
                                                <td class="fw-bold">IDR 10,999,000</td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="icon-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Asus Vivobook 14 A1404ZA</td>
                                                <td>
                                                    <img src="path/to/asus-vivobook.jpg" alt="Asus Vivobook" style="width: 60px; height: 45px; object-fit: cover;">
                                                </td>
                                                <td>IDR 6,899,000</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <button class="btn btn-outline-secondary btn-sm me-1" type="button">-</button>
                                                        <input type="number" class="form-control text-center" value="1" style="width: 60px;" min="1">
                                                        <button class="btn btn-outline-secondary btn-sm ms-1" type="button">+</button>
                                                    </div>
                                                </td>
                                                <td class="fw-bold">IDR 6,899,000</td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="icon-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="row mt-4">
                                    <div class="col-md-8">
                                        <p class="text-muted">Showing 1 to 2 of 2 entries</p>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info text-center mt-3">
                                    <h5 class="mb-0">Total = IDR 17,898,000</h5>
                                </div>
                                
                                <div class="d-flex justify-content-start mt-3">
                                    <button class="btn btn-primary me-2">Perbarui Keranjang</button>
                                    <button class="btn btn-warning text-white me-2">Kosongkan Keranjang</button>
                                    <button class="btn btn-success">Selesai Belanja</button>
                                </div>
                            </div>
                        </div>

                        <!-- PRODUK TAB CONTENT -->
                        <div class="tab-pane fade" id="produk-content" role="tabpanel" aria-labelledby="produk-tab">
                            <div class="mt-4">
                                <div class="mb-3">
                                    <button class="btn btn-primary me-2">Tambah Data</button>
                                    <button class="btn btn-success">Download Data</button>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="data-tables-entries">
                                        Show <select>
                                            <option>10</option>
                                            <option>25</option>
                                            <option>50</option>
                                        </select> entries per page
                                    </div>
                                    <div class="data-tables-search">
                                        <input type="text" class="form-control" placeholder="Search...">
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>ASUS TUF A15 FA506NF</td>
                                                <td>10999000</td>
                                                <td>5</td>
                                                <td><img src="path/to/asus-tuf.jpg" alt="ASUS TUF"></td>
                                                <td>
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="icon-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="icon-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Asus Vivobook 14 A1404ZA</td>
                                                <td>6899000</td>
                                                <td>7</td>
                                                <td><img src="path/to/asus-vivobook.jpg" alt="Asus Vivobook"></td>
                                                <td>
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="icon-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="icon-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Lenovo IdeaPad Slim 3-14IAU7</td>
                                                <td>6299000</td>
                                                <td>5</td>
                                                <td><img src="path/to/lenovo-ideapad.jpg" alt="Lenovo IdeaPad"></td>
                                                <td>
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="icon-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="icon-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>