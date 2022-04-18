<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Image Compressor</title>

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


    <!-- the fileinput plugin styling CSS file -->
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

    <!-- the main fileinput plugin script JS file -->
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/fileinput.min.js"></script>


</head>

<body class="min-h-screen">



    <div class="navbar bg-blue-700 fixed top-0 left-0 right-0 z-50">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">Image Compressor</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal p-0">
                <li><a>About</a></li>
            </ul>
        </div>
    </div>

    <div class="min-h-screen  pb-9 bg-slate-900">

        <div class="space-pt"></div>

        <div class="md:container lg:pt-12 md:pt-12 sm:pt-12 md:mx-auto bg-Slate-100">
            <div class="text-center">


                <!-- Image Field -->
                <!-- <div class="form-group">
                    <label for="customFile">Image:</label>
                    <div class="custom-file">
                        <div class="file-loading">
                            <input id="image" name="image" class="image" type="file" data-min-file-count="0" data-theme="fas">
                        </div>
                    </div>
                </div> -->



                <!-- component -->
                <main class="container mx-auto max-w-screen-lg h-full">
                    <article class="relative flex flex-col shadow-3xl rounded-lg">
                        <header class="py-12 flex flex-col justify-center items-center">
                            <div class="custom-file">
                                <input id="image" name="image" class="image" type="file" data-min-file-count="0" data-theme="fas">
                            </div>
                        </header>
                    </article>
                </main>

                <style>
                    .file-actions,
                    .file-thumbnail-footer {
                        display: none;
                    }

                    .krajee-default.file-preview-frame .kv-file-content {
                        /* height: 200px !important; */
                    }

                    .file-drop-zone {
                        width: 800px !important;
                        min-height: 300px !important;
                        max-height: 300px !important;
                        border: 2px #9C2424 dashed;
                    }

                    .file-preview-image {
                        width: auto !important;
                        padding: 0px;
                        -webkit-transition: .5s all;
                        -moz-transition: .5s all;
                        -ms-transition: .5s all;
                        -o-transition: .5s all;
                        transition: .5s all;
                        box-shadow: 6px 5px 9px -7px rgba(0, 0, 0, 0.75);
                        -webkit-box-shadow: 6px 5px 9px -7px rgba(0, 0, 0, 0.75);
                        -moz-box-shadow: 6px 5px 9px -7px rgba(0, 0, 0, 0.75);
                    }

                    .file-preview-image:hover {
                        box-shadow: 6px 5px 22px -7px rgba(0, 0, 0, 0.75);
                        -webkit-box-shadow: 6px 5px 22px -7px rgba(0, 0, 0, 0.75);
                        -moz-box-shadow: 6px 5px 22px -7px rgba(0, 0, 0, 0.75);
                    }

                    .krajee-default.file-preview-frame {
                        padding: 0px;
                        border: none;
                        box-shadow: none !important;
                        -webkit-box-shadow: none !important;
                        -moz-box-shadow: none !important;
                    }

                    .krajee-default.file-preview-frame:hover {
                        padding: 0px;
                        border: none !important;
                    }

                    .file-preview-other-frame {
                        height: 120px !important;
                        width: auto !important;
                    }

                    .krajee-default .file-other-icon {
                        font-size: 4em !important;
                    }

                    .file-error-message {
                        font-size: 13px !important;
                        padding: 7px !important;
                    }

                    .file-preview .fileinput-remove {
                        display: none;
                    }

                    .kv-error-close {
                        display: none;
                    }
                </style>

                <script>
                    $("#image").fileinput({
                        allowedFileExtensions: ["jpg", "jpeg", "gif", "png"],
                        maxFileSize: 20000,
                        showUpload: false,
                        dropZoneEnabled: true,
                        msgPlaceholder: '',
                        browseLabel: 'Browse',
                        required: false,
                        validateInitialCount: true,
                        overwriteInitial: false,
                        showUploadStats: true
                    });
                </script>


                <div class="p-9">
                    <h1 class="lg:text-7xl text-5xl text-red-800 font-bold">Image Compressor</h1>
                    <p class="py-6">To compress Image, just upload here:</p>
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
    <footer class="footer footer-center p-10 bg-blue-700 text-primary-content">
        <div>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="inline-block fill-current">
                <path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
            </svg>
            <p>Copyright &copy;<script>
                    var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                </script> Designed &amp; Developed by <a class="text-white-50" href="">Anurag Deep</a></p>
        </div>
        <div>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>
            </div>
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