

    let searchbtn = document.querySelector('#search');
    let searchfrm = document.querySelector('.head .search-bar');

    searchbtn.onclick = () => {
        searchfrm.classList.toggle("active");
        menu.classList.remove('active')
    }

    let menu = document.querySelector('.head .navbar');
    document.querySelector('#bars').onclick = () => {
    menu.classList.toggle('active');
    searchfrm.classList.remove('active')
    }
    window.onscroll = () => {
        menu.classList.remove("active");
        searchfrm.classList.remove("active");
    }
// button place
/*let brick = document.querySelector('#brick');


    function makeEaseOut(timing) {
        return function(timeFraction) {
          return 1 - timing(1 - timeFraction);
        }
      }
  
      function bounce(timeFraction) {
        for (let a = 0, b = 1; 1; a += b, b /= 2) {
          if (timeFraction >= (7 - 4 * a) / 11) {
            return -Math.pow((11 - 6 * a - 11 * timeFraction) / 4, 2) + Math.pow(b, 2)
          }
        }
      }
  
      let bounceEaseOut = makeEaseOut(bounce);
  
      brick.onclick = function() {
        animate({
          duration: 3000,
          timing: bounceEaseOut,
          draw: function(progress) {
            brick.style.right = progress * 500 + 'px';
          }
        });
      };
*/

    
   
   

