// var settingsmenu = document.querySelector(".settings-menu");

// function settingsMenuToggle(){
//     settingsmenu.classList.toggle("settings-menu-height");
//   }

function settingsMenuToggle() {
  var settingsMenu = document.querySelector('.settings-menu');
  if (settingsMenu.style.display === 'block') {
    settingsMenu.style.display = 'none';
  } else {
    settingsMenu.style.display = 'block';
  }
}