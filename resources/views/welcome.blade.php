<!DOCTYPE html>
<html lang="en" data-theme="emerald">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Hosting Detector</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Creative Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Kross Template v1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- Main Stylesheet -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <script src="{{ URL::asset('js/app.js') }}"></script>

</head>

<body class="min-h-screen">



    <div class="navbar bg-base-100 fixed top-0 left-0 right-0 z-50">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">Hosting Detector</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal p-0">
                <li><a>About</a></li>
            </ul>
        </div>
    </div>

    <div class="min-h-screen mb-9">
        <div class="space-mt"></div>
        <div class="md:container lg:pt-12 md:pt-12 sm:pt-12 md:mx-auto bg-Slate-100">
            <div class="text-center p-6">
                <div class="hero-content flex-col lg:flex-row-reverse bg-Slate-100">

                    <div class="text-center lg:text-left p-9">
                        <h1 class="lg:text-7xl text-5xl text-red-800 font-bold">Hosting Detector</h1>
                        <p class="py-6">To find out where a website is hosted enter the URL address:</p>
                    </div>

                    <div class="card flex-shrink-0 w-full max-w-sm bg-base-100 shadow-2xl p-3">
                        <div class="card-body">

                            <form id="domainForm">
                                <div class="form-control ">
                                    <label class="label">
                                        <span class="">Domain</span>
                                    </label>
                                    <input type="text" id="domain" name="domain" placeholder="enter domain" class="input input-bordered shadow-2xl w-full max-w-xs">
                                </div>

                                <div class="form-control mt-6">
                                    <button type="submit" id="domainSubmit" value="Submit" class="btn gap-2 btn-md lg:btn-lg">
                                        Find Host Data
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- table -->
        <div class="container mx-auto px-4">
            <!-- <h1 class="text-5xl text-center font-bold p-3 bg-base-200">Information</h1> -->
            <div class="text-center">
                <div class="ml-1">
                    <div class="overlay">
                        <div class="atom-spinner hide">
                            <div class="spinner-inner">
                                <div class="spinner-line"></div>
                                <div class="spinner-line"></div>
                                <div class="spinner-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto ">

                <table class="table w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                        </tr>
                    </thead>

                    <tbody id='tableData'>
                        <p class="py-6" id="message"></p>

                    </tbody>


                </table>

            </div>
        </div>
        <!-- /table -->


        <!-- Start Data Loading from Backend  -->
        <script>
            $(document).ready(function() {
                $('#domainForm').on('submit', function(e) {
                    $('#tableData').html(null);
                    // $('#message').html("Wait... Not Available or Incorrect Domain");
                    e.preventDefault()
                    if (true) {
                        let domainURL = $('#domain').val();
                        if (!domainURL) {
                            $('#message').html("Please enter domain");
                            $('#tableData').html(null);
                            return null;
                        }
                        $.ajax({
                            type: "POST",
                            url: "{{ url('/hosting-checker/domain') }}",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                domain: domainURL,
                            },
                            dataType: "json",
                            encode: true,
                            beforeSend: function() {
                                $('.atom-spinner').addClass('show')
                                $('.atom-spinner').removeClass('hide')

                                $('#message').addClass('hide')
                            },
                            success: function(result) {},
                            error: function(data) {
                                $('#tableData').html(null);
                                $('#message').html("Incorrect Domain or Data does not exist");
                            },
                            complete: function() {
                                $('.atom-spinner').addClass('hide')
                                $('.atom-spinner').removeClass('show')

                                $('#message').removeClass('hide')
                            },

                        }).done(function(result) {
                            if (result.success == true) {
                                var arr = "";
                                $.each(result.data, function(k, v) {
                                    console.log(v)
                                    arr = arr + "<tr class='hover'><td>" + k + "</td>" + "<td>" + v + "</td></tr>";
                                    $('#tableData').html(arr);
                                });
                                $('#message').html(null);
                            } else {
                                $('#tableData').html(result.message);
                            }
                        });
                    }
                });
            });
        </script>
        <!-- End Data Loading from Backend  -->

        <style>
            .space-mt {
                margin-top: 100px;
            }

            .space-pt {
                padding-top: 100px;
            }
        </style>
    </div>

    <!-- footer -->
    <footer class="footer footer-center p-4 mt-9 bg-base-100 text-base-content">
        <div>
            <p>Copyright &copy;<script>
                    var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                </script> Designed &amp; Developed by <a class="text-white-50" href="">Anurag Deep</a></p>
        </div>
    </footer>

    <!-- /footer -->


    <style>
        /* Start Loader Style  */
        .show {
            display: block !important;
        }

        .hide {
            display: none !important;
        }

        .atom-spinner,
        .atom-spinner * {
            box-sizing: border-box;
        }

        .atom-spinner {
            height: 60px;
            width: 60px;
            overflow: hidden;
        }

        .atom-spinner .spinner-inner {
            position: relative;
            display: block;
            height: 100%;
            width: 100%;
        }

        .atom-spinner .spinner-circle {
            display: block;
            position: absolute;
            color: #9C2424;
            font-size: calc(60px * 0.24);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .atom-spinner .spinner-line {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            animation-duration: 1s;
            border-left-width: calc(60px / 25);
            border-top-width: calc(60px / 25);
            border-left-color: #9C2424;
            border-left-style: solid;
            border-top-style: solid;
            border-top-color: transparent;
        }

        .atom-spinner .spinner-line:nth-child(1) {
            animation: atom-spinner-animation-1 1s linear infinite;
            transform: rotateZ(120deg) rotateX(66deg) rotateZ(0deg);
        }

        .atom-spinner .spinner-line:nth-child(2) {
            animation: atom-spinner-animation-2 1s linear infinite;
            transform: rotateZ(240deg) rotateX(66deg) rotateZ(0deg);
        }

        .atom-spinner .spinner-line:nth-child(3) {
            animation: atom-spinner-animation-3 1s linear infinite;
            transform: rotateZ(360deg) rotateX(66deg) rotateZ(0deg);
        }

        @keyframes atom-spinner-animation-1 {
            100% {
                transform: rotateZ(120deg) rotateX(66deg) rotateZ(360deg);
            }
        }

        @keyframes atom-spinner-animation-2 {
            100% {
                transform: rotateZ(240deg) rotateX(66deg) rotateZ(360deg);
            }
        }

        @keyframes atom-spinner-animation-3 {
            100% {
                transform: rotateZ(360deg) rotateX(66deg) rotateZ(360deg);
            }
        }

        /* End Loader Style  */
    </style>
</body>

</html>