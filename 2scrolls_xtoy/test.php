<html>
  <head>
    <title>Horizontal Scroll Test</title>
    <script type='text/javascript'>
      window.onload = function(e) {
        evt =                   e || window.event;

        var mousewheelevt=(/Firefox/i.test(navigator.userAgent))? 'DOMMouseScroll' : 'mousewheel';

        if(document.attachEvent) {
          document.getElementById('scrollableDiv').attachEvent('on'+mousewheelevt, scroll);
        } else {
          document.getElementById('scrollableDiv').addEventListener(mousewheelevt, scroll, false);
        }
      }


      function scroll(evt) {
        scrollTarget =      evt.currentTarget || evt.srcElement;

        if(scrollTarget.scrollWidth > scrollTarget.offsetWidth) {
          var delta = Math.max(-1, Math.min(1, (evt.wheelDelta || -evt.detail)));
          switch(delta) {
            case 1:
              scrollTarget.scrollLeft -= 32;
              break;

            case -1:
              scrollTarget.scrollLeft += 32;
              break;
          }
        }
      }

    </script>
  </head>


  <body>


    <div id='scrollableDiv' style='width: 256px; height: 256px; position: absolute; overflow: hidden;'>
      <div style='width: 400px;'>
sflgjskfngk lgj s;jg;sfj l;sjg l;fjgo; urgt8904sflgjskfngk lgj s;jg;sfj l;sjg l;fjgo; urgt8904 56 2jgs[09t l45jtw89pt 2n5t,.mh b89p7u 24nm<br>
5t. umb8u or5rtywetr5y  56 sflgjskfngk sflgjskfngk lgj s;jg;sfj l;sjg l;fsflgjskfngk lgj s;jg;sfj l;sjg l;fjgo; urgt8904 56 2jgs[09t l45jt<br>
w89pt 2n5t,.mh b89p7u 24nm5t. umb8u or5rtywetr5y jgo; urgt8904 56 2jgs[09sflgjskfngk lgj s;jg;sfj l;sjg l;fjgo; urgt8904 56 2jgs[09t l45jt<br>
w89pt 2n5t,.mh b89p7u 24nm5t. umb8u or5rtywetr5y t l45jtw89pt 2n5t,sflgjskfngk lgj s;jg;sfj l;sjg l;fjgo; urgt8904 56 2jgs[09t l45jtw89pt <br>
2n5t,.mh b89p7u 24nm5t. umb8u or5rtywetr5y .mh b89p7u 24nm5t. umb8u or5rtywetr5y lgj s;jg;sfj l;sjgsflgjskfngk lgj s;jg;sfj l;sjg l;fjgo; <br>
urgt8904 56 2jgs[09t l45jtw89pt 2n5t,.mh b89p7u 24nm5t. umb8u or5rtywetr5y  l;fjgo; urgt8904 56 2jgs[09t l45jtw89pt 2n5t,.mh b89p7u 24nm5t.<br>
 umb8u or5rtywetr5y 2jgs[09t l45jtw89pt 2n5t,.mh b89p7u 24nm5t. umb8u or5rtywesflgjskfngk lgj s;jg;sfj l;sjg l;fjgo; urgt8904 56 2jgs[09t l<br>
45jtw89pt 2n5t,.mh b89p7u 24nm5t. umb8u or5rtywetr5y tr5y
      </div>
    </div>


  </body>
</html>