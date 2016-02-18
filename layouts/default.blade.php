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
            <div class="container">
                {{ Theme::place('content') }}
            </div>
            {{ Theme::partial('footer') }}
        </div>
        
        {{ Theme::partial('defaultjs') }}
        {{ Theme::partial('analytic') }}
    </body>
</html>