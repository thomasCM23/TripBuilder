<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trip Builder</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-red.min.css" />
        <link rel="stylesheet" href="/css/tripBuilder.css" />
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
            @include ('layouts.header')

            <main class="mdl-layout__content" style="background-color: #EFEFEF;">
                <div class="page-content" style="width:80%; margin: 20px auto">
                        @yield ('content')
                </div>
            </main>
        </div>
        
        </div>
    </body>
</html>