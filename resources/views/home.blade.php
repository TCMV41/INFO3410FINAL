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
                        <br><strong>Telephone: </strong>{{ $users->telephone}}
                        <br><strong>Country Employed: </strong>{{ $users->countryEmployed}}
                        <br><strong>Company: </strong>{{ $users->company}}
                        <br><strong>Company Email: </strong>{{ $users->companyEmail}}
                        <br><strong>Country: </strong>{{ $users->country}}
                        <br><strong>Social Media Links: </strong>
                            <a href="https://{{$users->facebook}}">
                                <img src="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png" alt="Facebook" width="25" height="25" border="0">
                            </a>

                            <a href="https://{{$users->github}}">
                                <img src="https://image.flaticon.com/icons/svg/25/25231.svg" alt="Github" width="25" height="25" border="0">
                            </a>

                            <a href="https://{{$users->linkedin}}">
                                <img src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/linkedin-512.png" alt="Linkedin" width="25" height="25" border="0">
                            </a>


                            <br><br></a>
                                <img src="{{$users->image}}" alt="Avatar" width="100" height="100" border="0">
                            </a>
                    </p>
                </li>
                @endforeach

            </ul>
        </div>
        
    </body>
    @endsection
</html>
