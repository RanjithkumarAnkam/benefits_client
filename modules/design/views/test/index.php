<style>


/* Changes */
.tab-content {overflow:hidden; }

.slide {
  -webkit-transition: left 0.35s ease;
  -moz-transition: left 0.35s ease;
  -ms-transition: left 0.35s ease;
  -o-transition: left 0.35s ease;
  transition: left 0.35s ease;
  position: relative;
  overflow: hidden;
  left:100%;
}
.slide.in {
    left:0;
}
.slide.out{
    left:-100%;
}

/* Tweaks for visibility */
#one{ background: red; }
#two{ background: blue; }
#three{ background: green; }

</style>


<ul class = "nav nav-tabs" id = "tabs">
    <li class = "active">
        <a href = "#one" data-toggle = "tab">One</a>
    </li>
    <li>
        <a href = "#two" data-toggle = "tab">Two</a>
    </li>
    <li>
        <a href = "#three" data-toggle = "tab">Three</a>
    </li>
</ul>

<div class = "tab-content">
    <div class = "tab-pane active slide in" id = "one">
        This is one
    </div>
    <div class = "tab-pane slide" id = "two">
        This is two
    </div>
    <div class = "tab-pane slide" id = "three">
        This is three
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script>
$("#tabs").show();
!function( $ ){

  "use strict"

 /* TAB CLASS DEFINITION
  * ==================== */

  var Tab = function ( element ) {
    this.element = $(element)
  }

  Tab.prototype = {

    constructor: Tab

  , show: function () {
      var $this = this.element
        , $ul = $this.closest('ul:not(.dropdown-menu)')
        , selector = $this.attr('data-target')
        , previous
        , $target

      if (!selector) {
        selector = $this.attr('href')
        selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') //strip for ie7
      }

      if ( $this.parent('li').hasClass('active') ) return

      previous = $ul.find('.active a').last()[0]

      $this.trigger({
        type: 'show'
      , relatedTarget: previous
      })

      $target = $(selector)

      this.activate($this.parent('li'), $ul)
      this.activate($target, $target.parent(), function () {
        $this.trigger({
          type: 'shown'
        , relatedTarget: previous
        })
      })
    }

  , activate: function ( element, container, callback) {
      var $active = container.find('> .active')
        , transition = callback
            && $.support.transition
            && $active.is('.fade, .slide')

      function next() {
        $active
          .removeClass('active in out')
          .find('> .dropdown-menu > .active')
          .removeClass('active')

        element.addClass('active')

        if (transition) {
            element[0].offsetWidth // reflow for transition
            element.removeClass('out').addClass('in')
        } else {
          element.removeClass('fade slide')
        }

        if ( element.parent('.dropdown-menu') ) {
          element.closest('li.dropdown').addClass('active')
        }

        callback && callback()
      }

      transition ?
        $active.one($.support.transition.end, next) :
        next();

      $active.removeClass('in').addClass('out');
    }
  }


 /* TAB PLUGIN DEFINITION
  * ===================== */

  $.fn.tab = function ( option ) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('tab')
      if (!data) $this.data('tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  $.fn.tab.Constructor = Tab


 /* TAB DATA-API
  * ============ */

  $(function () {
    $('body').on('click.tab.data-api', '[data-toggle="tab"], [data-toggle="pill"]', function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
  })

}( window.jQuery );

</script>