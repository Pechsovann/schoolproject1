@extends('evaluator.dashboard')
@section('contents')
<div class="row">

    <div class="col-xl-8 col-lg-7">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
            </div>
            <div class="card-body">
                <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="myAreaChart" width="1077" height="400" class="chartjs-render-monitor" style="display: block; height: 320px; width: 862px;"></canvas>
                </div>
                <hr>
                Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
            </div>
        </div>

        <!-- Bar Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="myBarChart" width="1077" height="400" class="chartjs-render-monitor" style="display: block; height: 320px; width: 862px;"></canvas>
                </div>
                <hr>
                Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file.
            </div>
        </div>

    </div>

    <!-- Donut Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="myPieChart" width="497" height="316" class="chartjs-render-monitor" style="display: block; height: 253px; width: 398px;"></canvas>
                </div>
                <hr>
                Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
            </div>
        </div>
    </div>
</div>
@endsection
