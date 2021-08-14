@extends('layout.dashboard')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Equipments</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('equipments.create') }}">Add Equipment</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table datatable table-bordered table-striped table-hover">
        <thead class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th width="280px">Actions</th>
        </thead>
        <tbody>
            @foreach ($equipments as $equipment)
                <tr class="table-light">
                    <td>{{ $equipment->id }}</td>
                    <td>{{ $equipment->name }}</td>
                    <td>{{ $equipment->description }}</td>
                    <td>{{ $equipment->price }}</td>
                    <td>
                        <form action="{{ route('equipments.destroy',$equipment->id) }}" method="POST">
    
                            <a class="btn btn-info" href="{{ route('equipments.show',$equipment->id) }}"><i class="fas fa-eye"></i> Show</a>
    
                            <a class="btn btn-primary" href="{{ route('equipments.edit',$equipment->id) }}"><i class="fas fa-edit"></i>Edit</a>
    
                            @csrf
                            @method('DELETE')
    
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        {!! $equipments->links() !!}      
@endsection
