<html>
    <head>
        <title> Entering</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="assets/demo.css">
  <link rel="stylesheet" href="g.m.css">
	<link rel="stylesheet" href="assets/header-fixed.css">
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
      </head>
    <body>
      <section style="margin-left: 9%;">
       
        <div class="container1">
          <section>
            <header class="header-fixed">
    
              <div class="header-limiter">
            
                <h1><span><img style="margin-top: -10px;" class="o-0" src="lo.png" width="80px" height="50px"></span><a href="#" class="hide">Ganesan <span>Company</span></a></h1>
            
              </div>
            
            </header>
          </section>
            <section>
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6" >
                <form method="post" action="countingroot.php" autocomplete="off">
                  <div class="control">
                    <input type="date"  class="date input"  name="indate"required>
                    <label>In-Date</label>
                    </div>
                    <div class="control">
                        <input type="text" maxlength="10" name="box" required>
                        <label>Boxes</label>
                      </div>  
                      <div class="control">
                        <input type="text" name="textiles" required>
                        <label>Textiles</label>
                      </div>  
                      <div class="control">
                        <input type="text" name="process" required>
                        <label>Process</label>
                      </div>  
              </div>
              <div class="col-sm-6" >
                <form method="post" action="countingroot.php" autocomplete="off">
                <div class="control">
                    <input type="date"  class="date input"  name="outdate"required>
                    <label>Out-Date</label>
                    </div>
                    <div class="control">
                        <input type="text" maxlength="10" name="lotno" required>
                        <label>Lot.no</label>
                      </div>  
                      
                      <div class="control">
                        <input type="text" maxlength="10" name="bending" required>
                        <label>Pending saree</label>
                      </div> 
                      <div>
                        <select name="choice" id="cars" class="come" requried>
                          <option value="choose" style="color:#21E6C1;">Choose</option>
                          <option value="folded"  style="color:#21E6C1;">Folded</option>
                          <option value="unfolded"  style="color:#21E6C1;">Unfolded</option>
                        </select>
                      </div>
              </div>
            </div>
          </div>
          <input type="submit" value="Submit"class="submit" >
            </form>
          </section>
          <section>

          </section>
          </div>
     
        </section>
</body>
<style>
    
</style>
<script>
    const labels = document.querySelectorAll('.control label');
labels.forEach(label => {
  label.innerHTML = label.innerText.split("").map((letter, idx) =>`<span style="transition-delay:${idx * 50}ms">${letter}</span>`).join('');
})    

 /* ********************** start nova alert ********************** */


 const novaAlert = function ({ icon = '', title = '', text = '', darkMode = false, showCancelButton = false, ConfirmButtonText = 'Click Me For Good Journey', dismissButton = true, input = false, inputPlaceholder = '' }) {


let modal = document.createElement('div');
modal.setAttribute('class', 'nova-modal');
document.body.append(modal);
let alert = document.createElement('div');
alert.setAttribute('class', 'nova-alert')

modal.appendChild(alert);
var svg;

if (darkMode == true) {
    alert.classList.add('nova-dark-mode');
}
if (icon == 'success') {
    svg = `<svg class="circular green-stroke">
        <circle class="path" cx="75" cy="75" r="50" fill="none" stroke-width="5" stroke-miterlimit="10"/>
    </svg>
    <svg class="checkmark green-stroke">
        <g transform="matrix(0.79961,8.65821e-32,8.39584e-32,0.79961,-489.57,-205.679)">
            <path class="checkmark__check" fill="none" d="M616.306,283.025L634.087,300.805L673.361,261.53"/>
        </g>
    </svg>`;
} else if (icon == 'danger') {
    svg = `<svg class="circular red-stroke">
        <circle class="path" cx="75" cy="75" r="50" fill="none" stroke-width="5" stroke-miterlimit="10"/>
    </svg>
    <svg class="cross red-stroke">
        <g transform="matrix(0.79961,8.65821e-32,8.39584e-32,0.79961,-502.652,-204.518)">
            <path class="first-line" d="M634.087,300.805L673.361,261.53" fill="none"/>
        </g>
        <g transform="matrix(-1.28587e-16,-0.79961,0.79961,-1.28587e-16,-204.752,543.031)">
            <path class="second-line" d="M634.087,300.805L673.361,261.53"/>
        </g>
    </svg>`;
} else if (icon == 'warning') {
    svg = `<svg class="circular yellow-stroke">
        <circle class="path" cx="75" cy="75" r="50" fill="none" stroke-width="5" stroke-miterlimit="10"/>
    </svg>
    <svg class="alert-sign yellow-stroke">
        <g transform="matrix(1,0,0,1,-615.516,-257.346)">
            <g transform="matrix(0.56541,-0.56541,0.56541,0.56541,93.7153,495.69)">
                <path class="line" d="M634.087,300.805L673.361,261.53" fill="none"/>
            </g>
            <g transform="matrix(2.27612,-2.46519e-32,0,2.27612,-792.339,-404.147)">
                <circle class="dot" cx="621.52" cy="316.126" r="1.318" />
            </g>
        </g>
    </svg>`;
} else {
    svg = '';
}
var icon_template = ` <div class="nova-icon">
   <div class="svg-box">
     ${svg}
   </div>
</div>`;
var title_and_text = `
<h3 class="nova-title">
  ${title}
</h3>
<p class="nova-text">
${text}
</p>
`;

if (showCancelButton == true) {
    var buttons =
        `
<div class="nova-btns">
<a class="accept">
  ${ConfirmButtonText}
</a>
<a class="reject">
${CancelButtonText}
</a>
</div>
`;
} else {
    var buttons =
        `
<div class="nova-btns">
<a class="accept">
${ConfirmButtonText}
</a>
</div>
`;
}
if (dismissButton == true) {

    var dismissButton = `<a class="dismissButton">
X
</a>`;
} else {
    var dismissButton = `<a class="dismissButton hidden">
X
</a>`;
}
if (input == true) {
    var __input = `<input class="nova-input-alert" placeholder='${inputPlaceholder}'>`;
} else {
    var __input = '';
}
var $content = icon_template + title_and_text + __input + buttons + dismissButton;
alert.innerHTML = $content;
document.querySelector('.nova-alert .reject  , .nova-alert .accept').onclick = closeNova;
document.querySelector('.dismissButton').onclick = closeNova;
function closeNova() {

    alert.remove();
    modal.remove();

}
this.then = function (callback) {
    document.querySelector('.nova-alert .accept').onclick = accept;

    function accept() {
        if (input == true) {


            var inputValue = document.querySelector('.nova-input-alert');
            var val = inputValue.value;
            closeNova();
            callback(e = true, val);

        } else {
            closeNova();
            callback(e = true);
        }
    }
}
}
/* ********************** end nova alert ********************** */

new novaAlert({
title: 'Welcome Back ',
text: 'Have A Nice Day',
icon: 'success',
dismissButton: false,
darkMode: false,
// ConfirmButtonText: 'Lets go',

});
</script>
</html>