<section class="content">
    <!-- LINE CHART -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Line Chart</h3>

            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body chart-responsive">
            <div class="chart" id="line-chart" style="height: 300px;"></div>
        </div>
        <!-- /.box-body -->
        </div>
</section>

<script>
    // LINE CHART
    $.ajax({
        method: "GET",
        dataType: "html",
        url: "{{url('Graphic/getGraphic')}}",
        success: function(result){
            console.log(result);
            var line = new Morris.Line({
            element: 'line-chart',
            resize: true,
            data: JSON.parse(result),
            xkey: 'tanggal',
            ykeys: ['nominal'],
            labels: ['nominal'],
            parseTime: false,
            lineColors: ['#3c8dbc'],
            hideHover: 'auto'
            });
        }
    });
   
</script>