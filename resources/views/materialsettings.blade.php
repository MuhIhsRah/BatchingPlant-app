@extends('layout.mainlayout')

@section('title', 'Material')

@section('content')
    <div class='bg-white container-sm col-14 border my-3 rounded py-3'>
        <div class="row g-3 align-items-center">
            <div class='col-sm-10'>
                <h1>Material Settings Page</h1>
            </div>
            <div class='col-auto'>
                <a class="mt-4 btn btn-info" href='/create-matset'>Edit</a>
            </div>
            @foreach ($task as $tasks)
                <div class='col-auto'>
                    <a class="mt-4 btn btn-danger" href={{ 'delete5/' . $tasks['id'] }}>Delete</a>
                </div>
                <h4>Data Prelimit</h4>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Prelimit Bin 1</th>
                            <th scope="col">Prelimit Bin 2</th>
                            <th scope="col">Prelimit Bin 3</th>
                            <th scope="col">Prelimit Bin 4</th>
                            <th scope="col">Prelimit Cement</th>
                            <th scope="col">Prelimit Flyash</th>
                            <th scope="col">Prelimit Water</th>
                            <th scope="col">Prelimit Additive</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>{{ $tasks->prelimitbin1 }}</td>
                            <td>{{ $tasks->prelimitbin2 }}</td>
                            <td>{{ $tasks->prelimitbin3 }}</td>
                            <td>{{ $tasks->prelimitbin4 }}</td>
                            <td>{{ $tasks->prelimitcement }}</td>
                            <td>{{ $tasks->prelimitflyash }}</td>
                            <td>{{ $tasks->prelimitwater }}</td>
                            <td>{{ $tasks->prelimitadditive }}</td>
                        </tr>

                    </tbody>
                </table>

                <h4>Data Jogging</h4>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Jogging Bin 1</th>
                            <th scope="col">Jogging Bin 2</th>
                            <th scope="col">Jogging Bin 3</th>
                            <th scope="col">Jogging Bin 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>{{ $tasks->joggingbin1 }}</td>
                            <td>{{ $tasks->joggingbin2 }}</td>
                            <td>{{ $tasks->joggingbin3 }}</td>
                            <td>{{ $tasks->joggingbin4 }}</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Data Remain</h4>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Remain Material</th>
                            <th scope="col">Remain Cement</th>
                            <th scope="col">Remain Water</th>
                            <th scope="col">Remain Additive</th>
                            <th scope="col">Discharge Water</th>
                            <th scope="col">Discharge Cement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>{{ $tasks->remainmaterial }}</td>
                            <td>{{ $tasks->remaincement }}</td>
                            <td>{{ $tasks->remainwater }}</td>
                            <td>{{ $tasks->remainadditive }}</td>
                            <td>{{ $tasks->dischargewater }}</td>
                            <td>{{ $tasks->dischargecement }}</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Timer Setting</h4>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Timer Bin 1</th>
                            <th scope="col">Timer Bin 2</th>
                            <th scope="col">Timer Bin 3</th>
                            <th scope="col">Timer Bin 4</th>
                            <th scope="col">Timer Mixer</th>
                            <th scope="col">Conveyor On</th>
                            <th scope="col">Conveyor Off</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>{{ $tasks->timerbin1 }}</td>
                            <td>{{ $tasks->timerbin2 }}</td>
                            <td>{{ $tasks->timerbin3 }}</td>
                            <td>{{ $tasks->timerbin4 }}</td>
                            <td>{{ $tasks->timermixer }}</td>
                            <td>{{ $tasks->conveyoron }}</td>
                            <td>{{ $tasks->conveyoroff }}</td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
@endsection
