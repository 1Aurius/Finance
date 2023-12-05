@if($type == "1")

<button type="submit" class=" text-[20px] pt-[3px] pb-[3px] font-semibold w-[200px] rounded-[8px] border-[2px] border-feature hover:bg-highlight transition duration-300">
    {{ $slot }}
</button>

@elseif ($type == "2")

<button type="submit" class=" text-[20px] pt-[3px] pb-[3px] font-semibold w-[120px] rounded-[8px] border-[2px] border-feature hover:bg-zinc-700 transition duration-300">
    {{ $slot }}
</button>

@elseif ($type == "3")

<button type="submit" class=" text-[20px] pt-[3px] pb-[3px] font-semibold w-[280px] rounded-[8px] border-[2px] border-feature hover:bg-red-600 transition duration-300">
    {{ $slot }}
</button>


@endif

