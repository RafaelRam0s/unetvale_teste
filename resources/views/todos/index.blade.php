@extends('layouts.principal_layout')

@section('title', 'Página Todos')

@section('description', 'Esta é a página de todos.')

@section('content')
    <div class="container mt-5">
        <h1>Lista de Todos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Completed</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <td>{{ $todo->id }}</td>
                        <td>{{ $todo->name }}</td>
                        <td>
                            <form action="{{ url('/todos/completed/' . $todo->id) }}" method="POST">
                                @csrf
                                <input type="checkbox" name="completed" {{ $todo->completed ? 'checked' : '' }} 
                                    onchange="this.form.submit()">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


