@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row offset-2">
        <div class="col-3 p-3">
            <img src="{{$user->profile->profileImage()}}" height="100px" width="100px" class="rounded-circle"/>
        </div>
        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{$user->username}}</div>
                   <follow-button></follow-button>
                </div>

                @can ('update',$user->profile)
                <a href="/p/create" class="link">Add New Post</a>
                @endcan()
            </div>
           
            @can ('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan()
            <div class="d-flex">
                <div class="pr-3"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-3"><strong>1250</strong> followers</div>
                <div class="pr-3"><strong>12</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row offset-2 pt-4">
        @foreach($user->posts as $post)
            <div class="col-3 pb-4">
                <a href="/p/{{$post->id}}">
                   <img src=/storage/{{$post->image}} alt="" class="w-100"/>
                </a>
            </div>
       
        @endforeach 
    </div>
</div>
@endsection
