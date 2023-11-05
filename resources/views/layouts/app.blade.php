<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {
                            'backgroundColor': 'transparent',
                            'bottom': 32,
                            'height': '100%',
                            'left': 32,
                            'right': 16,
                            'top': 32,
                            'width': '100%',
                        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }


        </script>



        <!-- Scripts -->
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
        <script type="text/javascript">
            fetch("RightSidebarDataFetch.php")
            .then((response) => {
                if(!response.ok){ // Before parsing (i.e. decoding) the JSON data,
                                // check for any errors.
                    // In case of an error, throw.
                    throw new Error("Something went wrong!");
                }

                return response.json(); // Parse the JSON data.
            })
            .then((data) => {
                // This is where you handle what to do with the response.
                alert(data); // Will alert: 42
            })
            .catch((error) => {
                // This is where you handle errors.
            });
        </script>
    </body>
</html>
