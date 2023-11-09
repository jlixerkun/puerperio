if(window.location.pathname != '/index.html'){
  // Se desplaza la distancia correspondiente al alto actual del viewport
  document.querySelector(".scrollear").addEventListener("click", function() {
    // Se obtiene la altura actual del viewport
    var viewportHeight = window.innerHeight;
  
    // Se desplaza la ventana a la posición actual más la altura del viewport
    window.scrollTo({
      top: window.scrollY + viewportHeight,
      left: 0,
    });
  });
  
  
  let thettas = document.getElementById('thettas');
  let menuList = document.getElementById('menu');
  
  thettas.addEventListener('click', (e)=>{
    menuList.classList.toggle('active');
    if (thettas.classList.contains('active')) {
      thettas.classList.remove('active');
      thettas.classList.add('inactive');
    } else {
      thettas.classList.add('active');
      thettas.classList.remove('inactive');
      setTimeout(() => {
        thettas.classList.remove('active');
        thettas.classList.add('inactive');
        menuList.classList.toggle('active');
      }, 5000);
    }
  });
}

if(window.location.pathname == '/artistas.html'){
  let artistas = [...document.querySelectorAll('.grid-item a')];

  
  artistas.forEach((item)=> {
    item.style.setProperty('--width-transpose', (Math.random()*6 ) + 'rem');
    item.style.setProperty('--height-transpose', (Math.random()*6 ) + 'rem');
  })
}

