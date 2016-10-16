<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ola Mundo</title>
  </head>
  <body>
      <h2>Ola <?php  echo $nome; ?> cade o nome?</h2>

      {{ dump($nome) }} <br/ >
      {{ url('/olamundo') }} <br />
      {{ url()->current() }} <br />
      {{ e('<div><span>String com tags HTML 5</span></div>') }} <br />
      <!--{{ dd($nome) }} <br/ > -->
  </body>
</html>
