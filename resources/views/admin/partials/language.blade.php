@php
    $locale = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp
<a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL($locale) }}"
   id="langSwitcher" data-lang="{{ $locale }}">
    <i class="fe fe-16">
        {{ strtoupper($locale) }}
    </i>
</a>