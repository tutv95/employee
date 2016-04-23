@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add new</div>

                        <div class="panel-body">
                            <?php
                            $form = [
                                    'defaults' => [
                                            'name'          => '',
                                            'email'         => '',
                                            'phone'         => '',
                                            'job'           => '',
                                            'department_id' => '',
                                    ],
                                    'url'      => route( 'ajax.employee.add' ),
                                    'method'   => 'POST',
                                    'button'   => 'Add new'
                            ]
                            ?>
                            @include('employees.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('body.scripts')
    <script src="{{ asset('assets/js/form.js') }}"></script>
@endsection