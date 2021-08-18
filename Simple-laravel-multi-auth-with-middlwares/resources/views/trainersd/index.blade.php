@extends('trainersd.layout')

@section('content')

<div class="row m-0 g-3 my-2">
    <div class="col bg-white p-2 my-2">
        <h3 class="m-0">Schedule</h3>
    </div>
    <div class="col-12 bg-white p-2">
        <table class="table table-bordered table-responsive">
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
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>09:10</th>
                    @foreach (json_decode($schedule['09_10']) as $day)
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>10:11</th>
                    @foreach (json_decode($schedule['10_11']) as $day)
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>11:12</th>
                    @foreach (json_decode($schedule['11_12']) as $day)
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>12:13</th>
                    @foreach (json_decode($schedule['12_13']) as $day)
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>13:14</th>
                    @foreach (json_decode($schedule['13_14']) as $day)
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>14:15</th>
                    @foreach (json_decode($schedule['14_15']) as $day)
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>15:16</th>
                    @foreach (json_decode($schedule['15_16']) as $day)
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>16:17</th>
                    @foreach (json_decode($schedule['16_17']) as $day)
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>17:18</th>
                    @foreach (json_decode($schedule['17_18']) as $day)
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>18:19</th>
                    @foreach (json_decode($schedule['18_19']) as $day)
                        <td class="text-center">{{ $day }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection