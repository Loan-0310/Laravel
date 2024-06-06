<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Umi Admin</title>
    <link rel="stylesheet" href="sites/vendors/feather/feather.css">
    <link rel="stylesheet" href="sites/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="sites/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="sites/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="sites/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="sites/js/select.dataTables.min.css">
    <link rel="stylesheet" href="sites/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="sites/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">

    <style>
        .card {
            max-width: 800px;
            /* Đặt chiều rộng tối đa cho card */
            margin: 0 auto;
            /* Căn giữa card trên màn hình */
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <x-aside />
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="grid-margin">
                    <h3 class="font-weight-bold">Chỉnh Sửa Sản Phẩm</h3>
                    <h6 class="font-weight-normal mb-0"> <span class="text-primary"></span></h6>
                </div>

                <div class="grid-margin stretch-card">
                    <div class="card position-relative mx-auto">
                        <div class="card-body p-4">
                            <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">

                                        <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST" role="form">
                                            @csrf  @method('PUT')

                                            <div class="form-group">
                                                <label for="">Tên Sản Phẩm</label>
                                                <input type="text" class="form-control" value="{{ $product->name}}" name="name" placeholder="Input name">
                                            </div>
                                            @error('name')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                            <br>
                                            <div class="form-group">
                                                <label for="">Giá </label>
                                                <input type="text" class="form-control" value="{{ $product->price}}" name="price" placeholder="Input price">
                                            </div>
                                            @error('price')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                            <br>
                                            <div class="form-group">
                                                <label for="">Giảm Giá (nếu có) </label>
                                                <input type="text" class="form-control" value="{{ $product->sale_price}}" name="sale_price" placeholder="Input sale_price">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="">Hình Ảnh </label>
                                                <input type="text" class="form-control" value="{{ $product->image}}" name="image" placeholder="Input image">
                                            </div>
                                            @error('image')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                            <br>
                                            <div class="form-group">
                                                <label for="">Đánh Giá / Nhận xét </label>
                                                <input type="text" class="form-control" value="{{ $product->description}}" name="description" placeholder="Input description">
                                            </div>
                                            @error('description')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                            <br>
                                            <div class="form-group">
                                                <label for="">Danh Mục </label>
                                                <input type="text" class="form-control" value="{{ $product->category_id}}" name="category_id" placeholder="Input category">
                                            </div>
                                            @error('category_id')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                            <br>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a href="https://www.bootstrapdash.com/" target="_blank"></a></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="ti-heart text-danger ml-1"></i></span>
            </div>
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a href="https://www.themewagon.com/" target="_blank"></a></span>
            </div>
        </footer>
        <script src="sites/vendors/js/vendor.bundle.base.js"></script>
        <script src="sites/vendors/chart.js/Chart.min.js"></script>
        <script src="sites/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="sites/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="sites/js/dataTables.select.min.js"></script>
        <script src="sites/js/off-canvas.js"></script>
        <script src="sites/js/hoverable-collapse.js"></script>
        <script src="sites/js/template.js"></script>
        <script src="sites/js/settings.js"></script>
        <script src="sites/js/todolist.js"></script>
        <script src="sites/js/dashboard.js"></script>
        <script src="sites/js/Chart.roundedBarCharts.js"></script>
    </div>
</body>

</html>