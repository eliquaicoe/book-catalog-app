@extends('layouts.app')

@section('title', 'Book Catalog | Discover Your Next Story')

@section('content')
<style>
    .home-page {
        background: #f8f6f0;
        color: #24352d;
        line-height: 1.6;
        margin: -16px;
    }

    .home-page * {
        box-sizing: border-box;
    }

    .home-page .hero {
        padding: 100px 8%;
        text-align: center;
        background: #e7eee5;
    }

    .home-page .eyebrow {
        color: #58735e;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 0.8rem;
        font-weight: bold;
    }

    .home-page h1 {
        max-width: 800px;
        margin: 20px auto;
        font-size: clamp(2.4rem, 6vw, 4.5rem);
        line-height: 1.1;
    }

    .home-page .hero p:not(.eyebrow) {
        max-width: 600px;
        margin: 0 auto 30px;
        color: #526258;
        font-size: 1.1rem;
    }

    .home-page .button {
        display: inline-block;
        padding: 13px 25px;
        background: #285943;
        color: #ffffff;
        text-decoration: none;
        border-radius: 6px;
        font-weight: bold;
    }

    .home-page .button:hover {
        background: #1d4231;
    }

    .home-page .section {
        padding: 65px 8%;
    }

    .home-page .section h2 {
        margin-bottom: 12px;
        font-size: 2rem;
    }

    .home-page .section-intro {
        margin-bottom: 30px;
        color: #647067;
    }

    .home-page .features {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 22px;
    }

    .home-page .feature-card {
        padding: 28px;
        background: #ffffff;
        border: 1px solid #e5e5df;
        border-radius: 12px;
    }

    .home-page .feature-card .icon {
        font-size: 2rem;
        margin-bottom: 12px;
    }

    .home-page .feature-card h3 {
        margin-bottom: 8px;
    }

    .home-page .feature-card p,
    .home-page .about p {
        color: #647067;
    }

    .home-page .about {
        background: #ffffff;
        text-align: center;
    }

    .home-page .about p {
        max-width: 650px;
        margin: 12px auto 25px;
    }

    @media (max-width: 700px) {
        .home-page .hero {
            padding: 70px 6%;
        }

        .home-page .features {
            grid-template-columns: 1fr;
        }

        .home-page .section {
            padding: 45px 6%;
        }
    }
</style>

<div class="home-page">
    <section class="hero">
        <p class="eyebrow">Welcome to Book Catalog App</p>

        <h1>Every book opens a new world.</h1>

        <p>
            Discover fascinating stories, explore different genres,
            and find your next favourite book in our growing catalog.
        </p>

        <a class="button" href="{{ route('books.index') }}">
            Explore the Catalog
        </a>
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
                    Log in to share comments on books and
                    read what other readers think.
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

        <a class="button" href="{{ route('books.index') }}">
            Start Exploring
        </a>
    </section>
</div>
@endsection