<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <meta name="description" content="Start new topic" />
        <script language="JavaScript" type="text/javascript" src="/aset/jQuery/jquery-2.2.4.min.js"></script>
        <script language = "JavaScript" type = "text/javascript" src = "/aset/utama/js/script.js" ></script>
        <title>Start new topic</title>
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
                        <td>Start new topic</td>
                    </tr>
                    <tr>
                        <td class="windowbg">
                            <input type="hidden" name="topic" value="0" />
                            <table border="0" cellpadding="3" width="100%">
                                <tr style="display: none" id="errors">
                                    <td>
                                    </td>
                                    <td align="left">
                                        <div style="padding: 0px; font-weight: bold; display: none;" id="error_serious">
                                            The following error or errors occurred while posting this message:
                                        </div>
                                        <div style="color: red; margin: 1ex 0 2ex 3ex;" id="error_list">

                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: none" id="lock_warning">
                                    <td>
                                    </td>
                                    <td align="left">
                                        Warning: topic is currently/will be locked!<br />Only admins and moderators can reply.
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right" style="font-weight: bold;" id="caption_subject">
                                        Subject:
                                    </td>
                                    <td>
                                        <input type="text" name="subject" tabindex="1" size="80" maxlength="80" <?php echo (isset($judul)) ? 'value="' . $judul . '" ' : ""; ?>/>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        <b>Masukkan Kategori:</b>
                                    </td>
                                    <td>
                                        <select name="icon" id="icon">
                                            <?php
                                            foreach ($kategori as $v) {
                                                if (isset($kat)) {
                                                    if ($v->id === $kat) {
                                                        echo '<option value="' . $v->id . '"  selected="true">' . $v->uraian . '</option>';
                                                    }else echo '<option value="' . $v->id . '">' . $v->uraian . '</option>';
                                                }else echo '<option value="' . $v->id . '">' . $v->uraian . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <img src="/aset/utama/image/xx.gif" name="icons" hspace="15" alt="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                    </td>
                                    <td valign="middle">
                                        <a href="javascript:void(0);" onclick="surroundText('[b|]', '[/b|]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/bold.gif" align="bottom" width="23" height="22" alt="Bold" title="Bold" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[i|]', '[/i|]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/italicize.gif" align="bottom" width="23" height="22" alt="Italicized" title="Italicized" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[u|]', '[/u|]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/underline.gif" align="bottom" width="23" height="22" alt="Underline" title="Underline" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[s|]', '[/s|]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/strike.gif" align="bottom" width="23" height="22" alt="Strikethrough" title="Strikethrough" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <img src="/aset/utama/image/divider.gif" alt="|" style="margin: 0 3px 0 3px;" />
                                        <a href="javascript:void(0);" onclick="replaceText('[btc|]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/BTC.gif" align="bottom" width="23" height="22" alt="Insert Bitcoin symbol" title="Insert Bitcoin symbol" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <img src="/aset/utama/image/divider.gif" alt="|" style="margin: 0 3px 0 3px;" />
                                        <a href="javascript:void(0);" onclick="surroundText('[glow|]', '[/glow|]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/glow.gif" align="bottom" width="23" height="22" alt="Glow" title="Glow" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[shadow=red,left]', '[/shadow]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/shadow.gif" align="bottom" width="23" height="22" alt="Shadow" title="Shadow" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <img src="/aset/utama/image/divider.gif" alt="|" style="margin: 0 3px 0 3px;" />
                                        <a href="javascript:void(0);" onclick="surroundText('[pre]', '[/pre]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/pre.gif" align="bottom" width="23" height="22" alt="Preformatted Text" title="Preformatted Text" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[left]', '[/left]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/left.gif" align="bottom" width="23" height="22" alt="Left Align" title="Left Align" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[center]', '[/center]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/center.gif" align="bottom" width="23" height="22" alt="Centered" title="Centered" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[right|]', '[/right|]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/right.gif" align="bottom" width="23" height="22" alt="Right Align" title="Right Align" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <img src="/aset/utama/image/divider.gif" alt="|" style="margin: 0 3px 0 3px;" />
                                        <a href="javascript:void(0);" onclick="replaceText('[hr]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/hr.gif" align="bottom" width="23" height="22" alt="Horizontal Rule" title="Horizontal Rule" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <img src="/aset/utama/image/divider.gif" alt="|" style="margin: 0 3px 0 3px;" />
                                        <a href="javascript:void(0);" onclick="surroundText('[size=10pt]', '[/size]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/size.gif" align="bottom" width="23" height="22" alt="Font Size" title="Font Size" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[font=Verdana]', '[/font]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/face.gif" align="bottom" width="23" height="22" alt="Font Face" title="Font Face" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a> <select onchange="surroundText('[color=' + this.options[this.selectedIndex].value.toLowerCase() + ']', '[/color]', document.forms.postmodify.message); this.selectedIndex = 0; document.forms.postmodify.message.focus(document.forms.postmodify.message.caretPos);" style="margin-bottom: 1ex;">
                                            <option value="" selected="selected">Change Color</option>
                                            <option value="Black">Black</option>
                                            <option value="Red">Red</option>
                                            <option value="Yellow">Yellow</option>
                                            <option value="Pink">Pink</option>
                                            <option value="Green">Green</option>
                                            <option value="Orange">Orange</option>
                                            <option value="Purple">Purple</option>
                                            <option value="Blue">Blue</option>
                                            <option value="Beige">Beige</option>
                                            <option value="Brown">Brown</option>
                                            <option value="Teal">Teal</option>
                                            <option value="Navy">Navy</option>
                                            <option value="Maroon">Maroon</option>
                                            <option value="LimeGreen">Lime Green</option>
                                        </select>
                                        <br />
                                        <a href="javascript:void(0);" onclick="surroundText('[flash=200,200]', '[/flash]', document.forms.postmodify.message); return false;">
                                            <img  
                                                src="/aset/utama/image/flash.gif" align="bottom" width="23" height="22" alt="Insert Flash" title="Insert Flash" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a id="imgbb2ebb" href="javascript:void(0);" onclick="upld()">
                                            <img src="/aset/utama/image/img.gif" align="bottom" width="23" height="22" alt="Insert Image" title="Insert Image" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('<a href=\x22\x22 target=\x22_blank\x22>', '</a>', document.forms.postmodify.message); return false;">
                                            <img  
                                                src="/aset/utama/image/url.gif" align="bottom" width="23" height="22" alt="Insert Hyperlink" title="Insert Hyperlink" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[email]', '[/email]', document.forms.postmodify.message); return false;">
                                            <img  
                                                src="/aset/utama/image/email.gif" align="bottom" width="23" height="22" alt="Insert Email" title="Insert Email" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[ftp]', '[/ftp]', document.forms.postmodify.message); return false;">
                                            <img  
                                                src="/aset/utama/image/ftp.gif" align="bottom" width="23" height="22" alt="Insert FTP Link" title="Insert FTP Link" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <img src="/aset/utama/image/divider.gif" alt="|" style="margin: 0 3px 0 3px;" />
                                        <a href="javascript:void(0);" onclick="surroundText('[table]', '[/table]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/table.gif" align="bottom" width="23" height="22" alt="Insert Table" title="Insert Table" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[tr]', '[/tr]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/tr.gif" align="bottom" width="23" height="22" alt="Insert Table Row" title="Insert Table Row" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[td]', '[/td]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/td.gif" align="bottom" width="23" height="22" alt="Insert Table Column" title="Insert Table Column" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <img src="/aset/utama/image/divider.gif" alt="|" style="margin: 0 3px 0 3px;" />
                                        <a href="javascript:void(0);" onclick="surroundText('[sup]', '[/sup]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/sup.gif" align="bottom" width="23" height="22" alt="Superscript" title="Superscript" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[sub]', '[/sub]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/sub.gif" align="bottom" width="23" height="22" alt="Subscript" title="Subscript" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[tt]', '[/tt]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/tele.gif" align="bottom" width="23" height="22" alt="Teletype" title="Teletype" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <img src="/aset/utama/image/divider.gif" alt="|" style="margin: 0 3px 0 3px;" />
                                        <a href="javascript:void(0);" onclick="surroundText('[code]', '[/code]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/code.gif" align="bottom" width="23" height="22" alt="Insert Code" title="Insert Code" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="surroundText('[quote]', '[/quote]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/quote.gif" align="bottom" width="23" height="22" alt="Insert Quote" title="Insert Quote" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                        <img src="/aset/utama/image/divider.gif" alt="|" style="margin: 0 3px 0 3px;" />
                                        <a href="javascript:void(0);" onclick="surroundText('[list]\n[li]', '[/li]\n[li][/li]\n[/list]', document.forms.postmodify.message); return false;">
                                            <img  src="/aset/utama/image/list.gif" align="bottom" width="23" height="22" alt="Insert List" title="Insert List" style="background-image: url(/aset/utama/image/bbc_bg.gif); margin: 1px 2px 1px 1px;" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                    </td>
                                    <td valign="middle">
                                        <a href="javascript:void(0);" onclick="replaceText(' :)', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/smiley.gif" align="bottom" alt="Smiley" title="Smiley" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' ;)', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/wink.gif" align="bottom" alt="Wink" title="Wink" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' :D', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/cheesy.gif" align="bottom" alt="Cheesy" title="Cheesy" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' ;D', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/grin.gif" align="bottom" alt="Grin" title="Grin" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' >:(', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/angry.gif" align="bottom" alt="Angry" title="Angry" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' :(', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/sad.gif" align="bottom" alt="Sad" title="Sad" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' :o', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/shocked.gif" align="bottom" alt="Shocked" title="Shocked" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' 8)', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/cool.gif" align="bottom" alt="Cool" title="Cool" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' ???', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/huh.gif" align="bottom" alt="Huh" title="Huh" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' ::)', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/rolleyes.gif" align="bottom" alt="Roll Eyes" title="Roll Eyes" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' :P', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/tongue.gif" align="bottom" alt="Tongue" title="Tongue" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' :-[', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/embarrassed.gif" align="bottom" alt="Embarrassed" title="Embarrassed" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' :-X', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/lipsrsealed.gif" align="bottom" alt="Lips sealed" title="Lips sealed" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' :-\\', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/undecided.gif" align="bottom" alt="Undecided" title="Undecided" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' :-*', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/kiss.gif" align="bottom" alt="Kiss" title="Kiss" />
                                        </a>
                                        <a href="javascript:void(0);" onclick="replaceText(' :\'(', document.forms.postmodify.message); return false;">
                                            <img src="/aset/utama/image/cry.gif" align="bottom" alt="Cry" title="Cry" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" align="right">
                                    </td>
                                    <td>
                                        <textarea class="editor" name="message" rows="12" cols="60" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" onchange="storeCaret(this);" tabindex="2"><?php echo (isset($isi)) ? $isi : ""; ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="2">
                                        <span class="smalltext">
                                            <br />shortcuts: hit alt+s to submit/post or alt+p to preview</span>
                                        <br />
                                        <input type="submit" name="post" value="Post" tabindex="3" accesskey="s" />
                                        <input type="submit" name="preview" value="Preview" tabindex="4" accesskey="p" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    </td>
                                </tr>
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
                        replaceText('<img width=580px src="'+e.target.result+'">', document.forms.postmodify.message); return false;
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
    </body>
</html>
