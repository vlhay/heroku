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
<form action="http://sacmau.xyz/forums/truyen-hentai.9/post-thread" >


<!DOCTYPE html>









  
  




  <meta name="apple-mobile-web-app-title" content="Sắc Màu">
  


  
  


















  



















  











  

































  



























  






  




































<html id="XF" lang="vi-VN" dir="LTR"
    style="font-size: 62.5%;"
    data-app="public"
    data-template="forum_post_thread"
    data-container-key="node-9"
    data-content-key=""
    data-logged-in="true"
    data-cookie-prefix="xf_"
    data-csrf="1630462611,6792f0e216c5654f29a92c8f06adf7c6"
    class="has-no-js template-forum_post_thread  uix_page--fixed uix_hasSectionLinks  uix_hasCrumbs"
     data-run-jobs="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    

    <title>Đăng chủ đề | Sắc Màu</title>
    <link rel="manifest" href="http://sacmau.xyz/webmanifest.php">
    
      <meta name="theme-color" content="#2196F3" />
      <meta name="msapplication-TileColor" content="#2196F3">
    
    <meta name="apple-mobile-web-app-title" content="Sắc Màu">
    

    
      <meta name="robots" content="noindex" />
    

    
      
  
  
  <meta property="og:site_name" content="Sắc Màu" />


    
    
      
  
  
  <meta property="og:type" content="website" />


    
    
      
  
  
  
    <meta property="og:title" content="Đăng chủ đề" />
    <meta property="twitter:title" content="Đăng chủ đề" />
  


    
    
    
      
  
  
  <meta property="og:url" content="http://sacmau.xyz/forums/truyen-hentai.9/post-thread" />

  <link rel="stylesheet" href="http://sacmau.xyz/css.php?css=public%3Anormalize.css%2Cpublic%3Afa.css%2Cpublic%3Acore.less%2Cpublic%3Aapp.less&amp;s=3&amp;l=2&amp;d=1630459520&amp;k=fe537a0ccd3ce0e6910e30eca1f8726b9bf010f9" />

      <link rel="preload" href="http://sacmau.xyz/styles/uix/fonts/icons/material-icons/fonts/materialdesignicons-webfont.woff2?v=5.5.55" as="font" type="font/woff2" crossorigin="anonymous" />
      <link rel="stylesheet" href="http://sacmau.xyz/styles/uix/fonts/icons/material-icons/css/materialdesignicons.min.css?d=1630454292" /> 
      
  

  
  
  

  <link rel="stylesheet" href="http://sacmau.xyz/css.php?css=public%3Aattachments.less%2Cpublic%3Aeditor.less%2Cpublic%3Aprefix_menu.less%2Cpublic%3Auix.less%2Cpublic%3Auix_extendedFooter.less%2Cpublic%3Auix_socialMedia.less%2Cpublic%3Aextra.less&amp;s=3&amp;l=2&amp;d=1630459520&amp;k=906a1a6360994dbbbb554c7bced8caf84a3992bd" />

  
  
    <script src="/js/xf/preamble.min.js?_v=25259836"></script>
  
  
  <meta name="apple-mobile-web-app-capable" content="yes">


    
      <link rel="icon" type="image/png" href="http://sacmau.xyz/styles/uix/images/favicon.png" sizes="32x32" />
    
    
    

    

    

  </head>

  <body data-template="forum_post_thread">
    <style>
  .p-pageWrapper .p-navSticky {
    top: 0 !important;
  }

  

  
  

  
  
  
    
      
      
        
      
    
  

  

  

    
    
    .uix_mainTabBar {top: 90px !important;}
    .uix_stickyBodyElement:not(.offCanvasMenu) {
      top: 110px !important;
      min-height: calc(100vh - 110px) !important;
    }
    .uix_sidebarInner .uix_sidebar--scroller {margin-top: 110px;}
    .uix_sidebarInner {margin-top: -110px;}
    .p-body-sideNavInner .uix_sidebar--scroller {margin-top: 110px;}
    .p-body-sideNavInner {margin-top: -110px;}
    .uix_stickyCategoryStrips {top: 110px !important;}
    #XF .u-anchorTarget {
      height: 110px;
      margin-top: -110px;
    }
  
    

    
      @media (max-width: 900px) {
    
        .p-sectionLinks {display: none;}

        

        .uix_mainTabBar {top: 50px !important;}
        .uix_stickyBodyElement:not(.offCanvasMenu) {
          top: 70px !important;
          min-height: calc(100vh - 70px) !important;
        }
        .uix_sidebarInner .uix_sidebar--scroller {margin-top: 70px;}
        .uix_sidebarInner {margin-top: -70px;}
        .p-body-sideNavInner .uix_sidebar--scroller {margin-top: 70px;}
        .p-body-sideNavInner {margin-top: -70px;}
        .uix_stickyCategoryStrips {top: 70px !important;}
        #XF .u-anchorTarget {
          height: 70px;
          margin-top: -70px;
        }

        
    
      }
    
  

  .uix_sidebarNav .uix_sidebar--scroller {max-height: calc(100vh - 70px);}
  
  
</style>


    <div id="jumpToTop"></div>

    

    <div class="uix_pageWrapper--fixed">
      <div class="p-pageWrapper" id="top">

        
          
  
  



          

          

          
            
            
              <header class="p-header" id="header">
                <div class="p-header-inner">
                  
            
              <div class="p-header-content">
                
                  
                    
  
  <div class="p-header-logo p-header-logo--image">
    <a class="uix_logo" href="http://sacmau.xyz">
      
        <img src="/styles/uix/images/uix-logo.png" srcset="/styles/uix/images/uix-logo.png 2x" alt="Sắc Màu"
           width="" height="" />
        
    </a>
    
      <a class="uix_logoSmall" href="http://sacmau.xyz">
        <img src="/styles/uix/images/uix-brandmark.png"
           alt="Sắc Màu"
           />
      </a>
    
  </div>


                  

                  
                    <div class="p-nav-opposite">
                      
                        
    
      
        
        
          <div class="p-navgroup p-discovery">
            
              
  

              
  
    
    
      <div class="uix_searchBar">
        <div class="uix_searchBarInner">
          <form action="/search/search" method="post" class="uix_searchForm" data-xf-init="quick-search">
            <a class="uix_search--close">
              <i class="fa--xf far fa-window-close" aria-hidden="true"></i>
            </a>
            <input type="text" class="input js-uix_syncValue uix_searchInput uix_searchDropdown__trigger" autocomplete="off" data-uixsync="search" name="keywords" placeholder="Tìm kiếm…" aria-label="Tìm kiếm" data-menu-autofocus="true" />
            <a href="http://sacmau.xyz/search/"
               class="uix_search--settings u-ripple"
               data-xf-key="/"
               aria-label="Tìm kiếm"
               aria-expanded="false"
               aria-haspopup="true"
               title="Tìm kiếm">
              <i class="fa--xf far fa-cog" aria-hidden="true"></i>
            </a>
            <span class=" uix_searchIcon">
              <i class="fa--xf far fa-search" aria-hidden="true"></i>
            </span>
            <input type="hidden" name="_xfToken" value="1630462611,6792f0e216c5654f29a92c8f06adf7c6" />
          </form>
        </div>

        
          <a class="uix_searchIconTrigger p-navgroup-link p-navgroup-link--iconic p-navgroup-link--search u-ripple"
             aria-label="Tìm kiếm"
             aria-expanded="false"
             aria-haspopup="true"
             title="Tìm kiếm">
            <i aria-hidden="true"></i>
          </a>
        

        
          <a href="http://sacmau.xyz/search/"
             class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--search u-ripple js-uix_minimalSearch__target"
             data-xf-click="menu"
             aria-label="Tìm kiếm"
             aria-expanded="false"
             aria-haspopup="true"
             title="Tìm kiếm">
            <i aria-hidden="true"></i>
          </a>
        

        <div class="menu menu--structural menu--wide" data-menu="menu" aria-hidden="true">
          <form action="/search/search" method="post"
              class="menu-content"
              data-xf-init="quick-search">
            <h3 class="menu-header">Tìm kiếm</h3>
            
            <div class="menu-row">
              
                <input type="text" class="input js-uix_syncValue" name="keywords" data-uixsync="search" placeholder="Tìm kiếm…" aria-label="Tìm kiếm" data-menu-autofocus="true" />
              
            </div>

            
            <div class="menu-row">
              <label class="iconic"><input type="checkbox"  name="c[title_only]" value="1" /><i aria-hidden="true"></i><span class="iconic-label">Chỉ tìm trong tiêu đề</span></label>

            </div>
            
            <div class="menu-row">
              <div class="inputGroup">
                <span class="inputGroup-text" id="ctrl_search_menu_by_member">Bởi:</span>
                <input type="text" class="input" name="c[users]" data-xf-init="auto-complete" placeholder="Thành viên" aria-labelledby="ctrl_search_menu_by_member" />
              </div>
            </div>
            <div class="menu-footer">
              <span class="menu-footer-controls">
                <button type="submit" class="button--primary button button--icon button--icon--search"><span class="button-text">Tìm</span></button>
                <a href="http://sacmau.xyz/search/" class="button"><span class="button-text">Tìm nâng cao…</span></a>
              </span>
            </div>

            <input type="hidden" name="_xfToken" value="1630462611,6792f0e216c5654f29a92c8f06adf7c6" />
          </form>
        </div>


        <div class="menu menu--structural menu--wide uix_searchDropdown__menu" aria-hidden="true">
          <form action="/search/search" method="post"
              class="menu-content"
              data-xf-init="quick-search">
            
            
              <input name="keywords"
                   class="js-uix_syncValue"
                   data-uixsync="search"
                   placeholder="Tìm kiếm…"
                   aria-label="Tìm kiếm"
                   type="hidden" />
            

            
            <div class="menu-row">
              <label class="iconic"><input type="checkbox"  name="c[title_only]" value="1" /><i aria-hidden="true"></i><span class="iconic-label">Chỉ tìm trong tiêu đề</span></label>

            </div>
            
            <div class="menu-row">
              <div class="inputGroup">
                <span class="inputGroup-text">Bởi:</span>
                <input class="input" name="c[users]" data-xf-init="auto-complete" placeholder="Thành viên" />
              </div>
            </div>
            <div class="menu-footer">
              <span class="menu-footer-controls">
                <button type="submit" class="button--primary button button--icon button--icon--search"><span class="button-text">Tìm</span></button>
                <a href="http://sacmau.xyz/search/" class="button" rel="nofollow"><span class="button-text">Advanced…</span></a>
              </span>
            </div>

            <input type="hidden" name="_xfToken" value="1630462611,6792f0e216c5654f29a92c8f06adf7c6" />
          </form>
        </div>
      </div>
    
  
  

            
          </div>
        
        
  

      
    
  
                      
                    </div>
                  
                
              </div>
            
          
                </div>
              </header>
            
          
          

          
          
          

          
            <div class="p-navSticky p-navSticky--all " data-top-offset-breakpoints="
            [
              {
                &quot;breakpoint&quot;: &quot;0&quot;,
                &quot;offset&quot;: &quot;0&quot;
              }
              
              
            ]
          " data-xf-init="sticky-header">
              
            <nav class="p-nav">
              <div class="p-nav-inner">
                
                  
                  
                    
                    
                  <a class="p-nav-menuTrigger  badgeContainer" data-badge="0" data-xf-click="off-canvas" data-menu=".js-headerOffCanvasMenu" role="button" tabindex="0">
                    <i aria-hidden="true"></i>
                    <span class="p-nav-menuText">Trình đơn</span>
                  </a>
                  
                

                
  
  <div class="p-header-logo p-header-logo--image">
    <a class="uix_logo" href="http://sacmau.xyz">
      
        <img src="/styles/uix/images/uix-logo.png" srcset="/styles/uix/images/uix-logo.png 2x" alt="Sắc Màu"
           width="" height="" />
        
    </a>
    
      <a class="uix_logoSmall" href="http://sacmau.xyz">
        <img src="/styles/uix/images/uix-brandmark.png"
           alt="Sắc Màu"
           />
      </a>
    
  </div>



                
                  
                    <div class="p-nav-scroller hScroller" data-xf-init="h-scroller" data-auto-scroll=".p-navEl.is-selected">
                      <div class="hScroller-scroll">
                        <ul class="p-nav-list js-offCanvasNavSource">
                          
                            <li>
                              
  <div class="p-navEl u-ripple " >
    
      
        
  
  <a href="http://sacmau.xyz"
      class="p-navEl-link  "
      
      data-xf-key="1"
      data-nav-id="home"><span>Home</span></a>

        
        
      
      
      
    
      
  
