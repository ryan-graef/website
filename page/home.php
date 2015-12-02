<div id="introduction-block">
    <h1 id="site-welcome" class="transparent-title center-text"> Welcome to my Domain </h1>
</div>

<p>
    This is Cuda's Cubby, a website dedicated to the hopes and dreams of one individual aspiring to change the world through the various mediums of storytelling.  Take a few minutes to look around and I assure you you'll only be slightly disappointed.
</p>
<p>
    If you're looking for contact information, please look under the <a href="javascript:void 0;" onclick="Utils.loadPage('about')">about tab</a>.
</p>
<br>
<br>

<h1 class="title center-text">What's new?</h1>
<div id="right">
    <div id="news-blog-block" class="center">
        <div id="blog-loading-gif" class="center-text">
            <img id="loading-gif" src="res/img/load.gif" class="center">
        </div>
        <div id="news-blog" style="display: none;">
            
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#news-blog').load("controller/getNewsPost.php", function(){
        $('#blog-loading-gif').fadeOut(500, function(){
            $('#blog-loading-gif').remove();
            $('#news-blog').fadeIn();
        });
    });
</script>