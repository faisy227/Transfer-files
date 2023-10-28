<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Website Layout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 5px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        main {
            padding: 20px;
        }

        article {
            background-color: #f7f7f7;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        section {
            padding: 10px;
            border: 1px solid #ccc;
            margin: 10px 0;
        }

        aside {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            margin: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .custom-div {
            background-color: #eee;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }
        .nav-drawer {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: #444;
            overflow-y: auto;
            transition: left 0.3s ease-in-out;
        }

        .nav-toggle {
            background-color: transparent;
            color: #fff;
            border: none;
            font-size: 24px;
            padding: 10px;
            cursor: pointer;
        }

        .nav-content {
            padding: 20px;
        }

        .nav-content a {
            display: block;
            color: #fff;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .nav-content a:hover {
            color: #ff9800;
        }
    </style>
     <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navDrawer = document.querySelector('.nav-drawer');
            const navToggle = document.querySelector('.nav-toggle');

            navToggle.addEventListener('click', () => {
                navDrawer.classList.toggle('open');
            });
        });
    </script>
</head>
<body>
    <div class="nav-drawer">
        <button class="nav-toggle">&#9776;</button>
        <nav class="nav-content">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
    </div>
    <header>
        <h1>Sample Website</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    <main>
        <article>
            <h2>Welcome to Our Website</h2>
            <p>This is the main content of the website. We offer various services and products...</p>
        </article>
        <section>
            <h3>Latest News</h3>
            <p>Stay updated with our latest news and events.</p>
        </section>
        <section>
            <h3>Featured Products</h3>
            <p>Check out our selection of high-quality products.</p>
        </section>
        <aside>
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Customer Reviews</a></li>
                <li><a href="#">Special Offers</a></li>
            </ul>
        </aside>
        <div class="custom-div">
            <h3>Additional Information</h3>
            <p>This is an example of using the <code>&lt;div&gt;</code> element to group and style content.</p>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Sample Website. All rights reserved.</p>
    </footer>
</body>
</html> 
