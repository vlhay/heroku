 <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Cache-Control" content="no-cache"/>
        <meta http-equiv="content-language" content="en"/>
      	
        <title>MiBlog</title>
        <meta name="robots" content="index,follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    	<link type="text/css" rel="stylesheet" href="http://cuocsong.viwap.com/css/admin-style.css?v=472256984">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>

<?php
	    
	    
if (!isset($_GET['url']))
{
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<br> lêch xlecx.org<br>
<form method="get">Url: <input name="url" type="text"><input type="submit" value="Leech" ></form>';
}
else
{

$url = $_GET['url'];

$url = preg_replace('#(https://|http://)(.*)#i', '$1$2', $url);
$ua = $url;
$curl = curl_init();
curl_setopt ($curl, CURLOPT_URL, $url);
curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; U; Android 4.1.2; vi; SAMSUNG Build/JZO54K) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 UCBrowser/9.7.5.418 U3/0.8.0 Mobile Safari/533.1');
$title = curl_exec($curl);
$title = explode('<title>',$title);
$title = explode('<title>',$title[1]);
$title = explode('-',$title[0]);
$title = trim($title[0]);

$ua = str_replace('https://9hentai.to/g/', 'https://cdn.9hentai.ru/images/', $ua);


$key = curl_exec($curl);
$key = explode('Tags:
                                <span class="tags">',$key);
$key = explode('Artists:
                                <span class="tags">',$key[1]);
$key = strip_tags($key[0],);
$key = trim($key);

$thumb = curl_exec($curl);
$thumb = explode('<meta property="og:image" content="',$thumb);
$thumb = explode('" />
<meta name="twitter:title"',$thumb[1]);
$thumb = trim($thumb[0]);
$thumb = strip_tags($thumb,'<img>');
$thumb = preg_replace('#<img(.*?)src="(.*?)"(.*?)>#is',"<option>http://xlecx.org$2</option>",$thumb);
$thumb = preg_replace("#<img(.*?)src='(.*?)'(.*?)>#is","<option>http://xlecx.org$2</option>",$thumb);
$thumb = trim($thumb);

$lay = curl_exec($curl);
$lay = explode('<div>',$lay);
$lay = explode(' pages</div>',$lay[1]);
$lay = trim($lay[0]);
$lay = preg_replace('#<script(.*?)/script>#is',"<div>",$lay);
$lay = strip_tags($lay,'<img>');
$lay = preg_replace('#<img(.*?)data-src="https://t(.*?)t.jpg"(.*?)/>#is','[img]https://i$2.jpg[/img]',$lay);
$lay = preg_replace('#<img(.*?)src="(.*?)"(.*?)>#is','[img]$2[/img]',$lay);
$lay = trim($lay);

curl_close($curl);



echo '
<form action="http://sacmau.xyz/forums/truyen-hentai.2/post-thread">

<dd>

  <div class="js-prefixContainer">
    <div class="inputGroup inputGroup--joined u-jsOnly">
      <div class="inputGroup-text">
        <div class="" data-xf-init="prefix-menu">
          <a class="menuTrigger menuTrigger--prefix" data-xf-click="menu" role="button" tabindex="0" aria-expanded="false" aria-haspopup="true">
            <span class="js-activePrefix">(Không tiền tố)</span>
          </a>
          <div class="menu" data-menu="menu" aria-hidden="true">
            <div class="menu-content">
              <div class="menu-scroller js-prefixMenuContent" role="listbox">
        <div class="menu-row">
          <a class="menuPrefix label label--primary" data-prefix-id="1" data-prefix-class="label label--primary" role="option">Manhwa</a>
        </div>
      <hr class="menu-separator">
    <div class="menu-row">
      <a class="menuPrefix menuPrefix--none" data-prefix-id="0" data-prefix-class="" role="option">(Không tiền tố)</a>
    </div>
  </div>
            </div>
          </div>
        </div>

      <select name="prefix_id" class="js-prefixSelect u-noJsOnly input" title="Tiền tố">
        <option value="0" selected="selected">(Không tiền tố)</option>
<option value="1" data-prefix-class="label label--primary">Manhwa</option>

      </select>

      </div>

    <input type="text" name="title" data-xf-init="" class="input js-titleInput  input--title" value="Truyện Hentai '.$title.'" autocomplete="off" placeholder="Tiêu đề bài viết" autofocus="autofocus" maxlength="150" id="_xfUid-2-1630335443">
  
    </div>

  </div>
   </dd>

       <dl class="formRow formRow--input formRow--fullWidth formRow--noLabel formRow--mergePrev">
        <dt>
          <div class="formRow-labelWrapper">
          <label class="formRow-label" for="_xfUid-3-1630365031">Nội dung</label></div>
        </dt>
        <dd>
          


  





  <script class="js-editorToolbars" type="application/json">{"toolbarButtons":["clearFormatting","-vs","bold","italic","underline","strikeThrough","-vs","color","fontFamily","fontSize","-vs","insertLink","insertImage","insertVideo","xfSmilie","xfInsert","-vs","align","xfList","insertTable","-vs","undo","redo","-vs","xfDraft","xfBbCode"],"toolbarButtonsMD":["clearFormatting","-vs","bold","italic","underline","strikeThrough","-vs","color","fontFamily","fontSize","-vs","insertLink","insertImage","insertVideo","xfSmilie","xfInsert","-vs","align","xfList","insertTable","-vs","undo","redo","-vs","xfDraft","xfBbCode"],"toolbarButtonsSM":["clearFormatting","-vs","bold","italic","underline","strikeThrough","-vs","color","fontFamily","fontSize","-vs","insertLink","insertImage","insertVideo","xfSmilie","xfInsert","-vs","align","xfList","insertTable","-vs","undo","redo","-vs","xfDraft","xfBbCode"],"toolbarButtonsXS":["clearFormatting","-vs","bold","italic","underline","-vs","color","fontSize","-vs","insertLink","insertImage","insertVideo","xfSmilie","xfInsert","-vs","align","xfList","insertTable","-vs","undo","redo","-vs","xfBbCode"]}</script>
  <script class="js-editorDropdowns" type="application/json">{"xfInsert":{"cmd":"xfInsert","icon":"fa-ellipsis-h","buttons":["xfMedia","xfQuote","xfSpoiler","xfInlineSpoiler","xfCode","xfInlineCode"],"title":"Insert"},"xfList":{"cmd":"xfList","icon":"fa-list","buttons":["formatOL","formatUL","indent","outdent"],"title":"List"}}</script>

  <script class="js-editorLanguage" type="application/json">
    {
      "Align Center": "Căn giữa",
      "Align Left": "Căn trái",
      "Align Right": "Căn phải",
      "Align": "Căn lề",
      "Alignment": "Căn lề",
      "Back": "Back",
      "Bold": "Bold",
      "By URL": "By URL",
      "Clear Formatting": "Xóa định dạng",
      "Code": "Mã",
      "Colors": "Màu chữ",
      "Decrease Indent": "Tăng lề",
      "Delete Draft": "Xóa bản thảo",
      "Drafts": "Bản thảo",
      "Drop image": "Drop image",
      "Drop video": "Drop video",
      "Edit Link": "Edit link",
      "Font Family": "Phông chữ",
      "Font Size": "Kích thước",
      "Increase Indent": "Thụt lề",
      "Inline Code": "Inline code",
      "Inline Spoiler": "Inline spoiler",
      "Insert Image": "Chèn hình ảnh",
      "Insert Link": "Chèn liên kết",
      "Insert": "Chèn",
      "Italic": "In nghiêng",
      "List": "Danh sách",
      "Loading image": "Loading image",
      "Media": "Media",
      "Open Link": "Open link",
      "or click": "Or click here",
      "Ordered List": "Danh sách có thứ tự",
      "Quote": "Trích dẫn",
      "Redo": "Redo",
      "Remove": "Xóa",
      "Replace": "Replace",
      "Save Draft": "Lưu nháp",
      "Smilies": "Mặt cười",
      "Something went wrong. Please try again.": "Something went wrong. Please try again or contact the administrator.",
      "Spoiler": "Spoiler",
      "Strikethrough": "Gạch ngang",
      "Text": "Ký tự",
      "Toggle BB Code": "Toggle BB code",
      "Underline": "Gạch chân",
      "Undo": "Undo",
      "Unlink": "Bỏ liên kết",
      "Unordered List": "Danh sách không có thứ tự",
      "Update": "Cập nhật",
      "Upload Image": "Upload image",
      "Uploading": "Uploading",
      "URL": "URL",
      "Insert Table": "Insert table",
      "Table Header": "Table header",
      "Remove Table": "Remove table",
      "Row": "Row",
      "Column": "Column",
      "Insert row above": "Insert row above",
      "Insert row below": "Insert row below",
      "Delete row": "Delete row",
      "Insert column before": "Insert column before",
      "Insert column after": "Insert column after",
      "Delete column": "Delete column",
      "Ctrl": "Ctrl",
      "Shift": "Shift",
      "Alt": "Alt",
      "Insert Video": "Insert video",
      "Upload Video": "Upload video",
      "Width": "Width",
      "Height": "Height",
      "Change Size": "Change size",
      "None": "Không có",
      "Alternative Text": "Alt text",
      "__lang end__": ""
    }
  </script>

  <script class="js-editorCustom" type="application/json">
    []
  </script>

  <script class="js-xfSmilieMenu" type="text/template">
    <div class="menu menu--emoji" data-menu="menu" aria-hidden="true"
      data-href="/editor/smilies-emoji"
      data-load-target=".js-xfSmilieMenuBody">
      <div class="menu-content">
        <div class="js-xfSmilieMenuBody">
          <div class="menu-row">Đang tải…</div>
        </div>
      </div>
    </div>
  </script>

  <div class="fr-box bbWrapper fr-ltr fr-basic fr-top" role="application" style="z-index: 2;"><div class="fr-toolbar fr-ltr fr-desktop fr-top fr-basic" style="z-index: 3;"><button id="clearFormatting-1" type="button" tabindex="-1" role="button" title="Xóa định dạng" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="clearFormatting"><i class="far fa-eraser" aria-hidden="true"></i><span class="fr-sr-only">Xóa định dạng</span></button><div class="fr-separator fr-vs" role="separator" aria-orientation="vertical"></div><button id="bold-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Bold (Ctrl+B)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="bold"><i class="far fa-bold" aria-hidden="true"></i><span class="fr-sr-only">Bold</span></button><button id="italic-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="In nghiêng (Ctrl+I)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="italic"><i class="far fa-italic" aria-hidden="true"></i><span class="fr-sr-only">In nghiêng</span></button><button id="underline-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Gạch chân (Ctrl+U)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="underline"><i class="far fa-underline" aria-hidden="true"></i><span class="fr-sr-only">Gạch chân</span></button><div class="fr-separator fr-vs" role="separator" aria-orientation="vertical"></div><button id="color-1" type="button" tabindex="-1" role="button" title="Màu chữ" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="color" data-popup="true"><i class="far fa-tint" aria-hidden="true"></i><span class="fr-sr-only">Màu chữ</span></button><button id="fontSize-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-fontSize-1" aria-expanded="false" aria-haspopup="true" title="Kích thước" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome fr-selection fr-disabled" data-cmd="fontSize"><i class="far fa-text-height" aria-hidden="true"></i><span class="fr-sr-only">Kích thước</span></button><div id="dropdown-menu-fontSize-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="fontSize-1" aria-hidden="true"><div class="fr-dropdown-wrapper" role="presentation"><div class="fr-dropdown-content" role="presentation"><ul class="fr-dropdown-list" role="presentation"><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="9px" title="9">9</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="10px" title="10">10</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="12px" title="12">12</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="15px" title="15">15</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="18px" title="18">18</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="22px" title="22">22</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="26px" title="26">26</a></li></ul></div></div></div><div class="fr-separator fr-vs" role="separator" aria-orientation="vertical"></div><button id="insertLink-1" type="button" tabindex="-1" role="button" title="Chèn liên kết (Ctrl+K)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="insertLink" data-popup="true"><i class="far fa-link" aria-hidden="true"></i><span class="fr-sr-only">Chèn liên kết</span></button><button id="insertImage-1" type="button" tabindex="-1" role="button" title="Chèn hình ảnh (Ctrl+P)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="insertImage" data-popup="true"><i class="far fa-image" aria-hidden="true"></i><span class="fr-sr-only">Chèn hình ảnh</span></button><button id="xfSmilie-1" type="button" tabindex="-1" role="button" title="Mặt cười" class="fr-command fr-btn fr-btn-xf_font_awesome_5 fr-disabled" data-cmd="xfSmilie"><i class="far fa-smile" aria-hidden="true"></i><span class="fr-sr-only">Mặt cười</span></button><button id="xfInsert-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-xfInsert-1" aria-expanded="false" aria-haspopup="true" title="Chèn" class="fr-command fr-btn fr-dropdown fr-btn-xf_font_awesome_5 fr-disabled" data-cmd="xfInsert"><i class="far fa-ellipsis-h" aria-hidden="true"></i><span class="fr-sr-only">Chèn</span></button><div id="dropdown-menu-xfInsert-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="xfInsert-1" aria-hidden="true"><div class="fr-dropdown-wrapper" role="presentation"><div class="fr-dropdown-content" role="presentation"><ul class="fr-dropdown-list"><li><a class="fr-command" data-cmd="xfMedia"><i class="far fa-video" aria-hidden="true"></i>&nbsp;&nbsp;Media</a></li><li><a class="fr-command" data-cmd="xfQuote"><i class="far fa-quote-right" aria-hidden="true"></i>&nbsp;&nbsp;Trích dẫn</a></li><li><a class="fr-command" data-cmd="xfSpoiler"><i class="far fa-flag" aria-hidden="true"></i>&nbsp;&nbsp;Spoiler</a></li><li><a class="fr-command" data-cmd="xfInlineSpoiler"><i class="far fa-flag-checkered" aria-hidden="true"></i>&nbsp;&nbsp;Inline spoiler</a></li><li><a class="fr-command" data-cmd="xfCode"><i class="far fa-code" aria-hidden="true"></i>&nbsp;&nbsp;Mã</a></li><li><a class="fr-command" data-cmd="xfInlineCode"><i class="far fa-terminal" aria-hidden="true"></i>&nbsp;&nbsp;Inline code</a></li></ul></div></div></div><div class="fr-separator fr-vs" role="separator" aria-orientation="vertical"></div><button id="align-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-align-1" aria-expanded="false" aria-haspopup="true" title="Căn lề" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome fr-disabled" data-cmd="align"><i class="far fa-align-left" aria-hidden="true"></i><span class="fr-sr-only">Căn lề</span></button><div id="dropdown-menu-align-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="align-1" aria-hidden="true"><div class="fr-dropdown-wrapper" role="presentation"><div class="fr-dropdown-content" role="presentation"><ul class="fr-dropdown-list" role="presentation"><li role="presentation"><a class="fr-command fr-title" tabindex="-1" role="option" data-cmd="align" data-param1="left" title="Căn trái"><i class="far fa-align-left" aria-hidden="true"></i><span class="fr-sr-only">Căn trái</span></a></li><li role="presentation"><a class="fr-command fr-title" tabindex="-1" role="option" data-cmd="align" data-param1="center" title="Căn giữa"><i class="far fa-align-center" aria-hidden="true"></i><span class="fr-sr-only">Căn giữa</span></a></li><li role="presentation"><a class="fr-command fr-title" tabindex="-1" role="option" data-cmd="align" data-param1="right" title="Căn phải"><i class="far fa-align-right" aria-hidden="true"></i><span class="fr-sr-only">Căn phải</span></a></li><li role="presentation" style="display: none;"><a class="fr-command fr-title" tabindex="-1" role="option" data-cmd="align" data-param1="justify" title="Align Justify"><i class="far fa-align-justify" aria-hidden="true"></i><span class="fr-sr-only">Align Justify</span></a></li></ul></div></div></div><button id="xfList-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-xfList-1" aria-expanded="false" aria-haspopup="true" title="Danh sách" class="fr-command fr-btn fr-dropdown fr-btn-xf_font_awesome_5 fr-disabled" data-cmd="xfList"><i class="far fa-list" aria-hidden="true"></i><span class="fr-sr-only">Danh sách</span></button><div id="dropdown-menu-xfList-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="xfList-1" aria-hidden="true"><div class="fr-dropdown-wrapper" role="presentation"><div class="fr-dropdown-content" role="presentation"><ul class="fr-dropdown-list"><li><a class="fr-command" data-cmd="formatOL"><i class="far fa-list-ol" aria-hidden="true"></i>&nbsp;&nbsp;Danh sách có thứ tự</a></li><li><a class="fr-command" data-cmd="formatUL"><i class="far fa-list-ul" aria-hidden="true"></i>&nbsp;&nbsp;Danh sách không có thứ tự</a></li><li><a class="fr-command" data-cmd="indent"><i class="far fa-indent" aria-hidden="true"></i>&nbsp;&nbsp;Thụt lề</a></li><li><a class="fr-command" data-cmd="outdent"><i class="far fa-outdent" aria-hidden="true"></i>&nbsp;&nbsp;Tăng lề</a></li></ul></div></div></div><button id="insertTable-1" type="button" tabindex="-1" role="button" title="Insert table" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="insertTable" data-popup="true"><i class="far fa-table" aria-hidden="true"></i><span class="fr-sr-only">Insert table</span></button><div class="fr-separator fr-vs" role="separator" aria-orientation="vertical"></div><button id="undo-1" type="button" tabindex="-1" role="button" aria-disabled="true" title="Undo (Ctrl+Z)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="undo"><i class="far fa-undo" aria-hidden="true"></i><span class="fr-sr-only">Undo</span></button><button id="redo-1" type="button" tabindex="-1" role="button" aria-disabled="true" title="Redo (Ctrl+Shift+Z)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="redo"><i class="far fa-redo" aria-hidden="true"></i><span class="fr-sr-only">Redo</span></button><div class="fr-separator fr-vs" role="separator" aria-orientation="vertical"></div><button id="xfBbCode-1" type="button" tabindex="-1" role="button" class="fr-command fr-btn fr-btn-xf_font_awesome_5 fr-active" data-cmd="xfBbCode"><i class="far fa-cog" aria-hidden="true"></i><span class="fr-sr-only">Toggle BB code</span></button><button id="strikeThrough-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Gạch ngang (Ctrl+S)" class="fr-command fr-btn fr-btn-font_awesome fr-hidden fr-disabled" data-cmd="strikeThrough"><i class="far fa-strikethrough" aria-hidden="true"></i><span class="fr-sr-only">Gạch ngang</span></button><button id="fontFamily-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-fontFamily-1" aria-expanded="false" aria-haspopup="true" title="Phông chữ" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome fr-selection fr-hidden fr-disabled" data-cmd="fontFamily"><i class="far fa-font" aria-hidden="true"></i><span class="fr-sr-only">Phông chữ</span></button><div id="dropdown-menu-fontFamily-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="fontFamily-1" aria-hidden="true"><div class="fr-dropdown-wrapper" role="presentation"><div class="fr-dropdown-content" role="presentation"><ul class="fr-dropdown-list" role="presentation"><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="arial" style="font-family: arial" title="Arial">Arial</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="'book antiqua'" style="font-family: 'book antiqua'" title="Book Antiqua">Book Antiqua</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="'courier new'" style="font-family: 'courier new'" title="Courier New">Courier New</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="georgia" style="font-family: georgia" title="Georgia">Georgia</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="tahoma" style="font-family: tahoma" title="Tahoma">Tahoma</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="'times new roman'" style="font-family: 'times new roman'" title="Times New Roman">Times New Roman</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="'trebuchet ms'" style="font-family: 'trebuchet ms'" title="Trebuchet MS">Trebuchet MS</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="verdana" style="font-family: verdana" title="Verdana">Verdana</a></li></ul></div></div></div><button id="xfDraft-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-xfDraft-1" aria-expanded="false" aria-haspopup="true" title="Bản thảo" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome fr-hidden fr-disabled" data-cmd="xfDraft"><i class="far fa-save" aria-hidden="true"></i><span class="fr-sr-only">Bản thảo</span></button><div id="dropdown-menu-xfDraft-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="xfDraft-1" aria-hidden="true"><div class="fr-dropdown-wrapper" role="presentation"><div class="fr-dropdown-content" role="presentation"><ul class="fr-dropdown-list" role="presentation"><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="xfDraft" data-param1="xfDraftSave" title="Save Draft">Lưu nháp</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="xfDraft" data-param1="xfDraftDelete" title="Delete Draft">Xóa bản thảo</a></li></ul></div></div></div></div><div class="fr-wrapper show-placeholder" dir="ltr" style="max-height: 486px; overflow: auto; display: none;"><div class="fr-element fr-view" dir="ltr" contenteditable="true" style="min-height: 250px;" aria-disabled="false" spellcheck="true"><p><br></p></div><span class="fr-placeholder" style="font-size: 17px; line-height: 25.5px; margin-top: 0px; padding-top: 10px; padding-left: 10px; margin-left: 0px; padding-right: 10px; margin-right: 0px; text-align: start;"></span></div><textarea class="input" style="min-height: 251px; max-height: 486px; padding: 10px; overflow: hidden; overflow-wrap: break-word; resize: none; height: 251px;" aria-label="Khung soạn thảo trù phú" name="message">[img]'.$thumb.'[/img][p] Có '.$lay.' Pic[/p]';

    for ($i= 1; $i <= $lay ; $i++){ echo '[img]'.$ua.$i.'.jpg[/img]'; }

      echo '</textarea></div><textarea name="message_html" class="input js-editor u-jsOnly" data-xf-init="editor" data-original-name="message" data-buttons-remove="" style="height: 287px; display: none;" aria-label="Khung soạn thảo trù phú" id="_xfUid-3-1630365031" data-min-height="250" disabled="">[img]'.$thumb.'[/img][p] Có '.$lay.' Pic[/p]';

    for ($i= 1; $i <= $lay ; $i++){ echo '[img]'.$ua.$i.'.jpg[/img]'; }

      echo '</textarea>

  

  <input type="hidden" value="" data-bb-code="message">

  <noscript>
    <textarea name="message" class="input" aria-label="Khung soạn thảo trù phú">[img]'.$thumb.'[/img][p] Có '.$lay.' Pic[/p]';

    for ($i= 1; $i <= $lay ; $i++){ echo '[img]'.$ua.$i.'.jpg[/img]'; }

      echo '</textarea>
  </noscript>



  <div class="js-previewContainer"></div>

        </dd>
      </dl>

        <button type="submit" class="button--primary button button--icon button--icon--write"><span class="button-text">Đăng chủ đề mới</span></button></form></form>


<script language="javascript"> 
document.getElementById("okbaby").click(); 
</script>

 '; 

}

?>