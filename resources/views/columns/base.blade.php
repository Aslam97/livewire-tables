<div>
    @if($url)
        <a
            href="{{ call_user_func($url, $record) }}"
            class="text-blue-600 hover:underline block py-1 px-2"
        >
            {{ $value }}
        </a>
    @else
        {{ $value }}
    @endif
</div>
