@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h3>
            <i class="small material-icons">view_list</i> Tweets
            <a class="waves-effect waves-light btn pull-right" href="{{ route('tweets.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h3>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($tweets->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>BODY</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($tweets as $tweet)
                            <tr>
                                <td>{{$tweet->id}}</td>
                                <td>{{$tweet->title}}</td>
                                <td>{{$tweet->body}}</td>
                                <td class="text-right">
                                    <a class="waves-effect waves-light btn" href="{{ route('tweets.show', $tweet->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="waves-effect waves-light btn" href="{{ route('tweets.edit', $tweet->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('tweets.destroy', $tweet->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="waves-effect waves-light btn"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $tweets->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
