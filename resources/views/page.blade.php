@if(isset($title))
    @if(strlen($title) > 5)
        error
    @else
        {{ $title }}
    @endif
@else
    {{ 'This is page' }}<br>
@endif