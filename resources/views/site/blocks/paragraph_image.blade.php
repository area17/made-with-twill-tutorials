@php
    $align = $block->input('variable_image_alignment');
    $dsk = $block->input('variable_image_width_desktop') ?? 'w-full';
    $tblt = $block->input('variable_image_width_tablet') ?? 'w-full';
@endphp

<section>
    <figure class="mb-4 w-full {{ $tblt }} {{ $dsk }} float-none {{ $align }}">
        <img class="w-full" src="{!!$block->image('variable_image', 'default')!!}"/>
    </figure>

    <span class="text_block">{!!$block->input('paragraph')!!}</span>
</section>
