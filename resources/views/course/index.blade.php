@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="mb-4">Mis cursos:</h1>

        <div class="card">
            <div class="card-body">
                   <ul>
                       @foreach ($courses as $course)
                           <li>
                               <h5 style="color:green; font-size: 32pt">{{$course->title}}</h5>
                               <p>{{$course->description}}</p>
                               <p>{{$course->user->name}}</p>
                               @foreach ($sections as $section)
                                <li>
                                    <h6>{{$section->title}}</h6>
                                    @if ($section->id==1)
                                    @foreach ($lessons as $lesson)
                                    <li>
                                    <h6>{{$lesson->title}}</h6>
                                    <h6>{{$lesson->description}}</h6>
                                    <div>
                                        <iframe src={{$lesson->url}} width="640" height="480"></iframe>
                                    </div>
                                    <h6></h6>
                                    </li>
                                    @endforeach
                                    @endif
                                    
                                </li>
                                @endforeach
                           </li>
                       @endforeach
                   </ul>
                   <div>PRUEBA
                    @foreach ($lessons as $lesson)
                    <h6>{{$lesson->section->course->title}}</h6>
                    @endforeach
                   </div>
            </div>
        </div>
    </div>   
@endsection