@extends('layouts.app')
@section('css')
	<!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/datta-able/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/datta-able/plugins/chart-morris/css/morris.css') }}">
    <style>
        .contact-section h2, .contact-section h3{
            color: white;
            font-weight: 800;
            font-size: 30px;
        }
        .donate-contact-section h2, .donate-contact-section h3{
            color: white;
            font-weight: 900;
            font-size: 20px;
        }
        #seek-help-circle{
            margin-top: 100px;
        }
        #seek-help text{
            color: white;
        }
    </style>
@endsection

@section('content')
<div style="height: 100px" id="contact"></div>
<div class="container">
    <div  class="row">
        <div class="contact-section col-lg-3">
            <h2 style="color: #67A85B">Contact us</h2>
            <h3>01743874471</h3>
            <h3>01688284976</h3>
            <h3>01741934933</h3>
            <h3>01310854516</h3>
            <h3>01633138396</h3>
            <h3>01889463363</h3>
        </div>
        <div class="contact-section col-lg-9 pl-5">
            <h2>## We Call this Gift rather Helpful</h2>
            <h2>## We don't reveal their faces</h2>
            <h2>## We contact every single family</h2>
            <h2>## We try to secure them for at least 15-30 days</h2>
            <img src="{{ asset('public/images/logo.png')}}" class="img-fluid ml-5 mt-3">
        </div>
    </div>
    <div id="donation" style="height: 100px"></div>
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="donate-contact-section col-lg-4">
                    <div class="row">
                        <h2 style="color: #67A85B">Donate here</h2>
                        <h3><span style="color: #D15FA5">Bkash: </span> 01741934933</h3>
                        <h3><span style="color: #B96105">Rocket: </span> 016873253255</h3>
                        <h3><span style="color: #7F83FD">Nogod: </span>01687325925</h3>
                    </div>
                    <div class="row mt-5">
                        <a href="{{url('donation-list')}}"><button class="btn" style="background-color: #00ff00; font-size: 20px; font-weight: bold;">List of donation collected</button></a>
                    </div>
                    <div class="row mt-5">
                        <a href="{{url('donated-list')}}"><button class="btn btn-primary" style="font-size: 20px; font-weight: bold;">List of donation used</button></a>
                    </div>
                    <div class="row">
                        <div class="col-12" id="seek-help-circle">
                            <div id="seek-help" style="height:200px; color: white"></div>
                            <div class="text-center" style="font-size: 24px">Donations remain for families</div>
                        </div>
                    </div>
                </div>
                <div class="donate-contact-section col-lg-8">
                    <div class="col-12">
                        <div id="chart-pie-basic" style="width: 100%; height: 500px;"></div>
                    </div>
                    <div class="col-12">
                        <div id="helped" style="height:200px"></div>
                        <div class="text-center" style="font-size: 24px">Families being saved for 1 month</div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20%;">
                <h2 style="color: white; font-size: 40px; font-weight: 800; margin-top: 3%;">With us:</h2>
                <img src="{{asset('public/images/bo.png')}}" style="height: 130px; margin: 0 5%;">
                <img src="{{asset('public/images/bo.png')}}" style="height: 130px; margin: 0 5%;">
                <img src="{{asset('public/images/bo.png')}}" style="height: 130px; margin: 0 5%;">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-12">
                    <div id="not-helped" style="height:230px"></div>
                    <div class="text-center" style="font-size: 26px; color: red; font-weight: bold;">Families starving!</div>
                </div>
            </div>
            <div class="row" style="margin-top: 25%; margin-left: 25%">
                <img src="{{asset('public/images/logo.png')}}">
            </div>
            <div class="row" style="margin-top: 25%;">
                <div class="col-12">
                    <h1 style="text-align: right; color: white; font-size: 50px; font-weight: 800">Inform us</h1>
                    <h2 style="text-align: right; color: #D3D67B; font-size: 50px; font-weight: 800">where people are starving</h2>
                    <h1 style="text-align: right; color: white; font-size: 50px; font-weight: 800; margin-top: 20%;">Help us</h1>
                    <h2 style="text-align: right; color: #D3D67B; font-size: 50px; font-weight: 800">TO feed who are starving</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="activities" style="height: 70px"></div>
    <div class="row">
        <img src="{{asset('public/images/logo.png')}}" style="height: 200px; margin-left: 10%" class="mr-auto">
        <img src="{{asset('public/images/logo.png')}}" style="height: 150px; margin-right: 10%" class="ml-auto">
        <div class="col-12">
            <h1 style="text-align: center; margin-top: 5%; font-size: 70px; font-weight: 800; color: white">Some visuals of our activities</h1>
        </div>
        <div class="col-12 mt-5">
            @for($i=1; $i<=21; $i++)
                <img src="{{asset('public/images/helps')}}/{{$i}}.png">
            @endfor
        </div>
    </div>
    <div id="beside-us" style="height: 70px"></div>
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center; margin-top: 5%; font-size: 60px; font-weight: 800; color: #FFF484">Artists and People Who supported us to get this Donation</h1>
        </div>
        <div class="col-12 mt-5">
            @for($i=1; $i<=28; $i++)
                <img src="{{asset('public/images/helpers')}}/{{$i}}.jpg" style="max-height: 250px;">
            @endfor
        </div>
        <div class="col-12">
            <h1 style="text-align: center; margin-top: 5%; font-size: 50px; font-weight: 800; color: #FFF484">Without their support, We could not reach this far.</h1>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('public/datta-able/plugins/chart-echarts/js/echarts-en.min.js') }}"></script>
