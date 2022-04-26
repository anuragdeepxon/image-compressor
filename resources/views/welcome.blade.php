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
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- Main Stylesheet -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/WangYuLue/image-conversion/build/conversion.js"></script>

    <script>
        function previewFile(input) {
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();

                reader.onload = function() {
                    $("#previewImg").attr("src", reader.result);
                }

                $('.imageArea').addClass('show')
                $('.imageArea').removeClass('hide')

                reader.readAsDataURL(file);

            }
        }
    </script>

</head>

<body class="">


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

    <div class="min-h-[85vh] bg-slate-900">

        <div class="space-pt"></div>


        <div class="md:container lg:pt-12 md:pt-12 sm:pt-12 md:mx-auto bg-Slate-100">
            <div class="text-center">

                <div class="p-9">
                    <h1 class="lg:text-7xl text-5xl text-red-800 font-bold">Image Compressor</h1>
                    <p class="py-6">To compress Image, just upload here:</p>
                </div>

                <!-- component -->
                <main class="container mx-auto max-w-screen-lg h-full">
                    <article class="relative flex flex-col shadow-3xl rounded-lg">
                        <header class="py-12 flex flex-col justify-center items-center">

                            <label class="uploadArea flex justify-center w-full h-32 px-4 transition border-2 border-white-900 border-dashed rounded-md cursor-pointer hover:border-red-900">
                                <span class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>

                                    <span class="font-medium text-white-600">
                                        Drop files to Attach, or
                                        <span class="">browse</span>
                                    </span>
                                </span>
                                <input type="file" class="" id="file" onchange="change()" hidden>
                            </label>

                            <input type="number" id="size" class="hide" placeholder="compressed image size" value=50 hidden>
                            <input type="number" id="accuracy" placeholder="range 0.8~0.99" class="hide" value="0.99" hidden>
                            <!-- <div class="m-3 alert alert-error shadow-lg" role="">
                                if you compress png transparent images, please select 'image/png' type
                            </div> -->
                            <select class="hide" id="type">
                                <option selected>Choose Image Type</option>
                                <option value="image/png">image/png</option>
                                <option value="image/jpeg">image/jpeg</optio <option value="image/gif">image/gif</option>
                            </select>

                            <select class="" id="orientation" hidden>
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                            </select>


                            <div id="errorArea" class="hide mt-5">
                                <div id="errorText" class='alert alert-error shadow-lg'></div>
                            </div>

                            <div class="container mx-auto px-4 pt-5">
                                <div class="text-center">
                                    <center>
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
                                    </center>
                                </div>
                            </div>

                        </header>
                    </article>
                </main>


                <div class="flex flex-col w-full lg:flex-row">
                    <div class="grid flex-grow card rounded-box place-items-center">


                        <div class="card w-96 bg-base-100 shadow-xl m-5">
                            <figure class="px-10 pt-10 ">
                                <div id="input" class="imageDesign shadow-3xl" style="max-width: 200px;">
                                </div>
                            </figure>
                            <div class="card-body items-center text-center">
                                <div class="card-actions">
                                    <div class="stats">
                                        <div class="stat">
                                            <div class="stat-title">Original image</div>
                                            <div class="stat-value" id="input_size"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider lg:divider-horizontal">To</div>
                    <div class="grid flex-grow card rounded-box place-items-center">

                        <div class="card w-96 bg-base-100 shadow-xl m-5">
                            <figure class="px-10 pt-10 rounded-md ">
                                <div id="output" class="imageDesign shadow-3xl" style="max-width: 200px;">
                                </div>
                            </figure>
                            <div class="card-body items-center text-center">
                                <div class="card-actions">
                                    <div class="stats">
                                        <div class="stat">
                                            <div class="stat-title">Compressed image</div>
                                            <div class="stat-value" id="output_size"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <center>
                    <div id="downloadImage" class="hide m-5 text-center">
                        <button class="btn gap-2 m-3">
                            Accuracy
                            <div id="output_accuracy" class="badge badge-accent"></div>
                        </button>

                        <button class="btn btn-outline btn-wide mb-10" onclick="download()">Download Image</button>
                    </div>
                </center>

                <script>
                    const data = {
                        file: null,
                        compress_file: null,
                        runtime: null
                    }

                    function getDom(domId) {
                        return document.getElementById(domId)
                    }

                    async function change() {
                        const file = getDom("file").files[0];
                        data.file = file;

                        $('.atom-spinner').addClass('show');
                        $('.atom-spinner').removeClass('hide');

                        $('#downloadImage').addClass('hide');
                        $('#downloadImage').removeClass('show');

                        var finalS = Math.round((data.file.size / 1024).toFixed(2));
                        if (finalS < 200) {

                            var errorText;
                            errorText = document.querySelector("#errorText");
                            errorText.innerText = "File is smaller than the specified size 200kb";

                            console.log('File is smaller than the specified size 200kb');

                            const imageArea = document.querySelector("#errorArea");
                            imageArea.classList.add("show");
                            imageArea.classList.remove("hide");

                            throw new Error("finalS < 200 bgb");
                        } else {
                            const imageArea = document.querySelector("#errorArea");
                            imageArea.classList.add("hide");
                            imageArea.classList.remove("show");
                        }

                        const image = await filetoImage(file);
                        showMessage(file, image, "input");

                        compressF()
                    }

                    function showMessage(file, image, name) {
                        // const size = (file.size / 1024).toFixed(2);
                        const size = Math.round((file.size / 1024).toFixed(2));
                        if (name === "output") {
                            const origin_size = getDom("size").value;
                            getDom(name + "_size").innerText = size + " KB";

                            getDom(name + "_accuracy").innerText = ((1 - Math.abs(1 - size / origin_size)) * 100).toFixed(2);

                        } else {
                            getDom(name + "_size").innerText = Math.round(size) + " KB";
                        }
                        getDom(name).innerHTML = '';
                        getDom(name).append(image);
                    }

                    async function compressF() {
                        var finalS = Math.round((data.file.size / 1024).toFixed(2));

                        const file = data.file;
                        const size = 200;
                        const accuracy = 1;
                        const type = getDom("type").value;
                        const startTime = Date.now();
                        const compress_file = await imageConversion.compressAccurately(file, {
                            size,
                            accuracy,
                            type
                        });
                        const check = await checkImage(compress_file);
                        data.compress_file = compress_file;
                    }

                    async function checkImage(file) {
                        console.log((file.size / 1024).toFixed(2));
                        compress50(file, 0.2);
                        return;
                    }

                    let init;
                    init = 0;

                    let fin;
                    fin = 10;

                    async function checkImage2(file) {
                        var finalS = Math.round((file.size / 1024).toFixed(2));
                        const startTime = Date.now();

                        console.log(finalS);

                        if (finalS > 50) {
                            fin = fin - 0.5;

                            if (fin < 0.1) {
                                data.runtime = Date.now() - startTime;
                                const compress_image = await filetoImage(file);
                                data.compress_file = file;
                                showMessage(file, compress_image, "output");

                                throw new Error("fin < 0.01");
                            }

                            reCompress(file, (fin));
                        } else if (finalS < 50) {
                            init = init + 0.1;

                            if (init > 9.9) {
                                data.runtime = Date.now() - startTime;
                                const compress_image = await filetoImage(file);
                                data.compress_file = file;
                                showMessage(file, compress_image, "output");

                                throw new Error("init > 9.99");
                            }

                            reCompress(file, (init));

                        } else if (finalS == 50) {
                            data.runtime = Date.now() - startTime;
                            const compress_image = await filetoImage(file);
                            data.compress_file = file;
                            showMessage(file, compress_image, "output");

                            $('#downloadImage').addClass('show');
                            $('#downloadImage').removeClass('hide');

                            $('.atom-spinner').addClass('hide');
                            $('.atom-spinner').removeClass('show');
                        }
                    }

                    async function reCompress(Origfile, num) {
                        console.log(num);

                        const file = Origfile;
                        const size = 50;
                        const accuracy = 0.99;
                        const type = getDom("type").value;
                        const scale = num;
                        const startTime = Date.now();
                        const compress_file = await imageConversion.compressAccurately(file, {
                            size,
                            accuracy,
                            type,
                            scale
                        });

                        await checkImage2(compress_file);
                    }

                    async function compress50(Origfile, num) {

                        const file = Origfile;
                        const size = 50;
                        const accuracy = 0.99;
                        const type = getDom("type").value;
                        const scale = 0.2;
                        const startTime = Date.now();
                        const compress_file = await imageConversion.compressAccurately(file, {
                            size,
                            accuracy,
                            type,
                            scale
                        });
                        const check = await checkImage2(compress_file);
                        data.runtime = Date.now() - startTime;
                        const compress_image = await filetoImage(compress_file);
                        data.compress_file = compress_file;
                        showMessage(compress_file, compress_image, "output");
                    }

                    async function filetoImage(file) {
                        const dataURL = await imageConversion.filetoDataURL(file);
                        return await imageConversion.dataURLtoImage(dataURL);
                    }

                    function download() {
                        imageConversion.downloadFile(data.compress_file);
                    }
                </script>

            </div>
        </div>


        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

        <!-- Start Data Loading from Backend  -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("input[name=image]").change(function(e) {
                    $(this).closest("form").submit();
                });
            });
        </script>
        <!-- End Data Loading from Backend  -->

        <!-- <div class="space-pt"></div> -->
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

</body>

</html>