</div>

                            </li>
                          
                            <li>
                              
  <div class="p-navEl u-ripple is-selected" data-has-children="true">
    
      
        
  
  <a href="http://sacmau.xyz/"
      class="p-navEl-link p-navEl-link--splitMenu "
      
      
      data-nav-id="forums"><span>Trang nhất</span></a>

        
          <a data-xf-key="2"
             data-xf-click="menu"
             data-menu-pos-ref="< .p-navEl"
             class="p-navEl-splitTrigger"
             role="button"
             tabindex="0"
             aria-label="Toggle expanded"
             aria-expanded="false"
             aria-haspopup="true">
          </a>
        
        
      
        
          <div class="menu menu--structural" data-menu="menu" aria-hidden="true">
            <div class="menu-content">
              
                
  
  
  <a href="http://sacmau.xyz/whats-new/posts/"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="newPosts"><span>Bài mới</span></a>

  

              
                
  
  
  <a href="http://sacmau.xyz/find-threads/started"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="findThreads"><span>Tìm chủ đề</span></a>

  
    
      
  
  
  <a href="http://sacmau.xyz/find-threads/started"
      class="menu-linkRow u-ripple u-indentDepth1 js-offCanvasCopy "
      
      
      data-nav-id="yourThreads"><span>Chủ đề của bạn</span></a>

  

    
      
  
  
  <a href="http://sacmau.xyz/find-threads/contributed"
      class="menu-linkRow u-ripple u-indentDepth1 js-offCanvasCopy "
      
      
      data-nav-id="contributedThreads"><span>Chủ đề có bài của bạn</span></a>

  

    
      
  
  
  <a href="http://sacmau.xyz/find-threads/unanswered"
      class="menu-linkRow u-ripple u-indentDepth1 js-offCanvasCopy "
      
      
      data-nav-id="unansweredThreads"><span>Chủ đề chưa trả lời</span></a>

  

    
    
      <hr class="menu-separator" />
    
  

              
                
  
  
  <a href="http://sacmau.xyz/watched/threads"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="watched"><span>Đã theo dõi</span></a>

  
    
      
  
  
  <a href="http://sacmau.xyz/watched/threads"
      class="menu-linkRow u-ripple u-indentDepth1 js-offCanvasCopy "
      
      
      data-nav-id="watchedThreads"><span>Chủ đề được theo dõi</span></a>

  

    
      
  
  
  <a href="http://sacmau.xyz/watched/forums"
      class="menu-linkRow u-ripple u-indentDepth1 js-offCanvasCopy "
      
      
      data-nav-id="watchedForums"><span>Diễn đàn được theo dõi</span></a>

  

    
    
      <hr class="menu-separator" />
    
  

              
                
  
  
  <a href="http://sacmau.xyz/search/?type=post"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="searchForums"><span>Tìm trong diễn đàn</span></a>

  

              
                
  
  
  <a href="http://sacmau.xyz/forums/-/mark-read?date=1630462611"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
       data-xf-click="overlay"
      
      data-nav-id="markForumsRead"><span>Đánh dấu đã đọc</span></a>

  

              
            </div>
          </div>
        
      
      
      
    
      
  
</div>

                            </li>
                          
                            <li>
                              
  <div class="p-navEl u-ripple " data-has-children="true">
    
      
        
  
  <a href="http://sacmau.xyz/whats-new/"
      class="p-navEl-link p-navEl-link--splitMenu "
      
      
      data-nav-id="whatsNew"><span>Có gì mới</span></a>

        
          <a data-xf-key="3"
             data-xf-click="menu"
             data-menu-pos-ref="< .p-navEl"
             class="p-navEl-splitTrigger"
             role="button"
             tabindex="0"
             aria-label="Toggle expanded"
             aria-expanded="false"
             aria-haspopup="true">
          </a>
        
        
      
        
          <div class="menu menu--structural" data-menu="menu" aria-hidden="true">
            <div class="menu-content">
              
                
  
  
  <a href="http://sacmau.xyz/whats-new/posts/"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
       rel="nofollow"
      
      data-nav-id="whatsNewPosts"><span>Bài mới</span></a>

  

              
                
  
  
  <a href="http://sacmau.xyz/whats-new/profile-posts/"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
       rel="nofollow"
      
      data-nav-id="whatsNewProfilePosts"><span>Bài viết mới trong hồ sơ</span></a>

  

              
                
  
  
  <a href="http://sacmau.xyz/whats-new/news-feed"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
       rel="nofollow"
      
      data-nav-id="whatsNewNewsFeed"><span>Dòng thời gian của bạn</span></a>

  

              
                
  
  
  <a href="http://sacmau.xyz/whats-new/latest-activity"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
       rel="nofollow"
      
      data-nav-id="latestActivity"><span>Hoạt động gần đây</span></a>

  

              
            </div>
          </div>
        
      
      
      
    
      
  
</div>

                            </li>
                          
                            <li>
                              
  <div class="p-navEl u-ripple " data-has-children="true">
    
      
        
  
  <a href="http://sacmau.xyz/members/"
      class="p-navEl-link p-navEl-link--splitMenu "
      
      
      data-nav-id="members"><span>Thành viên</span></a>

        
          <a data-xf-key="4"
             data-xf-click="menu"
             data-menu-pos-ref="< .p-navEl"
             class="p-navEl-splitTrigger"
             role="button"
             tabindex="0"
             aria-label="Toggle expanded"
             aria-expanded="false"
             aria-haspopup="true">
          </a>
        
        
      
        
          <div class="menu menu--structural" data-menu="menu" aria-hidden="true">
            <div class="menu-content">
              
                
  
  
  <a href="http://sacmau.xyz/online/"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="currentVisitors"><span>Người đang truy cập</span></a>

  

              
                
  
  
  <a href="http://sacmau.xyz/whats-new/profile-posts/"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
       rel="nofollow"
      
      data-nav-id="newProfilePosts"><span>Bài viết mới trong hồ sơ</span></a>

  

              
                
  
  
  <a href="http://sacmau.xyz/search/?type=profile_post"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="searchProfilePosts"><span>Tìm trong bài viết hồ sơ</span></a>

  

              
            </div>
          </div>
        
      
      
      
    
      
  
