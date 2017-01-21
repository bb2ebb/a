<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="Generator" content="EditPlus®">
        <meta name="Author" content="">
        <meta name="Keywords" content="">
        <meta name="Description" content="">
        <title>Kumpulan Tutorial</title>
    </head>
    <body>
        <h1>Kumpulan Tutorial</h1>
        <input type="file" id="imgInp"/>
        <textarea id="eee"></textarea>
        <script type="text/javascript" src="/aset/jQuery/jquery-2.2.4.min.js" ></script>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
//                        $('#blah').attr('src', e.target.result);
                        $('#eee').val(e.target.result);
                        
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("input[type=file]").change(function () {
                readURL(this);
            });
            </script>
        </body>
    </html>
