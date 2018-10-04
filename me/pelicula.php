<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    *{-webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;}
    .contenedor-principal{
      padding: 30px;
      margin: 0px;
      background-color: blue;
      width: 960px;
      margin: 0 auto;
    }
      header{
        background-color: red;
        height: 200px;
        margin-bottom: 20px;
      }
      section{
        height: 750px;
      }
      article.b{
        float: left;
        border: 0px;
        background-color: green;
        height: 750px;
        width: 300px;
        margin-right: 15px;
      }
      article.c{
        float: right;
        border: 0px;
        background-color: purple;
        height: 750px;
        width: 565px;
        margin-left: 15px;
      }
      footer{
        display: block;
        margin-top: 20px;
        background-color: black;
        height: 200px;
      }
    </style>
  </head>
  <body>
    <div class="contenedor-principal">
      <header></header>
      <main>
        <section>
          <article class="b">
          </article>
          <article class="c">
          </article>
        </section>
      </main>
      <footer></footer>
    </div>


  </body>
</html>
