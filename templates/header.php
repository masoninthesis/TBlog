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
    <li>
      <form class="gk-form">
        <div>
          <input class="form-control" type="email" placeholder="Email address ...">
          <input class="btn btn-sub" type="submit" value="Subscribe">
        </div>
      </form>
    </li>
  </ul>
</nav>

<script type="text/javascript">

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
