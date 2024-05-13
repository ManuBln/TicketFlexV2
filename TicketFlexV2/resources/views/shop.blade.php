<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TicketFlex</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <style>
            *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              font-family: 'Nunito', sans-serif;
              text-decoration: none;
              list-style: none;
              scroll-behavior: none;
            }
            :root{
              --bg-color:#ffffff;
              --text-color:#121212;
              --main-font: 2.2rem;
              --p-font:1.1rem;
            }
            body{
              background-color: var(--bg-color);
              color: var(--text-color);
            }
            header{
              width: 100%;
              top: 0;
              right: 0;
              z-index: 1000;
              position:fixed;
              background-color: var(--bg-color);
            }

        </style>
    </head>
    <body>
      <header>
        <a href="#" class="logo">TicketFlex</a>
        <div class=" bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#shop">Shop</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#faq">Faq</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="icons">
            <a href="#" class="bx bx-search"></a>
            <a href="#" class="bx bx-user"></a>
            <a href="#" class="bx bx-cart"></a>
        </div>
      </header>
      <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>