
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book Catalog | Discover Your Next Story</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f6f0;
            color: #24352d;
            line-height: 1.6;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 8%;
            background: #ffffff;
            border-bottom: 1px solid #e5e5df;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #285943;
        }

        nav {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
        }

        nav a {
            text-decoration: none;
            color: #24352d;
            font-weight: 600;
        }

        nav a:hover {
            color: #b36b35;
        }

        .hero {
            padding: 100px 8%;
            text-align: center;
            background: #e7eee5;
        }

        .eyebrow {
            color: #58735e;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        h1 {
            max-width: 800px;
            margin: 20px auto;
            font-size: clamp(2.4rem, 6vw, 4.5rem);
            line-height: 1.1;
        }

        .hero p {
            max-width: 600px;
            margin: 0 auto 30px;
            color: #526258;
            font-size: 1.1rem;
        }

        .button {
            display: inline-block;
            padding: 13px 25px;
            background: #285943;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .button:hover {
            background: #1d4231;
        }

        .section {
            padding: 65px 8%;
        }

        .section h2 {
            margin-bottom: 12px;
            font-size: 2rem;
        }

        .section-intro {
            margin-bottom: 30px;
            color: #647067;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .feature-card {
            padding: 28px;
            background: #ffffff;
            border: 1px solid #e5e5df;
            border-radius: 12px;
        }

        .feature-card .icon {
            font-size: 2rem;
            margin-bottom: 12px;
        }

        .feature-card h3 {
            margin-bottom: 8px;
        }

        .feature-card p {
            color: #647067;
        }

        .about {
            background: #ffffff;
            text-align: center;
        }

        .about p {
            max-width: 650px;
            margin: 12px auto 25px;
            color: #647067;
        }

        footer {
            padding: 25px 8%;
            text-align: center;
            background: #24352d;
            color: #ffffff;
        }

        @media (max-width: 700px) {
            header {
                align-items: flex-start;
                flex-direction: column;
                gap: 15px;
            }

            nav {
                gap: 15px;
            }

            .hero {
                padding: 70px 6%;
            }

            .features {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 45px 6%;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">Book Catalog App</div>

        <nav aria-label="Main navigation">
            <a href="/">Home</a>
            <a href="/books">Books</a>
            <a href="/genres">Genres</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <p class="eyebrow">Welcome to Book the Catalog App</p>

            <h1>Every book opens a new world.</h1>

            <p>
                Discover fascinating stories, explore different genres,
                and find your next favourite book in our growing catalog.
            </p>

            <a class="button" href="/books">Explore the Catalog</a>
        </section>

        <section class="section">
            <h2>Your next chapter starts here.</h2>

            <p class="section-intro">
                A simple place to discover and explore books.
            </p>

            <div class="features">
                <article class="feature-card">
                    <div class="icon" aria-hidden="true">📚</div>
                    <h3>Explore Books</h3>
                    <p>
                        Browse our catalog and discover books
                        that interest you.
                    </p>
                </article>

                <article class="feature-card">
                    <div class="icon" aria-hidden="true">🏷️</div>
                    <h3>Browse Genres</h3>
                    <p>
                        Explore categories and find stories
                        that match your mood.
                    </p>
                </article>

                <article class="feature-card">
                    <div class="icon" aria-hidden="true">💬</div>
                    <h3>Share Your Thoughts</h3>
                    <p>
                        Once logged in, readers will be able
                        to share comments on books.
                    </p>
                </article>
            </div>
        </section>

        <section class="section about">
            <h2>A library made for curious minds.</h2>

            <p>
                Book Catalog App is a catalog where readers can discover
                books, explore genres, and share their thoughts.
                Our goal is to make finding your next read simple.
            </p>

            <a class="button" href="/books">Start Exploring</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Book Catalog App — Your next story awaits.</p>
    </footer>
</body>
</html>
