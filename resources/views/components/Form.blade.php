
<section class="flex flex-col m-4 text-white gap-[10px]">
    <form method="{{ $method }}" action="{{ $action }}">
        
        @csrf

        @component('components.FormTitle')
            @slot('form_title')  {{ $form_title }}  @endslot
            @if(isset($form_subtitle)) {@slot('form_subtitle') {{ $form_subtitle }} @endslot} @endif
        @endcomponent

        <!-- add side check box upper -->

        @if(isset($checkBox))
            <label for="{{ $checkBox_id  }}" class="">{{$checkBox_name}}</label>
            <input type="checkbox" value="" id="{{ $checkBox_id }}">
        @endif

        <section class="p-[20px] rounded-[12px] bg-darkCard">
            {{ $input_slot }}
        </section>

    </form>
</section>
