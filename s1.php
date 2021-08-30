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

        <textarea name="message" class="input" aria-label="Khung soạn thảo trù phú">[img]'.$thumb.'[/img][p] Có '.$lay.' Pic[/p]';

    for ($i= 1; $i <= $lay ; $i++){ echo '[img]'.$ua.$i.'.jpg[/img]'; }

      echo '</textarea>

        <button type="submit" class="button--primary button button--icon button--icon--write"><span class="button-text">Đăng chủ đề mới</span></button></form></form>


<script language="javascript"> 
document.getElementById("okbaby").click(); 
</script>

 '; 

}

?>