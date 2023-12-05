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
