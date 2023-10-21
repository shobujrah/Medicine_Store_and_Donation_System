@extends('backend.master')
@section('content')

<h1>Assign permission</h1>

<body>
<div class="container mt-5">
    <div class="row">

        <!-- Card 1 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    User
                </div>
                <div class="card-footer">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">

                        </label>
    <div class="container mt-5">
        <div class="row">

            <!-- Card 1 -->
            <div class="col-md-3 mb-4">

                <form action="" method="">

                    <div class="card">
                        <!-- <div class="card-header">Card 1</div> -->
                        <div class="card-body">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">
                                Check all Permissions
                            </label>
                        </div>
                        <div class="card-footer">


                            <div class="form-check">
                                <input name="permission[]"
                                class="form-check-input" type="checkbox" value="" id="checkbox1">
                                <label class="form-check-label" for="checkbox1">

                                </label>
                            </div>

                        </div>
                    </div>


                </div>
                    <button class="btn btn-success" type="submit">Assign permission</button>
                </form>
            </div>
        </div>




        </div>
    </div>
</div>


@endsection

