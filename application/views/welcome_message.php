<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <meta name="description" content="Dashboard" />
        <script language="JavaScript" type="text/javascript" src="/aset/jQuery/jquery-2.2.4.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="/aset/DataTables/js/jquery.dataTables.min.js"></script>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="/aset/utama/css/style.css" />
        <link rel="stylesheet" type="text/css" media="only screen and (min-device-width: 320px) and (max-device-width: 650px)" href="/aset/utama/css/mobile.css" />
        <link rel="stylesheet" type="text/css" href="/aset/utama/css/print.css" media="print" />
        <link rel="stylesheet" type="text/css" href="/aset/utama/css/extra3.css" />
        <link rel="stylesheet" type="text/css" href="/aset/utama/css/extra6.css" />
        <link rel="stylesheet" type="text/css" href="/aset/DataTables/css/jquery.dataTables.min.css" />
    </head>
    <body>
        <div class="tborder" >
            <table width="100%" cellpadding="0" cellspacing="0" border="0" id="smfheader">
                <tr>
                    <td class="catbg" height="32">
                        <span style="font-family: Verdana, sans-serif; font-size: 140%; ">Forum bb2ebb</span>
                    </td>
                    <td align="right" class="catbg">
                        <img src="/aset/utama/image/smflogo.gif" style="margin: 2px;" alt="" />
                    </td>
                </tr>
            </table>
            <table width="100%" cellpadding="0" cellspacing="0" border="0" >
                <tr>
                    <td class="titlebg2" height="32">
                        <span style="font-size: 130%;" id="hellomember"> Hello <b>bb2ebb</b>
                        </span>
                    </td>
                    <td class="titlebg2" height="32" align="right">
                        <span class="smalltext">
                            <?php echo (isset($datetime) ? $datetime : "") ?>
                        </span>
                    </td>
                </tr>
            </table>
            <table width="100%" cellpadding="0" cellspacing="0" border="0" >
                <tr><td class="mirrortab_back"><a href="/input">New Topic</a></td></tr>
            </table>
        </div>
        <div id="bodyarea" style="padding: 1ex 0px 2ex 0px;">
            <form action="input" method="post" name="postmodify" id="postmodify" enctype="multipart/form-data" style="margin: 0;">
                <div id="preview_section" style="display: none;">
                    <table border="0" width="100%" cellspacing="1" cellpadding="3" class="bordercolor" align="center" style="table-layout: fixed;">
                        <tr class="titlebg">
                            <td id="preview_subject">
                            </td>
                        </tr>
                        <tr>
                            <td class="post" width="100%" id="preview_body">
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                            </td>
                        </tr>
                    </table>
                    <br />
                </div>
                <?php echo (isset($datapreview)) ? $datapreview : ""; ?>
                <table border="0" width="100%" align="center" cellspacing="1" cellpadding="3" class="bordercolor">
                    <tr class="titlebg">
                        <td>Dashboard</td>
                    </tr>
                    <tr>
                        <td class="windowbg">
                            <table border="0" cellpadding="3" width="100%" id="tabelbb2ebb">
                                <thead>
                                    <tr>
                                        <th>Materi</th>
                                        <th>Kategori</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($tabelinduk as $v) {
                                        echo '<tr><td><a target="_blank" href="/view?id='.$v->id.'">'.$v->judul.'</a></td><td>'.$v->kategori.'</td><td>'.$v->dateinput.'</td><td><a href="/edit?id='.$v->id.'">edit</a></td></tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        replaceText('<img width=580px src="' + e.target.result + '">', document.forms.postmodify.message);
                        return false;
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        <script>
            function upld() {
                var form = document.createElement("input");
                form.setAttribute("type", "file");
                form.setAttribute("id", "upldbb2ebb");
                document.body.appendChild(form);
                form.click();
                $("input[id=upldbb2ebb]").change(function () {
                    readURL(this);
                });
            }
        </script>
        <script>
            $(document).ready(function () {
                $('#tabelbb2ebb').DataTable();
            });
        </script>
    </body>
</html>
