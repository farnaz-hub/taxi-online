@extends('layout.dashboard')
@section('content')
    <style>
        .rating {
            direction: rtl;
            display: inline-flex;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
        }

        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: gold;
        }
    </style>
    <body>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center" style="margin-bottom: 40px">Adding Driver</h4>
                <form method="post" action="{{route('driver.save')}}">
                    @csrf
                    <div class="row">  {{-- row = 1 --}}
                        <x-input label="First Name" type="text" name="first_name"/>
                        <x-input label="Last Name" type="text" name="last_name"/>
                    </div>

                    <div class="row">  {{-- row = 2 --}}
                        <x-input label="Phone Number" type="text" name="phone_number"/>
                        <x-input label="Email" type="email" name="email"/>
                    </div>

                    <div class="row">  {{-- row = 3 --}}
                        <x-input label="Username" type="text" name="username"/>
                        <x-input label="Password" type="password" name="password"/>
                    </div>

                    <div class="row">  {{-- row = 4 --}}
                        <x-select label="Gender" name="gender" :values="[1 => 'Male', 2 => 'Female']"/>
                        <x-input label="Birth Date" type="date" name="birth_date"/>
                    </div>

                    <div class="row">  {{-- row = 5 --}}
                        <x-provine-city label="" type="" name=""/>
                    </div>

                    <div class="row">  {{-- row = 6 --}}
                        <x-input label="National Code" type="text" name="national_code"/>
                        <x-input label="Image" type="text" name="image"/>
                    </div>

                    <div class="row">  {{-- row = 7 --}}
                        <x-input label="Total Trips" type="text" name="total_trips"/>
                        <x-input label="Total Income" type="text" name="total_income"/>
                    </div>

                    <div class="row">  {{-- row = 8 --}}
                        <x-input label="License Number" type="text" name="license_number"/>
                        <x-input label="License Expired Date" type="date" name="license_expired_at"/>
                    </div>

                    <div class="row">  {{-- row = 9 --}}
                        <x-checkbox label="Active" name="is_active"/>
                        <x-radiobutton label="Rating" name="rating"/>
                        <x-button submit="true" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection
