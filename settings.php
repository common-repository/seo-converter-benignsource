<div class="wrap">
<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( current_user_can('administrator') ) {?>
<style type="text/css" >
.time {
    height: 30px;
    width: 32%;
    display: inline-block;
	padding:5px;
	font-size:16px;
    position: relative;
	text-align:center;

    background-color: #F1F2F7;
	text-shadow: 1px 1px #999999;
    overflow: hidden;
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);}
.int{ 
background-color: #F1F2F7;
border:2px #666666 solid;
}
.check{
    content: "\2717";
    font-size: 24px;
    -webkit-font-smoothing: antialiased;
    text-align: center;
    color: #fff;
    display: inline-block;
    width: 26px;
    height: 26px;
	
   
    background: #C9D6E2;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    border: 1px solid #B2BFCA;
}

[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 75px;
  cursor: pointer;
}
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before,
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
}
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  left:0; top: -3px;
  width: 65px; height: 30px;
  background: #DDDDDD;
  border-radius: 15px;
  transition: background-color .2s;
}
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  width: 20px; height: 20px;
  transition: all .2s;
  border-radius: 50%;
  background: #7F8C9A;
  top: 2px; left: 5px;
}

/* on checked */
[type="checkbox"]:checked + label:before {
  background:#34495E; 
}
[type="checkbox"]:checked + label:after {
  background: #39D2B4;
  top: 2px; left: 40px;
}

[type="checkbox"]:checked + label .ui,
[type="checkbox"]:not(:checked) + label .ui:before,
[type="checkbox"]:checked + label .ui:after {
  position: absolute;
  left: 6px;
  width: 65px;
  border-radius: 15px;
  font-size: 14px;
  font-weight: bold;
  line-height: 22px;
  transition: all .2s;
}
[type="checkbox"]:not(:checked) + label .ui:before {
  content: "no";
  left: 32px
}
[type="checkbox"]:checked + label .ui:after {
  content: "yes";
  color: #39D2B4;
}
[type="checkbox"]:focus + label:before {
  border: 1px dashed #777;
  box-sizing: border-box;
  margin-top: -1px;
}

.checkdone{
    content: "\2717";
    font-size: 24px;
    -webkit-font-smoothing: antialiased;
    text-align: center;
    color: #fff;
    display: inline-block;
    width: 26px;
    height: 26px;
	
   
    background: #00CC00;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    border: 1px solid #B2BFCA;
}
.bodyconvert{
 padding:15px; 
 box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.05); 
 margin-bottom:30px;}
</style>
<?php echo '<img src="' . esc_attr( plugins_url( 'convert_logo.png', __FILE__ ) ) . '" alt="SEO Converter BenignSource" border="0px"> ';?>
           
    <?php    
    if (isset($this->message)) {
        ?>
        <div class="updated fade"><p><?php echo $this->message; ?></p></div>  
        <?php
    }
    if (isset($this->errorMessage)) {
        ?>
        <div class="error fade"><p><?php echo $this->errorMessage; ?></p></div>  
        <?php
    }
    ?> 
<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
<div id="post-body-content">
<div id="normal-sortables" class="meta-box-sortables ui-sortable">                        
<div class="postbox">
<h3 class="hndle"><?php _e('Settings', $this->plugin->name); ?></h3>
<div class="inside">
<div class="bodyconvert"><h2 style="color:#e96656; font-size:18px; font-weight:bold;">Make your WordPress converted into HTML</h2>
<p>SEO Converter BenignSource is professional tool.</p>
<div style=" text-align:center; font-size:16px; color:#e96656; padding:10px;">This is Free version if you like it support us and take <a href="http://www.benignsource.com/product/seo-converter-benignsource/" target="_blank" title="Premium Version">Premium Version</a></div>
<form action="options-general.php?page=<?php echo $this->plugin->name; ?>" method="post">
<div style="margin-top:20px; border-top:5px #e96656 solid; margin-bottom:30px; ">
<div style="background:#433a3b; margin-bottom:20px;"><h2 style="color:#FFFFFF;"><i>HTML Converter</i></h2></div>
<div style=" text-align:center; font-size:16px; color:#e96656; padding:10px;"><i>In this demo version is only possible "Include Only Posts"</i></div>
<div style="width:35%;display: inline-block;  padding:15px;">
<h2 style="color:#433a3b; font-size:14px; font-weight:bold;">Disable / Enable HTML Converter</h2>
<div style="text-align:left; padding-left:10px; color:#FF0000;">Control which Blog pages to be converted</div>
<div style="width:100%;display: inline-block;">
<script>
function checkRefresh(value)
{
    document.form1.submit();
}  
 
