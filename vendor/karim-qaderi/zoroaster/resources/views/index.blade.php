@extends('Zoroaster::layout')
@section('content')

    <script src="/js/Chart.js"></script>
    <link href="/css/Chart.css">

    <div class="Widgets">
        {!! Zoroaster::Widgets() !!}
    </div>


    <style>
        #PaymentChart{
            width: 100%;height: 300px;background: white;box-shadow: 0 0 8px #c4c4c4;border-radius: 5px
        }
    </style>
    <?php
           $month=12;
           $PaymentSuccess=\App\Payment::SpanningPayment($month,'!=')->pluck('published');
           for ($a=0;$a<$month;$a++){
               $NewPaymentSuccess[$a]=empty($PaymentSuccess[$a])? 0 : $PaymentSuccess[$a];
           }
           $PaymentUnSuccess=\App\Payment::SpanningPayment($month,'=')->pluck('published');
            for ($b=0;$b<$month;$b++){
                $NewPaymentUnSuccess[$b]=empty($PaymentUnSuccess[$b])? 0 : $PaymentUnSuccess[$b];
            }
           $labels=[];
           for ($i=0;$i<$month;$i++){
               $labels[$i]=Hekmatinasser\Verta\Verta::instance(Carbon\Carbon::now()->subMonth($i))->format('%B');
           }
           $labels=array_values($labels);


    ?>

    <canvas id="PaymentChart"></canvas>
    <div class="uk-clearfix"></div>

    <script>
        ////////////////////////////chart.js//////////////////////////////////////////

        var data_sucess=$('#PaymentChart').attr('data-success');
        var data_unsucess=$('#PaymentChart').attr('data-unsuccess');

        {{--console.log({{$labels}});--}}
        // console.log(data_unsucess);
        var ctx = document.getElementById('PaymentChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php foreach (array_reverse($labels) as $label)echo "'".$label."',";?>],
                datasets: [{
                    label: 'پرداخت های موفق',
                    data:[<?php foreach (array_reverse($NewPaymentSuccess) as $label)echo "'".$label."',";?>],
                    backgroundColor: [
                        'rgba(0, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(0, 99, 132, 1)',
                    ],
                    borderWidth: 2
                },{
                    label: 'پرداخت های ناموفق',
                    data:  [<?php foreach (array_reverse($NewPaymentUnSuccess) as $label)echo "'".$label."',";?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        //////////////////////////////////////////////////////////////////////////////////////
        $(document).on('change', '.metrics select', function () {

            $this = $(this).closest('.metrics-body');
            metrics($this.attr('data-class'), $(this).val())
        });


        function metrics(metric, range = null) {

            $('[data-class="' + metric + '"]').html("<span uk-icon=\"load\"></span>");
            $.ajax({
                type: 'GET',
                url: '{{ route('Zoroaster.metrics') }}',
                data: {
                    class: metric,
                    range: range,
                },
                success: function (data) {
                    $('[data-class="' + data.class + '"]').html(data.html);
                },
                error: function (data) {

                    var errors = data.responseJSON;
                    console.log(errors.errors);

                }
            });
        }

    </script>




@stop