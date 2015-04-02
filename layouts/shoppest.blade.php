<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }}
        {{ Theme::partial('defaultcss') }}
        {{ Theme::asset()->styles() }}
    </head>
    <body>
        <div id="wrapper">
            {{ Theme::partial('header') }}
            {{ Theme::partial('slider') }}
            {{ Theme::place('content') }}
            {{ Theme::partial('footer') }}
        </div>  
        {{ Theme::partial('defaultjs') }}
        {{-- Theme::asset()->scripts() --}}
        {{-- Theme::asset()->container('footer')->scripts() --}}
        {{ Theme::partial('analytic') }}
    </body>
</html>