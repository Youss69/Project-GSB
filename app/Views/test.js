function Js(buttonName) {
  
    button = document.getElementById(buttonName);
    for (let i = 0; i < button.length; i++) {
      alert(button[i]);
  }
   alert(Object.keys(button[1]));
    button = parseInt(button);
  
    

      window.location='../Back/Activation';
  }