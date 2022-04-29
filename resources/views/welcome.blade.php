<!DOCTYPE html>
<html lang="en" data-theme="emerald">

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Resize Or Compress Image To 50kb (Accurate 50Kb)</title>

    <!-- Specific Metas -->
    <meta name="description" content="Here Reisze Or CompRess any image/photo to 50kb,just upload any image in this tool will compress or Resize it to 50kb automaticly">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Anurag Deep | https://anuragdeep.com">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/logo.png') }}" />

    <!-- Main Stylesheet -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

    <!-- Javascripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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




    <!-- Header start  -->
    <div id="arya-fly-wrap">
        <div id="arya-fly-menu-top" class="left relative pt-3">
            <div class="arya-fly-top-out left relative">
                <div class="arya-fly-top-in">
                    <div id="arya-fly-logo" class="left relative logo">
                        <!-- <a href="/"><img src="{{ URL::asset('images/logo.png') }}" class="" alt="Image To 50kb" /> -->
                        <h1 class="text-2xl font-bold text-white">Image To 50kb</h1>
                        </a>
                    </div>
                </div>
                <div class="arya-fly-but-wrap arya-fly-but-menu arya-fly-but-click">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div id="arya-fly-menu-wrap">
            <nav class="arya-fly-nav-menu pt-6 left relative">
                <div class="menu">
                    <ul>
                        <li class=""><a href="/">Home</a></li>
                        <li class=""><a href="/about-site">About Site</a></li>
                        <li class=""><a href="/privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div id="arya-fly-soc-wrap">
            <!-- <span class="arya-fly-soc-head">Connect with us</span> -->
            <ul class="arya-fly-soc-list left relative">
            </ul>
        </div>
    </div>

    <header>
        <nav style="height: 50px;" class="fixed mx-auto top-0 left-0 right-0 z-[500] shadow-xl flex bg-[#0f5dfa] 2xl:px-[11%] xl:px-[11%] lg:px-[11%] md:px-[10rem] sm:px-10 px-5 ">

            <!-- Left Navigation -->
            <div class="flex-1 flex justify-center mr-auto">
                <div id="" class="">
                    <div id="arya-nav-bot-wrap" class="left">
                        <div class="arya-nav-bot-left left relative">
                            <div class="arya-fly-but-wrap arya-fly-but-click left relative">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo -->
            <div class="">
                <div class="">

                    <!-- <a href="/"><img src="{{ URL::asset('images/logo.png') }}" class="w-16 md:w-20 lg:w-20 p-2 mt-5 inline" alt="Image To 50kb" /> -->
                    <h1 class="mt-2 md:mt-0 lg:mt-0  p-1 font-bold text-white text-xl md:text-3xl lg:text-3xl  self-center" style="float: right;">Image To 50kb</h1>
                    </a>

                </div>
            </div>

            <!-- Right Navigation -->
            <div class="flex-1 flex justify-center ml-auto">
                <a class=""></a>
            </div>


        </nav>


        <nav class="flex fixed w-screen">

        </nav>
    </header>

    <div id="overlay" class="arya-fly-fade"></div>
    <!-- Header end  -->


    <div class="sm:container mx-auto lg:px-40 md:px-10 sm:px-10 px-5">
        <div class="space-pt"></div>

        <div class="text-center">
            <!-- component -->
            <main>
                <article class="relative flex flex-col shadow-3xl rounded-lg">
                    <header class="py-12 flex flex-col justify-center items-center">

                        <label class="uploadArea flex justify-center md:w-96 lg:w-96 w-[80%] h-32 px-4 transition border-2 border-slate-900 border-dashed rounded-md cursor-pointer hover:border-red-900">
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
                            <option value="image/jpeg">image/jpeg</option>
                            <option value="image/gif">image/gif</option>
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


                    <div class="card md:w-96 lg:w-96 w-[100%] bg-base-100 shadow-xl m-5">
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

                    <div class="card md:w-96 lg:w-96 w-[100%] bg-base-100 shadow-xl m-5">
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
                    <!-- <button class="btn gap-2 m-3">
                            Accuracy
                            <div id="output_accuracy" class="badge badge-accent"></div>
                        </button> -->

                    <button class="btn btn-wide mb-10" onclick="download()">Download Image</button>
                    <br>
                    <button class="btn btn-wide mb-10" onclick="refresh()">Compress Another Image</button>
                </div>
            </center>


        </div>
    </div>



    <!-- Details section start  -->
    <div class="sm:container mx-auto lg:px-40 md:px-10 sm:px-10 px-5">
        <div class="pt-[3rem]">



            <div class="card bg-base-100 shadow-xl my-6">
                <div class="card-body">
                    <h2 class="card-title">Resize Or Compress Image To 50kb Online</h2>
                    <p class="py-3 leading-normal text-slate-900 text-justify">The step is very simple for resizing images to 50kb just follow the steps:
                        <br>
                        Welcome to the best image to 50kb image converter, in this tool just upload any image format, this tool will resize or compress it to an accurate 50kb size.

                    </p>
                </div>
            </div>




            <div class="card bg-base-100 shadow-xl my-6">
                <div class="card-body">
                    <h2 class="card-title">How To Resize the image to 50kb?</h2>
                    <p class="py-3 leading-normal text-slate-900 text-justify">The step is very simple for resizing images to 50kb just follow the steps:
                        <br>
                        Upload Your image file format like jpg, png, jpeg, or any image format on the above upload box, after uploading the image will automatically resize or compress to 50kb. here is the image guide below:

                    </p>
                </div>
            </div>


            <div class="card bg-base-100 shadow-xl my-6">
                <div class="card-body">
                    <h2 class="card-title">About this imageto50kb.com?</h2>
                    <p class="py-3 leading-normal text-slate-900 text-justify"><a class="text-blue-900 font-bold" style="color: blue !important;" href="http://imageto50kb.com/">Imageto50kb.com</a> is the best image Resizer tool that can resize or compress any image to 50kb. the goal of the tool is to compress any image file to an accurate 50kb size.
                        <br /> <br />
                        When we fill any form, it is often asked to put the image size to 50kb. to solve this problem, we have made this tool so that any user can convert his/her photo to 50kb for his/her work to be able to use.
                    </p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl my-6">
                <div class="card-body">
                    <h2 class="card-title">Can You Compress Image To 50kb Online?</h2>
                    <p class="py-3 leading-normal text-slate-900 text-justify">Yes, this tool is made to compress image size to 50kb. And the good thing is, that this tool is online. you don't have to download any app to compress or resize images to 50kb.

                    </p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl my-6">
                <div class="card-body">
                    <h2 class="card-title">How to download the image after resizing it to 50kb?
                    </h2>
                    <p class="py-3 leading-normal text-slate-900 text-justify">This is easy to use tool no need to worry about downloading it. first, upload your photo on an upload box, wait for resizing process after a few seconds you see a download button will come up just click on the download button and download your 50kb version of your image.
                    </p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl my-6">
                <div class="card-body">
                    <h2 class="card-title">Security guaranteed
                    </h2>
                    <p class="py-3 leading-normal text-slate-900 text-justify">Your photos are automatically deleted from our servers a few hours after you are done working with them. Nobody has access to them except you.

                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Details section end  -->


    <!-- Frequently Asked Questions start -->
    <div class="sm:container mx-auto lg:px-40 md:px-10 sm:px-10 px-5">
        <div class="pt-[2rem] pb-[5rem]">
            <div class="pt-3">
                <h4 class="py-3 leading-loose font-bold text-slate-900">Frequently Asked Questions</h4>
            </div>

            <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-6 shadow-2xl">
                <input type="checkbox" class="peer">
                <h5 class="collapse-title text-xl bg-[#2e74ff] pr-7 pl-7 text-white">
                    Can I convert the image into 50kb?
                </h5>
                <div class="collapse-content bg-[#ffffff] ">
                    <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">No, this tool can only compress or resize to 50kb, if you want to convert a photo into 50kb then visit this site:https://photoconvertinto50kb.com </p>
                </div>
            </div>

            <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box  my-6 shadow-2xl">
                <input type="checkbox" class="peer">
                <h5 class="collapse-title text-xl bg-[#2e74ff] pr-7 pl-7  text-white">
                    Can I change an image to 50kb?
                </h5>
                <div class="collapse-content bg-[#ffffff] ">
                    <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">Yes, you can change any image file size to 50kb on this tool.
                    </p>
                </div>
            </div>

            <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box  my-6 shadow-2xl">
                <input type="checkbox" class="peer">
                <h5 class="collapse-title text-xl bg-[#2e74ff] pr-7 pl-7  text-white">
                    Can I resize or compress jpg the image to 50kb?
                </h5>
                <div class="collapse-content bg-[#ffffff] ">
                    <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">Yes, You can resize or compress to 50kb by using this tool.
                    </p>
                </div>
            </div>

            <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box  my-6 shadow-2xl">
                <input type="checkbox" class="peer">
                <h5 class="collapse-title text-xl bg-[#2e74ff] pr-7 pl-7  text-white">
                    Can i resize png to 50kb here?
                </h5>
                <div class="collapse-content bg-[#ffffff] ">
                    <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">Yes, you can resize png to 50kb also.
                    </p>
                </div>
            </div>


            <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box  my-6 shadow-2xl">
                <input type="checkbox" class="peer">
                <h5 class="collapse-title text-xl bg-[#2e74ff] pr-7 pl-7  text-white">
                    Can i use this tool offline?
                </h5>
                <div class="collapse-content bg-[#ffffff] ">
                    <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">No, this is online tool and you can use it online only..
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Frequently Asked Questions end -->



    <script>
        var image_type = 'image/jpeg';

        function refresh() {
            location.reload()
        }


        function getExtension(filename) {
            var parts = filename.split('.');
            return parts[parts.length - 1];
        }

        function isImage(filename) {
            var ext = getExtension(filename);

            if (ext.toLowerCase() == 'jpg') {
                image_type = 'image/jpeg';
            } else if (ext.toLowerCase() == 'gif') {
                image_type = 'image/gif';
            } else if (ext.toLowerCase() == 'jpeg') {
                image_type = 'image/jpeg';
            } else if (ext.toLowerCase() == 'png') {
                image_type = 'image/png';
            } else {
                var errorText;
                errorText = document.querySelector("#errorText");
                errorText.innerText = "Please Upload Image Only";

                const imageArea = document.querySelector("#errorArea");
                imageArea.classList.add("show");
                imageArea.classList.remove("hide");

                throw new Error("Image")
            }

            return false;
        }

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

            isImage(file.name);

            $('.atom-spinner').addClass('show');
            $('.atom-spinner').removeClass('hide');

            $('#downloadImage').addClass('hide');
            $('#downloadImage').removeClass('show');

            var finalS = Math.round((data.file.size / 1024).toFixed(2));
            if (finalS < 60) {

                var errorText;
                errorText = document.querySelector("#errorText");
                errorText.innerText = "File is smaller than the specified size 60kb";

                console.log('File is smaller than the specified size 60kb');

                const imageArea = document.querySelector("#errorArea");
                imageArea.classList.add("show");
                imageArea.classList.remove("hide");

                throw new Error("finalS < 60 bgb");
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

                // getDom(name + "_accuracy").innerText = ((1 - Math.abs(1 - size / origin_size)) * 100).toFixed(2);

            } else {
                getDom(name + "_size").innerText = Math.round(size) + " KB";
            }
            getDom(name).innerHTML = '';
            getDom(name).append(image);
        }

        async function compressF() {
            var finalS = Math.round((data.file.size / 1024).toFixed(2));

            const file = data.file;
            const size = 60;
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

    <!-- footer -->
    <footer class="footer footer-center p-10 bg-[#2e74ff] text-white">
        <div>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="inline-block fill-white">
                <path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
            </svg>
            <p class="text-white mt-10">Copyright &copy;<script>
                    var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                </script> <span class="font-bold">ImageTo50kb</span>
                <br>
                <br>
                Developed by <a class="text-white font-bold hover:text-green-400" href="https://anuragdeep.com">Anurag Deep</a>
            </p>
        </div>
        <div>
            <!-- <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-white">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-white">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-white">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>
            </div> -->
        </div>
    </footer>
    <!-- /footer -->

</body>

</html>