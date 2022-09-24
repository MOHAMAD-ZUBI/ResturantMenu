@extends('layout.endbase')
@section('title','Dashboard')
@section('content')
    <div id="content-wrapper">
        <div id="content-fluid">
            <div class="box-container">
                <div class="box bg-info">
                    <div class="disc">
                        <h2>100</h2>
                        <h5>New Orders</h5>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                </div>
                <div class="box bg-danger">
                    <div class="disc">
                        <h2>@foreach($projects as $project)
                                {{$project->views}}
                            @endforeach</h2>
                        <h5>Unique Visitors</h5>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                </div>
                <div class="box bg-primary">
                    <div class="disc">
                        <h2>{{$products->count()}}</h2>
                        <h5>Total Dishes</h5>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-pizza-slice"></i>
                    </div>
                </div>
                <div class="box bg-success">
                    <div class="disc">
                        <h2>200$</h2>
                        <h5>Earnings</h5>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
