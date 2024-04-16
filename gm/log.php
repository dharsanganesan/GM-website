<html>
    <head>
          <title> Log</title>
          <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />
          <link href="https://fonts.googleapis.com/css2?family=Cambria:wght@300;400;500&display=swap" rel="stylesheet" />
          <link rel="stylesheet" href="logcss.css"
          <link rel="stylesheet" href="styles.css" />
    </head>
    <body style="background-color: #222831;">
        <section style="margin-left: 175px;">
        <section style="display: flex;">
        <div class="color">
             <section>
                <div class="card">
                    <div class="container">
                        <div style="position: relative; top: 14vh;">
                            <center>
                                <img  src="GM.png" class="o-1"   width="60%" height="42%">
                                <h6 style="margin-top: -55px; font: bold small-caps 15px Verdana;" class="hide">Ganesan Folding Company </h6>
                            </center>
                        </div>
                        </div>
                  </div>
            </section> 
        </div>
<div class="flex"> 
    <section>
        <div class="card1">
            <div class="container">
             <section>
                <a class="right" href="#">Need Help ?</a><br>
                <h2 class="let">Log in</h2>
                <form action="gmroot.php" method="post">
                    <div class="com">
                    <div class="control">
                        <input type="email" name="emailid" required>
                        <label>Email ID</label>
                      </div>  
                      <div class="control">
                        <input type="password" maxlength="10" name="password" required>
                        <label>Password</label>
                      </div> 
                      </div> 
                      <div id="sign" class="shimmer">Forgot password ?</div>
                      <button type="submit"  class="btn btn-primary">Log in </button>
                </form>
             </section>
            </div>
        </div>
    </section>
</div>
    </section>
    </section>
    </body>
<script>
    const labels = document.querySelectorAll('.control label');
labels.forEach(label => {
  label.innerHTML = label.innerText.split("").map((letter, idx) =>`<span style="transition-delay:${idx * 50}ms">${letter}</span>`).join('');
})    
    
</script>
</html>