function uncheck(check)
{
    var prim = document.getElementById("scbs_include_categories");
    var secn = document.getElementById("scbs_include_posts");
    if (prim.checked == true && secn.checked == true)
    {
        if(check == 1)
        {
            secn.checked = false;
            checkRefresh();
        }
        else if(check == 2)
        {
            prim.checked = false;
            checkRefresh();
        }
    }
 
}
</script>
<p>
<label for="scbs_include_categories"><strong></strong></label></p><p>
<input type="checkbox" onClick="uncheck(1);" name="scbs_include_categories" id="scbs_include_categories" />
<label for="scbs_include_categories"><span class="ui"></span>Include Categories & Posts</label>
</p>
<p>
<label for="scbs_include_posts"><strong></strong></label></p><p>
<input type="checkbox" onClick="uncheck(2);" name="scbs_include_posts" id="scbs_include_posts" value="1" <?php echo $this->settings['scbs_include_posts'] ? ' checked="checked"' : ''; ?>/>
<label for="scbs_include_posts"><span class="ui"></span>Include Only Posts</label>
</p>
</div></div>
<div style="width:50%;display: inline-block;  padding:15px;">
<h2 style="color:#433a3b; font-size:14px; font-weight:bold;">Disable / Enable HTML Converter</h2>
<div style="text-align:left; padding-left:10px; color:#FF0000;">Control which WooCommerce pages to be converted</div>
<div style="width:100%;display: inline-block;">
<script>
function checkRefresh(value)
{
    document.formtwo.submit();
}  
 
function uncheck_two(check)
{
    var prim = document.getElementById("scbs_include_woocategories");
    var secn = document.getElementById("scbs_include_wooproducts");
    if (prim.checked == true && secn.checked == true)
    {
        if(check == 1)
        {
            secn.checked = false;
            checkRefresh();
        }
        else if(check == 2)
        {
            prim.checked = false;
            checkRefresh();
        }
    }
 
}
</script>
<p>
<label for="scbs_include_woocategories"><strong></strong></label></p><p>
<input type="checkbox" onClick="uncheck_two(1);" name="scbs_include_woocategories" id="scbs_include_woocategories" />
<label for="scbs_include_woocategories"><span class="ui"></span>Include WooCommerce Categories & Products</label>
</p>

<p>
<label for="scbs_include_wooproducts"><strong></strong></label></p><p>
<input type="checkbox" onClick="uncheck_two(2);" name="scbs_include_wooproducts" id="scbs_include_wooproducts" />
<label for="scbs_include_wooproducts"><span class="ui"></span>Include Only WooCommerce Products</label>
</p>
</div></div>
<div style="margin-top:20px; border-top:5px #e96656 solid; margin-bottom:30px; ">
<h2><i>If you publish new posts or products press "update html" to create the new html files.</i></h2>
<input  name="submit"  type="submit" style="text-align:center;text-transform:uppercase;padding:13px 30px 13px 35px;border-radius:4px;margin:10px;border:none;background-color:#00CC00;box-shadow:none;text-shadow:none;font-weight:400;vertical-align:middle;cursor:pointer;white-space:nowrap;font-size:14px;color:#FFF;" value="Update HTML"/>
</div></div>
<div style="margin-top:20px; border-top:5px #e96656 solid; margin-bottom:30px; ">
<div style="background:#433a3b; margin-bottom:20px;"><h2 style="color:#FFFFFF;"><i>HTML Compression</i></h2></div>
<div style="width:60%;display: inline-block;  padding:15px;">
<h2 style="color:#433a3b; font-size:14px; font-weight:bold;">Disable / Enable HTML Compression</h2>
<div style="text-align:left; padding-left:10px; color:#FF0000;">Control your pages to be compressed</div>
<div style="width:100%;display: inline-block;">
<p>
<label for="scbs_include_compression"><strong></strong></label></p><p>
<input type="checkbox" name="scbs_include_compression" id="scbs_include_compression" value="1" <?php echo $this->settings['scbs_include_compression'] ? ' checked="checked"' : ''; ?>/>
<label for="scbs_include_compression"><span class="ui"></span>Include HTML Compression</label>
</p>

</div></div>

<div style="width:30%;display: inline-block;"><a href="http://www.benignsource.com/product/real-performance-benignsource/" target="_blank" title="Real Performance Benignsource">
<?php echo '<img src="' . esc_attr( plugins_url( 'rp_logo.png', __FILE__ ) ) . '" alt="Real Performance Benignsource" border="0px"> ';?></a>
<h2 style="color:#e96656; font-size:14px; font-weight:bold;"><a href="http://www.benignsource.com/product/real-performance-benignsource/" style="color:#e96656; font-size:14px; text-decoration:none;" target="_blank" title="Real Performance Benignsource">Get Real Performance Benignsource</a></h2>
<p>Search Engine (SEO) & Performance Optimization in Real Time!</p>
</div></div>

