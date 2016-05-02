<!DOCTYPE html>
<html lang="en" ng-app="ezurl">
<head>
    <title>Ez url</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <center>
                    <h1>Shorten URL</h1>
                </center>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {{Form::open(['url' => '#'])}}
                    <div class="col-md-10">
                        {{Form::label('Paste your url here:', null, ['class' => 'control-label'])}}
                    </div>
                    <div class="col-md-10">
                        {{Form::text('url', null, ['class' => 'form-control', 'autofocus' => 'true'])}}
                    </div>
                    <div class="col-md-2">
                        {{Form::submit('Shorten url', ['class' => 'btn btn-default'])}}
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <center>
                    <h1>History</h1>
                </center>
            </div>
        </div>

        <div class="row" ng-controller="LinkController">
            <div class="col-md-8">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Original</th>
                            <th>Shortened</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="link in links">
                            <td><% link.id %></td>
                            <td><a href="<% link.url %>"><% link.url %></a></td>
                            <td><a href="http://<% link.hash %>"><% link.hash %></a></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- JavaScripts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/lib/angular.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>