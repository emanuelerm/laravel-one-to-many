@extends('layouts.app')

 @section('content')
     <div class="container">
        <div class="row">
            <div class="col pt-5">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Slug</th>
                            <th>Type / ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>{{ $project->type->name }} / {{ $project->type_id }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>
 @endsection
