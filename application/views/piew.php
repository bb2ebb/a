<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <meta name="description" content="Start new topic" />
        <script language="JavaScript" type="text/javascript" src="/aset/jQuery/jquery-2.2.4.min.js"></script>
        <script language = "JavaScript" type = "text/javascript" src = "/aset/utama/js/script.js" ></script>
        <title><?php echo isset($judulhtml)?$judulhtml :""?></title>
        <link rel="stylesheet" type="text/css" href="/aset/utama/css/style.css" />
        <link rel="stylesheet" type="text/css" media="only screen and (min-device-width: 320px) and (max-device-width: 650px)" href="/aset/utama/css/mobile.css" />
        <link rel="stylesheet" type="text/css" href="/aset/utama/css/print.css" media="print" />
        <link rel="stylesheet" type="text/css" href="/aset/utama/css/extra3.css" />
        <link rel="stylesheet" type="text/css" href="/aset/utama/css/extra6.css" />
    </head>
    <body>
        <div class="tborder" >
            <table width="100%" cellpadding="0" cellspacing="0" border="0" id="smfheader">
                <tr>
                    <td class="catbg" height="32">
                        <a href="/"><span style="font-family: Verdana, sans-serif; font-size: 140%; ">Forum bb2ebb</span></a>
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
        </div>
        <div id="bodyarea" style="padding: 1ex 0px 2ex 0px;">
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
            <table class="bordercolor" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
                <tbody>
                    <tr class="titlebg">
                        <td><?php echo isset($judulhtml)?"<h3>".$judulhtml."</h3><hr/>".$dateinput." | kategori: ".$kategori:""; ?></td>
                    </tr>
                    <tr>
                        <td class="windowbg"><?php echo isset($uraian)?$uraian:""; ?></td>
                    </tr>
                </tbody>
            </table><br/>
        </div>
    </body>
</html>
