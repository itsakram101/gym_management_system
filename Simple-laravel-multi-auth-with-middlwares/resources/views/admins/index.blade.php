@extends('layout.dashboard')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Admin</h3>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-success" href="{{ route('admins.create') }}">Add Admin</a> --}}
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                {{-- <th>Password</th> --}}
                {{-- <th width="280px">Actions</th> --}}
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr class="table-light">
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    {{-- <td>{{ $admin->password }}</td> --}}
                    {{-- <td>
                        <form action="{{ route('admins.destroy',$admin->id) }}" method="POST">
    
                            <a class="btn btn-info" href="{{ route('admins.show',$admin->id) }}"><i class="fas fa-eye"></i> Show</a>
    
                            <a class="btn btn-primary" href="{{ route('admins.edit',$admin->id) }}"><i class="fas fa-edit"></i>Edit</a>
    
                            @csrf
                            @method('DELETE')
     --}}
                            {{-- <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</button> --}}
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {!! $admins->links() !!} --}}
@endsection
