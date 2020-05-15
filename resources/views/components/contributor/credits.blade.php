<ul>
    @foreach($contributor->present()->projectsFormatted as $roleItem)
        <li>
            {!! $roleItem !!}
        </li>
    @endforeach

    <li class="mt-2 mb-2">
        <strong>Skills</strong> &mdash; {!! $contributor->present()->tagsAsString !!}
    </li>
</ul>
