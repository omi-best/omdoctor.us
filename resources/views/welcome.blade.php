@extends('layouts.app')

@section('title', 'OM Doctor | Personal Website')
@section('description', 'OM Doctor personal website with profile, services, thoughts, and contact details.')

@push('styles')
<style>
    .hero {
        padding: 90px 0 70px;
        background:
            radial-gradient(circle at top left, rgba(37, 99, 235, 0.12), transparent 34%),
            radial-gradient(circle at top right, rgba(6, 182, 212, 0.14), transparent 32%);
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 42px;
        align-items: center;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        border-radius: 999px;
        background: var(--soft);
        color: var(--primary);
        font-weight: 800;
        font-size: 13px;
        margin-bottom: 18px;
    }

    .hero h1 {
        margin: 0;
        font-size: clamp(42px, 6vw, 76px);
        line-height: 0.98;
        letter-spacing: -0.05em;
        color: var(--text);
    }

    .hero h1 span {
        color: var(--primary);
    }

    .hero p {
        margin: 22px 0 0;
        color: var(--muted);
        font-size: 18px;
        max-width: 620px;
    }

    .hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-top: 30px;
    }

    .profile-card {
        background: var(--card);
        border: 1px solid var(--border);
        border-radius: 34px;
        padding: 28px;
        box-shadow: var(--shadow);
    }

    .profile-photo {
        height: 330px;
        border-radius: 28px;
        background: linear-gradient(135deg, #dbeafe, #ecfeff);
        display: grid;
        place-items: center;
        color: var(--primary);
        font-size: 92px;
        font-weight: 900;
    }

    .profile-card h3 {
        margin: 22px 0 4px;
        font-size: 24px;
    }

    .profile-card p {
        margin: 0;
        color: var(--muted);
        font-weight: 700;
    }

    .cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
    }

    .card {
        background: var(--card);
        border: 1px solid var(--border);
        border-radius: 26px;
        padding: 24px;
        box-shadow: 0 12px 36px rgba(15, 23, 42, 0.05);
    }

    .card-icon {
        width: 52px;
        height: 52px;
        border-radius: 18px;
        display: grid;
        place-items: center;
        background: var(--soft);
        color: var(--primary);
        font-size: 24px;
        margin-bottom: 18px;
    }

    .card h3 {
        margin: 0 0 8px;
        font-size: 21px;
    }

    .card p {
        margin: 0;
        color: var(--muted);
    }

    .section-title {
        text-align: center;
        margin-bottom: 34px;
    }

    .section-title h2 {
        margin: 0;
        font-size: clamp(30px, 4vw, 46px);
        letter-spacing: -0.04em;
    }

    .section-title p {
        margin: 10px auto 0;
        max-width: 680px;
        color: var(--muted);
        font-size: 16px;
    }

    .about-box {
        background: var(--card);
        border: 1px solid var(--border);
        border-radius: 30px;
        padding: 34px;
        box-shadow: var(--shadow);
        color: var(--muted);
        font-size: 17px;
    }

    .contact-box {
        background: linear-gradient(135deg, var(--primary), #06b6d4);
        color: #ffffff;
        border-radius: 34px;
        padding: 42px;
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 24px;
        align-items: center;
        box-shadow: 0 24px 60px rgba(37, 99, 235, 0.24);
    }

    .contact-box h2 {
        margin: 0;
        font-size: 36px;
        letter-spacing: -0.04em;
    }

    .contact-box p {
        margin: 10px 0 0;
        opacity: 0.9;
    }

    .contact-box .btn {
        background: #ffffff;
        color: var(--primary);
    }

    @media (max-width: 900px) {
        .hero-grid,
        .contact-box {
            grid-template-columns: 1fr;
        }

        .cards {
            grid-template-columns: 1fr;
        }

        .profile-photo {
            height: 240px;
        }
    }
</style>
@endpush

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div>
            <div class="badge">Personal Website</div>

            <h1>
                Hello, I am <span>OM Doctor</span>
            </h1>

            <p>
                Welcome to my personal space where I share my profile, work, thoughts,
                services, and ways to connect.
            </p>

            <div class="hero-actions">
                <a href="#contact" class="btn btn-primary">Contact Me</a>
                <a href="#about" class="btn btn-outline">Know More</a>
            </div>
        </div>

        <div class="profile-card">
            <div class="profile-photo">OM</div>
            <h3>OM Doctor</h3>
            <p>Personal Profile • Services • Thoughts</p>
        </div>
    </div>
</section>

<section id="about" class="section">
    <div class="container">
        <div class="section-title">
            <h2>About Me</h2>
            <p>A simple introduction about my journey, values, and work.</p>
        </div>

        <div class="about-box">
            <p>
                I believe in meaningful work, clear communication, and building trust through
                consistent action. This website is created as my personal digital identity where
                visitors can learn more about me, my work, and the areas where I can help.
            </p>

            <p>
                You can update this section with your real biography, professional background,
                achievements, mission, and personal message.
            </p>
        </div>
    </div>
</section>

<section id="services" class="section">
    <div class="container">
        <div class="section-title">
            <h2>What I Do</h2>
            <p>Highlight your main services, professional areas, or expertise.</p>
        </div>

        <div class="cards">
            <div class="card">
                <div class="card-icon">✦</div>
                <h3>Consulting</h3>
                <p>Guidance, strategy, and support based on experience and practical understanding.</p>
            </div>

            <div class="card">
                <div class="card-icon">●</div>
                <h3>Personal Work</h3>
                <p>Projects, ideas, and initiatives that reflect my vision and values.</p>
            </div>

            <div class="card">
                <div class="card-icon">◆</div>
                <h3>Speaking</h3>
                <p>Sharing thoughts, learning, and inspiration with people and communities.</p>
            </div>
        </div>
    </div>
</section>

<section id="thoughts" class="section">
    <div class="container">
        <div class="section-title">
            <h2>Thoughts</h2>
            <p>Short reflections and messages can be shown here.</p>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Start with clarity</h3>
                <p>Good decisions begin with a clear mind and a focused direction.</p>
            </div>

            <div class="card">
                <h3>Consistency matters</h3>
                <p>Small actions repeated daily create meaningful long-term progress.</p>
            </div>

            <div class="card">
                <h3>Serve with purpose</h3>
                <p>True success grows when your work creates value for others.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section">
    <div class="container">
        <div class="contact-box">
            <div>
                <h2>Let’s Connect</h2>
                <p>
                    For appointments, collaboration, consultation, or general communication,
                    reach out anytime.
                </p>
            </div>

            <a href="mailto:info@omdoctor.com" class="btn">Email Me</a>
        </div>
    </div>
</section>
@endsection