<div style="margin-top:20px; border-top:5px #e96656 solid; margin-bottom:30px; ">
<div style="background:#433a3b; margin-bottom:20px;"><h2 style="color:#FFFFFF;"><i>Sitemap Generator</i></h2></div>
<div style="width:40%;display: inline-block; padding:15px;">
<h2 style="color:#433a3b; font-size:14px; font-weight:bold;">Disable / Enable Sitemap Generator</h2>
<div style="text-align:left; padding-left:10px; color:#FF0000;">Control your Sitemap Generator</div>
<div style="width:100%;display: inline-block;">
<p>
<label for="scbs_include_sitemap"><strong></strong></label></p><p>
<input type="checkbox" name="scbs_include_sitemap" id="scbs_include_sitemap" value="1" <?php echo $this->settings['scbs_include_sitemap'] ? ' checked="checked"' : ''; ?>/>
<label for="scbs_include_sitemap"><span class="ui"></span>Generate Google XML Sitemap</label>
</p>

</div></div>

<div style="width:50%;display: inline-block;"><p>If you publish new posts or products press "Save Settings" to create the new XML Sitemap.</p>
<?php 
// Include Sitemap Generator
$scbssitemapgenerate = get_option('scbs_include_sitemap');
if ($scbssitemapgenerate < 1 ){

}else{

if(str_replace('-', '', get_option('gmt_offset'))<10) { $tempo = '-0'.str_replace('-', '', get_option('gmt_offset')); } else { $tempo = get_option('gmt_offset'); }
if(strlen($tempo)==3) { $tempo = $tempo.':00'; }
$scbsSitemapGen = get_posts(array(
'numberposts' => -1,
'orderby' => 'modified',
'post_type'  => array('post','page','property','product'),
'order'=> 'DESC'));
$scbssitemap .= '<?xml version="1.0" encoding="UTF-8"?>';
$scbssitemap .= "\n".'<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
      http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'."\n";
$scbssitemap .= "\t".'<url>'."\n".
  "\t\t".'<loc>'. esc_url( home_url( '/' ) ) .'</loc>'.
  "\n\t\t".'<lastmod>' . date( "Y-m-d\TH:i:s", current_time( 'timestamp', 0 ) ) . $tempo . '</lastmod>'.
  "\n\t\t".'<changefreq>monthly</changefreq>'.
    "\n\t\t".'<priority>1.0</priority>'.
"\n\t".'</url>'."\n";
foreach($scbsSitemapGen as $post) {
setup_postdata($post);
$postdate = explode(" ", $post->post_modified);
$scbssitemap .= "\t".'<url>'."\n".
  "\t\t".'<loc>'. get_permalink($post->ID) .'</loc>'.
  "\n\t\t".'<lastmod>'. $postdate[0] . 'T' . $postdate[1] . $tempo . '</lastmod>'.
  "\n\t\t".'<changefreq>Weekly</changefreq>'.
    "\n\t\t".'<priority>0.5</priority>'.
"\n\t".'</url>'."\n";
  }
$scbssitemap .= '</urlset>';
$scbsgen = fopen(ABSPATH . "sitemap.xml", 'w');
fwrite($scbsgen, $scbssitemap);
fclose($scbsgen);
 } 

?>


</div>

<?php
if (isset($_POST['submit'])){
function printme($submit){ ?>
<?php

// Include Only Posts
$scbsposts = get_option('scbs_include_posts');
if ($scbsposts < 1 ){

}else{
$scbsLinksPost = get_posts(array(
'numberposts' => -1,
'orderby' => 'modified',
'post_type'  => array('post'),
'order'=> 'DESC'));

foreach($scbsLinksPost as $post) {
$scbslink .= "\t".$getfilecontbs = file_get_contents(get_permalink($post->ID))."\n";
$scbslink .= "\t".file_put_contents("../$post->post_name/index.html", $getfilecontbs)."\n";
}
}

?>
<?php
}
printme("{submit}");
}?>
</div>
<div style=" padding:15px; margin-top:20px; border-top:5px #e96656 solid; margin-bottom:30px; ">
<h2><i>After pressing "Save Settings" your settings will be saved and will be create the html files.</i></h2>
<p><input name="submit" type="submit" class="button button-primary" value="<?php _e('Save Settings', $this->plugin->name); ?>" /></p>
</div>
<?php wp_nonce_field('benignsource-nonce', 'submit' ); ?>
</form></div>

</div>	                
<div class="postbox">
<div style="width:70%; margin-bottom:20px;"><h2>BenignSource <a href="http://www.benignsource.com/forums/" target="_blank" title="BenignSource">Support Page</a> | <a href="http://www.benignsource.com/products/" target="_blank" title="Products">Products</a> | <a href="http://www.benignsource.com/#contact" target="_blank" title="Send feedback">Send feedback</a></h2></div>
<div style="width:100%; text-align:center;">Copyright &copy; 2001 - <?php printf(__('%1$s | %2$s'), date("Y"), ''); ?> <a href="http://www.benignsource.com/" target="_blank" title="BenignSource">BenignSource</a> Company, All Rights Reserved.</div>
</div>
</div>
</div>
</div>
</div><?php }?> 
</div>
