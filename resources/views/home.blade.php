<!DOCTYPE html>
<html>
    <head>
        <title>Alumni Members</title>   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">          
    </head>
    @extends('layouts.app')
    @section('content')
    <body>
        <div class="container">

            <div class="page-header">
                <h1>Members</h1>
            </div>

            <ul class="list-group">

                @foreach($all_users as $users)
                <h1 class="list-group-item-heading">{{$users->dateGraduated}} </h1>
                <li class="list-group-item">
                    <h2 class="list-group-item-heading">{{$users->name}}</h2>
                    <p class="list-group-item-text">
                        <br><strong>Degree: </strong>{{ $users->degree}}
                        <br><strong>Degree Class: </strong>{{ $users->degreeClass}}
                        <br><strong>Occupation: </strong>{{ $users->occupation}}
                        <br><strong>Company: </strong>{{ $users->company}}
                        <br><strong>Interests: </strong>{{ $users->interests}}
                        <br><strong>Email: </strong>{{ $users->email}}
                        <br><strong>Country Employed: </strong>{{ $users->countryEmployed}}
                        <br><strong>Company: </strong>{{ $users->company}}
                        <br><strong>Company Email: </strong>{{ $users->companyEmail}}
                        <br><strong>Country: </strong>{{ $users->country}}
                    </p>
                </li>
                @endforeach

            </ul>
        </div>
        
    </body>
    @endsection
</html>