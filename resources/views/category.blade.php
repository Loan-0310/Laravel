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
                    <div class="card-body p-4" style="text-align: center;"> 
                        <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h3 class="font-weight-bold" style="text-align: center;">Danh Sách Danh Mục</h3>

                                    <table class="table container mx-auto">
                                        <thead>
                                            <tr style="font-size: larger;">
                                                <th>STT</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($category as $cat)
                                            <tr>
                                                <td scope="row">{{$cat->id}}</td>
                                                <td>{{$cat->name}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <hr>
                                    {{$category->links()}}
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
