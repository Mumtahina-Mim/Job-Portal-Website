@extends('layouts.account')

<!--
  User can save threi jobs in this section. To save a jobs the user 
  need some information like (job position, job level, company, no of
  vacancy, action etc).
-->

@section('content')
  <div class="account-layout border">
    <div class="account-hdr border bg-primary text-white shadow">
      My saved Jobs
    </div>
    <div class="account-bdy p-3">
      <div class="my-2">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="bg-light small">
              <tr>
                <th>Job Position</th>
                <th>Job Level</th>
                <th>Company</th>
                <th>No of vacancy</th>
                <th>Apply Before</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

<!--
  Using a loop we iterate through the saved jobs of an user.
  If the user don't have any jobs saved in his wall then the system
  will generate a message that shows that the user don't have any 
  saved jobs in his wall. Otherwise the system will show the total jobs
  which is saved in the user wall.
-->

              @foreach ($posts as $post)
                @if($posts->count() >0)
                <tr>
                  <td><a href="{{route('post.show',['job'=>$post])}}">{{$post->job_title}}</a></td>
                  <td><a href="#">{{$post->job_level}}</a></td>
                  <td><a href="{{route('account.employer',['employer'=>$post->company])}}">{{substr($post->company->title,0,14)}}..</a></td>
                  <td>{{$post->vacancy_count}}</td>
                  <td>{{date('d/m/Y',$post->deadlineTimestamp())}}, {{date('d',$post->remainingDays()) }} days</td>
                  <td><form action="{{route('savedJob.destroy',['id'=>$post])}}" method="POST">
                    @csrf
                    @method("delete")
                    <button type="submit" href="#" class="btn secondary-outline-btn">Unsave</button>
                  </form></td>
                </tr>
                @else
                <tr>
                  <td>You have no jobs saved.</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endSection
