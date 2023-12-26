{{--<ul class=".language-list">--}}
{{--    @foreach (LaravelLocalization::getSupportedLocales() as $lang=>$properties)--}}
{{--        <li class="langs">--}}
{{--            <a class="alang" href="{{LaravelLocalization::getLocalizedURL($lang)}}">{{$lang}}</a>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}
<select onchange="window.location.href = this.value;">
    @foreach (LaravelLocalization::getSupportedLocales() as $lang => $properties)
        <option value="{{ LaravelLocalization::getLocalizedURL($lang) }}" @if(LaravelLocalization::getCurrentLocale() == $lang) selected @endif>
            {{ $lang }}
        </option>
    @endforeach
</select>

