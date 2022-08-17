@extends('layout.endbase')
@section('title','Dashboard')
@section('content')

    <div class="content-wrapper" style="margin-top: 20px">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>
                        @foreach($projects as $project)
                            {{$project->views}}
                        @endforeach
                    </h3>
                    <p>
                        Unique Visitors
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            </div>
            <div class="small-box bg-maroon">
                <div class="inner">
                    <h3>
                        {{$products->count()}}
                    </h3>
                    <p>
                        Products
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-pricetag-outline"></i>
                </div>
            </div>
        </div>

    </div>
@endsection
