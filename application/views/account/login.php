<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <style>
    .title-card h1 {
  font-weight: bold;
  text-align: center;
}
.exo-2-light {
      font-family: "Exo 2", sans-serif;
      font-optical-sizing: auto;
      font-weight: 300; /* You can choose the appropriate weight here */
      font-style: normal;
      color: yellow;
      font-weight: bold;
    }

    .exo-2-regular {
      font-family: "Exo 2", sans-serif;
      font-optical-sizing: auto;
      font-weight: 400; /* You can choose the appropriate weight here */
      font-style: normal;
    }

  </style>
</head>
<body>
  <main>
	<div class="page-content">
   <div class="container">
    <div class="row">
      <div class="col m6 s12 offset-l3 offset-m3">
       <div class="row">
        <div class="col s12 m12">
          <div class="card grey lighten-4">
          	<div class="title-card blue white-text">
          		<h1 class="exo-2-light">LOGIN</h1>
          	</div>
            <div class="card-content">
              <form id="loginForm">
                <div class="row">
                  <div id="message"></div>
                </div>
                <div class="row">
                  <div class="input-field">
                    <i class="material-icons prefix">email</i>   
                    <input name="email" id="icon_prefix" type="text">
                    <label>Email</label>
                  </div>
                  <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password">
                    <label>Kata Sandi</label>
                  </div>
                  <button type="submit" id="login" name="login" class="btn blue">Masuk</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</main>
</body>
</html>
