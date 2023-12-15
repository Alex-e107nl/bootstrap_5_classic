/*
+ ----------------------------------------------------------------------------+
|     e107 website system - 
|		Theme for e107 build with Bootstrap 5.3.2. by exas.nl
+ ----------------------------------------------------------------------------+
*/


/**
* Activate link when sublink is active
*
*/

$(function($) {
  let url = window.location.href;
  
   $('li div a').each(function() {
    if (this.href === url) {
      $(this).closest('li').addClass('show');
    }
   });
   
  $('ul li a').each(function() {
    if (this.href === url) {
      $(this).closest('a').addClass('active');
    }
  });

  
});


(function() {
  "use strict";

//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

 
  /**
   * Initiate Datatables
 
  const datatables = select('.datatable', true)
  datatables.forEach(datatable => {
    new simpleDatatables.DataTable(datatable, {
    info: false,
	ordering: false,
	sortable: false,
	paging: false,
	autoWidth: false
}); 
  })
 */
 
  /**
   * Initiate GLightbox
  */
  
  
  var lightbox = GLightbox();
            lightbox.on('open', (target) => {
                console.log('lightbox opened');
            });
            var lightboxDescription = GLightbox({
                selector: '.glightbox2'
            });
            var lightboxVideo = GLightbox({
                selector: '.glightbox3'
            });
            lightboxVideo.on('slide_changed', ({ prev, current }) => {
                console.log('Prev slide', prev);
                console.log('Current slide', current);

                const { slideIndex, slideNode, slideConfig, player } = current;

                if (player) {
                    if (!player.ready) {
                        // If player is not ready
                        player.on('ready', (event) => {
                            // Do something when video is ready
                        });
                    }

                    player.on('play', (event) => {
                        console.log('Started play');
                    });

                    player.on('volumechange', (event) => {
                        console.log('Volume change');
                    });

                    player.on('ended', (event) => {
                        console.log('Video ended');
                    });
                }
            });

            var lightboxInlineIframe = GLightbox({
                selector: '.glightbox4'
						
            });

})();

