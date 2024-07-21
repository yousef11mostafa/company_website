@php
$locale=request()->segment(1)=='en'? 'ar':'en';
@endphp
<a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL($locale) }}"  data-mode="light">
{{ strtoupper($locale) }}
</a>
