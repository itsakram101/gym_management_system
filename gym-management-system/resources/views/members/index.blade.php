@extends('layout.dashboard')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Members</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('members.create') }}">Add Member</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($members as $member)
            <tr class="table-light">
                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->phone }}</td>
                <td>{{ $member->password }}</td>
                <td>
                    <form action="{{ route('members.destroy',$member->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('members.show',$member->id) }}"><i class="fas fa-eye"></i> Show</a>

                        <a class="btn btn-primary" href="{{ route('members.edit',$member->id) }}"><i class="fas fa-edit"></i>Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $members->links() !!}
@endsection
