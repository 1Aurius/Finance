<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('App_icons/brand_dm.svg') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            window.data_for_the_chart = [];
            fetch("RightSidebarDataFetch.php")
            .then((response) => {
                if(!response.ok){
                    throw new Error("Something went wrong!");
                }

                return response.json();
            })
            .then((data) => {
                window.data_for_the_chart.push(['Label','number']);
                data.forEach(element => {

                window.data_for_the_chart.push([element.note,Number(element.Ammount)]);

                var div = document.createElement("div");
                div.className = " h-min bg-card mb-[9px] pr-[10px] pl-[10px] pb-[4px] pt-[4px] flex rounded-[8px]"
                if(element.type == 1){
                    var img = document.createElement("img");
                    img.src="{{ asset('App_icons/Food.svg') }}"

                    //! Add a limit to this to stop entropy
                    var text = document.createElement("div");
                    var trimmed_date = element.created_at.substring(0,10);
                    var trimmed_note = element.note.substring(0,8) + "...";
                    text.innerHTML=
                    "<div class='flex-col w-full text-white pl-[4px]'>"+
                        "<p>food</p>" +
                        "<p class='text-[2px]'>"+ element.note + "</p>" +
                        '<p class="text-[5px]">'+ trimmed_date + "</p>" +
                    "</div>"

                    var value = document.createElement("div");
                    value.className = " flex items-center flex-row-reverse ml-auto text-white text-[22px]"
                    value.innerHTML= "-"+element.Ammount+"$" ;

                        div.appendChild(img);
                        div.appendChild(text);
                        div.appendChild(value);

                }
                document.getElementById('sidebar_list').appendChild(div);
                });

                // Load the chart library and draw the chart after the data is fetched and processed
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawSideChart);
            })
            .catch((error) => {
                alert(error)
            });

            function drawSideChart() {
            var data = google.visualization.arrayToDataTable(window.data_for_the_chart);

            var options = {
                chartArea: {
                width: '94%',
                height: '94%'
                },
                'backgroundColor':'none',
                'pieHole':0.7,
                'legend':'none'
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
            }

        </script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-satoshi">
        <div class="flex h-screen p-4 bg-gray-100 dark:bg-background">
            <div class="mr-4 ">
                @include('layouts.navigation')
            </div>
            <main class="w-full ">
                <div class="flex w-full h-full">
                <section class="flex-col w-full">
                    @yield('content')
                </section>
                @include('components.right-sidebar')
                </div>
            </main>
        </div>
    </body>
</html>
