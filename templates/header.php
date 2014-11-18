<section id="hero">
  <div class="wrap container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>Subscribe and get timely blog posts</h1>
        <h2>Follow for updates and new features.</h2>
      </div>
    </div>
  </div>
</section>

<nav id="navbar">
  <ul id="form-before">
    <li class="twitter">
      <a href="https://twitter.com/timelyapp" class="twitter-follow-button" data-show-count="false">Follow @timelyapp</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </li>
    <li class="facebook">
      <div class="fb-like" data-href="https://www.facebook.com/TimelyApp" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
    </li>
    <li class="nav-sub">
      <form>
        <div>
          <input class="form-control" type="email" placeholder="Email address ...">
          <input class="btn btn-sub" type="submit" value="Subscribe">
        </div>
      </form>
    </li>
  </ul>
</nav>

<script type="text/javascript">
  // Nav Bar
  (function($, undefined){
    "use strict";

    var $navbar = $("#navbar"),
        $body = $("#hero"),
        $form = $("#form-before"),
        y_pos = $navbar.offset().top,
        height = $navbar.height();

    $(document).scroll(function(){
      var scrollTop = $(this).scrollTop();

      if (scrollTop > y_pos){
        $navbar.addClass("navbar-fixed").animate({ top: 0 });
        $body.addClass("body-top").animate({ top: 0 });
        $form.addClass("form-after").animate({ top: 0});
      } else if (scrollTop <= y_pos){
        $navbar.removeClass("navbar-fixed").clearQueue().animate({ top: 0 });
        $body.removeClass("body-top").clearQueue().animate({ top: 0 });
        $form.removeClass("form-after").animate({ top: 0});
      }
    });

  })(jQuery, undefined);

</script>

<!-- Facebook Embed -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
