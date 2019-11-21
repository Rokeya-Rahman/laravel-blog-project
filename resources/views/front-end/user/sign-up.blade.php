@extends('front-end.master')

@section('title')
    SIGN UP
@endsection

@section('body')
    <div class="container my-5">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3 text-center">Sign Up Form</h1>

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8 mx-auto">

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('new-sign-up') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email_address" class="form-control" onblur="emailCheck(this.value);"/>
                                    <span id="res" class="text-warning"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="phone_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Address</label>
                                <div class="col-md-9">
                                    <textarea name="address" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" id="regBtn" class="btn btn-block bg-secondary text-white" value="Register"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>

        /******** this is raw AJAX ********/


        // function emailCheck(email) {
        //     //alert(email);
        //
        //     //2 library
        //     //ActiveXObject
        //     //XMLHttpRequest
        //
        //     var xmlHttp = new XMLHttpRequest();
        //     var serverPage = 'http://localhost/laravel-blog/public/email-check/'+email;
        //     xmlHttp.open('GET', serverPage);
        //     xmlHttp.onreadystatechange = function () {
        //         if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        //             document.getElementById('res').innerHTML = xmlHttp.responseText;
        //             if (xmlHttp.responseText == 'Email address exist') {
        //                 document.getElementById('regBtn').disabled = true;
        //             } else {
        //                 document.getElementById('regBtn').disabled = false;
        //             }
        //         }
        //     }
        //     xmlHttp.send();
        //
        // }



        /******** this is jquery AJAX ********/


        function emailCheck(email) {
            $.ajax({
                url         :   'http://localhost/laravel-blog/public/email-check/'+email,
                method      :   'GET',
                data        :   {email:email},
                dataType    :   'JSON',
                success     :   function (data) {
                    document.getElementById('res').innerHTML = data;
                    if (data == 'Email address exist') {
                        document.getElementById('regBtn').disabled = true;
                    } else {
                        document.getElementById('regBtn').disabled = false;
                    }
                }
            });
        }



    </script>


@endsection