<script src="{{ asset('public/datta-able/plugins/chart-morris/js/raphael.min.js') }}"></script>
<script src="{{ asset('public/datta-able/plugins/chart-morris/js/morris.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
	setTimeout(function() {
    	// [ Donut-chart ] Start
        var graph = Morris.Donut({
            element: 'seek-help',
            data: [{
                    value: 22,
                    label: '22'
                }
            ],
            colors: [
                '#58CC60'
            ],
            resize: true,
            formatter: function(x) {
                return ''
            }
        });
        $("#seek-help").find("text").attr("fill", "#ffffff").css("font-size", "32px").css("margin-top", "10px");
    }, 700);

	setTimeout(function() {
    	// [ Donut-chart ] Start
        var graph = Morris.Donut({
            element: 'helped',
            data: [{
                    value: 14,
                    label: '14'
                }
            ],
            colors: [
                '#C1FE00'
            ],
            resize: true,
            formatter: function(x) {
                return ''
            }
        });
        $("#helped").find("text").attr("fill", "#ffffff").css("font-size", "32px").css("margin-top", "10px");
    }, 700);

    setTimeout(function() {
        var dom = document.getElementById("chart-pie-basic");
        var myChart = echarts.init(dom);
        var app = {};
        option = null;
        option = {
            tooltip: {
                trigger: 'item',
                formatter: "{b} : {c} ({d}%)"
            },
            color: ['#f4c22b', '#A389D4', '#3ebfea'],
            calculable: true,
            series: [{
                type: 'pie',
                radius: '65%',
                center: ['55%', '45%'],
                data: [{
                        value: 21973,
                        name: 'In fund 21973'
                    },
                    {
                        value: 36705,
                        name: 'Used 36705'
                    },
                    {
                        value: 58678,
                        name: 'Due 58678'
                    }
                ]
            }]
        };
        myChart.setOption(option, true);
    }, 700);
    // [ basic-pie-chart ] end

	setTimeout(function() {
    	// [ Donut-chart ] Start
        var graph = Morris.Donut({
            element: 'not-helped',
            data: [{
                    value: 368,
                    label: '368'
                }
            ],
            colors: [
                '#FF6364'
            ],
            resize: true,
            formatter: function(x) {
                return ''
            }
        });
        $("#not-helped").find("text").attr("fill", "#ffffff").css("font-size", "32px").css("margin-top", "10px");
    }, 700);
});
</script>
@endsection