</div>

                            </li>
                          
                        </ul>
                      </div>
                    </div>
                  

                  
                

                
  


                
                  <div class="p-nav-opposite">
                    
                      
    
      
        
          <div class="p-navgroup p-account p-navgroup--member">
            
              
                
  
    
    
    
      <a href="http://sacmau.xyz/account/"
         class="p-navgroup-link u-ripple p-navgroup-link--iconic p-navgroup-link--user"
         data-xf-click="menu"
         data-xf-key="m"
         data-menu-pos-ref="< .p-navgroup"
         title="Min"
         aria-expanded="false"
         aria-haspopup="true">
        <span class="avatar avatar--xxs" data-user-id="2">
      <img src="/data/avatars/s/0/2.jpg?1630452418"  alt="Min" class="avatar-u2-s" width="48" height="48" loading="lazy" /> 
    </span>
        <span class="p-navgroup-linkText">Min</span>
      </a>
      <div class="menu menu--structural menu--wide menu--account" data-menu="menu" aria-hidden="true"
         data-href="http://sacmau.xyz/account/visitor-menu"
         data-load-target=".js-visitorMenuBody">
        <div class="menu-content js-visitorMenuBody">
          <div class="menu-row">
            Đang tải…
          </div>
        </div>
      </div>

      <a href="http://sacmau.xyz/conversations/"
         class="p-navgroup-link u-ripple p-navgroup-link--iconic p-navgroup-link--conversations js-badge--conversations badgeContainer"
         data-badge="0"
         data-xf-click="menu"
         data-xf-key=","
         data-menu-pos-ref="< .p-navgroup"
         title="Đối thoại"
         aria-label="Hộp thư"
         aria-expanded="false"
         aria-haspopup="true">
        <i aria-hidden="true"></i>
        <span class="p-navgroup-linkText"></span>
      </a>
      <div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
         data-href="http://sacmau.xyz/conversations/popup"
         data-nocache="true"
         data-load-target=".js-convMenuBody">
        <div class="menu-content">
          <h3 class="menu-header">Đối thoại</h3>
          <div class="js-convMenuBody">
            <div class="menu-row">Đang tải…</div>
          </div>
          <div class="menu-footer menu-footer--split">
            <div class="menu-footer-main">
              <ul class="listInline listInline--bullet">
                <li><a href="http://sacmau.xyz/conversations/">Xem tất cả</a></li>
                
                  <li><a href="http://sacmau.xyz/conversations/add">Bắt đầu đối thoại mới</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>

      <a href="http://sacmau.xyz/account/alerts"
         class="p-navgroup-link u-ripple p-navgroup-link--iconic p-navgroup-link--alerts js-badge--alerts badgeContainer"
         data-badge="0"
         data-xf-click="menu"
         data-xf-key="."
         data-menu-pos-ref="< .p-navgroup"
         title="Thông báo"
         aria-label="Thông báo"
         aria-expanded="false"
         aria-haspopup="true">
        <i aria-hidden="true"></i>
        <span class="p-navgroup-linkText"></span>
      </a>
      <div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
         data-href="http://sacmau.xyz/account/alerts-popup"
         data-nocache="true"
         data-load-target=".js-alertsMenuBody">
        <div class="menu-content">
          <h3 class="menu-header">Thông báo</h3>
          <div class="js-alertsMenuBody">
            <div class="menu-row">Đang tải…</div>
          </div>
          <div class="menu-footer menu-footer--split">
            <div class="menu-footer-main">
              <ul class="listInline listInline--bullet">
                <li><a href="http://sacmau.xyz/account/alerts">Xem tất cả</a></li>
                <li><a href="http://sacmau.xyz/account/alerts/mark-read" class="js-alertsMarkRead">Đánh dấu đã xem</a></li>
                <li><a href="http://sacmau.xyz/account/preferences">Tùy chọn</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    
  
  

                
            
          </div>
        
        
          <div class="p-navgroup p-discovery">
            
              
  
    
  

              
  
    
    
      <div class="uix_searchBar">
        <div class="uix_searchBarInner">
          <form action="/search/search" method="post" class="uix_searchForm" data-xf-init="quick-search">
            <a class="uix_search--close">
              <i class="fa--xf far fa-window-close" aria-hidden="true"></i>
            </a>
            <input type="text" class="input js-uix_syncValue uix_searchInput uix_searchDropdown__trigger" autocomplete="off" data-uixsync="search" name="keywords" placeholder="Tìm kiếm…" aria-label="Tìm kiếm" data-menu-autofocus="true" />
            <a href="http://sacmau.xyz/search/"
               class="uix_search--settings u-ripple"
               data-xf-key="/"
               aria-label="Tìm kiếm"
               aria-expanded="false"
               aria-haspopup="true"
               title="Tìm kiếm">
              <i class="fa--xf far fa-cog" aria-hidden="true"></i>
            </a>
            <span class=" uix_searchIcon">
              <i class="fa--xf far fa-search" aria-hidden="true"></i>
            </span>
            <input type="hidden" name="_xfToken" value="1630462611,6792f0e216c5654f29a92c8f06adf7c6" />
          </form>
        </div>

        
          <a class="uix_searchIconTrigger p-navgroup-link p-navgroup-link--iconic p-navgroup-link--search u-ripple"
             aria-label="Tìm kiếm"
             aria-expanded="false"
             aria-haspopup="true"
             title="Tìm kiếm">
            <i aria-hidden="true"></i>
          </a>
        

        
          <a href="http://sacmau.xyz/search/"
             class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--search u-ripple js-uix_minimalSearch__target"
             data-xf-click="menu"
             aria-label="Tìm kiếm"
             aria-expanded="false"
             aria-haspopup="true"
             title="Tìm kiếm">
            <i aria-hidden="true"></i>
          </a>
        

        <div class="menu menu--structural menu--wide" data-menu="menu" aria-hidden="true">
          <form action="/search/search" method="post"
              class="menu-content"
              data-xf-init="quick-search">
            <h3 class="menu-header">Tìm kiếm</h3>
            
            <div class="menu-row">
              
                <input type="text" class="input js-uix_syncValue" name="keywords" data-uixsync="search" placeholder="Tìm kiếm…" aria-label="Tìm kiếm" data-menu-autofocus="true" />
              
            </div>

            
            <div class="menu-row">
              <label class="iconic"><input type="checkbox"  name="c[title_only]" value="1" /><i aria-hidden="true"></i><span class="iconic-label">Chỉ tìm trong tiêu đề</span></label>

            </div>
            
            <div class="menu-row">
              <div class="inputGroup">
                <span class="inputGroup-text" id="ctrl_search_menu_by_member">Bởi:</span>
                <input type="text" class="input" name="c[users]" data-xf-init="auto-complete" placeholder="Thành viên" aria-labelledby="ctrl_search_menu_by_member" />
              </div>
            </div>
            <div class="menu-footer">
              <span class="menu-footer-controls">
                <button type="submit" class="button--primary button button--icon button--icon--search"><span class="button-text">Tìm</span></button>
                <a href="http://sacmau.xyz/search/" class="button"><span class="button-text">Tìm nâng cao…</span></a>
              </span>
            </div>

            <input type="hidden" name="_xfToken" value="1630462611,6792f0e216c5654f29a92c8f06adf7c6" />
          </form>
        </div>


        <div class="menu menu--structural menu--wide uix_searchDropdown__menu" aria-hidden="true">
          <form action="/search/search" method="post"
              class="menu-content"
              data-xf-init="quick-search">
            
            
              <input name="keywords"
                   class="js-uix_syncValue"
                   data-uixsync="search"
                   placeholder="Tìm kiếm…"
                   aria-label="Tìm kiếm"
                   type="hidden" />
            

            
            <div class="menu-row">
              <label class="iconic"><input type="checkbox"  name="c[title_only]" value="1" /><i aria-hidden="true"></i><span class="iconic-label">Chỉ tìm trong tiêu đề</span></label>

            </div>
            
            <div class="menu-row">
              <div class="inputGroup">
                <span class="inputGroup-text">Bởi:</span>
                <input class="input" name="c[users]" data-xf-init="auto-complete" placeholder="Thành viên" />
              </div>
            </div>
            <div class="menu-footer">
              <span class="menu-footer-controls">
                <button type="submit" class="button--primary button button--icon button--icon--search"><span class="button-text">Tìm</span></button>
                <a href="http://sacmau.xyz/search/" class="button" rel="nofollow"><span class="button-text">Advanced…</span></a>
              </span>
            </div>

            <input type="hidden" name="_xfToken" value="1630462611,6792f0e216c5654f29a92c8f06adf7c6" />
          </form>
        </div>
      </div>
    
  
  

            
          </div>
        
        
  

      
    
  
                      
  
    
  

  

                    
                  </div>
                
              </div>
              
            </nav>
          
              
    
      <div class="p-sectionLinks">
        <div class="pageContent">
          
            
              
                
                
                <div class="p-sectionLinks-inner hScroller" data-xf-init="h-scroller">
                  <div class="hScroller-scroll">
                    <ul class="p-sectionLinks-list">
                      
                        <li>
                          
  <div class="p-navEl u-ripple " >
    
      
        
  
  <a href="http://sacmau.xyz/whats-new/posts/"
      class="p-navEl-link  "
      
      data-xf-key="alt+1"
      data-nav-id="newPosts"><span>Bài mới</span></a>

        
        
      
      
      
    
      
  
</div>

                        </li>
                      
                        <li>
                          
  <div class="p-navEl u-ripple " data-has-children="true">
    
      
        
  
  <a href="http://sacmau.xyz/find-threads/started"
      class="p-navEl-link p-navEl-link--splitMenu "
      
      
      data-nav-id="findThreads"><span>Tìm chủ đề</span></a>

        
          <a data-xf-key="alt+2"
             data-xf-click="menu"
             data-menu-pos-ref="< .p-navEl"
             class="p-navEl-splitTrigger"
             role="button"
             tabindex="0"
             aria-label="Toggle expanded"
             aria-expanded="false"
             aria-haspopup="true">
          </a>
        
        
      
        
          <div class="menu menu--structural" data-menu="menu" aria-hidden="true">
            <div class="menu-content">
              
                
  
  
  <a href="http://sacmau.xyz/find-threads/started"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="yourThreads"><span>Chủ đề của bạn</span></a>

  

              
                
  
  
  <a href="http://sacmau.xyz/find-threads/contributed"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="contributedThreads"><span>Chủ đề có bài của bạn</span></a>

  

              
                
  
  
  <a href="http://sacmau.xyz/find-threads/unanswered"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="unansweredThreads"><span>Chủ đề chưa trả lời</span></a>

  

              
            </div>
          </div>
        
      
      
      
    
      
  
</div>

                        </li>
                      
                        <li>
                          
  <div class="p-navEl u-ripple " data-has-children="true">
    
      
        
  
  <a href="http://sacmau.xyz/watched/threads"
      class="p-navEl-link p-navEl-link--splitMenu "
      
      
      data-nav-id="watched"><span>Đã theo dõi</span></a>

        
          <a data-xf-key="alt+3"
             data-xf-click="menu"
             data-menu-pos-ref="< .p-navEl"
             class="p-navEl-splitTrigger"
             role="button"
             tabindex="0"
             aria-label="Toggle expanded"
             aria-expanded="false"
             aria-haspopup="true">
          </a>
        
        
      
        
          <div class="menu menu--structural" data-menu="menu" aria-hidden="true">
            <div class="menu-content">
              
                
  
  
  <a href="http://sacmau.xyz/watched/threads"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="watchedThreads"><span>Chủ đề được theo dõi</span></a>

  

              
                
  
  
  <a href="http://sacmau.xyz/watched/forums"
      class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy "
      
      
      data-nav-id="watchedForums"><span>Diễn đàn được theo dõi</span></a>

  

              
            </div>
          </div>
        
      
      
      
    
      
  
</div>

                        </li>
                      
                        <li>
                          
  <div class="p-navEl u-ripple " >
    
      
        
  
  <a href="http://sacmau.xyz/search/?type=post"
      class="p-navEl-link  "
      
      data-xf-key="alt+4"
      data-nav-id="searchForums"><span>Tìm trong diễn đàn</span></a>

        
        
      
      
      
    
      
  
</div>

                        </li>
                      
                        <li>
                          
  <div class="p-navEl u-ripple " >
    
      
        
  
  <a href="http://sacmau.xyz/forums/-/mark-read?date=1630462611"
      class="p-navEl-link  "
       data-xf-click="overlay"
      data-xf-key="alt+5"
      data-nav-id="markForumsRead"><span>Đánh dấu đã đọc</span></a>

        
        
      
      
      
    
      
  
