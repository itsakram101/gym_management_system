@extends('layout.dashboard')

@section('content')
<div class="row m-0">
    <div class="col bg-white p-2 my-2">
        <h3 class="m-0">Add Schedule</h3>
    </div>
    <div class="col-12 bg-white p-2">
        <form action="{{ url('/admin/schedule/add') }}" method="post">
            @csrf
            <div class="table-responsive">
                <table class="table border bg-white">
                    <thead>
                        <th></th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th>08:09</th>
                            @foreach (json_decode($schedule['08_09']) as $day)
                                <td><input class="form-control" name="08:09[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>09:10</th>
                            @foreach (json_decode($schedule['09_10']) as $day)
                                <td><input class="form-control" name="09:10[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>10:11</th>
                            @foreach (json_decode($schedule['10_11']) as $day)
                                <td><input class="form-control" name="10:11[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>11:12</th>
                            @foreach (json_decode($schedule['11_12']) as $day)
                                <td><input class="form-control" name="11:12[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>12:13</th>
                            @foreach (json_decode($schedule['12_13']) as $day)
                                <td><input class="form-control" name="12:13[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>13:14</th>
                            @foreach (json_decode($schedule['13_14']) as $day)
                                <td><input class="form-control" name="13:14[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>14:15</th>
                            @foreach (json_decode($schedule['14_15']) as $day)
                                <td><input class="form-control" name="14:15[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>15:16</th>
                            @foreach (json_decode($schedule['15_16']) as $day)
                                <td><input class="form-control" name="15:16[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>16:17</th>
                            @foreach (json_decode($schedule['16_17']) as $day)
                                <td><input class="form-control" name="16:17[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>17:18</th>
                            @foreach (json_decode($schedule['17_18']) as $day)
                                <td><input class="form-control" name="17:18[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>18:19</th>
                            @foreach (json_decode($schedule['18_19']) as $day)
                                <td><input class="form-control" name="18:19[]" type="text" value="{{ $day }}" /></td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</div>
@endsection