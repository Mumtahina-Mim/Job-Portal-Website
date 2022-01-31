@extends('layouts.employer')

<!--
  For every employer they must have a clear profile for the job 
  seeker and the other employer. In this section the system will 
  a clear view of the user and the job seeker will be able to verify
  the employer and start to work with him. 
-->

@section('content')
  <div class="employer-content border">
    <div class="container-fluid p-3">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-secondary">Latest Vacancies</h4>
        </div>
        <div class="card-body">

<!--
  The employer can post a job from his wall and the update the
  the vacancy of the project and the job seeker will be able to
  find the total available job vacancy for the post and decide to
  if the job seeker will try to bid for the project.
-->

            @foreach ( $company->posts as $post)
            <div class="row mb-4 hover-shadow pb-2 pt-4">
              <div class="d-none d-md-block col-md-3">
                <div class="border p-2 d-flex align-items-center">
                  <img src="{{asset($company->logo)}}" class="img-fluid" alt="">
                </div>
              </div>
              <div class="col-xs-12 col-md-9">
                <div class="p-sm-3 p-md-0">
                  <a href="{{route('post.show',['job'=>$post])}}" class="secondary-link pb-2 d-block"><h5 class="font-weight-bold">{{$post->job_title}}</h5></a>
                  <p class="h6">{{$company->title}}</p>
                  <p class="small"><i class="fas fa-map-marker-alt"></i> {{$post->job_location}}</p>
                  <p class="small"><i class="fas fa-lightbulb"></i> {{$post->skills}}</p>
                  <div class="d-flex justify-content-between py-3">

<!--
  Everything about the project will be listed here and the job seeker
  will be able to see the project criteria and match it with them. 
-->

                    <div class="text-danger">
                      <i class="fas fa-clock"></i> <span class="">Apply Before: 
                        @php    
                        $date = new DateTime($post->deadline);  
                        echo date('d', $date->getTimestamp() - time());
                        @endphp day[s] from now</span>
                    </div>
                    <div class="text-info">
                      <i class="fas fa-eye"></i> <span>Views: {{$post->views}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- <hr> --}}
            @endforeach

        </div>
      </div>
    </div>
  </div>
@endSection

