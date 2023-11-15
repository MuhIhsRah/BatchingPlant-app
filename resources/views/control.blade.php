<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample">
        >>
    </a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/control">*Control Page</a>
                    </li>
                    @if (Auth::user()->role == 'Supervisor')
                        <li class="nav-item">
                            <a class="nav-link" href="/user-settings">- User Settings</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/general-settings">*General Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/material-settings">-Material Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/data-material">-Data Material</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mix-design">-Mix Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/data-customer">-Data Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/data-truck">-Data Truck</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/data-driver">-Data Driver</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/report">*Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">-Exit</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <form action="control" method="POST">
        <div class="row">
            <h1>Control Page</h1>
            <div class="input-group">
                <span class="input-group-text">Select Port</span>
                <select id="portNum" class="form-select form-control-sm" aria-label="Default select example">
                    @php
                        for ($x = 1; $x <= 20; $x++) {
                            echo '<option value="' . 'COM' . $x . '">' . 'COM' . $x . '</option>';
                        }
                    @endphp
                </select>
                <div class="row">
                    <div class="col-4">
                        <a>Indikator Katup Bin =</a>
                        <input type="button" value="ON" class="btn btn-success" id="btnON">
                        <input type="button" value="OFF" class="btn btn-danger" id="btnOFF">
                    </div>
                    <!-- Add your other HTML content here -->
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

<script>
    $(document).ready(function() {
        var portid = "";
        $('#portNum').change(function() {
            portid = $('#portNum').val();
        });

        $('#btnON').click(function() {
            $.ajax({
                type: "POST",
                url: "{{ url('postData') }}",
                data: ({
                    port: portid,
                    Selector: '1'
                }),
                success: function(data1) {
                    alert(data1);
                }
            });
        });

        $('#btnOFF').click(function() {
            $.ajax({
                type: "POST",
                url: "{{ url('postData') }}",
                data: ({
                    port: portid,
                    Selector: '2'
                }),
                success: function(data1) {
                    alert(data1);
                }
            });
        });
    });
</script>
