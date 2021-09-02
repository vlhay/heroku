<?php
/*
 Template Name: Đăng bài
 */
?>
<?php if(is_user_logged_in()) {
$user_id = get_current_user_id();
$current_user = wp_get_current_user();
$vnkings =  $current_user->user_level;
if($vnkings <= 2) { $vnstatus = "pending"; } else { $vnstatus = "publish"; }
?>
 

 <?php

 if (!isset($_POST['post_content'])) 
 {


if (!isset($_GET['url']))
{
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><form method="get">Url: <input name="url" type="text"><input type="submit" value="Leech" ></form>';
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
$lay = preg_replace('#<img(.*?)src="(.*?)"(.*?)>#is','<p><p><img src="$2" alt="'.$title.'"></p></p>',$lay);
$lay = trim($lay);

curl_close($curl);



echo '

<div id="vnkings_postBox">
    <form id="new_post" action="http://sacmau.xyz/dang-bai-3/" method="post" action="" enctype="multipart/form-data">
        <div class="form-group vnking_pd col-sm-12 col-md-6">
            <label for="post_title">Tiêu đề</label>
            <input type="text" name="post_title" class="form-control" value="Truyện Hentai '.$title.'"placeholder="Tiêu đề">
        </div>
        <div class="form-group vnking_pd pd_0">
          <label for="post_content">Nội Dung</label><textarea class="wp-editor-area" rows="20" autocomplete="off" cols="40" name="post_content" id="userpostcontent"><p><p><img src="'.$thumb.'" alt="'.$title.'"></p></p><p> Có '.$lay.' Pic</p>';

    for ($i= 1; $i <= $lay ; $i++){ echo '<p><p><img src="'.$ua.$i.'.jpg" alt="'.$title.'"><p><p>'; }
 echo ' </textarea>
        </div>

        <div class="form-group vnking_pd col-md-6">
          <label for="post_tags">Từ khóa</label>
          <input type="text" name="post_tags" class="form-control" value="'.$title.','.$key.'" placeholder="Từ khóa">
        </div>

            <div class="col-sm-12" style="padding-left:0;">
              <button type="submit" class="btn btn-primary" >Đăng Bài</button>
            </div>
        </div>
    </form>
</div>';




}

?>
