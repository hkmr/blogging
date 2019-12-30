
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="./index.css" />
  </head>
  <body>
    <div class="container">
      <div id="navbar"></div>

      <div class="main-container">
        <div class="title">Recent Blogs</div>
        <div class="card">
          <div class="card-image">
            <a href="#"><img src="./images/001.jpg" alt="Image Name"/></a>
          </div>
          <div class="card-content">
            <div class="card-title">
              <a href="./pages/blog_detail.html">Title of of Blog</a>
            </div>
            <div class="card-desc">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Commodi, aspernatur? Pariatur aperiam similique cumque enim
                quaerat veritatis dicta eius autem dolores sint in inventore
                esse, sit, error explicabo nobis excepturi.
              </p>
            </div>
            <div class="card-author">
              Today, 8:30AM by <a href="#">Harsh Kumar</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-image">
            <a href="#"><img src="./images/001.jpg" alt="Image Name"/></a>
          </div>
          <div class="card-content">
            <div class="card-title">
              <a href="./pages/about.html">Title of of Blog</a>
            </div>
            <div class="card-desc">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Commodi, aspernatur? Pariatur aperiam similique cumque enim
                quaerat veritatis dicta eius autem dolores sint in inventore
                esse, sit, error explicabo nobis excepturi.
              </p>
            </div>
            <div class="card-author">
              Today, 8:30AM by <a href="#">Harsh Kumar</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-image">
            <a href="#"><img src="./images/001.jpg" alt="Image Name"/></a>
          </div>
          <div class="card-content">
            <div class="card-title">
              <a href="./pages/about.html">Title of of Blog</a>
            </div>
            <div class="card-desc">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Commodi, aspernatur? Pariatur aperiam similique cumque enim
                quaerat veritatis dicta eius autem dolores sint in inventore
                esse, sit, error explicabo nobis excepturi.
              </p>
            </div>
            <div class="card-author">
              Today, 8:30AM by <a href="#">Harsh Kumar</a>
            </div>
          </div>
        </div>
      </div>

      <div id="footer"></div>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
    $(function() {
      $("#navbar").load("./components/navbar.html");
      $("#footer").load("./components/footer.html");
    });
  </script>
</html>