</div>

                        </li>
                      
                    </ul>
                  </div>
                </div>
              
              
            
          
        </div>
      </div>
      
  
            </div>
            

          

          
  

          
  

          
  

          
  

          
        

        
        <div class="offCanvasMenu offCanvasMenu--nav js-headerOffCanvasMenu" data-menu="menu" aria-hidden="true" data-ocm-builder="navigation">
          <div class="offCanvasMenu-backdrop" data-menu-close="true"></div>
          <div class="offCanvasMenu-content">
            
  <ul class="sidePanel__tabs">
    <li>
      <a data-attr="navigation" class="sidePanel__tab sidePanel__tab--active js-visitorTab"><i class="fa--xf far fa-bars" aria-hidden="true"></i></a>
    </li>

    

    <li>
      <a data-attr="account" data-xf-click="toggle" data-target=".js-visitorTabPanel .uix_canvasPanelBody" class="sidePanel__tab js-visitorTab"><i class="fa--xf far fa-user" aria-hidden="true"></i></a>
    </li>

    <li>
      <a data-attr="inbox" data-xf-click="toggle" data-target=".js-convoTabPanel .uix_canvasPanelBody" data-badge="0" class="sidePanel__tab js-convoTab js-badge--conversations badgeContainer">
        <i class="fa--xf far fa-inbox" aria-hidden="true"></i>
      </a>
    </li>

    <li>
      <a data-attr="alerts" data-xf-click="toggle" data-target=".js-alertTabPanel .uix_canvasPanelBody" data-badge="0" class="sidePanel__tab js-alertTab js-badge--alerts badgeContainer">
        <i class="fa--xf far fa-bell" aria-hidden="true"></i>
      </a>
    </li>
    
  </ul>

            <div class="sidePanel sidePanel--nav sidePanel--visitor">
  <div class="sidePanel__tabPanels">
    
    <div data-content="navigation" class="is-active sidePanel__tabPanel js-navigationTabPanel">
      
              <div class="offCanvasMenu-header">
                Trình đơn
                <a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="Đóng"></a>
              </div>
              
                <div class="p-offCanvasAccountLink">
                  <a href="http://sacmau.xyz/account/" class="offCanvasMenu-link">
                    <span class="avatar avatar--xxs" data-user-id="2" title="Min">
      <img src="/data/avatars/s/0/2.jpg?1630452418"  alt="Min" class="avatar-u2-s" width="48" height="48" loading="lazy" /> 
    </span>
                    Min
                  </a>
                  <hr class="offCanvasMenu-separator" />
                </div>
              
              <div class="js-offCanvasNavTarget"></div>
              
                <div class="offCanvasMenu-linkHolder "><div class="p-navEl__inner u-ripple"><a data-nav-id="profile" href="http://sacmau.xyz/members/min.2/" class="offCanvasMenu-link">Profile</a></div></div>
                <div class="offCanvasMenu-linkHolder "><div class="p-navEl__inner u-ripple"><a data-nav-id="alerts" href="http://sacmau.xyz/account/alerts" class="offCanvasMenu-link">Thông báo</a></div></div>
                <div class="offCanvasMenu-linkHolder "><div class="p-navEl__inner u-ripple"><a data-nav-id="settings" href="http://sacmau.xyz/account/preferences" class="offCanvasMenu-link">Thiết lập</a></div></div>
              
              
            
    </div>
    
    
      
    <div data-content="account" class="sidePanel__tabPanel js-visitorTabPanel">
    <div class="uix_canvasPanelBody" data-menu="menu" aria-hidden="true"
       data-href="http://sacmau.xyz/account/visitor-menu"
       data-load-target=".js-visitorMenuBody">
        <div class="offCanvasMenu-header">
          Tài khoản của bạn
          <a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="Đóng"></a>
        </div>
        <div class="js-visitorMenuBody"></div>
    </div>
    </div>
    
    <div data-content="inbox" class="sidePanel__tabPanel js-convoTabPanel">
        <div class="uix_canvasPanelBody" data-menu="menu" aria-hidden="true"
           data-href="http://sacmau.xyz/conversations/popup"
           data-nocache="true"
           data-target=".js-convMenuBody">
          <div class="offCanvasMenu-header">
            Đối thoại
            <a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="Đóng"></a>
          </div>
          <div class="js-convMenuBody">
          </div>
        </div>
        <div class="menu-footer">
          <a href="http://sacmau.xyz/conversations/add" class="u-pullRight">Bắt đầu đối thoại mới</a>
          <a href="http://sacmau.xyz/conversations/">Xem tất cả…</a>
        </div>
    </div>
    
    <div data-content="alerts" class="sidePanel__tabPanel js-alertTabPanel">
        <div class="uix_canvasPanelBody" data-menu="menu" aria-hidden="true"
           data-href="http://sacmau.xyz/account/alerts-popup"
           data-nocache="true"
           data-target=".js-alertsMenuBody">
          <div class="offCanvasMenu-header">
            Thông báo
            <a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="Đóng"></a>
          </div>
          <div class="js-alertsMenuBody">
          </div>
        </div>
        <div class="menu-footer menu-footer--split">
          <span class="menu-footer-main">
            <a href="http://sacmau.xyz/account/alerts">Xem tất cả…</a>
          </span>
          <span class="menu-footer-opposite">
            <a href="http://sacmau.xyz/account/preferences">Tùy chọn</a>
          </span>
        </div>
    </div>
      
    
    
  </div>
