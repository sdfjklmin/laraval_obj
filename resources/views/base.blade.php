@extends('layouts.base')

@section('content')
hahahha ;
@foreach ($menus as $menu)
                        <hr>
                        <div class="article">
                            <h4>{{ $menu->name }}</h4>
                            <div class="content">
                            </div>
                        </div>
                        <a href="{{ url('admin/article/'.$article->id.'/edit') }}" class="btn btn-success">编辑</a>
                        <form action="{{ url('admin/article/'.$article->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
                    @endforeach
@endsection
