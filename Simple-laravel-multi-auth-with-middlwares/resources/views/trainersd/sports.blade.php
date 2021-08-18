@extends('trainersd.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Sporst</h3>
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
        </thead>
        <tbody>
            @foreach ($sports as $sport)
                <tr class="table-light">
                    <td>{{ $sport->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {!! $members->links() !!} --}}
@endsection
