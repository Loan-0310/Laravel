<!DOCTYPE html>
<html lang="en">

<x-head />

<body class="hompage bg-accent-light">

    <x-header />

    <div class="main-panel container">
        <div class="content-wrapper">
            <div class="grid-margin">
                <h6 class="font-weight-normal mb-0"> <span class="text-primary"></span></h6>
            </div>
            <div class="grid-margin stretch-card">
                <div class="card position-relative mx-auto">
                    <div class="card-body p-4">
                        <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h3 class="font-weight-bold" style="text-align: center;">Danh Sách Sản Phẩm</h3>

                                    <!-- Sử dụng lớp CSS "mx-auto" để căn giữa -->
                                    <table class="container table mx-auto">
                                        <thead>
                                            <tr style="font-size: larger;">
                                                <th>STT</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Descriotion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($product as $pr)
                                            <tr>
                                                <td scope="row">{{$pr->id}}</td>
                                                <td>{{$pr->name}}</td>
                                                <td>{{$pr->price}}</td>
                                                <td><img src="{{$pr->image}}" alt="" width="100px" height="200px"></td>
                                                <td>{{$pr->description}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <hr>
                                    {{$product->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
</body>

</html>
