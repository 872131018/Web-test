<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Test</title>
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Developer Candidacy Test</h2>
                    <hr>
                    <div>
                        @if(count($email_addresses))
                            <p>
                                Entering any of the following email addresses should result in the corresponding user information rendered to the page:
                            </p>
                            <ul>
                                @foreach($email_addresses as $address)
                                    <li>{{ $address }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>
                                No users exist in the DB at this time. Please run the seeder first.
                            </p>
                        @endisset
                    </div>
                </div>
            </div>
            <div class="row row-margin">
                <div id="app" class="col-md-12">
                    <test></test>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
</html>
