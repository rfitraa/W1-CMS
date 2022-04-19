@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <div style="margin:0px 0px 0px 70px;" class="mb-3">
        <a href="{{ route('print_pdf') }}" class="btn btn-success">Print PDF</a>
    </div>
</div>
<table class="table table-bordered" style="width: 95%; margin:0 auto;">
    <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
    </tr>
    @foreach ($articles as $article)
    <tr>
        <td><a href="{{ route('articles.edit', ['article'=>$article->id])}}" class="text-decoration-none">{{ $article->title }}</a></td>
        <td>{{ $article->content }}</td>
        <td><img width="150px" src="{{ asset('storage/'.$article->featured_image )}}" alt=""></td>
    </tr>
    @endforeach
</table>
@endsection