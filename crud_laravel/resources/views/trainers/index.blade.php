@extends('layout.dashboard')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Trainers</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('trainers.create') }}">Add Trainer</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($trainers as $trainer)
            <tr>
                <td>{{ $trainer->id }}</td>
                <td>{{ $trainer->name }}</td>
                <td>{{ $trainer->email }}</td>
                <td>{{ $trainer->password }}</td>
                <td>
                    <form action="{{ route('trainers.destroy',$trainer->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('trainers.show',$trainer->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('trainers.edit',$trainer->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $trainers->links() !!}
@endsection