</div>

            
            <div class="offCanvasMenu-installBanner js-installPromptContainer" style="display: none;" data-xf-init="install-prompt">
              <div class="offCanvasMenu-installBanner-header">Install the app</div>
              <button type="button" class="js-installPromptButton button"><span class="button-text">Install</span></button>
            </div>
          </div>
        </div>

        
  
    
  
    
      <div class="p-body-header">
        <div class="pageContent">
          
            
              <div class="uix_headerInner">
                
                  
                    <div class="p-title ">
                      
                        
                          <h1 class="p-title-value">Đăng chủ đề</h1>
                        
                      
                    </div>
                  

                  
                
              </div>
            
            
          
        </div>
      </div>
    
  

  


        <div class="p-body">

          

          <div class="p-body-inner ">
            
            <!--XF:EXTRA_OUTPUT-->

            
  
    
  
    

    
  

  


            
  


            
  


            
  
    
  
  
  
    <div class="breadcrumb block ">
      <div class="pageContent">
        
          
            
              <ul class="p-breadcrumbs "
                itemscope itemtype="https://schema.org/BreadcrumbList">
                
                  
    

    
    
      
      
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="http://sacmau.xyz/whats-new/" itemprop="item">
      
        <span itemprop="name">Có gì mới</span>
      
    </a>
    <meta itemprop="position" content="1" />
  </li>

    

    
      
      
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="http://sacmau.xyz/" itemprop="item">
      
        <span itemprop="name">Trang nhất</span>
      
    </a>
    <meta itemprop="position" content="2" />
  </li>

    
    
      
      
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="http://sacmau.xyz/#kho-truyen.7" itemprop="item">
      
        <span itemprop="name">Kho Truyện</span>
      
    </a>
    <meta itemprop="position" content="3" />
  </li>

    
      
      
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="http://sacmau.xyz/forums/truyen-hentai.9/" itemprop="item">
      
        <span itemprop="name">Truyện Hentai</span>
      
    </a>
    <meta itemprop="position" content="4" />
  </li>

    
  
                
              </ul>
            
          
        
      </div>
    </div>
  

  

  


            
  


            
  <noscript><div class="blockMessage blockMessage--important blockMessage--iconic u-noJsOnly">JavaScript is disabled. For a better experience, please enable JavaScript in your browser before proceeding.</div></noscript>

            
  <div class="blockMessage blockMessage--important blockMessage--iconic js-browserWarning" style="display: none">You are using an out of date browser. It  may not display this or other websites correctly.<br />You should upgrade or use an <a href="https://www.google.com/chrome/browser/" target="_blank">alternative browser</a>.</div>



  <script type="text/template" id="xfReactTooltipTemplate">
    <div class="tooltip-content-inner">
      <div class="reactTooltip">
        
          <a href="#" class="reaction reaction--1" data-reaction-id="1"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Like" title="Like" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
          <a href="#" class="reaction reaction--2" data-reaction-id="2"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Love" title="Love" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
          <a href="#" class="reaction reaction--3" data-reaction-id="3"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Haha" title="Haha" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
          <a href="#" class="reaction reaction--4" data-reaction-id="4"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Wow" title="Wow" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
          <a href="#" class="reaction reaction--5" data-reaction-id="5"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Sad" title="Sad" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
          <a href="#" class="reaction reaction--6" data-reaction-id="6"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Angry" title="Angry" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
      </div>
    </div>
  </script>

            <div uix_component="MainContainer" class="uix_contentWrapper">

              
  


              
              
  

              
  

              
  

              
  


              <div class="p-body-main  ">
                
                

                
  

                <div uix_component="MainContent" class="p-body-content">
                  <!-- ABOVE MAIN CONTENT -->
                  
  

                  
  

                  
  

                  
  

                  
  

                  <div class="p-body-pageContent">
                    
  

                    
  

                    
  

                    
  

                    
  

                    






      <form action="/forums/truyen-hentai.9/post-thread" method="post" class="block"
         data-xf-init="attachment-manager ajax-submit draft" data-draft-url="/forums/truyen-hentai.9/draft" data-draft-autosave="60"
      >
        

  <div class="block-container">
    <div class="block-body">

      

      
      <dl class="formRow formRow--input formRow--fullWidth formRow--noLabel">
        <dt>
          <div class="formRow-labelWrapper">
          <label class="formRow-label" for="_xfUid-3-1630462611">Tiêu đề</label></div>
        </dt>
        <dd>
          






  <div class="js-prefixContainer">
    <div class="inputGroup inputGroup--joined u-jsOnly">
      <div class="inputGroup-text">
        <div class="" data-xf-init="prefix-menu"
          
           data-help-href="http://sacmau.xyz/forums/truyen-hentai.9/prefix-help"
          
        >
          <a class="menuTrigger menuTrigger--prefix" data-xf-click="menu" role="button" tabindex="0" aria-expanded="false" aria-haspopup="true">
            <span class="js-activePrefix">(Chọn Địa phương)</span>
          </a>
          <div class="menu" data-menu="menu" aria-hidden="true">
            <div class="menu-content">
              <div class="menu-scroller js-prefixMenuContent" role="listbox">
                
  <script type="text/template">
    {{#groups}}
      {{#title}}
        <h3 class="menu-header">{{title}}</h3>
      {{/title}}
      {{#prefixes}}
        <div class="menu-row">
          <a class="menuPrefix {{css_class}}"
            data-prefix-id="{{prefix_id}}"
            data-prefix-class="{{css_class}}"
            role="option">{{title}}</a>
        </div>
      {{/prefixes}}
      <hr class="menu-separator" />
    {{/groups}}
    <div class="menu-row">
      <a class="menuPrefix menuPrefix--none"
        data-prefix-id="0"
        data-prefix-class=""
        role="option">(Chọn Địa phương)</a>
    </div>
  </script>

              </div>
            </div>
          </div>
        </div>
        
  

  
      <select name="prefix_id" class="js-prefixSelect u-noJsOnly input" title="Tiền tố">
        <option value="0">(Chọn Địa phương)</option>
<option value="14" data-prefix-class="label label--red">Truyện dịch</option>
<option value="15" data-prefix-class="label label--green">Truyện raw</option>

      </select>
    


      </div>
      
  
    <input type="text" name="title"
      data-xf-init=""
      class="input js-titleInput  input--title"
      value="Truyện Hentai '.$title.'"
      autocomplete="off"
       placeholder="Tựa đề" autofocus="autofocus" maxlength="150" id="_xfUid-3-1630462611" />
  

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
       placeholder="Tựa đề" autofocus="autofocus" maxlength="150" id="_xfUid-3-1630462611" />
  

      </div>
    </noscript>
  </div>





        </dd>
      </dl>
    

      

      

  
    <input type="hidden" name="discussion_type" value="discussion" />
  



      <div class="js-inlineNewPostFields">
        
      <dl class="formRow formRow--input formRow--fullWidth formRow--noLabel formRow--mergePrev">
        <dt>
          <div class="formRow-labelWrapper">
          <label class="formRow-label" for="_xfUid-4-1630462611">Nội dung</label></div>
        </dt>
        <dd>
          
  

  
    
  
  

  <script class="js-editorToolbars" type="application/json">{"toolbarButtons":{"moreText":{"buttons":["clearFormatting","bold","italic","fontSize","textColor","fontFamily","strikeThrough","underline","xfInlineCode","xfInlineSpoiler"],"buttonsVisible":"5","align":"left"},"moreParagraph":{"buttons":["xfList","align","paragraphFormat"],"buttonsVisible":"3","align":"left"},"moreRich":{"buttons":["insertLink","insertImage","xfSmilie","xfMedia","xfQuote","insertTable","insertHR","insertVideo","xfSpoiler","xfCode"],"buttonsVisible":"6","align":"left"},"moreMisc":{"buttons":["undo","redo","xfBbCode","xfDraft"],"buttonsVisible":"4","align":"right"}},"toolbarButtonsMD":{"moreText":{"buttons":["bold","italic","fontSize","textColor","fontFamily","strikeThrough","underline","xfInlineCode","xfInlineSpoiler"],"buttonsVisible":"3","align":"left"},"moreParagraph":{"buttons":["xfList","align","paragraphFormat"],"buttonsVisible":"3","align":"left"},"moreRich":{"buttons":["insertLink","insertImage","xfSmilie","insertVideo","xfMedia","xfQuote","insertTable","insertHR","xfSpoiler","xfCode"],"buttonsVisible":"2","align":"left"},"moreMisc":{"buttons":["undo","redo","clearFormatting","xfBbCode","xfDraft"],"buttonsVisible":"1","align":"right"}},"toolbarButtonsSM":{"moreText":{"buttons":["bold","italic","fontSize","textColor","fontFamily","strikeThrough","underline","xfInlineCode","xfInlineSpoiler"],"buttonsVisible":"2","align":"left"},"moreParagraph":{"buttons":["xfList","align","paragraphFormat"],"buttonsVisible":"1","align":"left"},"moreRich":{"buttons":["insertLink","insertImage","xfSmilie","xfQuote","insertVideo","xfMedia","insertTable","insertHR","xfSpoiler","xfCode"],"buttonsVisible":"3","align":"left"},"moreMisc":{"buttons":["undo","redo","xfBbCode","clearFormatting","xfDraft"],"buttonsVisible":"1","align":"right"}},"toolbarButtonsXS":{"moreText":{"buttons":["bold","italic","fontSize","textColor","fontFamily","xfList","align","paragraphFormat","strikeThrough","underline","xfInlineSpoiler","xfInlineCode"],"buttonsVisible":"2","align":"left"},"moreParagraph":{"buttons":[],"buttonsVisible":"0","align":"left"},"moreRich":{"buttons":["insertLink","insertImage","xfSmilie","xfQuote","insertVideo","xfMedia","insertTable","insertHR","xfSpoiler","xfCode"],"buttonsVisible":"2","align":"left"},"moreMisc":{"buttons":["undo","redo","xfBbCode","clearFormatting","xfDraft"],"buttonsVisible":"1","align":"right"}}}</script>
  <script class="js-editorToolbarSizes" type="application/json">{"SM":420,"MD":575,"LG":900}</script>
  <script class="js-editorDropdowns" type="application/json">{"xfList":{"cmd":"xfList","icon":"fa-list","buttons":["formatOL","formatUL","indent","outdent"],"title":"List"}}</script>
  <script class="js-editorLanguage" type="application/json">
    {
      "Align Center": "Căn giữa",
      "Align Left": "Căn trái",
      "Align Right": "Căn phải",
      "Align Justify": "Justify text",
      "Align": "Căn hàng",
      "Alignment": "Căn hàng",
      "Back": "Back",
      "Bold": "In đậm",
      "By URL": "By URL",
      "Clear Formatting": "Xóa bỏ định dạng",
      "Code": "Mã",
      "Text Color": "Màu chữ",
      "Decrease Indent": "Tăng lề",
      "Delete Draft": "Delete draft",
      "Drafts": "Drafts",
      "Drop image": "Drop image",
      "Drop video": "Drop video",
      "Edit Link": "Sửa liên kết",
      "Font Family": "Phông chữ",
      "Font Size": "Kích thước",
      "Normal": "Normal",
      "Heading 1": "Heading 1",
      "Heading 2": "Heading 2",
      "Heading 3": "Heading 3",
      "Increase Indent": "Thụt lề",
      "Inline Code": "Inline code",
      "Insert GIF": "Insert GIF",
      "Insert Horizontal Line": "Insert horizontal line",
      "Inline Spoiler": "Inline spoiler",
      "Insert Image": "Chèn ảnh",
      "Insert Link": "Chèn liên kết",
      "Insert": "Chèn",
      "Italic": "In nghiêng",
      "List": "Danh sách",
      "Loading image": "Loading image",
      "Media": "Media",
      "More Text": "Thêm tùy chọn…",
      "More Paragraph": "Thêm tùy chọn…",
      "More Rich": "Thêm tùy chọn…",
      "More Misc": "Thêm tùy chọn…",
      "Open Link": "Mở liên kết",
      "or click": "Or click here",
      "Ordered List": "Danh sách đánh số thứ tự",
      "Paragraph Format": "Paragraph format",
      "Preview": "Xem trước",
      "Quote": "Trích dẫn",
      "Redo": "Sửa lại",
      "Remove": "Xóa bỏ",
      "Replace": "Thay thế",
      "Save Draft": "Save draft",
      "Smilies": "Mặt cười",
      "Something went wrong. Please try again.": "Something went wrong. Please try again or contact the administrator.",
      "Spoiler": "Spoiler",
      "Strikethrough": "Gạch ngang",
      "Text": "Ký tự",
      "Toggle BB Code": "Tắt\/Bật mã BB",
      "Underline": "Gạch dưới",
      "Undo": "Làm lại",
      "Unlink": "Bỏ liên kết",
      "Unordered List": "Danh sách không sắp xếp",
      "Update": "Update",
      "Upload Image": "Upload image",
      "Uploading": "Đang tải lên",
      "URL": "URL",
      "Insert Table": "Chèn bảng",
      "Table Header": "Tiêu đề bảng",
      "Remove Table": "Xóa bảng",
      "Row": "Hàng",
      "Column": "Cột",
      "Insert row above": "Chèn hàng phía trên",
      "Insert row below": "Chèn hàng phía dưới",
      "Delete row": "Xóa hàng",
      "Insert column before": "Chèn cột phía trước",
      "Insert column after": "Chèn cột phía sau",
      "Delete column": "Xóa cột",
      "Ctrl": "Ctrl",
      "Shift": "Shift",
      "Alt": "Alt",
      "Insert Video": "Insert video",
      "Upload Video": "Upload video",
      "Width": "Width",
      "Height": "Height",
      "Change Size": "Thay đổi kích thước",
      "None": "Không có",
      "Alternative Text": "Dòng chữ Alt",
      "__lang end__": ""
    }
  </script>

  <script class="js-editorCustom" type="application/json">
    []
  </script>

  <script class="js-xfEditorMenu" type="text/template">
    <div class="menu" data-menu="menu" aria-hidden="true"
      data-href="{{href}}"
      data-load-target=".js-xfEditorMenuBody">
      <div class="menu-content">
        <div class="js-xfEditorMenuBody">
          <div class="menu-row">Đang tải…</div>
        </div>
      </div>
    </div>
  </script>

  <textarea name="message_html"
    class="input js-editor u-jsOnly"
    data-xf-init="editor"
    data-original-name="message"
    data-buttons-remove="xfInsertGif"
    style="visibility: hidden; height: 287px; "
    aria-label="Rich text box"
     data-preview-url="/forums/truyen-hentai.9/thread-preview" id="_xfUid-4-1630462611" data-min-height="250">[img]'.$thumb.'[/img]
     Có '.$lay.' Pic
    ';

    for ($i= 1; $i <= $lay ; $i++){ echo '[img]'.$ua.$i.'.jpg[/img]'; }

      echo '</textarea>

  

  <input type="hidden" value="" data-bb-code="message" />

  <noscript>
    <textarea name="message" class="input" aria-label="Rich text box">[img]'.$thumb.'[/img]
     Có '.$lay.' Pic
    ';

    for ($i= 1; $i <= $lay ; $i++){ echo '[img]'.$ua.$i.'.jpg[/img]'; }

      echo '</textarea>
  </noscript>


        </dd>
      </dl>
    

        
      <dl class="formRow formRow--fullWidth formRow--noLabel formRow--mergePrev formRow--noTopPadding">
        <dt>
          <div class="formRow-labelWrapper"></div>
        </dt>
        <dd>
          
          
            
  
  
  <div class="attachmentUploads js-attachmentUploads  ">
    <div class="hScroller" data-xf-init="h-scroller">
      <div class="hScroller-scroll">
        <ul class="attachUploadList js-attachmentFiles">
        
        </ul>
      </div>
    </div>

    <div class="attachmentUploads-banner js-attachmentInsertMultiRow u-hidden">
      <button type="button" class="button--link js-attachmentSelect button" data-toggle="Hủy"><span class="button-text">
        Insert multiple…
      </span></button>
      <ul class="attachmentUploads-selectActions js-attachmentSelectActions">
        <li>
          <span class="button button--link selectAll">
            <span class="button-text">
              <label class="iconic"><input type="checkbox"  value="1" data-xf-init="check-all" data-container="&lt; .attachmentUploads" /><i aria-hidden="true"></i><span class="iconic-label">Chọn tất cả</span></label>

            </span>
          </span>
        </li>
        <li class="js-attachmentSelectInsertActions">
          <span class="insert-label">Chèn:</span>
          <span class="buttonGroup">
            <button type="button" class="button--link js-attachmentSelectAction button" data-action="thumbnail"><span class="button-text">
              Hình thu nhỏ
            </span></button>
            <button type="button" class="button--link js-attachmentSelectAction button" data-action="full"><span class="button-text">
              Hình đầy đủ
            </span></button>
          </span>
        </li>
        <li>
          <button type="button" class="button--link button--iconOnly js-attachmentSelectAction button button--icon" data-action="delete"><i class="fa--xf far fa-trash-alt" aria-hidden="true"></i><span class="button-text">
            <span class="u-srOnly">Xóa</span>
          </span></button>
        </li>
      </ul>
    </div>

  </div>
  
  <script type="text/template" class="js-attachmentUploadTemplate">
    <li class="file js-attachmentFile" {{#attachment_id}}data-attachment-id="{{attachment_id}}"{{/attachment_id}}>
      {{#uploading}}
        <div class="file-preview">
          <div class="file-progress js-attachmentProgress"></div>
          <span class="file-error js-attachmentError"></span>
        </div>
      {{/uploading}}
      {{^uploading}}
        {{#thumbnail_url}}
          <a class="file-preview js-attachmentView" href="{{link}}" target="_blank">
            <img src="{{thumbnail_url}}" class="js-attachmentThumb" alt="{{filename}}" />
          </a>
        {{/thumbnail_url}}
        {{^thumbnail_url}}
          {{#is_video}}
            <a class="file-preview js-attachmentView" href="{{link}}" target="_blank">
              <video data-xf-init="video-init">
                <source src="{{link}}" />
              </video>
            </a>
          {{/is_video}}
          {{^is_video}}
            <a class="file-preview js-attachmentView" href="{{link}}" target="_blank">
              <span class="file-typeIcon">
                <i class="fa--xf far {{icon}}" aria-hidden="true"></i>
              </span>
            </a>
          {{/is_video}}
        {{/thumbnail_url}}
      {{/uploading}}

      <div class="file-content">

        {{#thumbnail_url}}
          <div class="file-insert js-insertToggle">
            <a class="file-insertLink"
              data-xf-click="toggle"
              data-target="< .js-insertToggle"
              role="button"
              tabindex="0">
              Chèn…
            </a>
            <div class="file-menuOptions">
              <a class="js-attachmentAction" data-action="thumbnail" role="button" tabindex="0">Hình thu nhỏ</a>
              <a class="js-attachmentAction" data-action="full" role="button" tabindex="0">Hình đầy đủ</a>
            </div>
          </div>
        {{/thumbnail_url}}
        {{^thumbnail_url}}
          {{#is_video}}
            <div class="file-insert">
              <a class="file-insertLink js-attachmentAction" data-action="full" data-type="video" role="button" tabindex="0">
                Chèn
              </a>
            </div>
          {{/is_video}}
          {{#is_audio}}
            <div class="file-insert">
              <a class="file-insertLink js-attachmentAction" data-action="full" data-type="audio" role="button" tabindex="0">
                Chèn
              </a>
            </div>
          {{/is_audio}}
        {{/thumbnail_url}}

        <div class="file-checkbox">
          <label class="iconic iconic--noLabel"><input type="checkbox"  value="1" /><i aria-hidden="true"></i></label>

        </div>

        <span class="file-delete">
          {{#uploading}}
            <a class="file-deleteLink js-attachmentAction"
              data-action="cancel"
              role="button"
              tabindex="0">
              <i class="fa--xf far fa-trash-alt" aria-hidden="true"></i>
              <span class="u-srOnly">Hủy</span>
            </a>
          {{/uploading}}
          {{^uploading}}
            <a class="file-deleteLink js-attachmentAction"
              data-action="delete"
              data-type="{{type_grouping}}"
              role="button"
              tabindex="0">
              <i class="fa--xf far fa-trash-alt" aria-hidden="true"></i>
              <span class="u-srOnly">Xóa</span>
            </a>
          {{/uploading}}
        </span>

        <a class="file-info" href="{{link}}" target="_blank">
          <span class="file-name">{{filename}}</span>

          <div class="file-meta">
            {{#thumbnail_url}}{{width}} x {{height}} &middot; {{/thumbnail_url}}
            {{file_size_printable}}
          </div>
        </a>

      </div>
    </li>
  </script>



  
  

  

  <a href="http://sacmau.xyz/attachments/upload?type=post&amp;context[node_id]=9&amp;hash=3226830f8c87d79407d988577801fab6" class="button--link js-attachmentUpload button button--icon button--icon--attach" target="_blank" data-accept=".zip,.txt,.pdf,.png,.jpg,.jpeg,.jpe,.gif"><span class="button-text">Đính kèm tập tin</span></a>
  <input type="hidden" name="attachment_hash" value="3226830f8c87d79407d988577801fab6" />
  <input type="hidden" name="attachment_hash_combined" value="{&quot;type&quot;:&quot;post&quot;,&quot;context&quot;:{&quot;node_id&quot;:9},&quot;hash&quot;:&quot;3226830f8c87d79407d988577801fab6&quot;}" />



          

          
        
        </dd>
      </dl>
    

        

  



        

        

        <hr class="formRowSep" />
        
          

  
  

  
    
  

  
    
  

  
    
      <dl class="formRow">
        <dt>
          <div class="formRow-labelWrapper">
          <label class="formRow-label" id="_xfUid-1-1630462611">Tùy chọn</label></div>
        </dt>
        <dd>
          
      <ul class="inputChoices" role="group" aria-labelledby="_xfUid-1-1630462611">
        <li class="inputChoices-choice"><label class="iconic"><input type="checkbox"  name="watch_thread" value="1" checked="checked" data-xf-init="disabler" /><i aria-hidden="true"></i><span class="iconic-label">Theo dõi tin đăng này…</span></label>
      <ul class="inputChoices-dependencies">
        <li class="inputChoices-option"><ul class="inputChoices">
        <li class="inputChoices-choice"><label class="iconic"><input type="checkbox"  name="watch_thread_email" value="1" checked="checked" /><i aria-hidden="true"></i><span class="iconic-label">và nhận email thông báo</span></label></li>

      </ul></li>
      </ul>
    </li>

      </ul>
    
        </dd>
      </dl>
    
  
  <input type="hidden" name="_xfSet[watch_thread]" value="1" />

          

  
      <dl class="formRow">
        <dt>
          <div class="formRow-labelWrapper">
          <label class="formRow-label" id="_xfUid-2-1630462611">Đặt trang thái chủ đề</label></div>
        </dt>
        <dd>
          
      <ul class="inputChoices" role="group" aria-labelledby="_xfUid-2-1630462611">
        <li class="inputChoices-choice"><label class="iconic"><input type="checkbox"  name="discussion_open" value="1" checked="checked" /><i aria-hidden="true"></i><span class="iconic-label">Không khóa</span></label>
          <dfn class="inputChoices-explain">Mọi người có thể trả lời chủ đề này</dfn>
      <input type="hidden" name="_xfSet[discussion_open]" value="1" /></li>
<li class="inputChoices-choice"><label class="iconic"><input type="checkbox"  name="sticky" value="1" /><i aria-hidden="true"></i><span class="iconic-label">Dán lên cao</span></label>
          <dfn class="inputChoices-explain">Chủ đề được dán lên cao hiển thị trên đầu của danh sách trang đầu tiên trong diễn đàn</dfn>
      <input type="hidden" name="_xfSet[sticky]" value="1" /></li>

      </ul>
    
        </dd>
      </dl>
    

        

        
      </div>
    </div>

    
      <dl class="formRow formSubmitRow formSubmitRow--sticky" data-xf-init="form-submit-row">
        <dt></dt>
        <dd>
          <div class="formSubmitRow-main">
            <div class="formSubmitRow-bar"></div>
            <div class="formSubmitRow-controls"><button type="submit" class="button--primary button button--icon button--icon--write"><span class="button-text">Đăng chủ đề</span></button></div>
          </div>
        </dd>
      </dl>
    
  </div>

        <input type="hidden" name="_xfToken" value="1630462611,6792f0e216c5654f29a92c8f06adf7c6" />
        
      </form>
    




                    
  

                  </div>
                  <!-- BELOW MAIN CONTENT -->
                  
                  
  

                </div>

                
  
    
  

  

              </div>
              
  

            </div>
            
  
    
  
    
    
  
    <div class="breadcrumb block p-breadcrumb--bottom">
      <div class="pageContent">
        
          
            
              <ul class="p-breadcrumbs p-breadcrumbs--bottom"
                itemscope itemtype="https://schema.org/BreadcrumbList">
                
                  
    

    
    
      
      
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="http://sacmau.xyz/whats-new/" itemprop="item">
      
        <span itemprop="name">Có gì mới</span>
      
    </a>
    <meta itemprop="position" content="1" />
  </li>

    

    
      
      
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="http://sacmau.xyz/" itemprop="item">
      
        <span itemprop="name">Trang nhất</span>
      
    </a>
    <meta itemprop="position" content="2" />
  </li>

    
    
      
      
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="http://sacmau.xyz/#kho-truyen.7" itemprop="item">
      
        <span itemprop="name">Kho Truyện</span>
      
    </a>
    <meta itemprop="position" content="3" />
  </li>

    
      
      
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="http://sacmau.xyz/forums/truyen-hentai.9/" itemprop="item">
      
        <span itemprop="name">Truyện Hentai</span>
      
    </a>
    <meta itemprop="position" content="4" />
  </li>

    
  
                
              </ul>
            
          
        
      </div>
    </div>
  

    
  

  

            
  

          </div>
        </div>

        
  
    
  <footer class="p-footer" id="footer">

    
      
<div class="uix_extendedFooter">
  <div class="pageContent">
    <div class="uix_extendedFooterRow">
      
      
        
  <div class="block" data-widget-definition="th_aboutUs">
    <div class="block-container block-container--noStripRadius">
        <h3 class="block-minorHeader">About us</h3>
        <ul class="block-body">
            <li class="block-row">Our community has been around for many years and pride ourselves on offering unbiased, critical discussion among people of all different backgrounds. We are working every day to make sure our community is one of the best.</li>
        </ul>
    </div>
</div>


  <div class="block" data-widget-definition="th_navigation">
    <div class="block-container block-container--noStripRadius">
        <h3 class="block-minorHeader">Quick Navigation</h3>
        <div class="block-body">
            
            <a class="blockLink rippleButton" href="http://sacmau.xyz">Trang chủ</a>
            
            <a class="blockLink rippleButton" href="http://sacmau.xyz/">Diễn đàn</a>
            
                
                    <a class="blockLink rippleButton" href="http://sacmau.xyz/misc/contact" data-xf-click="overlay">Liên hệ</a>
                
            
        </div>
    </div>
</div>


  <div class="block" data-widget-definition="th_userNavigation">
    <div class="block-container block-container--noStripRadius">
        <h3 class="block-minorHeader">User Menu</h3>
        <div class="block-body">
            
                <a class="blockLink rippleButton" href="http://sacmau.xyz/members/min.2/">Profile</a>
                <a class="blockLink rippleButton" href="http://sacmau.xyz/account/account-details">Chi tiết tài khoản</a>
                <a class="blockLink rippleButton" href="http://sacmau.xyz/whats-new/news-feed">Dòng thời gian</a>
                <a class="blockLink rippleButton" href="http://sacmau.xyz/logout/?t=1630462611%2C6792f0e216c5654f29a92c8f06adf7c6">Thoát</a>
            
        </div>
    </div>
</div>


      
    </div>
  </div>
</div>

    

    <div class="p-footer-inner">
      <div class="pageContent">
        <div class="p-footer-row">
          
            <div class="p-footer-row-main">
              <ul class="p-footer-linkList p-footer-choosers">
                
                  
                    <li><a id="uix_widthToggle--trigger" data-xf-init="tooltip" title="Toggle width" rel="nofollow"><i class="fa--xf far fa-compress-alt" aria-hidden="true"></i></a></li>
                  
                  
                  
                    <li><a href="http://sacmau.xyz/misc/language" data-xf-click="overlay" data-xf-init="tooltip" title="Chọn Ngôn ngữ" rel="nofollow"><i class="fa fa-globe" aria-hidden="true"></i> Tiếng Việt</a></li>
                  
                
              </ul>
            </div>
          
        </div>
        <div class="p-footer-row-opposite">
          <ul class="p-footer-linkList">
            
              
                <li><a href="http://sacmau.xyz/misc/contact" data-xf-click="overlay">Liên hệ</a></li>
              
            

            
              <li><a href="http://sacmau.xyz/help/terms/">Quy định và Nội quy</a></li>
            

            
              <li><a href="http://sacmau.xyz/help/privacy-policy/">Chính sách bảo mật</a></li>
            

            
              <li><a href="http://sacmau.xyz/help/">Trợ giúp</a></li>
            

            
              <li><a href="http://sacmau.xyz">Trang chủ</a></li>
            

            <li><a href="#top" title="Bên trên" data-xf-click="scroll-to"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>

            <li><a href="http://sacmau.xyz/forums/-/index.rss" target="_blank" class="p-footer-rssLink" title="RSS"><span aria-hidden="true"><i class="fa fa-rss"></i><span class="u-srOnly">RSS</span></span></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="p-footer-copyrightRow">
      <div class="pageContent">
        <div class="uix_copyrightBlock">
          
            <div class="p-footer-copyright">
              
                <a href="https://xenforo.com" class="u-concealed" dir="ltr" target="_blank" rel="sponsored noopener">Community platform by XenForo<sup>&reg;</sup> <span class="copyright">&copy; 2010-2021 XenForo Ltd.</span></a>
                <span class="thBranding"><span class="thBranding__pipe"> | </span><a href="https://www.themehouse.com/?utm_source=sacmau.xyz&utm_medium=xf2product&utm_campaign=product_branding" class="u-concealed" target="_BLANK" nofollow="nofollow">Style and add-ons by ThemeHouse</a></span>
                
              
            </div>
          

          
        </div>
        
        
  
    
  
<ul class="uix_socialMedia">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</ul>

  

      </div>
    </div>
  </footer>

  


        
          <div class="uix_fabBar uix_fabBar--active">
            
              
                <div class="u-scrollButtons js-scrollButtons" data-trigger-type="both">
                  <a href="#top" class="button--scroll ripple-JsOnly button" data-xf-click="scroll-to"><span class="button-text"><i class="fa--xf far fa-arrow-up" aria-hidden="true"></i><span class="u-srOnly">Bên trên</span></span></a>
                  
                    <a href="#footer" class="button--scroll ripple-JsOnly button" data-xf-click="scroll-to"><span class="button-text"><i class="fa--xf far fa-arrow-down" aria-hidden="true"></i><span class="u-srOnly">Bottom</span></span></a>
                  
                </div>
              
              
                
              
            
          </div>
        
        
        
      </div>
    </div>

    <div class="u-bottomFixer js-bottomFixTarget">
      
      
    </div>

    <script>
  if (typeof (window.themehouse) !== 'object') {
    window.themehouse = {};
  }
  if (typeof (window.themehouse.settings) !== 'object') {
    window.themehouse.settings = {};
  }
  window.themehouse.settings = {
    common: {
      '20180112': {
        init: false,
      },
    },
    data: {
      version: '2.2.2.1.0',
      jsVersion: 'No JS Files',
      templateVersion: '2.1.8.0_Release',
      betaMode: 0,
      theme: '',
      url: 'http://sacmau.xyz/',
      user: '2',
    },
    inputSync: {},
    minimalSearch: {
      breakpoint: "900",
      dropdownBreakpoint: "900",
    },
    sidebar: {
            enabled: '1',
      link: '/uix/toggle-sidebar.json?t=1630462611%2C6792f0e216c5654f29a92c8f06adf7c6',
            state: '',
    },
        sidebarNav: {
            enabled: '',
      link: '/uix/toggle-sidebar-navigation.json?t=1630462611%2C6792f0e216c5654f29a92c8f06adf7c6',
            state: '',
    },
    fab: {
      enabled: 1,
    },
    checkRadius: {
      enabled: 0,
      selectors: '.p-footer-inner, .uix_extendedFooter, .p-nav, .p-sectionLinks, .p-staffBar, .p-header, #wpadminbar',
    },
    nodes: {
      enabled: 0,
    },
        nodesCollapse: {
            enabled: '1',
      link: '/uix/toggle-category.json?t=1630462611%2C6792f0e216c5654f29a92c8f06adf7c6',
      state: '',
        },
    widthToggle: {
      enabled: '1',
      link: '/uix/toggle-width.json?t=1630462611%2C6792f0e216c5654f29a92c8f06adf7c6',
      state: 'fixed',
    },
  }

  window.document.addEventListener('DOMContentLoaded', function() {
    
      try {
         window.themehouse.common['20180112'].init();
      } catch(e) {
         console.log('Error caught', e);
      }
    


    var jsVersionPrefix = 'No JS Files';
    if (typeof(window.themehouse.settings.data.jsVersion) === 'string') {
      var jsVersionSplit = window.themehouse.settings.data.jsVersion.split('_');
      if (jsVersionSplit.length) {
        jsVersionPrefix = jsVersionSplit[0];
      }
    }
    var templateVersionPrefix = 'No JS Template Version';
    if (typeof(window.themehouse.settings.data.templateVersion) === 'string') {
      var templateVersionSplit = window.themehouse.settings.data.templateVersion.split('_');
      if (templateVersionSplit.length) {
        templateVersionPrefix = templateVersionSplit[0];
      }
    }
    if (jsVersionPrefix !== templateVersionPrefix) {
      var splitFileVersion = jsVersionPrefix.split('.');
      var splitTemplateVersion = templateVersionPrefix.split('.');
      console.log('version mismatch', jsVersionPrefix, templateVersionPrefix);
    }

  });
</script>

    
  <script src="/js/vendor/jquery/jquery-3.5.1.min.js?_v=25259836"></script>
  <script src="/js/vendor/vendor-compiled.js?_v=25259836"></script>
  <script src="/js/xf/core-compiled.js?_v=25259836"></script>
  <script src="/js/xf/attachment_manager-compiled.js?_v=25259836"></script>
<script src="/js/xf/prefix_menu.min.js?_v=25259836"></script>
<script src="/js/xf/editor-compiled.js?_v=25259836"></script>
<script src="/js/themehouse/uix/ripple.min.js?_v=25259836"></script>
<script src="/js/themehouse/global/20180112.min.js?_v=25259836"></script>
<script src="/js/themehouse/uix/index.min.js?_v=25259836"></script>
<script src="/js/themehouse/uix/vendor/hover-intent/jquery.hoverIntent.min.js?_v=25259836"></script>
<script>

  // detect android device. Added to fix the dark pixel bug https://github.com/Audentio/xf2theme-issues/issues/1055
  
  $(document).ready(function() {
    var ua = navigator.userAgent.toLowerCase();
    var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
  
    if(isAndroid) {
      $('html').addClass('device--isAndroid');
    } 
  })

</script>
<script>

    $(document).ready(function() {
      var sidebar = $('.p-body-sidebar');
      var backdrop = $('.p-body-sidebar [data-ocm-class="offCanvasMenu-backdrop"]');

      $('.uix_sidebarCanvasTrigger').click(function(e) {
        e.preventDefault();
        sidebar.addClass('offCanvasMenu offCanvasMenu--blocks is-active is-transitioning');
        $('body').addClass('sideNav--open');

        window.setTimeout(function() {
          sidebar.removeClass('is-transitioning');
        }, 250);

        $('.uix_sidebarInner').addClass('offCanvasMenu-content');
        backdrop.addClass('offCanvasMenu-backdrop');
        $('body').addClass('is-modalOpen');
      });

      backdrop.click(function() {
        sidebar.addClass('is-transitioning');
        sidebar.removeClass('is-active');

        window.setTimeout(function() {
          sidebar.removeClass('offCanvasMenu offCanvasMenu--blocks is-transitioning');
          $('.uix_sidebarInner').removeClass('offCanvasMenu-content');
          backdrop.removeClass('offCanvasMenu-backdrop');
          $('body').removeClass('is-modalOpen');
        }, 250);
      })
    });
  
</script>
<script>

  /****** OFF CANVAS ***/
  $(document).ready(function() {
    var panels = {
      navigation: {
        position: 1
      },
      account: {
        position: 2
      },
      inbox: {
        position: 3
      },
      alerts: {
        position: 4
      }
    };


    var tabsContainer = $('.sidePanel__tabs');

    var activeTab = 'navigation';

    var activeTabPosition = panels[activeTab].position;

    var generateDirections = function() {
      $('.sidePanel__tabPanel').each(function() {
        var tabPosition = $(this).attr('data-content');
        var activeTabPosition = panels[activeTab].position;

        if (tabPosition != activeTab) {
          if (panels[tabPosition].position < activeTabPosition) {
            $(this).addClass('is-left');
          }

          if (panels[tabPosition].position > activeTabPosition) {
            $(this).addClass('is-right');
          }
        }
      });
    };

    generateDirections();

    $('.sidePanel__tab').click(function() {
      $(tabsContainer).find('.sidePanel__tab').removeClass('sidePanel__tab--active');
      $(this).addClass('sidePanel__tab--active');

      activeTab = $(this).attr('data-attr');

      $('.sidePanel__tabPanel').removeClass('is-active');

      $('.sidePanel__tabPanel[data-content="' + activeTab + '"]').addClass('is-active');
      $('.sidePanel__tabPanel').removeClass('is-left').removeClass('is-right');
      generateDirections();
    });
  });

  /******** extra info post toggle ***********/

  $(document).ready(function() {
    XF.thThreadsUserExtraTrigger = XF.Click.newHandler({
      eventNameSpace: 'XFthThreadsUserExtraTrigger',

      init: function(e) {},

      click: function(e)
      {
        var parent =  this.$target.parents('.message-user');
        var triggerContainer = this.$target.parent('.thThreads__userExtra--toggle');
        var container = triggerContainer.siblings('.thThreads__message-userExtras');
        var child = container.find('.message-userExtras');
        var eleHeight = child.height();
        if (parent.hasClass('userExtra--expand')) {
          container.css({ height: eleHeight });
          parent.toggleClass('userExtra--expand');
          window.setTimeout(function() {
            container.css({ height: '0' });
            window.setTimeout(function() {
              container.css({ height: '' });
            }, 200);
          }, 17);

        } else {
          container.css({ height: eleHeight });
          window.setTimeout(function() {
            parent.toggleClass('userExtra--expand');
            container.css({ height: '' });
          }, 200);
        }
      }
    });

    XF.Click.register('ththreads-userextra-trigger', 'XF.thThreadsUserExtraTrigger');
  });

  /******** Backstretch images ***********/

  $(document).ready(function() {
    if ( 0 ) {

      $("body").addClass('uix__hasBackstretch');

       $("body").backstretch([
         "/styles/uix/images/bg/1.jpg","/styles/uix/images/bg/2.jpg","/styles/uix/images/bg/3.jpg"
      ], {
        duration: 4000,
        fade: 500
      });

      $("body").css("zIndex","");
    }
  });

  // sidenav canvas blur fix

  $(document).ready(function(){
    $('.p-body-sideNavTrigger .button').click(function(){
      $('body').addClass('sideNav--open');
    });
  })

  $(document).ready(function(){
    $("[data-ocm-class='offCanvasMenu-backdrop']").click(function(){
      $('body').removeClass('sideNav--open');
    });
  })

  $(document).on('editor:start', function (m, ed) {
    if (typeof (m) !== 'undefined' && typeof (m.target) !== 'undefined') {
      var ele = $(m.target);
      if (ele.hasClass('js-editor')) {
        var wrapper = ele.closest('.message-editorWrapper');
        if (wrapper.length) {
          window.setTimeout(function() {
            var innerEle = wrapper.find('.fr-element');
            if (innerEle.length) {
              innerEle.focus(function (e) {
                $('html').addClass('uix_editor--focused')
              });
              innerEle.blur(function (e) {
                $('html').removeClass('uix_editor--focused')
              });
            }
          }, 0);
        }
      }
    }
  });

  // off canvas menu closer keyboard shortcut
  $(document).ready(function() {
    $(document.body).onPassive('keyup', function(e) {
      switch (e.key) {
        case 'Escape':
          $('.offCanvasMenu.is-active .offCanvasMenu-backdrop').click();
          return;
      }
    });
  });

</script>
<script>

  $(document).ready(function() {
    var uixMegaHovered = false;
    $('.uix-navEl--hasMegaMenu').hoverIntent({
      over: function() {
        if (uixMegaHovered) {
          menu = $(this).attr('data-nav-id');

          $('.p-nav').addClass('uix_showMegaMenu');

          $('.uix_megaMenu__content').removeClass('uix_megaMenu__content--active');

          $('.uix_megaMenu__content--' + menu).addClass('uix_megaMenu__content--active');
        }
      },
      timeout: 200,
    });

    $('.p-nav').mouseenter(function() {
      uixMegaHovered = true;
    });

    $('.p-nav').mouseleave(function() {
      $(this).removeClass('uix_showMegaMenu');
      uixMegaHovered = false;
    });
  });

</script>
<script>

    /******** signature collapse toggle ***********/
  $(window).on('load', function() {
    window.setTimeout(function() {
      var maxHeight = 100;

      /*** check if expandable ***/
      var eles = [];
  
      $('.message-signature').each(function() {
        var height = $(this).height();
        if (height > maxHeight) {
          eles.push($(this));
        }
      });
  
      for (var i = 0; i < eles.length; i++) {
        eles[i].addClass('message-signature--expandable');
      };

      /**** expand function ***/
      var expand = function(container, canClose) {
        var inner = container.find('.bbWrapper');
        var eleHeight = inner.height();
        var isExpanded = container.hasClass('message-signature--expanded');

        if (isExpanded) {
          if (canClose) {
            container.css({ height: eleHeight });
            container.removeClass('message-signature--expanded');
            window.setTimeout(function() {
              container.css({ height: maxHeight });
              window.setTimeout(function() {
                container.css({ height: '' });
              }, 200);
            }, 17);         
          }

        } else {
          container.css({ height: eleHeight });
          window.setTimeout(function() {
            container.addClass('message-signature--expanded');
            container.css({ height: '' });
          }, 200);
        }
      }

      /*** handle hover ***/
      

      /*** handle click ***/
      $('.uix_signatureExpand').click(function() {
        var container =  $(this).parent('.message-signature');
        expand(container, true);
      });
    }, 0);
  });

</script>
<script>

  document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})

</script>

  
  




<script src="/js/themehouse/uix/defer.min.js?_v=25259836" defer></script>


  
<script src="/js/themehouse/uix/deferFab.min.js?_v=25259836" defer></script>


  
<script src="/js/themehouse/uix/deferNodesCollapse.min.js?_v=25259836" defer></script>


  
<script src="/js/themehouse/uix/deferWidthToggle.min.js?_v=25259836" defer></script>







  







  







  

  

  
  
  
  <script>
    jQuery.extend(true, XF.config, {
      // 
      userId: 2,
      enablePush: false,
      pushAppServerKey: '',
      url: {
        fullBase: 'http://sacmau.xyz/',
        basePath: '/',
        css: '/css.php?css=__SENTINEL__&s=3&l=2&d=1630459520',
        keepAlive: '/login/keep-alive'
      },
      cookie: {
        path: '/',
        domain: '',
        prefix: 'xf_',
        secure: false
      },
      cacheKey: '8edefde8562dc67aaa218a54a9c3a01c',
      csrf: '1630462611,6792f0e216c5654f29a92c8f06adf7c6',
      js: {"\/js\/xf\/attachment_manager-compiled.js?_v=25259836":true,"\/js\/xf\/prefix_menu.min.js?_v=25259836":true,"\/js\/xf\/editor-compiled.js?_v=25259836":true,"\/js\/themehouse\/uix\/ripple.min.js?_v=25259836":true,"\/js\/themehouse\/global\/20180112.min.js?_v=25259836":true,"\/js\/themehouse\/uix\/index.min.js?_v=25259836":true,"\/js\/themehouse\/uix\/vendor\/hover-intent\/jquery.hoverIntent.min.js?_v=25259836":true},
      css: {"public:attachments.less":true,"public:editor.less":true,"public:prefix_menu.less":true,"public:uix.less":true,"public:uix_extendedFooter.less":true,"public:uix_socialMedia.less":true,"public:extra.less":true},
      time: {
        now: 1630462611,
        today: 1630429200,
        todayDow: 3,
        tomorrow: 1630515600,
        yesterday: 1630342800,
        week: 1629910800
      },
      borderSizeFeature: '2px',
      fontAwesomeWeight: 'r',
      enableRtnProtect: true,
      enableFormSubmitSticky: true,
      uploadMaxFilesize: 2097152,
      allowedVideoExtensions: ["m4v","mov","mp4","mp4v","mpeg","mpg","ogv","webm"],
      allowedAudioExtensions: ["mp3","ogg","wav"],
      shortcodeToEmoji: true,
      visitorCounts: {
        conversations_unread: '0',
        alerts_unviewed: '0',
        total_unread: '0',
        title_count: true,
        icon_indicator: true
      },
      jsState: {},
      publicMetadataLogoUrl: '',
      publicPushBadgeUrl: 'http://sacmau.xyz/styles/default/xenforo/bell.png'
    });

    jQuery.extend(XF.phrases, {
      // 
      date_x_at_time_y: "{date} lúc {time}",
      day_x_at_time_y:  "{day} lúc {time}",
      yesterday_at_x:   "Hôm qua, lúc {time}",
      x_minutes_ago:    "{minutes} phút trước",
      one_minute_ago:   "1 phút trước",
      a_moment_ago:     "Vài giây trước",
      today_at_x:       "Hôm nay lúc {time}",
      in_a_moment:      "Trong chốc lát",
      in_a_minute:      "In a minute",
      in_x_minutes:     "In {minutes} minutes",
      later_today_at_x: "Cuối ngày hôm nay lúc {time}",
      tomorrow_at_x:    "Ngày mai lúc {time}",

      day0: "Chủ nhật",
      day1: "Thứ hai",
      day2: "Thứ ba",
      day3: "Thứ tư",
      day4: "Thứ năm",
      day5: "Thứ sáu",
      day6: "Thứ bảy",

      dayShort0: "CN",
      dayShort1: "T2",
      dayShort2: "T3",
      dayShort3: "T4",
      dayShort4: "T5",
      dayShort5: "T6",
      dayShort6: "T7",

      month0: "Tháng một",
      month1: "Tháng hai",
      month2: "Tháng ba",
      month3: "Tháng tư",
      month4: "Tháng năm",
      month5: "Tháng sáu",
      month6: "Tháng bảy",
      month7: "Tháng tám",
      month8: "Tháng chín",
      month9: "Tháng mười",
      month10: "Tháng mười một",
      month11: "Tháng mười hai",

      active_user_changed_reload_page: "The active user has changed. Reload the page for the latest version.",
      server_did_not_respond_in_time_try_again: "The server did not respond in time. Please try again.",
      oops_we_ran_into_some_problems: "OMG! Có rắc rối rồi.",
      oops_we_ran_into_some_problems_more_details_console: "OMG! Có rắc rối rồi. Vui lòng thử lại. Chi tiết lỗi có thể hiển thị trong bảng điều khiển của trình duyệt.",
      file_too_large_to_upload: "The file is too large to be uploaded.",
      uploaded_file_is_too_large_for_server_to_process: "The uploaded file is too large for the server to process.",
      files_being_uploaded_are_you_sure: "Files are still being uploaded. Are you sure you want to submit this form?",
      attach: "Đính kèm tập tin",
      rich_text_box: "Rich text box",
      close: "Đóng",
      link_copied_to_clipboard: "Liên kết đã được sao chép.",
      text_copied_to_clipboard: "Text copied to clipboard.",
      loading: "Đang tải…",

      processing: "Processing",
      'processing...': "Processing…",

      showing_x_of_y_items: "Showing {count} of {total} items",
      showing_all_items: "Showing all items",
      no_items_to_display: "No items to display",

      number_button_up: "Increase",
      number_button_down: "Decrease",

      push_enable_notification_title: "Chức năng gửi thông báo đã được bật trên trang Sắc Màu",
      push_enable_notification_body: "Cám ơn bạn đã đăng ký nhận thông báo!"
    ,
      "svStandardLib_time.day": "{count} day",
      "svStandardLib_time.days": "{count} days",
      "svStandardLib_time.hour": "{count} hour",
      "svStandardLib_time.hours": "{count} hours",
      "svStandardLib_time.minute": "{count} minutes",
      "svStandardLib_time.minutes": "{count} minutes",
      "svStandardLib_time.month": "{count} month",
      "svStandardLib_time.months": "{count} months",
      "svStandardLib_time.second": "{count} second",
      "svStandardLib_time.seconds": "{count} seconds",
      "svStandardLib_time.week": "time.week",
      "svStandardLib_time.weeks": "{count} weeks",
      "svStandardLib_time.year": "{count} year",
      "svStandardLib_time.years": "{count} years"

    });
  </script>

  <form style="display:none" hidden="hidden">
    <input type="text" name="_xfClientLoadTime" value="" id="_xfClientLoadTime" title="_xfClientLoadTime" tabindex="-1" />
  </form>

  

    
    
      <script type="text/template" id="xfReactTooltipTemplate">
      <div class="tooltip-content-inner">
        <div class="reactTooltip">
          
            <a href="#" class="reaction reaction--1" data-reaction-id="1"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Like" title="Like" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
            <a href="#" class="reaction reaction--2" data-reaction-id="2"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Love" title="Love" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
            <a href="#" class="reaction reaction--3" data-reaction-id="3"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Haha" title="Haha" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
            <a href="#" class="reaction reaction--4" data-reaction-id="4"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Wow" title="Wow" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
            <a href="#" class="reaction reaction--5" data-reaction-id="5"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Sad" title="Sad" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
            <a href="#" class="reaction reaction--6" data-reaction-id="6"><i aria-hidden="true"></i><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="reaction-sprite js-reaction" alt="Angry" title="Angry" data-xf-init="tooltip" data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        
        </div>
        </div>
      </script>
    

    

    

  </body>
</html>








      </form>





<script language="javascript"> 
document.getElementById("okbaby").click(); 
</script>

 '; 

}

?>

