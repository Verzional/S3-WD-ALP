<script>
    var options =
    {
        chart: {
            type: '{!! $chart->type() !!}',
            height: {!! $chart->height() !!},
            width: '{!! $chart->width() !!}',
            toolbar: {!! $chart->toolbar() !!},
            zoom: {!! $chart->zoom() !!}
        },
        plotOptions: {
            bar: {!! $chart->horizontal() !!}
        },
        colors: {!! $chart->colors() !!},
        series: {!! $chart->dataset() !!},
        dataLabels: {!! $chart->dataLabels() !!},
        @if($chart->labels())
            labels: {!! json_encode($chart->labels(), true) !!},
        @endif
        title: {
            text: "{!! $chart->title() !!}",
            style: {
                fontSize: '28px',
                offsetY: -20

            }
        },
        subtitle: {
            text: '{!! $chart->subtitle() !!}',
            align: '{!! $chart->subtitlePosition() !!}',
            style:{
                fontSize: '18px'
            }
        },
        xaxis: {
            categories: {!! $chart->xAxis() !!},
            labels: {
                style: {
                    fontSize: '16px' 
                }
            }
        },
        grid: {!! $chart->grid() !!},
        markers: {!! $chart->markers() !!},
        @if($chart->stroke())
            stroke: {!! $chart->stroke() !!},
        @endif
        
    }

    var chart = new ApexCharts(document.querySelector("#{!! $chart->id() !!}"), options);
    chart.render();

</script>
