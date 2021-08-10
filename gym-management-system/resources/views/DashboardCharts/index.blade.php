@extends('layout.dashboard')

@section('content')
<div class="row g-3 my-2">
    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2">720</h3>
                <p class="fs-5">Admins</p>
            </div>
            <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2">4920</h3>
                <p class="fs-5">Trainers</p>
            </div>
            <i
                class="fas fa-dumbbell fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2">3899</h3>
                <p class="fs-5">Members</p>
            </div>
            <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-3">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2">%25</h3>
                <p class="fs-5">equipements</p>
            </div>
            <i class="fas fa-warehouse fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>
</div>
@endsection