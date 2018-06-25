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

                    <form class="form-group">
                        <textarea rows="5" cols="5" class="form-control"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary">Add Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

<script>
    // const app = new Vue({
    //     el:'#app',
    //     data:{
    //         posts:{},
    //         description:'',
    //         token:'{{ csrf_token() }}',
    //     },
    //     methods(){

    //     }
    // });
</script>
@endsection
