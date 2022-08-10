var acc = document.getElementsByClassName("accordion");
var i;

// media query event handler
if (matchMedia) {
  const mq = window.matchMedia("(max-width: 1025px)");
  mq.addListener(WidthChange);
  WidthChange(mq);
}

// media query change
function WidthChange(mq) {
  if (mq.matches) { /* mobile abaixo de 1025px */
    /* por cada accordion */
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {

        this.classList.toggle("active");

        var panel = this.nextElementSibling;

        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
          window.scrollBy(0, 200);
        }

      });

      //Get the button:
      mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () { scrollFunction() };

      function scrollFunction() {
        if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

    }
  } else {

    window.onload = function get_body() {

      body = document.getElementsByTagName('body')[0];

      for (i = 0; i < acc.length; i++) {

        var accRect = acc[i].getBoundingClientRect();

        body.addEventListener('mousemove', function (event) {
          
          if (event.clientX >= accRect.left && event.clientX <= accRect.right &&
            event.clientY >= accRect.top && event.clientY <= accRect.bottom) {

              /* why not working? */
            acc[i].classList.add("active");
            console.log("in");
          }
        }, false);

      }
    }
  }
}
