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
    href="javascript:void(0);" onclick="surroundText('[img]', '[/img]', document.forms.postmodify.message); return false;"
    function upld() {
                var form = document.createElement("input");
                form.setAttribute("type", "file");
                form.setAttribute("id", "upldbb2ebb");
                document.body.appendChild(form);
                form.click();
            }
            
             Saya sarankan menggunakan http://whatstheirip.com

Di website ini, Anda masukkan e-mail, dan Anda mendapatkan satu set link. anda akan mendapatkan link, lalu copy dan paste, dan lalu berikan link nya ke target, (hmm... bilang saja sudah bikin laporan). Setelah link diklik, IP target akan dikirim ke e-mail Anda

lalu anda cari di http://ipaddress.com , masukan ip addres target.
lalu ambil koordinat longitude dan latitude nya ( pake wgs72) untuk GPS nya, lalu anda masuk ke google earth dan masukan koordinat tersebut ( setting google earth wgs72).
dan boom.... anda bisa meihat atap rumah nya :)

nah, apa jadinya kalau IP addres target menggunakan proxy/vpn ?