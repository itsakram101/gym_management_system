@extends('trainersd.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Members</h3>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table datatable table-bordered table-striped table-dark">
        <thead class="table-dark">
                <th>Name</th>
                <th>Email</th>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr class="table-light">
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {!! $members->links() !!} --}}
@endsection
