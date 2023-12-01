<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('App_icons/brand_dm.svg') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            var data_for_the_chart = [];

            fetch("RightSidebarDataFetch.php")
            .then((response) => {
                if(!response.ok){
                    throw new Error("Something went wrong!");
                }

                return response.json();
            })
            .then((data) => {
                data.forEach(element => {
                    data_for_the_chart.push([element.note,element.Ammount]);
                });
            })
            .catch((error) => {
                alert(error)
            });
            alert(data_for_the_chart);
        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows(data_for_the_chart);

        var options = {
                            'backgroundColor': 'transparent',
                            'bottom': 32,
                            'height': '100%',
                            'left': 32,
                            'right': 16,
                            'top': 32,
                            'width': '100%',
                            'pieHole': 0.7,
                            'legend': 'none',
                        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }
        </script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=" font-satoshi aantialiased">
        <div class="flex h-screen p-4 bg-gray-100 dark:bg-background">
            <div class="mr-4 ">
                @include('layouts.navigation')
            </div>
            <main class="w-full ">
                <div class="flex h-full">
                @yield('content')
                @include('components.right-sidebar')
                </div>
            </main>
        </div>
    </body>
</html>
