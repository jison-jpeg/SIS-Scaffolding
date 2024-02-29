@extends('layouts.app')
@section('pageTitle', 'Dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">@yield('pageTitle')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Students</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-mortarboard"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $studentCount }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Subjects</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $subjectCount }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Users</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $studentCount }}</h6>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Reports <span>/Today</span></h5>

                                <!-- Line Chart -->
                                <div id="reportsChart" style="min-height: 365px;">
                                    <div id="apexcharts4pclhmizk"
                                        class="apexcharts-canvas apexcharts4pclhmizk apexcharts-theme-light"
                                        style="width: 692px; height: 350px;"><svg id="SvgjsSvg1156" width="692"
                                            height="350" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <foreignObject x="0" y="0" width="692" height="350">
                                                <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                    style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                                    <div class="apexcharts-legend-series" rel="1"
                                                        seriesname="Sales" data:collapsed="false"
                                                        style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                            rel="1" data:collapsed="false"
                                                            style="background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="1" i="0"
                                                            data:default-text="Sales" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="2"
                                                        seriesname="Revenue" data:collapsed="false"
                                                        style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                            rel="2" data:collapsed="false"
                                                            style="background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="2" i="1"
                                                            data:default-text="Revenue" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="3"
                                                        seriesname="Customers" data:collapsed="false"
                                                        style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                            rel="3" data:collapsed="false"
                                                            style="background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="3" i="2"
                                                            data:default-text="Customers" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Customers</span>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .apexcharts-legend {
                                                        display: flex;
                                                        overflow: auto;
                                                        padding: 0 10px;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom,
                                                    .apexcharts-legend.apx-legend-position-top {
                                                        flex-wrap: wrap
                                                    }

                                                    .apexcharts-legend.apx-legend-position-right,
                                                    .apexcharts-legend.apx-legend-position-left {
                                                        flex-direction: column;
                                                        bottom: 0;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                    .apexcharts-legend.apx-legend-position-right,
                                                    .apexcharts-legend.apx-legend-position-left {
                                                        justify-content: flex-start;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                        justify-content: center;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                        justify-content: flex-end;
                                                    }

                                                    .apexcharts-legend-series {
                                                        cursor: pointer;
                                                        line-height: normal;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                    .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                        display: flex;
                                                        align-items: center;
                                                    }

                                                    .apexcharts-legend-text {
                                                        position: relative;
                                                        font-size: 14px;
                                                    }

                                                    .apexcharts-legend-text *,
                                                    .apexcharts-legend-marker * {
                                                        pointer-events: none;
                                                    }

                                                    .apexcharts-legend-marker {
                                                        position: relative;
                                                        display: inline-block;
                                                        cursor: pointer;
                                                        margin-right: 3px;
                                                        border-style: solid;
                                                    }

                                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                    .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                        display: inline-block;
                                                    }

                                                    .apexcharts-legend-series.apexcharts-no-click {
                                                        cursor: auto;
                                                    }

                                                    .apexcharts-legend .apexcharts-hidden-zero-series,
                                                    .apexcharts-legend .apexcharts-hidden-null-series {
                                                        display: none !important;
                                                    }

                                                    .apexcharts-inactive-legend {
                                                        opacity: 0.45;
                                                    }
                                                </style>
                                            </foreignObject>
                                            <rect id="SvgjsRect1162" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1281" class="apexcharts-yaxis" rel="0"
                                                transform="translate(15.359375, 0)">
                                                <g id="SvgjsG1282" class="apexcharts-yaxis-texts-g"><text
                                                        id="SvgjsText1284" font-family="Helvetica, Arial, sans-serif"
                                                        x="20" y="31.5" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1285">100</tspan>
                                                        <title>100</title>
                                                    </text><text id="SvgjsText1287"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="85.53999999999999" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1288">80</tspan>
                                                        <title>80</title>
                                                    </text><text id="SvgjsText1290"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="139.57999999999998" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1291">60</tspan>
                                                        <title>60</title>
                                                    </text><text id="SvgjsText1293"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="193.61999999999998" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1294">40</tspan>
                                                        <title>40</title>
                                                    </text><text id="SvgjsText1296"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="247.65999999999997" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1297">20</tspan>
                                                        <title>20</title>
                                                    </text><text id="SvgjsText1299"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="301.7"
                                                        text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1300">0</tspan>
                                                        <title>0</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1158" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(45.359375, 30)">
                                                <defs id="SvgjsDefs1157">
                                                    <clipPath id="gridRectMask4pclhmizk">
                                                        <rect id="SvgjsRect1167" width="642.640625" height="272.2" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask4pclhmizk"></clipPath>
                                                    <clipPath id="nonForecastMask4pclhmizk"></clipPath>
                                                    <clipPath id="gridRectMarkerMask4pclhmizk">
                                                        <rect id="SvgjsRect1168" width="684.640625" height="318.2"
                                                            x="-24" y="-24" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1186" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1187" stop-opacity="0.3"
                                                            stop-color="rgba(65,84,241,0.3)" offset="0"></stop>
                                                        <stop id="SvgjsStop1188" stop-opacity="0.4"
                                                            stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                        <stop id="SvgjsStop1189" stop-opacity="0.4"
                                                            stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1208" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1209" stop-opacity="0.3"
                                                            stop-color="rgba(46,202,106,0.3)" offset="0"></stop>
                                                        <stop id="SvgjsStop1210" stop-opacity="0.4"
                                                            stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                        <stop id="SvgjsStop1211" stop-opacity="0.4"
                                                            stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1230" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1231" stop-opacity="0.3"
                                                            stop-color="rgba(255,119,29,0.3)" offset="0"></stop>
                                                        <stop id="SvgjsStop1232" stop-opacity="0.4"
                                                            stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                        <stop id="SvgjsStop1233" stop-opacity="0.4"
                                                            stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1163" x1="0" y1="0" x2="0"
                                                    y2="270.2" stroke="#b6b6b6" stroke-dasharray="3"
                                                    stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="270.2" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <line id="SvgjsLine1240" x1="0" y1="271.2" x2="0"
                                                    y2="277.2" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1241" x1="97.94471153846155" y1="271.2"
                                                    x2="97.94471153846155" y2="277.2" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1242" x1="195.8894230769231" y1="271.2"
                                                    x2="195.8894230769231" y2="277.2" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1243" x1="293.83413461538464" y1="271.2"
                                                    x2="293.83413461538464" y2="277.2" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1244" x1="391.7788461538462" y1="271.2"
                                                    x2="391.7788461538462" y2="277.2" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1245" x1="489.72355769230774" y1="271.2"
                                                    x2="489.72355769230774" y2="277.2" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1246" x1="587.6682692307693" y1="271.2"
                                                    x2="587.6682692307693" y2="277.2" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <g id="SvgjsG1236" class="apexcharts-grid">
                                                    <g id="SvgjsG1237" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1248" x1="0" y1="54.04"
                                                            x2="636.640625" y2="54.04" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1249" x1="0" y1="108.08"
                                                            x2="636.640625" y2="108.08" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1250" x1="0" y1="162.12"
                                                            x2="636.640625" y2="162.12" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1251" x1="0" y1="216.16"
                                                            x2="636.640625" y2="216.16" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1238" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1254" x1="0" y1="270.2"
                                                        x2="636.640625" y2="270.2" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1253" x1="0" y1="1"
                                                        x2="0" y2="270.2" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1239" class="apexcharts-grid-borders">
                                                    <line id="SvgjsLine1247" x1="0" y1="0"
                                                        x2="636.640625" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1252" x1="0" y1="270.2"
                                                        x2="636.640625" y2="270.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1280" x1="0" y1="271.2"
                                                        x2="636.640625" y2="271.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1169" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1170" class="apexcharts-series" seriesName="Sales"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1190"
                                                            d="M 0 270.2 L 0 186.438C 51.4209735576923 186.438 95.49609375 162.12 146.9170673076923 162.12C 181.1977163461538 162.12 210.5811298076923 194.54399999999998 244.8617788461538 194.54399999999998C 279.14242788461536 194.54399999999998 308.5258413461538 132.398 342.80649038461536 132.398C 377.0871394230769 132.398 406.47055288461536 156.716 440.7512019230769 156.716C 475.03185096153845 156.716 504.4152644230769 48.635999999999996 538.6959134615385 48.635999999999996C 572.9765625 48.635999999999996 602.3599759615383 118.88799999999998 636.6406249999999 118.88799999999998C 636.6406249999999 118.88799999999998 636.6406249999999 118.88799999999998 636.6406249999999 270.2M 636.6406249999999 118.88799999999998z"
                                                            fill="url(#SvgjsLinearGradient1186)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMask4pclhmizk)"
                                                            pathTo="M 0 270.2 L 0 186.438C 51.4209735576923 186.438 95.49609375 162.12 146.9170673076923 162.12C 181.1977163461538 162.12 210.5811298076923 194.54399999999998 244.8617788461538 194.54399999999998C 279.14242788461536 194.54399999999998 308.5258413461538 132.398 342.80649038461536 132.398C 377.0871394230769 132.398 406.47055288461536 156.716 440.7512019230769 156.716C 475.03185096153845 156.716 504.4152644230769 48.635999999999996 538.6959134615385 48.635999999999996C 572.9765625 48.635999999999996 602.3599759615383 118.88799999999998 636.6406249999999 118.88799999999998C 636.6406249999999 118.88799999999998 636.6406249999999 118.88799999999998 636.6406249999999 270.2M 636.6406249999999 118.88799999999998z"
                                                            pathFrom="M -1 270.2 L -1 270.2 L 146.9170673076923 270.2 L 244.8617788461538 270.2 L 342.80649038461536 270.2 L 440.7512019230769 270.2 L 538.6959134615385 270.2 L 636.6406249999999 270.2">
                                                        </path>
                                                        <path id="SvgjsPath1191"
                                                            d="M 0 186.438C 51.4209735576923 186.438 95.49609375 162.12 146.9170673076923 162.12C 181.1977163461538 162.12 210.5811298076923 194.54399999999998 244.8617788461538 194.54399999999998C 279.14242788461536 194.54399999999998 308.5258413461538 132.398 342.80649038461536 132.398C 377.0871394230769 132.398 406.47055288461536 156.716 440.7512019230769 156.716C 475.03185096153845 156.716 504.4152644230769 48.635999999999996 538.6959134615385 48.635999999999996C 572.9765625 48.635999999999996 602.3599759615383 118.88799999999998 636.6406249999999 118.88799999999998"
                                                            fill="none" fill-opacity="1" stroke="#4154f1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMask4pclhmizk)"
                                                            pathTo="M 0 186.438C 51.4209735576923 186.438 95.49609375 162.12 146.9170673076923 162.12C 181.1977163461538 162.12 210.5811298076923 194.54399999999998 244.8617788461538 194.54399999999998C 279.14242788461536 194.54399999999998 308.5258413461538 132.398 342.80649038461536 132.398C 377.0871394230769 132.398 406.47055288461536 156.716 440.7512019230769 156.716C 475.03185096153845 156.716 504.4152644230769 48.635999999999996 538.6959134615385 48.635999999999996C 572.9765625 48.635999999999996 602.3599759615383 118.88799999999998 636.6406249999999 118.88799999999998"
                                                            pathFrom="M -1 270.2 L -1 270.2 L 146.9170673076923 270.2 L 244.8617788461538 270.2 L 342.80649038461536 270.2 L 440.7512019230769 270.2 L 538.6959134615385 270.2 L 636.6406249999999 270.2"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1171"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g id="SvgjsG1173" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1174" r="4" cx="0"
                                                                    cy="186.438"
                                                                    class="apexcharts-marker no-pointer-events wq9blt1da"
                                                                    stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                    j="0" index="0" default-marker-size="4"></circle>
                                                                <circle id="SvgjsCircle1175" r="4" cx="146.9170673076923"
                                                                    cy="162.12"
                                                                    class="apexcharts-marker no-pointer-events w77xx8ayxg"
                                                                    stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                    j="1" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1176" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1177" r="4" cx="244.8617788461538"
                                                                    cy="194.54399999999998"
                                                                    class="apexcharts-marker no-pointer-events wakoyakcc"
                                                                    stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                    j="2" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1178" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1179" r="4" cx="342.80649038461536"
                                                                    cy="132.398"
                                                                    class="apexcharts-marker no-pointer-events wk17gkc7xl"
                                                                    stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                    j="3" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1180" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1181" r="4" cx="440.7512019230769"
                                                                    cy="156.716"
                                                                    class="apexcharts-marker no-pointer-events wam3t6lcgk"
                                                                    stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                    j="4" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1182" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1183" r="4" cx="538.6959134615385"
                                                                    cy="48.635999999999996"
                                                                    class="apexcharts-marker no-pointer-events weuqvcvsp"
                                                                    stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                    j="5" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1184" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1185" r="4" cx="636.6406249999999"
                                                                    cy="118.88799999999998"
                                                                    class="apexcharts-marker no-pointer-events wavo9pg83j"
                                                                    stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                    j="6" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1192" class="apexcharts-series" seriesName="Revenue"
                                                        data:longestSeries="true" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1212"
                                                            d="M 0 270.2 L 0 240.47799999999998C 51.4209735576923 240.47799999999998 95.49609375 183.736 146.9170673076923 183.736C 181.1977163461538 183.736 210.5811298076923 148.60999999999999 244.8617788461538 148.60999999999999C 279.14242788461536 148.60999999999999 308.5258413461538 183.736 342.80649038461536 183.736C 377.0871394230769 183.736 406.47055288461536 178.332 440.7512019230769 178.332C 475.03185096153845 178.332 504.4152644230769 129.696 538.6959134615385 129.696C 572.9765625 129.696 602.3599759615383 159.418 636.6406249999999 159.418C 636.6406249999999 159.418 636.6406249999999 159.418 636.6406249999999 270.2M 636.6406249999999 159.418z"
                                                            fill="url(#SvgjsLinearGradient1208)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="1"
                                                            clip-path="url(#gridRectMask4pclhmizk)"
                                                            pathTo="M 0 270.2 L 0 240.47799999999998C 51.4209735576923 240.47799999999998 95.49609375 183.736 146.9170673076923 183.736C 181.1977163461538 183.736 210.5811298076923 148.60999999999999 244.8617788461538 148.60999999999999C 279.14242788461536 148.60999999999999 308.5258413461538 183.736 342.80649038461536 183.736C 377.0871394230769 183.736 406.47055288461536 178.332 440.7512019230769 178.332C 475.03185096153845 178.332 504.4152644230769 129.696 538.6959134615385 129.696C 572.9765625 129.696 602.3599759615383 159.418 636.6406249999999 159.418C 636.6406249999999 159.418 636.6406249999999 159.418 636.6406249999999 270.2M 636.6406249999999 159.418z"
                                                            pathFrom="M -1 270.2 L -1 270.2 L 146.9170673076923 270.2 L 244.8617788461538 270.2 L 342.80649038461536 270.2 L 440.7512019230769 270.2 L 538.6959134615385 270.2 L 636.6406249999999 270.2">
                                                        </path>
                                                        <path id="SvgjsPath1213"
                                                            d="M 0 240.47799999999998C 51.4209735576923 240.47799999999998 95.49609375 183.736 146.9170673076923 183.736C 181.1977163461538 183.736 210.5811298076923 148.60999999999999 244.8617788461538 148.60999999999999C 279.14242788461536 148.60999999999999 308.5258413461538 183.736 342.80649038461536 183.736C 377.0871394230769 183.736 406.47055288461536 178.332 440.7512019230769 178.332C 475.03185096153845 178.332 504.4152644230769 129.696 538.6959134615385 129.696C 572.9765625 129.696 602.3599759615383 159.418 636.6406249999999 159.418"
                                                            fill="none" fill-opacity="1" stroke="#2eca6a"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="1"
                                                            clip-path="url(#gridRectMask4pclhmizk)"
                                                            pathTo="M 0 240.47799999999998C 51.4209735576923 240.47799999999998 95.49609375 183.736 146.9170673076923 183.736C 181.1977163461538 183.736 210.5811298076923 148.60999999999999 244.8617788461538 148.60999999999999C 279.14242788461536 148.60999999999999 308.5258413461538 183.736 342.80649038461536 183.736C 377.0871394230769 183.736 406.47055288461536 178.332 440.7512019230769 178.332C 475.03185096153845 178.332 504.4152644230769 129.696 538.6959134615385 129.696C 572.9765625 129.696 602.3599759615383 159.418 636.6406249999999 159.418"
                                                            pathFrom="M -1 270.2 L -1 270.2 L 146.9170673076923 270.2 L 244.8617788461538 270.2 L 342.80649038461536 270.2 L 440.7512019230769 270.2 L 538.6959134615385 270.2 L 636.6406249999999 270.2"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1193"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="1">
                                                            <g id="SvgjsG1195" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1196" r="4" cx="0"
                                                                    cy="240.47799999999998"
                                                                    class="apexcharts-marker no-pointer-events wyjxejd4mk"
                                                                    stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                    j="0" index="1" default-marker-size="4"></circle>
                                                                <circle id="SvgjsCircle1197" r="4" cx="146.9170673076923"
                                                                    cy="183.736"
                                                                    class="apexcharts-marker no-pointer-events w4jh6zmukl"
                                                                    stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                    j="1" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1198" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1199" r="4" cx="244.8617788461538"
                                                                    cy="148.60999999999999"
                                                                    class="apexcharts-marker no-pointer-events wsqow7vwsj"
                                                                    stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                    j="2" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1200" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1201" r="4" cx="342.80649038461536"
                                                                    cy="183.736"
                                                                    class="apexcharts-marker no-pointer-events wsuxd6ajf"
                                                                    stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                    j="3" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1202" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1203" r="4" cx="440.7512019230769"
                                                                    cy="178.332"
                                                                    class="apexcharts-marker no-pointer-events wb115ft3g"
                                                                    stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                    j="4" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1204" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1205" r="4" cx="538.6959134615385"
                                                                    cy="129.696"
                                                                    class="apexcharts-marker no-pointer-events weqs6g1lu"
                                                                    stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                    j="5" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1206" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1207" r="4" cx="636.6406249999999"
                                                                    cy="159.418"
                                                                    class="apexcharts-marker no-pointer-events wsousjuv6"
                                                                    stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                    j="6" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1214" class="apexcharts-series" seriesName="Customers"
                                                        data:longestSeries="true" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath1234"
                                                            d="M 0 270.2 L 0 229.67C 51.4209735576923 229.67 95.49609375 240.47799999999998 146.9170673076923 240.47799999999998C 181.1977163461538 240.47799999999998 210.5811298076923 183.736 244.8617788461538 183.736C 279.14242788461536 183.736 308.5258413461538 221.564 342.80649038461536 221.564C 377.0871394230769 221.564 406.47055288461536 245.88199999999998 440.7512019230769 245.88199999999998C 475.03185096153845 245.88199999999998 504.4152644230769 205.35199999999998 538.6959134615385 205.35199999999998C 572.9765625 205.35199999999998 602.3599759615383 240.47799999999998 636.6406249999999 240.47799999999998C 636.6406249999999 240.47799999999998 636.6406249999999 240.47799999999998 636.6406249999999 270.2M 636.6406249999999 240.47799999999998z"
                                                            fill="url(#SvgjsLinearGradient1230)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="2"
                                                            clip-path="url(#gridRectMask4pclhmizk)"
                                                            pathTo="M 0 270.2 L 0 229.67C 51.4209735576923 229.67 95.49609375 240.47799999999998 146.9170673076923 240.47799999999998C 181.1977163461538 240.47799999999998 210.5811298076923 183.736 244.8617788461538 183.736C 279.14242788461536 183.736 308.5258413461538 221.564 342.80649038461536 221.564C 377.0871394230769 221.564 406.47055288461536 245.88199999999998 440.7512019230769 245.88199999999998C 475.03185096153845 245.88199999999998 504.4152644230769 205.35199999999998 538.6959134615385 205.35199999999998C 572.9765625 205.35199999999998 602.3599759615383 240.47799999999998 636.6406249999999 240.47799999999998C 636.6406249999999 240.47799999999998 636.6406249999999 240.47799999999998 636.6406249999999 270.2M 636.6406249999999 240.47799999999998z"
                                                            pathFrom="M -1 270.2 L -1 270.2 L 146.9170673076923 270.2 L 244.8617788461538 270.2 L 342.80649038461536 270.2 L 440.7512019230769 270.2 L 538.6959134615385 270.2 L 636.6406249999999 270.2">
                                                        </path>
                                                        <path id="SvgjsPath1235"
                                                            d="M 0 229.67C 51.4209735576923 229.67 95.49609375 240.47799999999998 146.9170673076923 240.47799999999998C 181.1977163461538 240.47799999999998 210.5811298076923 183.736 244.8617788461538 183.736C 279.14242788461536 183.736 308.5258413461538 221.564 342.80649038461536 221.564C 377.0871394230769 221.564 406.47055288461536 245.88199999999998 440.7512019230769 245.88199999999998C 475.03185096153845 245.88199999999998 504.4152644230769 205.35199999999998 538.6959134615385 205.35199999999998C 572.9765625 205.35199999999998 602.3599759615383 240.47799999999998 636.6406249999999 240.47799999999998"
                                                            fill="none" fill-opacity="1" stroke="#ff771d"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="2"
                                                            clip-path="url(#gridRectMask4pclhmizk)"
                                                            pathTo="M 0 229.67C 51.4209735576923 229.67 95.49609375 240.47799999999998 146.9170673076923 240.47799999999998C 181.1977163461538 240.47799999999998 210.5811298076923 183.736 244.8617788461538 183.736C 279.14242788461536 183.736 308.5258413461538 221.564 342.80649038461536 221.564C 377.0871394230769 221.564 406.47055288461536 245.88199999999998 440.7512019230769 245.88199999999998C 475.03185096153845 245.88199999999998 504.4152644230769 205.35199999999998 538.6959134615385 205.35199999999998C 572.9765625 205.35199999999998 602.3599759615383 240.47799999999998 636.6406249999999 240.47799999999998"
                                                            pathFrom="M -1 270.2 L -1 270.2 L 146.9170673076923 270.2 L 244.8617788461538 270.2 L 342.80649038461536 270.2 L 440.7512019230769 270.2 L 538.6959134615385 270.2 L 636.6406249999999 270.2"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1215"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="2">
                                                            <g id="SvgjsG1217" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1218" r="4" cx="0"
                                                                    cy="229.67"
                                                                    class="apexcharts-marker no-pointer-events w3r2s30af"
                                                                    stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                    j="0" index="2" default-marker-size="4"></circle>
                                                                <circle id="SvgjsCircle1219" r="4" cx="146.9170673076923"
                                                                    cy="240.47799999999998"
                                                                    class="apexcharts-marker no-pointer-events w2o6aow52"
                                                                    stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                    j="1" index="2" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1220" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1221" r="4" cx="244.8617788461538"
                                                                    cy="183.736"
                                                                    class="apexcharts-marker no-pointer-events weqp35zfp"
                                                                    stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                    j="2" index="2" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1222" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1223" r="4" cx="342.80649038461536"
                                                                    cy="221.564"
                                                                    class="apexcharts-marker no-pointer-events wgfekd9w7j"
                                                                    stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                    j="3" index="2" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1224" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1225" r="4" cx="440.7512019230769"
                                                                    cy="245.88199999999998"
                                                                    class="apexcharts-marker no-pointer-events w22a80f2l"
                                                                    stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                    j="4" index="2" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1226" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1227" r="4" cx="538.6959134615385"
                                                                    cy="205.35199999999998"
                                                                    class="apexcharts-marker no-pointer-events wmadzr7p"
                                                                    stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                    j="5" index="2" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1228" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask4pclhmizk)">
                                                                <circle id="SvgjsCircle1229" r="4" cx="636.6406249999999"
                                                                    cy="240.47799999999998"
                                                                    class="apexcharts-marker no-pointer-events w3uwfkipf"
                                                                    stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                    j="6" index="2" default-marker-size="4"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1172" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                    <g id="SvgjsG1194" class="apexcharts-datalabels" data:realIndex="1">
                                                    </g>
                                                    <g id="SvgjsG1216" class="apexcharts-datalabels" data:realIndex="2">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1255" x1="0" y1="0" x2="636.640625"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1256" x1="0" y1="0" x2="636.640625"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1257" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1258" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1260"
                                                            font-family="Helvetica, Arial, sans-serif" x="0" y="299.2"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1261">00:00</tspan>
                                                            <title>00:00</title>
                                                        </text><text id="SvgjsText1263"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="97.94471153846155" y="299.2" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1264">01:00</tspan>
                                                            <title>01:00</title>
                                                        </text><text id="SvgjsText1266"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="195.8894230769231" y="299.2" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1267">02:00</tspan>
                                                            <title>02:00</title>
                                                        </text><text id="SvgjsText1269"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="293.83413461538464" y="299.2" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1270">03:00</tspan>
                                                            <title>03:00</title>
                                                        </text><text id="SvgjsText1272"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="391.7788461538462" y="299.2" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1273">04:00</tspan>
                                                            <title>04:00</title>
                                                        </text><text id="SvgjsText1275"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="489.72355769230774" y="299.2" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1276">05:00</tspan>
                                                            <title>05:00</title>
                                                        </text><text id="SvgjsText1278"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="587.6682692307693" y="299.2" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1279">06:00</tspan>
                                                            <title>06:00</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1301" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1302" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1303" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1304" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect1305" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-selection-rect"></rect>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(65, 84, 241);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(46, 202, 106);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 119, 29);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: 'Sales',
                                                data: [31, 40, 28, 51, 42, 82, 56],
                                            }, {
                                                name: 'Revenue',
                                                data: [11, 32, 45, 32, 34, 52, 41]
                                            }, {
                                                name: 'Customers',
                                                data: [15, 11, 32, 18, 9, 24, 11]
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                type: 'datetime',
                                                categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                                    "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                                    "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                                    "2018-09-19T06:30:00.000Z"
                                                ]
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy HH:mm'
                                                },
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                <div
                                    class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                    <div class="datatable-top">
                                        <div class="datatable-dropdown">
                                            <label>
                                                <select class="datatable-selector">
                                                    <option value="5">5</option>
                                                    <option value="10" selected="">10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                </select> entries per page
                                            </label>
                                        </div>
                                        <div class="datatable-search">
                                            <input class="datatable-input" placeholder="Search..." type="search"
                                                title="Search within table">
                                        </div>
                                    </div>
                                    <div class="datatable-container">
                                        <table class="table table-borderless datatable datatable-table">
                                            <thead>
                                                <tr>
                                                    <th data-sortable="true" style="width: 10.709117221418236%;"><button
                                                            class="datatable-sorter">#</button></th>
                                                    <th data-sortable="true" style="width: 23.444283646888568%;"><button
                                                            class="datatable-sorter">Customer</button></th>
                                                    <th data-sortable="true" style="width: 39.36324167872648%;"><button
                                                            class="datatable-sorter">Product</button></th>
                                                    <th data-sortable="true" style="width: 11.722141823444284%;"><button
                                                            class="datatable-sorter">Price</button></th>
                                                    <th data-sortable="true" style="width: 14.76121562952243%;"><button
                                                            class="datatable-sorter">Status</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-index="0">
                                                    <td><a href="#">#2457</a></td>
                                                    <td>Brandon Jacob</td>
                                                    <td><a href="#" class="text-primary">At praesentium minu</a>
                                                    </td>
                                                    <td>$64</td>
                                                    <td><span class="badge bg-success">Approved</span></td>
                                                </tr>
                                                <tr data-index="1">
                                                    <td><a href="#">#2147</a></td>
                                                    <td>Bridie Kessler</td>
                                                    <td><a href="#" class="text-primary">Blanditiis dolor omnis
                                                            similique</a></td>
                                                    <td>$47</td>
                                                    <td><span class="badge bg-warning">Pending</span></td>
                                                </tr>
                                                <tr data-index="2">
                                                    <td><a href="#">#2049</a></td>
                                                    <td>Ashleigh Langosh</td>
                                                    <td><a href="#" class="text-primary">At recusandae
                                                            consectetur</a></td>
                                                    <td>$147</td>
                                                    <td><span class="badge bg-success">Approved</span></td>
                                                </tr>
                                                <tr data-index="3">
                                                    <td><a href="#">#2644</a></td>
                                                    <td>Angus Grady</td>
                                                    <td><a href="#" class="text-primar">Ut voluptatem id earum
                                                            et</a></td>
                                                    <td>$67</td>
                                                    <td><span class="badge bg-danger">Rejected</span></td>
                                                </tr>
                                                <tr data-index="4">
                                                    <td><a href="#">#2644</a></td>
                                                    <td>Raheem Lehner</td>
                                                    <td><a href="#" class="text-primary">Sunt similique
                                                            distinctio</a></td>
                                                    <td>$165</td>
                                                    <td><span class="badge bg-success">Approved</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="datatable-bottom">
                                        <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
                                        <nav class="datatable-pagination">
                                            <ul class="datatable-pagination-list"></ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-1.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa
                                                    voluptas nulla</a></td>
                                            <td>$64</td>
                                            <td class="fw-bold">124</td>
                                            <td>$5,828</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-2.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Exercitationem similique
                                                    doloremque</a></td>
                                            <td>$46</td>
                                            <td class="fw-bold">98</td>
                                            <td>$4,508</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-3.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                    exercitationem</a></td>
                                            <td>$59</td>
                                            <td class="fw-bold">74</td>
                                            <td>$4,366</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-4.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint
                                                    rerum error</a></td>
                                            <td>$32</td>
                                            <td class="fw-bold">63</td>
                                            <td>$2,016</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-5.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus
                                                    repellendus</a></td>
                                            <td>$79</td>
                                            <td class="fw-bold">41</td>
                                            <td>$3,239</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label">32 min</div>
                                <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                                <div class="activity-content">
                                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a>
                                    beatae
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">56 min</div>
                                <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                                <div class="activity-content">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 hrs</div>
                                <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                                <div class="activity-content">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">1 day</div>
                                <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                                <div class="activity-content">
                                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati
                                        voluptatem</a> tempore
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                                <div class="activity-content">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">4 weeks</div>
                                <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                                <div class="activity-content">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                        <div id="budgetChart"
                            style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"
                            class="echart" _echarts_instance_="ec_1708587316524">
                            <div
                                style="position: relative; width: 314px; height: 400px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                <canvas data-zr-dom-id="zr_0" width="314" height="400"
                                    style="position: absolute; left: 0px; top: 0px; width: 314px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                    legend: {
                                        data: ['Allocated Budget', 'Actual Spending']
                                    },
                                    radar: {
                                        // shape: 'circle',
                                        indicator: [{
                                                name: 'Sales',
                                                max: 6500
                                            },
                                            {
                                                name: 'Administration',
                                                max: 16000
                                            },
                                            {
                                                name: 'Information Technology',
                                                max: 30000
                                            },
                                            {
                                                name: 'Customer Support',
                                                max: 38000
                                            },
                                            {
                                                name: 'Development',
                                                max: 52000
                                            },
                                            {
                                                name: 'Marketing',
                                                max: 25000
                                            }
                                        ]
                                    },
                                    series: [{
                                        name: 'Budget vs spending',
                                        type: 'radar',
                                        data: [{
                                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                name: 'Allocated Budget'
                                            },
                                            {
                                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                name: 'Actual Spending'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                        <div id="trafficChart"
                            style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;"
                            class="echart" _echarts_instance_="ec_1708587316525">
                            <div
                                style="position: relative; width: 314px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;">
                                <canvas data-zr-dom-id="zr_0" width="314" height="400"
                                    style="position: absolute; left: 0px; top: 0px; width: 314px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                            </div>
                            <div class=""></div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                                value: 1048,
                                                name: 'Search Engine'
                                            },
                                            {
                                                value: 735,
                                                name: 'Direct'
                                            },
                                            {
                                                value: 580,
                                                name: 'Email'
                                            },
                                            {
                                                value: 484,
                                                name: 'Union Ads'
                                            },
                                            {
                                                value: 300,
                                                name: 'Video Ads'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- News & Updates Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                        <div class="news">
                            <div class="post-item clearfix">
                                <img src="assets/img/news-1.jpg" alt="">
                                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-2.jpg" alt="">
                                <h4><a href="#">Quidem autem et impedit</a></h4>
                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-3.jpg" alt="">
                                <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-4.jpg" alt="">
                                <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-5.jpg" alt="">
                                <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                            </div>

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
    </section>

@endsection
