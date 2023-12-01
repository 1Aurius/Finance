<x-app-layout>
    <x-slot name="header">
           <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section('content')
        <!--implement time-->

            <div class="flex flex-col w-full">
                <h1 class=" text-[22px] font-medium text-text p-4">Good day {{ Auth::user()->id }}</h1>
            </div>
            <!--DO NOT CLOSE THIS-->
    @endsection
</x-app-layout>
