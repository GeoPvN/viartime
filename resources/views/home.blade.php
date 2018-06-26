@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title" v-model="title">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Content" v-model="content">
                    </div>
                    <form class="form-group">
                        <textarea rows="5" cols="5" class="form-control" v-model="description"></textarea>
                        <br>
                        <button :disabled="!description||!title||!content" class="btn btn-primary" @click.prevent="postContent">Add Post</button>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <div>
                <ul class="list-group" v-for="item in posts" :key="item.key">
                    <li class="list-group-item">
                        title:@{{item.title}}
                        <br>
                        content:@{{item.content}}
                        <br>

                        description: @{{item.description}} 

                        <span style="float: right;"><span class="badge badge-success pull-right">@{{item.user.name}}</span><span class="badge badge-danger pull-right">@{{item.created_at}}</span></span>

                    </li>                    
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
