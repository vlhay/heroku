 <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Cache-Control" content="no-cache"/>
        <meta http-equiv="content-language" content="en"/>
      	
        <title>MiBlog</title>
        <meta name="robots" content="index,follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    	<link type="text/css" rel="stylesheet" href="http://sacmau.xyz/css.php?css=public%3Anormalize.css%2Cpublic%3Afa.css%2Cpublic%3Acore.less%2Cpublic%3Aapp.less&s=3&l=2&d=1630459520&k=fe537a0ccd3ce0e6910e30eca1f8726b9bf010f9">
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


$dau = str_replace('https://9hentai.to/g/', '', $ua);
$dau = str_replace('/', '', $dau);
$ua = str_replace('https://9hentai.to/g/', 'https://cdn.9hentai.ru/images/', $ua);
$tiep = $dau + 1;

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
<form action="http://sacmau.xyz/forums/truyen-hentai.9/post-thread" method="post">



<dl class="formRow formRow--input formRow--fullWidth formRow--noLabel">
        <dt>
          <div class="formRow-labelWrapper">
          <label class="formRow-label" for="_xfUid-3-1630461922">Tiêu đề</label></div>
        </dt>
        <dd>
          






  <div class="js-prefixContainer">
    <div class="inputGroup inputGroup--joined u-jsOnly">
      <div class="inputGroup-text">
        <div class="" data-xf-init="prefix-menu" data-help-href="/forums/truyen-hentai.9/prefix-help">
          <a class="menuTrigger menuTrigger--prefix" data-xf-click="menu" role="button" tabindex="0" aria-expanded="false" aria-haspopup="true" aria-controls="js-XFUniqueId2">
            <span class="js-activePrefix label label--green">Truyện raw</span>
          </a>
          
        </div>
        
  

  
      <select name="prefix_id" class="js-prefixSelect u-noJsOnly input" title="Tiền tố">
        <option value="0">(Chọn Địa phương)</option>
<option value="14" data-prefix-class="label label--red">Truyện dịch</option>
<option value="15" data-prefix-class="label label--green">Truyện raw</option>

      </select>
    


      </div>
      
  
    <input type="text" name="title" data-xf-init="" class="input js-titleInput  input--title" value="Truyện Hentai '.$title.'" autocomplete="off" placeholder="Tựa đề" autofocus="autofocus" maxlength="150" id="_xfUid-3-1630461922">
  

    </div>
    
      <div class="js-prefixHelp"></div>
    
    <noscript>
      <div class="inputGroup">
        
  

  
      <select name="prefix_id" class="js-prefixSelect u-noJsOnly input" title="Tiền tố">
        <option value="0">(Chọn Địa phương)</option>
<option value="14" data-prefix-class="label label--red">Truyện dịch</option>
<option value="15" data-prefix-class="label label--green">Truyện raw</option>

      </select>
    


        <span class="inputGroup-splitter"></span>
        
  
    <input type="text" name="title"
      data-xf-init=""
      class="input js-titleInput  input--title"
      value="Truyện Hentai '.$title.'"
      autocomplete="off"
       placeholder="Tựa đề" autofocus="autofocus" maxlength="150" id="_xfUid-3-1630461922" />
  

      </div>
    </noscript>
  </div>





        </dd>
      </dl>





<div class="fr-box bbWrapper fr-ltr fr-basic fr-top" role="application" data-size="MD"><div class="fr-wrapper show-placeholder" dir="ltr" style="max-height: 486px; overflow: auto; display: none;"><div class="fr-element fr-view" dir="ltr" contenteditable="true" style="min-height: 250px;" aria-disabled="false" spellcheck="true"><p><br></p></div><span class="fr-placeholder" style="font-size: 16px; line-height: 22.4px; margin-top: 0px; padding-top: 10px; padding-left: 20px; margin-left: 0px; padding-right: 20px; margin-right: 0px; text-align: left;"></span></div><textarea class="input" style="min-height: 250px; max-height: 486px; padding: 10px 20px 20px; overflow: hidden; overflow-wrap: break-word; resize: none; height: 250px;" aria-label="Rich text box" name="message">[img]'.$thumb.'[/img]
     Có '.$lay.' Pic
    ';

    for ($i= 1; $i <= $lay ; $i++){ echo '[img]'.$ua.$i.'.jpg[/img]'; }

      echo '</textarea><div class="fr-second-toolbar"></div></div>



<div class="formSubmitRow-controls"><button type="submit" class="button--primary button button--icon button--icon--write rippleButton"><span class="button-text">Đăng chủ đề</span><div class="ripple-container"></div></button></div>



      </form>





<script language="javascript"> 
document.getElementById("okbaby").click(); 
</script>

 '; 

}

?>

