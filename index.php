<html>
<head>
  <meta charset="utf-8" />
  <meta name="description" content="3D Animation Project Website: My World" />
  <meta name="keywords" content="3D Animation Bachelor's Degree, HTML, CSS, Reports, Project">
  <meta name="author" content="Telmo Silva" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>APM Project: 3D Animation</title>


  <script src="./scripts/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="css/index.css" />
</head>

<body>
<?php
    echo gethostname();
 ?>
  <header>

    <figure>
      <img src="midia/placeholder_image.png" alt="Dummy Image" />
    </figure>

    <nav>
      <ul>
        <a href=""><li>Home</li></a>
        <a href=""><li>Overall State</li></a>
        <a href=""><li>News</li></a>
        <a href=""><li>Tasks</li></a>
        <a href=""><li>Reports</li></a>
      </ul>
    </nav>

    Progress: <progress value="0" max="100"></progress>
  </header>

  <main>
    <section>
      <h2>About</h2>
      <div>
        <p>To define my career as a 3D Artist, I have proposed myself to create a short 3D animation for my bachelor's degree project.
For its production, I intent to use the free open-source software:</p>
<a href="">Blender3D</a> and <a href="">Krita</a>
      </div>
    </section>

    <section>
      <h2>Latest News</h2>
      <div>
        <a href="">
            <article>
                <h4><u>18/02/2018</u> Website Created</h4>
                <blockquote>Aii lmao</blockquote>
            </article>
        </a>

        <a href="">
            <article>
                <h4><u>18/02/2018</u> Website Created</h4>
                <blockquote>Aii lmao</blockquote>
            </article>
        </a>

      </div>
    </section>
  </main>

  <footer>

  </footer>


</body>
</html>
