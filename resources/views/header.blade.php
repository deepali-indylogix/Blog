<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        <script>
            $(document).ready(function(){
                // Check or Uncheck All checkboxes
                $("#all_select").change(function(){
                    var checked = $(this).is(':checked');
                    if(checked){
                    $(".delete_all").each(function(){
                        $(this).prop("checked",true);
                        // console.log($(this).prop("checked",true));
                    });
                    }else{
                    $(".delete_all").each(function(){
                        $(this).prop("checked",false);
                    });
                    }
                });
                // Changing state of all_select delete_all
                $(".delete_all").click(function(){

                    if($(".delete_all").length == $(".delete_all:checked").length) {
                    $("#all_select").prop("checked", true);
                    } else {
                    $("#all_select").removeAttr("checked");
                    }

                });


                $('#abc').on('click', function(e) {
                    var id = [];
                    $("#delete:checked").each(function() {
                        id.push($(this).attr('data-id'));
                    });
                    console.log(id);
                    if(id.length <=0) {
                        alert("Please select row.");
                    }  else {
                        var check = confirm("Are you sure you want to delete THIS row?");
                        if(check == true){
                            // alert('id');
                            var join = id.join(",");
                            $.ajax({
                                url: '/category/delete/{id}',
                                method:"get",
                                type:'DELETE',
                                data:{ids:join},
                                success: function (data) {
                                    $('#table2').load(location.href + " #table2");
                                },
                                error: function (data) {
                                    alert(data.responseText);
                                }
                            });
                        }
                    }
                });



            });
        </script>

        <style>
            html, body {
                font-size: 16px;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            h2{
                text-align: center;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/category/view') }}">Category</a>
                        <a href="{{ url('/sub_category/view') }}">Sub Category</a>
                        <a href="{{ url('/#') }}">Products</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


