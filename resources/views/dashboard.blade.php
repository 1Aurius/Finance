<x-app-layout>


    <x-slot name="header">
           <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section('content')
        <!--implement time-->

            <div class="flex flex-col w-full">
                <h1 class=" text-[22px] font-medium text-text p-4">Good day <strong class=" text-highlight">{{ Auth::user()->name }}</strong></h1>
            </div>
            <div id="main_chart_div">
            </div>
            <!-- Add saved components -->


            {{--
            @component('components.Form')

            @slot('form_title')  sick  @endslot
            @slot('method')      Post   @endslot
            @slot('action')      /      @endslot

            @slot('input_slot')

            @component('components.PrimaryButton')
            @slot('type') 1 @endslot
            Submit
            @endcomponent

            @component('components.PrimaryButton')
            @slot('type') 2 @endslot
            Cancel
            @endcomponent

            @component('components.PrimaryButton')
            @slot('type') 3 @endslot
            Delete
            @endcomponent

            @endslot

            @endcomponent
            <!--DO NOT CLOSE THIS-->
            --}}
    @endsection
</x-app-layout>
<script>
        window.data_for_the_main_chart=[]
        fetch("DashboardGraphDataFetch.php")
        .then((response) => {
            if(!response.ok){
                throw new Error("Something went wrong!");
            }

            return response.json();
        })
        .then((data) =>
        {
            window.data_for_the_main_chart.push(['day','number']);
            console.log(window.data_for_the_main_chart);
            data.forEach(element => {
            window.data_for_the_main_chart.push([element[0],element[1]]);
            google.charts.load('current', {'packages':['corechart']});
            });
                google.charts.setOnLoadCallback(drawMainChart);

        });

        function drawMainChart() {
            var data = google.visualization.arrayToDataTable(window.data_for_the_main_chart);

            var options = {
                chartArea: {
                    width: '80%',
                    height: '50%'
                },
                'backgroundColor':'none',
                bar: {groupWidth: "80%"},
                annotations: {
                    textStyle: {
                        color: '#FFFFF',
                        fontName: 'Satoshi'
                    }
                },
                hAxis: {
                    textStyle: {
                    color: '#FFF'
                    }
                },
                vAxis: {
                    textStyle: {
                    color: '#FFF'
                    }
                }
            };


            var chart = new google.visualization.ColumnChart(document.getElementById('main_chart_div'));
            chart.draw(data, options);
        }
</script>
