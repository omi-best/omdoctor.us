<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Om Doctor | Computer Science Student & Author</title>

    <meta name="description"
        content="Portfolio of Om Doctor — a 16-year-old Computer Science enthusiast, Cambridge A Level student, multilingual learner, aspiring author, and problem-solver.">

    <meta name="keywords"
        content="Om Doctor, Computer Science Student, Cambridge A Levels, P vs NP, Student Author, Ahmedabad, Portfolio">

    <meta name="author" content="Om Doctor">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --primary: #7c8cff;
            --primary-dark: #6272f0;
            --secondary: #22c55e;
            --accent: #f59e0b;

            --dark: #f8fafc;
            --text: #dbe5f2;
            --muted: #94a3b8;

            --body-bg: #061426;
            --section-bg: #091b31;
            --section-bg-dark: #07172a;

            --card-bg: #102640;
            --card-bg-light: #142d4b;
            --card-hover: #183454;

            --white: #ffffff;
            --light: #0d223b;

            --border: rgba(148, 163, 184, 0.18);
            --border-hover: rgba(124, 140, 255, 0.5);

            --shadow:
                0 20px 55px rgba(0, 0, 0, 0.32);

            --shadow-hover:
                0 24px 65px rgba(0, 0, 0, 0.42);

            --radius: 24px;
        }

        /* ==============================
   Global
============================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Inter", sans-serif;
            color: var(--text);

            background:
                radial-gradient(circle at 5% 5%,
                    rgba(124, 140, 255, 0.15),
                    transparent 30%),
                radial-gradient(circle at 95% 75%,
                    rgba(14, 116, 144, 0.12),
                    transparent 32%),
                var(--body-bg);

            line-height: 1.7;
            overflow-x: hidden;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .container {
            width: min(1160px, calc(100% - 40px));
            margin: 0 auto;
        }

        .section {
            position: relative;
            padding: 100px 0;
        }

        .section-soft {
            background:
                linear-gradient(180deg,
                    rgba(10, 29, 51, 0.98),
                    rgba(8, 24, 43, 0.98));
        }

        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            margin-bottom: 14px;

            color: var(--primary);

            font-size: 13px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: 1.8px;
        }

        .section-title {
            max-width: 760px;
            margin-bottom: 20px;

            color: var(--dark);

            font-family: "Playfair Display", serif;

            font-size: clamp(38px, 5vw, 60px);
            line-height: 1.08;
        }

        .section-description {
            max-width: 760px;
            margin-bottom: 48px;

            color: var(--muted);

            font-size: 18px;
        }

        /* ==============================
   Navigation
============================== */

        .navbar {
            position: fixed;

            top: 0;
            left: 0;

            z-index: 1000;

            width: 100%;

            background:
                rgba(6, 20, 38, 0.88);

            border-bottom:
                1px solid var(--border);

            box-shadow:
                0 8px 35px rgba(0, 0, 0, 0.2);

            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .nav-inner {
            min-height: 76px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 30px;
        }

        .brand {
            display: flex;
            align-items: center;

            gap: 12px;

            color: var(--dark);

            font-size: 21px;
            font-weight: 800;
        }

        .brand-icon {
            width: 44px;
            height: 44px;

            display: grid;
            place-items: center;

            color: var(--white);

            background:
                linear-gradient(135deg,
                    #6677f5,
                    #8b5cf6);

            border:
                1px solid rgba(255, 255, 255, 0.12);

            border-radius: 14px;

            box-shadow:
                0 10px 28px rgba(91, 77, 247, 0.3);
        }

        .nav-links {
            display: flex;
            align-items: center;

            gap: 28px;

            list-style: none;
        }

        .nav-links a {
            position: relative;

            color: var(--text);

            font-size: 14px;
            font-weight: 600;

            transition: 0.25s ease;
        }

        .nav-links a::after {
            content: "";

            position: absolute;

            right: 0;
            bottom: -8px;
            left: 0;

            height: 2px;

            background: var(--primary);

            border-radius: 10px;

            transform: scaleX(0);

            transition: 0.25s ease;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a:hover::after {
            transform: scaleX(1);
        }

        .menu-button {
            display: none;

            width: 44px;
            height: 44px;

            color: var(--dark);

            background: var(--card-bg);

            border:
                1px solid var(--border);

            border-radius: 12px;

            font-size: 20px;

            cursor: pointer;
        }

        /* ==============================
   Hero
============================== */

        .hero {
            position: relative;

            min-height: 100vh;

            display: flex;
            align-items: center;

            padding: 140px 0 90px;

            overflow: hidden;

            background:
                radial-gradient(circle at 12% 20%,
                    rgba(124, 140, 255, 0.2),
                    transparent 30%),
                radial-gradient(circle at 85% 35%,
                    rgba(16, 185, 129, 0.11),
                    transparent 28%),
                linear-gradient(145deg,
                    #061426 0%,
                    #0a1d35 52%,
                    #0d294b 100%);
        }

        .hero::before {
            content: "";

            position: absolute;

            top: 18%;
            left: -170px;

            width: 420px;
            height: 420px;

            background:
                rgba(124, 140, 255, 0.08);

            border-radius: 50%;

            filter: blur(30px);
        }

        .hero::after {
            content: "";

            position: absolute;

            right: -130px;
            bottom: -180px;

            width: 480px;
            height: 480px;

            background:
                rgba(14, 116, 144, 0.1);

            border-radius: 50%;

            filter: blur(35px);
        }

        .hero .container {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            color: var(--dark);

            font-family: "Playfair Display", serif;

            font-size: clamp(48px, 7vw, 84px);
            line-height: 1.02;

            letter-spacing: -2px;
        }

        .hero-text {
            max-width: 720px;

            margin: 28px 0 34px;

            color: #a8b7ca;

            font-size: 19px;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;

            gap: 14px;

            margin-bottom: 38px;
        }

        /* ==============================
   Buttons
============================== */

        .btn {
            min-height: 52px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            gap: 10px;

            padding: 0 24px;

            border-radius: 14px;

            font-weight: 700;

            transition:
                transform 0.25s ease,
                border-color 0.25s ease,
                background 0.25s ease,
                box-shadow 0.25s ease;
        }

        .btn-primary {
            color: var(--white);

            background:
                linear-gradient(135deg,
                    #6677f5,
                    #7c3aed);

            border:
                1px solid rgba(255, 255, 255, 0.08);

            box-shadow:
                0 14px 35px rgba(91, 77, 247, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);

            box-shadow:
                0 19px 45px rgba(91, 77, 247, 0.42);
        }

        .btn-outline {
            color: var(--dark);

            background:
                rgba(16, 38, 64, 0.88);

            border:
                1px solid var(--border);

            backdrop-filter: blur(12px);
        }

        .btn-outline:hover {
            color: var(--primary);

            background:
                var(--card-bg-light);

            border-color:
                var(--primary);

            transform:
                translateY(-3px);
        }

        /* ==============================
   Hero Meta
============================== */

        .hero-meta {
            display: flex;
            flex-wrap: wrap;

            gap: 22px;
        }

        .hero-meta-item {
            display: flex;
            align-items: center;

            gap: 10px;

            color: var(--text);

            font-size: 14px;
            font-weight: 600;
        }

        .hero-meta-item i {
            color: var(--primary);
        }

        /* ==============================
   Profile
============================== */

        .profile-card {
            position: relative;

            padding: 20px;

            background:
                linear-gradient(145deg,
                    rgba(20, 45, 75, 0.94),
                    rgba(11, 31, 54, 0.94));

            border:
                1px solid var(--border);

            border-radius: 32px;

            box-shadow: var(--shadow);

            backdrop-filter: blur(18px);
        }

        .profile-visual {
            position: relative;

            min-height: 430px;

            display: flex;
            flex-direction: column;
            justify-content: flex-end;

            padding: 34px;

            color: var(--white);

            background:
                linear-gradient(160deg,
                    rgba(7, 20, 38, 0.05),
                    rgba(6, 20, 38, 0.88)),
                linear-gradient(135deg,
                    #4558d8,
                    #6635bb 48%,
                    #087f68);

            border:
                1px solid rgba(255, 255, 255, 0.1);

            border-radius: 26px;

            overflow: hidden;
        }

        .profile-visual::before {
            content: "</>";

            position: absolute;

            top: 36px;
            right: 28px;

            color:
                rgba(255, 255, 255, 0.13);

            font-family: monospace;

            font-size: 110px;
            font-weight: 800;
        }

        .profile-initial {
            width: 105px;
            height: 105px;

            display: grid;
            place-items: center;

            margin-bottom: auto;

            color: var(--primary);

            background: #f8fafc;

            border-radius: 30px;

            font-family:
                "Playfair Display",
                serif;

            font-size: 52px;
            font-weight: 800;

            box-shadow:
                0 20px 45px rgba(0, 0, 0, 0.28);
        }

        .profile-visual h2 {
            position: relative;

            z-index: 1;

            margin-bottom: 4px;

            color: var(--white);

            font-size: 34px;
        }

        .profile-visual p {
            position: relative;

            z-index: 1;

            color:
                rgba(255, 255, 255, 0.8);
        }

        .floating-card {
            position: absolute;

            display: flex;
            align-items: center;

            gap: 12px;

            padding: 15px 17px;

            background:
                rgba(16, 38, 64, 0.96);

            border:
                1px solid var(--border);

            border-radius: 16px;

            box-shadow:
                0 16px 40px rgba(0, 0, 0, 0.34);

            backdrop-filter: blur(16px);
        }

        .floating-card i {
            color: var(--primary);

            font-size: 22px;
        }

        .floating-card strong {
            display: block;

            color: var(--dark);

            font-size: 14px;
        }

        .floating-card small {
            color: var(--muted);
        }

        .floating-one {
            top: 80px;
            left: -42px;
        }

        .floating-two {
            right: -38px;
            bottom: 65px;
        }

        /* ==============================
   Shared Cards
============================== */

        .highlight-card,
        .info-card,
        .language-card,
        .strength-card,
        .experience-card,
        .timeline-card,
        .stat-box {
            background:
                linear-gradient(145deg,
                    var(--card-bg-light),
                    var(--card-bg));

            border:
                1px solid var(--border);

            box-shadow:
                0 16px 42px rgba(0, 0, 0, 0.2);
        }

        /* ==============================
   Highlights
============================== */

        .highlights-grid {
            position: relative;

            z-index: 3;

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;

            margin-top: -45px;
        }

        .highlight-card {
            padding: 27px;

            border-radius: 20px;

            transition:
                transform 0.25s ease,
                border-color 0.25s ease,
                box-shadow 0.25s ease;
        }

        .highlight-card:hover {
            border-color:
                var(--border-hover);

            transform:
                translateY(-6px);

            box-shadow:
                var(--shadow-hover);
        }

        .icon-box {
            width: 52px;
            height: 52px;

            display: grid;
            place-items: center;

            margin-bottom: 18px;

            color: #a6b0ff;

            background:
                rgba(124, 140, 255, 0.13);

            border:
                1px solid rgba(124, 140, 255, 0.18);

            border-radius: 15px;

            font-size: 22px;
        }

        .highlight-card h3 {
            margin-bottom: 8px;

            color: var(--dark);

            font-size: 18px;
        }

        .highlight-card p {
            color: var(--muted);

            font-size: 14px;
        }

        /* ==============================
   About
============================== */

        .about-grid {
            display: grid;

            grid-template-columns:
                0.85fr 1.15fr;

            gap: 70px;

            align-items: center;
        }

        .about-panel {
            position: relative;

            padding: 42px;

            color: var(--white);

            background:
                radial-gradient(circle at top right,
                    rgba(124, 140, 255, 0.2),
                    transparent 34%),
                linear-gradient(145deg,
                    #10243f,
                    #272762);

            border:
                1px solid rgba(124, 140, 255, 0.18);

            border-radius: 30px;

            box-shadow: var(--shadow);
        }

        .about-panel i {
            margin-bottom: 30px;

            color:
                rgba(255, 255, 255, 0.22);

            font-size: 58px;
        }

        .about-panel blockquote {
            font-family:
                "Playfair Display",
                serif;

            font-size: 28px;

            line-height: 1.4;
        }

        .about-panel footer {
            margin-top: 24px;

            padding: 0;

            color:
                rgba(255, 255, 255, 0.7);

            background: transparent;

            border: 0;

            text-align: left;

            font-size: 14px;
        }

        .about-copy p {
            margin-bottom: 20px;

            color: var(--muted);

            font-size: 17px;
        }

        .about-stats {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 16px;

            margin-top: 30px;
        }

        .stat-box {
            padding: 20px;

            border-radius: 16px;

            text-align: center;
        }

        .stat-box strong {
            display: block;

            margin-bottom: 4px;

            color: var(--primary);

            font-size: 27px;
        }

        .stat-box span {
            color: var(--muted);

            font-size: 13px;
            font-weight: 600;
        }

        /* ==============================
   Timeline
============================== */

        .timeline {
            position: relative;

            max-width: 880px;
        }

        .timeline::before {
            content: "";

            position: absolute;

            top: 8px;
            bottom: 8px;
            left: 21px;

            width: 2px;

            background:
                rgba(124, 140, 255, 0.24);
        }

        .timeline-item {
            position: relative;

            display: grid;

            grid-template-columns:
                44px 1fr;

            gap: 26px;

            padding-bottom: 34px;
        }

        .timeline-dot {
            position: relative;

            z-index: 1;

            width: 44px;
            height: 44px;

            display: grid;
            place-items: center;

            color: var(--white);

            background:
                linear-gradient(135deg,
                    var(--primary),
                    #7c3aed);

            border:
                6px solid var(--section-bg);

            border-radius: 50%;

            box-shadow:
                0 0 0 1px rgba(124, 140, 255, 0.22);
        }

        .timeline-card {
            padding: 26px;

            border-radius: 18px;

            transition:
                transform 0.25s ease,
                border-color 0.25s ease;
        }

        .timeline-card:hover {
            border-color:
                var(--border-hover);

            transform:
                translateX(5px);
        }

        .timeline-date {
            display: inline-block;

            margin-bottom: 8px;

            color: var(--primary);

            font-size: 13px;
            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;
        }

        .timeline-card h3 {
            margin-bottom: 5px;

            color: var(--dark);

            font-size: 20px;
        }

        .timeline-card h4 {
            margin-bottom: 8px;

            color: #a9b7ca;

            font-size: 14px;
            font-weight: 600;
        }

        .timeline-card p {
            color: var(--muted);

            font-size: 15px;
        }

        /* ==============================
   Information Cards
============================== */

        .cards-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 22px;
        }

        .info-card {
            padding: 30px;

            border-radius: 22px;

            transition:
                transform 0.25s ease,
                border-color 0.25s ease,
                box-shadow 0.25s ease;
        }

        .info-card:hover {
            border-color:
                var(--border-hover);

            transform:
                translateY(-7px);

            box-shadow:
                var(--shadow-hover);
        }

        .info-card h3 {
            margin-bottom: 12px;

            color: var(--dark);

            font-size: 20px;
        }

        .info-card p {
            color: var(--muted);

            font-size: 15px;
        }

        /* ==============================
   Languages
============================== */

        .language-grid {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;
        }

        .language-card {
            padding: 25px;

            border-radius: 18px;

            transition:
                transform 0.25s ease,
                border-color 0.25s ease;
        }

        .language-card:hover {
            border-color:
                var(--border-hover);

            transform:
                translateY(-5px);
        }

        .language-top {
            display: flex;
            align-items: center;
            justify-content:
                space-between;

            gap: 16px;

            margin-bottom: 14px;
        }

        .language-card h3 {
            color: var(--dark);

            font-size: 18px;
        }

        .language-card i {
            color: var(--primary);
        }

        .language-bar {
            height: 8px;

            background:
                rgba(148, 163, 184, 0.16);

            border-radius: 999px;

            overflow: hidden;
        }

        .language-progress {
            height: 100%;

            background:
                linear-gradient(90deg,
                    var(--primary),
                    #9b6cf4);

            border-radius: inherit;

            box-shadow:
                0 0 15px rgba(124, 140, 255, 0.35);
        }

        .language-card p {
            margin-top: 10px;

            color: var(--muted);

            font-size: 13px;
        }

        /* ==============================
   Experience
============================== */

        .experience-grid {
            display: grid;

            grid-template-columns:
                0.9fr 1.1fr;

            gap: 40px;
        }

        .experience-card {
            padding: 38px;

            border-radius: 26px;
        }

        .experience-card h3 {
            margin-bottom: 10px;

            color: var(--dark);

            font-size: 27px;
        }

        .experience-card>p {
            margin-bottom: 24px;

            color: var(--muted);
        }

        .feature-list {
            display: grid;

            gap: 14px;

            list-style: none;
        }

        .feature-list li {
            display: flex;
            align-items: flex-start;

            gap: 12px;

            color: var(--text);
        }

        .feature-list i {
            margin-top: 5px;

            color: var(--secondary);
        }

        .takeaway-card {
            position: relative;

            padding: 38px;

            color: var(--white);

            background:
                radial-gradient(circle at top right,
                    rgba(255, 255, 255, 0.14),
                    transparent 32%),
                linear-gradient(145deg,
                    #5366e6,
                    #622bb0);

            border:
                1px solid rgba(255, 255, 255, 0.1);

            border-radius: 26px;

            box-shadow:
                0 20px 48px rgba(55, 38, 150, 0.32);

            overflow: hidden;
        }

        .takeaway-card h3 {
            margin-bottom: 18px;

            font-size: 28px;
        }

        .takeaway-card p {
            margin-bottom: 17px;

            color:
                rgba(255, 255, 255, 0.84);
        }

        /* ==============================
   Strengths
============================== */

        .strengths-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;
        }

        .strength-card {
            padding: 28px;

            border-radius: 20px;

            transition:
                transform 0.25s ease,
                border-color 0.25s ease;
        }

        .strength-card:hover {
            border-color:
                var(--border-hover);

            transform:
                translateY(-6px);
        }

        .strength-card h3 {
            margin: 16px 0 8px;

            color: var(--dark);

            font-size: 18px;
        }

        .strength-card p {
            color: var(--muted);

            font-size: 14px;
        }

        /* ==============================
   Contact
============================== */

        .contact-wrapper {
            position: relative;

            padding: 70px;

            color: var(--white);

            background:
                radial-gradient(circle at top right,
                    rgba(124, 140, 255, 0.2),
                    transparent 30%),
                radial-gradient(circle at bottom left,
                    rgba(14, 116, 144, 0.15),
                    transparent 34%),
                linear-gradient(135deg,
                    #0c2038,
                    #24265e);

            border:
                1px solid rgba(124, 140, 255, 0.2);

            border-radius: 34px;

            box-shadow:
                var(--shadow);

            overflow: hidden;
        }

        .contact-wrapper h2 {
            max-width: 760px;

            margin-bottom: 18px;

            color: var(--white);

            font-family:
                "Playfair Display",
                serif;

            font-size:
                clamp(38px, 5vw, 60px);

            line-height: 1.08;
        }

        .contact-wrapper>p {
            max-width: 760px;

            color:
                rgba(255, 255, 255, 0.7);

            font-size: 18px;
        }

        .contact-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;

            margin-top: 38px;
        }

        .contact-item {
            display: flex;
            align-items: center;

            gap: 15px;

            padding: 20px;

            background:
                rgba(255, 255, 255, 0.07);

            border:
                1px solid rgba(255, 255, 255, 0.13);

            border-radius: 17px;

            backdrop-filter: blur(10px);

            transition:
                transform 0.25s ease,
                background 0.25s ease,
                border-color 0.25s ease;
        }

        .contact-item:hover {
            background:
                rgba(255, 255, 255, 0.12);

            border-color:
                rgba(255, 255, 255, 0.24);

            transform:
                translateY(-4px);
        }

        .contact-item i {
            color: #aeb7ff;

            font-size: 22px;
        }

        .contact-item small {
            display: block;

            color:
                rgba(255, 255, 255, 0.55);
        }

        .contact-item strong {
            color: var(--white);

            font-size: 14px;

            word-break: break-word;
        }

        /* ==============================
   Final Quote
============================== */

        .final-quote {
            max-width: 900px;

            margin: 70px auto 0;

            text-align: center;
        }

        .final-quote i {
            margin-bottom: 24px;

            color: var(--primary);

            font-size: 42px;
        }

        .final-quote blockquote {
            color: var(--dark);

            font-family:
                "Playfair Display",
                serif;

            font-size:
                clamp(27px, 4vw, 42px);

            line-height: 1.35;
        }

        .final-quote p {
            margin-top: 20px;

            color: var(--muted);

            font-weight: 700;
        }

        /* ==============================
   Footer
============================== */

        body>footer {
            padding: 34px 0;

            color: var(--muted);

            background:
                #05111f;

            border-top:
                1px solid var(--border);

            text-align: center;

            font-size: 14px;
        }

        /* ==============================
   Selection and Scrollbar
============================== */

        ::selection {
            color: var(--white);

            background:
                rgba(124, 140, 255, 0.7);
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #061426;
        }

        ::-webkit-scrollbar-thumb {
            background: #294563;

            border:
                2px solid #061426;

            border-radius: 20px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #3b5a7c;
        }

        /* ==============================
   Responsive
============================== */

        @media (max-width: 1024px) {

            .hero-grid,
            .about-grid,
            .experience-grid {
                grid-template-columns: 1fr;
            }

            .profile-card {
                max-width: 620px;
            }

            .highlights-grid,
            .cards-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .language-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 820px) {

            .menu-button {
                display: grid;

                place-items: center;
            }

            .nav-links {
                position: absolute;

                top: 76px;
                right: 20px;
                left: 20px;

                display: none;

                flex-direction: column;
                align-items: stretch;

                gap: 0;

                padding: 14px;

                background:
                    rgba(12, 31, 54, 0.98);

                border:
                    1px solid var(--border);

                border-radius: 18px;

                box-shadow:
                    var(--shadow);

                backdrop-filter:
                    blur(20px);
            }

            .nav-links.show {
                display: flex;
            }

            .nav-links li a {
                display: block;

                padding: 13px 12px;

                border-radius: 10px;
            }

            .nav-links li a:hover {
                background:
                    rgba(124, 140, 255, 0.09);
            }

            .hero {
                padding-top: 125px;
            }

            .floating-card {
                display: none;
            }

            .strengths-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .contact-wrapper {
                padding: 45px 28px;
            }
        }

        @media (max-width: 640px) {

            .container {
                width:
                    min(100% - 28px,
                        1160px);
            }

            .section {
                padding: 76px 0;
            }

            .hero h1 {
                letter-spacing: -1px;
            }

            .hero-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .profile-card {
                padding: 12px;
            }

            .profile-visual {
                min-height: 390px;

                padding: 25px;
            }

            .highlights-grid,
            .cards-grid,
            .language-grid,
            .strengths-grid,
            .about-stats {
                grid-template-columns: 1fr;
            }

            .about-panel,
            .experience-card,
            .takeaway-card {
                padding: 28px;
            }

            .timeline-item {
                gap: 16px;
            }

            .timeline-card {
                padding: 21px;
            }

            .contact-wrapper {
                border-radius: 25px;
            }
        }

        /* =========================================================
   CLEAN HERO LAYOUT OVERRIDE
========================================================= */

        .hero {
            min-height: auto;
            padding: 145px 0 110px;
        }

        .hero-grid {
            position: relative;
            z-index: 2;

            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(420px, 520px);
            align-items: center;

            gap: 70px;
        }

        .hero-content {
            max-width: 650px;
        }

        .hero h1 {
            margin: 0 0 24px;

            color: #f8fafc;

            font-size: clamp(52px, 6vw, 78px);
            line-height: 1.02;

            letter-spacing: -2.5px;
        }

        .hero-text {
            max-width: 610px;

            margin: 0 0 30px;

            color: #aebccd;

            font-size: 18px;
            line-height: 1.75;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;

            gap: 14px;

            margin: 0 0 30px;
        }

        .hero-meta {
            display: flex;
            align-items: center;
            flex-wrap: wrap;

            gap: 12px 24px;
        }

        .hero-meta-item {
            color: #c4cfdd;

            font-size: 14px;
        }

        .hero-meta-item i {
            color: #8795ff;
        }

        /* =========================================================
   BUTTONS
========================================================= */

        .btn {
            min-height: 52px;

            padding: 0 24px;

            border-radius: 13px;

            font-size: 15px;
            font-weight: 700;
        }

        .btn-primary {
            background: linear-gradient(135deg,
                    #6676ee,
                    #7c3aed);

            border: 1px solid rgba(255, 255, 255, 0.1);

            box-shadow:
                0 12px 30px rgba(99, 72, 220, 0.28);
        }

        .btn-outline {
            color: #e5edf7;

            background: rgba(17, 40, 67, 0.75);

            border: 1px solid rgba(148, 163, 184, 0.22);

            box-shadow: none;
        }

        .btn-outline:hover {
            color: #ffffff;

            background: #173252;

            border-color: rgba(124, 140, 255, 0.55);
        }

        /* =========================================================
   PROFILE CARD
========================================================= */

        .profile-card {
            position: relative;

            width: 100%;
            max-width: 520px;

            justify-self: end;

            padding: 14px;

            background: rgba(13, 35, 59, 0.82);

            border: 1px solid rgba(124, 140, 255, 0.2);

            border-radius: 28px;

            box-shadow:
                0 30px 70px rgba(0, 0, 0, 0.3);

            backdrop-filter: blur(18px);
        }

        .profile-visual {
            min-height: 470px;

            padding: 30px;

            background:
                linear-gradient(155deg,
                    rgba(78, 80, 209, 0.92) 0%,
                    rgba(70, 43, 139, 0.88) 45%,
                    rgba(8, 48, 63, 0.94) 100%);

            border: 1px solid rgba(255, 255, 255, 0.09);

            border-radius: 22px;
        }

        .profile-visual::before {
            top: 52px;
            right: 30px;

            font-size: 86px;

            opacity: 0.55;
        }

        .profile-initial {
            width: 90px;
            height: 90px;

            margin-bottom: auto;

            border-radius: 25px;

            font-size: 46px;

            box-shadow:
                0 18px 42px rgba(0, 0, 0, 0.24);
        }

        .profile-visual h2 {
            margin: 0 0 6px;

            font-size: 31px;
            line-height: 1.2;
        }

        .profile-visual p {
            margin: 0;

            color: rgba(255, 255, 255, 0.76);

            font-size: 15px;
        }

        /* =========================================================
   FLOATING INFORMATION CARDS
========================================================= */

        .floating-card {
            z-index: 4;

            min-width: 210px;

            padding: 14px 16px;

            background: rgba(15, 39, 66, 0.97);

            border: 1px solid rgba(124, 140, 255, 0.22);

            border-radius: 15px;

            box-shadow:
                0 16px 40px rgba(0, 0, 0, 0.3);
        }

        .floating-card i {
            color: #8795ff;

            font-size: 20px;
        }

        .floating-card strong {
            color: #f8fafc;

            font-size: 13px;
        }

        .floating-card small {
            color: #94a3b8;

            font-size: 12px;
        }

        .floating-one {
            top: 80px;
            left: -45px;
        }

        .floating-two {
            right: -35px;
            bottom: 55px;
        }

        /* =========================================================
   HIGHLIGHT CARDS
========================================================= */

        .highlights-grid {
            margin-top: -48px;
        }

        .highlight-card {
            min-height: 190px;

            padding: 26px;

            background:
                linear-gradient(145deg,
                    #132c49,
                    #10243d);

            border: 1px solid rgba(148, 163, 184, 0.15);

            border-radius: 20px;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.18);
        }

        .highlight-card:hover {
            border-color: rgba(124, 140, 255, 0.42);

            transform: translateY(-5px);
        }

        .highlight-card h3 {
            color: #f1f5f9;
        }

        .highlight-card p {
            color: #94a3b8;
        }

        /* =========================================================
   NAVIGATION CLEANUP
========================================================= */

        .navbar {
            background: rgba(5, 20, 36, 0.94);

            box-shadow:
                0 10px 35px rgba(0, 0, 0, 0.18);
        }

        .nav-inner {
            min-height: 76px;
        }

        .nav-links {
            gap: 30px;
        }

        .nav-links a {
            color: #cbd5e1;
        }

        .nav-links a:hover {
            color: #ffffff;
        }

        /* =========================================================
   TABLET
========================================================= */

        @media (max-width: 1100px) {
            .hero-grid {
                grid-template-columns: minmax(0, 1fr) minmax(380px, 460px);

                gap: 45px;
            }

            .floating-one {
                left: -20px;
            }

            .floating-two {
                right: -20px;
            }
        }

        /* =========================================================
   MOBILE AND TABLET STACK
========================================================= */

        @media (max-width: 900px) {
            .hero {
                padding: 125px 0 95px;
            }

            .hero-grid {
                grid-template-columns: 1fr;

                gap: 55px;
            }

            .hero-content {
                max-width: 720px;
            }

            .profile-card {
                max-width: 620px;

                justify-self: start;
            }

            .profile-visual {
                min-height: 430px;
            }

            .floating-card {
                display: none;
            }

            .highlights-grid {
                margin-top: -30px;
            }
        }

        /* =========================================================
   SMALL MOBILE
========================================================= */

        @media (max-width: 640px) {
            .hero {
                padding: 112px 0 80px;
            }

            .hero h1 {
                font-size: clamp(43px, 13vw, 58px);

                letter-spacing: -1.5px;
            }

            .hero-text {
                font-size: 16px;
            }

            .hero-actions {
                align-items: stretch;
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .hero-meta {
                align-items: flex-start;
                flex-direction: column;

                gap: 12px;
            }

            .profile-card {
                padding: 10px;

                border-radius: 22px;
            }

            .profile-visual {
                min-height: 380px;

                padding: 24px;

                border-radius: 17px;
            }

            .profile-initial {
                width: 78px;
                height: 78px;

                border-radius: 21px;

                font-size: 40px;
            }

            .profile-visual h2 {
                font-size: 27px;
            }

            .profile-visual::before {
                top: 45px;
                right: 18px;

                font-size: 62px;
            }

            .highlights-grid {
                margin-top: 0;
            }
        }
    </style>

</head>

<body>

    <nav class="navbar">
        <div class="container nav-inner">

            <a href="#home" class="brand">
                <span class="brand-icon">
                    <i class="fa-solid fa-code"></i>
                </span>

                <span>Om Doctor</span>
            </a>

            <button class="menu-button" id="menuButton" type="button" aria-label="Open navigation menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <ul class="nav-links" id="navLinks">
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Connect</a></li>
            </ul>

        </div>
    </nav>

    <main>

        <section class="hero" id="home">
            <div class="container hero-grid">

                <div>
                    <div class="hero-badge">
                        <i class="fa-solid fa-sparkles"></i>
                        Student • Author • Problem Solver
                    </div>

                    <h1>
                        Making complex ideas
                        <span>easier to understand.</span>
                    </h1>

                    <p class="hero-text">
                        I am a 16-year-old Computer Science enthusiast,
                        multilingual learner, Cambridge A Level student,
                        and aspiring problem-solver. I am currently writing
                        a book that makes advanced Computer Science concepts
                        accessible to students worldwide.
                    </p>

                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary">
                            <i class="fa-solid fa-paper-plane"></i>
                            Let’s Connect
                        </a>

                        <a href="#projects" class="btn btn-outline">
                            <i class="fa-solid fa-folder-open"></i>
                            Explore My Work
                        </a>
                    </div>

                    <div class="hero-meta">
                        <div class="hero-meta-item">
                            <i class="fa-solid fa-graduation-cap"></i>
                            Cambridge A Levels
                        </div>

                        <div class="hero-meta-item">
                            <i class="fa-solid fa-language"></i>
                            Four Languages
                        </div>

                        <div class="hero-meta-item">
                            <i class="fa-solid fa-book-open"></i>
                            Student Author
                        </div>
                    </div>
                </div>

                <div class="profile-card">

                    <div class="floating-card floating-one">
                        <i class="fa-solid fa-award"></i>

                        <div>
                            <strong>Academic Excellence</strong>
                            <small>1 A* and 4 As</small>
                        </div>
                    </div>

                    <div class="profile-visual">
                        <div class="profile-initial">O</div>

                        <h2>Om Doctor</h2>

                        <p>
                            Computer Science Student & Aspiring Author
                        </p>
                    </div>

                    <div class="floating-card floating-two">
                        <i class="fa-solid fa-globe"></i>

                        <div>
                            <strong>Multilingual</strong>
                            <small>English, Hindi, Gujarati & French</small>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section>
            <div class="container highlights-grid">

                <article class="highlight-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>

                    <h3>Computer Science</h3>

                    <p>
                        Passionate about algorithms, theory, and making
                        difficult CS concepts approachable.
                    </p>
                </article>

                <article class="highlight-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-medal"></i>
                    </div>

                    <h3>Academic Excellence</h3>

                    <p>
                        Strong results across seven Cambridge IGCSE subjects,
                        including one A* and four As.
                    </p>
                </article>

                <article class="highlight-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-language"></i>
                    </div>

                    <h3>Multilingual</h3>

                    <p>
                        Fluent in English, Hindi, and Gujarati, with
                        intermediate French proficiency at CEFR B1.
                    </p>
                </article>

                <article class="highlight-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>

                    <h3>Problem Solver</h3>

                    <p>
                        Curious, adaptable, and motivated by challenges
                        involving logic, creativity, and communication.
                    </p>
                </article>

            </div>
        </section>

        <section class="section" id="about">
            <div class="container about-grid">

                <div class="about-panel">
                    <i class="fa-solid fa-quote-left"></i>

                    <blockquote>
                        Curiosity is not only about finding answers. It is
                        about learning how to ask better questions.
                    </blockquote>

                    <footer>— Om Doctor</footer>
                </div>

                <div class="about-copy">
                    <span class="section-label">
                        <i class="fa-solid fa-user"></i>
                        About Me
                    </span>

                    <h2 class="section-title">
                        Driven by curiosity and a genuine passion for learning.
                    </h2>

                    <p>
                        I thrive at the intersection of technology, language,
                        and creative problem-solving. My goal is to gain
                        meaningful real-world experience while continuing to
                        develop academically and personally.
                    </p>

                    <p>
                        During Grade 10, I completed an internship at
                        Niro by Nini’s. This experience introduced me to
                        restaurant operations, customer service, teamwork,
                        hygiene standards, punctuality, and professional
                        responsibility.
                    </p>

                    <div class="about-stats">
                        <div class="stat-box">
                            <strong>16</strong>
                            <span>Years Old</span>
                        </div>

                        <div class="stat-box">
                            <strong>4</strong>
                            <span>Languages</span>
                        </div>

                        <div class="stat-box">
                            <strong>7</strong>
                            <span>IGCSE Subjects</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section section-soft" id="education">
            <div class="container">

                <span class="section-label">
                    <i class="fa-solid fa-graduation-cap"></i>
                    Academic Journey
                </span>

                <h2 class="section-title">
                    An internationally focused path in STEM and languages.
                </h2>

                <p class="section-description">
                    My academic journey reflects a commitment to rigorous
                    curricula, independent learning, and long-term growth in
                    Computer Science, Mathematics, Physics, and languages.
                </p>

                <div class="timeline">

                    <div class="timeline-item">
                        <div class="timeline-dot">
                            <i class="fa-solid fa-school"></i>
                        </div>

                        <article class="timeline-card">
                            <span class="timeline-date">2022 – 2024</span>

                            <h3>Cambridge IGCSEs</h3>

                            <h4>Gems Genesis International School</h4>

                            <p>
                                Completed seven Cambridge IGCSE subjects,
                                achieving one A* and four As.
                            </p>
                        </article>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-dot">
                            <i class="fa-solid fa-language"></i>
                        </div>

                        <article class="timeline-card">
                            <span class="timeline-date">2023 – 2024</span>

                            <h3>Accelerated French Course</h3>

                            <h4>Alliance Française d’Ahmedabad</h4>

                            <p>
                                Completed structured French study up to
                                CEFR B1 intermediate proficiency.
                            </p>
                        </article>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-dot">
                            <i class="fa-solid fa-atom"></i>
                        </div>

                        <article class="timeline-card">
                            <span class="timeline-date">2023 – 2026</span>

                            <h3>Cambridge A Levels</h3>

                            <h4>Private Candidate</h4>

                            <p>
                                Studying Further Mathematics, Computer Science,
                                and Physics through homeschooling and
                                independent preparation.
                            </p>
                        </article>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-dot">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <article class="timeline-card">
                            <span class="timeline-date">In Progress</span>

                            <h3>CS50 by Harvard</h3>

                            <h4>Computer Science Foundation Course</h4>

                            <p>
                                Building stronger foundations in programming,
                                algorithms, computational thinking, and
                                problem-solving.
                            </p>
                        </article>
                    </div>

                </div>

            </div>
        </section>

        <section class="section" id="skills">
            <div class="container">

                <span class="section-label">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    Software & Technical Skills
                </span>

                <h2 class="section-title">
                    A growing toolkit for learning, designing, researching,
                    and building.
                </h2>

                <p class="section-description">
                    Beyond formal coursework, I develop practical skills
                    through self-directed learning, creative work, and
                    real-world projects.
                </p>

                <div class="cards-grid">

                    <article class="info-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-palette"></i>
                        </div>

                        <h3>Canva</h3>

                        <p>
                            Creating posters, banners, presentations, and
                            visual materials for academic projects and
                            book-launch activities.
                        </p>
                    </article>

                    <article class="info-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-robot"></i>
                        </div>

                        <h3>AI Tools</h3>

                        <p>
                            Practical experience using AI tools for research,
                            content development, idea generation, and
                            problem-solving workflows.
                        </p>
                    </article>

                    <article class="info-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-terminal"></i>
                        </div>

                        <h3>Basic Coding</h3>

                        <p>
                            Foundational programming skills developed through
                            structured coursework, CS50, and independent
                            exploration.
                        </p>
                    </article>

                </div>

            </div>
        </section>

        <section class="section section-soft">
            <div class="container">

                <span class="section-label">
                    <i class="fa-solid fa-earth-asia"></i>
                    Language Skills
                </span>

                <h2 class="section-title">
                    Communicating confidently across languages and cultures.
                </h2>

                <div class="language-grid">

                    <article class="language-card">
                        <div class="language-top">
                            <h3>English</h3>
                            <i class="fa-solid fa-comments"></i>
                        </div>

                        <div class="language-bar">
                            <div class="language-progress" style="width: 100%;"></div>
                        </div>

                        <p>Full professional proficiency</p>
                    </article>

                    <article class="language-card">
                        <div class="language-top">
                            <h3>Gujarati</h3>
                            <i class="fa-solid fa-comments"></i>
                        </div>

                        <div class="language-bar">
                            <div class="language-progress" style="width: 100%;"></div>
                        </div>

                        <p>Native oral and written fluency</p>
                    </article>

                    <article class="language-card">
                        <div class="language-top">
                            <h3>Hindi</h3>
                            <i class="fa-solid fa-comments"></i>
                        </div>

                        <div class="language-bar">
                            <div class="language-progress" style="width: 100%;"></div>
                        </div>

                        <p>Native spoken fluency</p>
                    </article>

                    <article class="language-card">
                        <div class="language-top">
                            <h3>French</h3>
                            <i class="fa-solid fa-comments"></i>
                        </div>

                        <div class="language-bar">
                            <div class="language-progress" style="width: 68%;"></div>
                        </div>

                        <p>CEFR B1 intermediate proficiency</p>
                    </article>

                </div>

            </div>
        </section>

        <section class="section" id="experience">
            <div class="container">

                <span class="section-label">
                    <i class="fa-solid fa-briefcase"></i>
                    Internship Experience
                </span>

                <h2 class="section-title">
                    Real-world exposure at Niro by Nini’s.
                </h2>

                <p class="section-description">
                    My internship provided hands-on experience in hospitality,
                    teamwork, customer interaction, operations, and
                    professional responsibility.
                </p>

                <div class="experience-grid">

                    <article class="experience-card">
                        <h3>What I Learned</h3>

                        <p>
                            The experience gave me practical exposure to a
                            fast-paced professional environment.
                        </p>

                        <ul class="feature-list">
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                Restaurant operations and workflow management
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                Customer service and communication
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                Teamwork and coordination
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                Hygiene, safety, and cleanliness standards
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                Punctuality and professional responsibility
                            </li>
                        </ul>
                    </article>

                    <article class="takeaway-card">
                        <h3>Key Takeaways</h3>

                        <p>
                            This experience strengthened qualities I bring to
                            every challenge: being hardworking, punctual,
                            observant, and quick to learn.
                        </p>

                        <p>
                            Working in a real business environment at a young
                            age gave me a practical understanding of
                            discipline, adaptability, initiative, and
                            professionalism.
                        </p>

                        <p>
                            It demonstrated my ability to contribute
                            meaningfully while learning from mentors,
                            colleagues, and customers.
                        </p>
                    </article>

                </div>

            </div>
        </section>

        <section class="section section-soft" id="projects">
            <div class="container">

                <span class="section-label">
                    <i class="fa-solid fa-diagram-project"></i>
                    Project Experience
                </span>

                <h2 class="section-title">
                    Applying academic learning through hands-on work.
                </h2>

                <p class="section-description">
                    My projects combine research, communication, coordination,
                    design, and creative thinking.
                </p>

                <div class="cards-grid">

                    <article class="info-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-building"></i>
                        </div>

                        <h3>Digital Headquarter Project</h3>

                        <p>
                            Contributed to the DHQ.one project through research,
                            content development, coordination, and structured
                            project execution.
                        </p>
                    </article>

                    <article class="info-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-people-group"></i>
                        </div>

                        <h3>Prowess House Experience</h3>

                        <p>
                            Participated in activities involving leadership,
                            collaboration, event coordination, and team
                            management.
                        </p>
                    </article>

                    <article class="info-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-book"></i>
                        </div>

                        <h3>P vs NP Book Launch</h3>

                        <p>
                            Planning and curating a book-launch event,
                            including posters, banner concepts, content
                            editing, and event coordination.
                        </p>
                    </article>

                </div>

            </div>
        </section>

        <section class="section">
            <div class="container">

                <span class="section-label">
                    <i class="fa-solid fa-star"></i>
                    Strengths & Qualities
                </span>

                <h2 class="section-title">
                    What I bring to every opportunity.
                </h2>

                <p class="section-description">
                    Mentors, educators, and collaborators can expect a student
                    who is engaged, curious, responsible, and committed to
                    producing quality work.
                </p>

                <div class="strengths-grid">

                    <article class="strength-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-clock"></i>
                        </div>

                        <h3>Punctual & Reliable</h3>

                        <p>
                            I respect deadlines, commitments, and the time of
                            the people I work with.
                        </p>
                    </article>

                    <article class="strength-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-dumbbell"></i>
                        </div>

                        <h3>Hardworking</h3>

                        <p>
                            I put in the effort required to complete work
                            carefully and to a high standard.
                        </p>
                    </article>

                    <article class="strength-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-comment-dots"></i>
                        </div>

                        <h3>Strong Communicator</h3>

                        <p>
                            Fluency across multiple languages helps me connect
                            with diverse audiences.
                        </p>
                    </article>

                    <article class="strength-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-bolt"></i>
                        </div>

                        <h3>Quick Learner</h3>

                        <p>
                            I understand new concepts quickly and adapt to
                            unfamiliar environments.
                        </p>
                    </article>

                    <article class="strength-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-puzzle-piece"></i>
                        </div>

                        <h3>Problem Solver</h3>

                        <p>
                            I enjoy solving logical, mathematical, coding,
                            creative, and practical challenges.
                        </p>
                    </article>

                    <article class="strength-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>

                        <h3>Academic Drive</h3>

                        <p>
                            I am committed to continuous improvement and
                            long-term learning in STEM.
                        </p>
                    </article>

                </div>

            </div>
        </section>

        <section class="section" id="contact">
            <div class="container">

                <div class="contact-wrapper">

                    <h2>
                        Let’s connect, collaborate, and create something
                        meaningful.
                    </h2>

                    <p>
                        I am actively seeking mentorship, internship
                        opportunities, academic collaborations, and projects
                        where I can contribute, learn, and grow.
                    </p>

                    <div class="contact-grid">

                        <a href="mailto:omisthebestiloveom@gmail.com" class="contact-item">
                            <i class="fa-solid fa-envelope"></i>

                            <div>
                                <small>Email</small>
                                <strong>
                                    omisthebestiloveom@gmail.com
                                </strong>
                            </div>
                        </a>

                        <a href="tel:+919081078884" class="contact-item">
                            <i class="fa-solid fa-phone"></i>

                            <div>
                                <small>Phone</small>
                                <strong>+91 90810 78884</strong>
                            </div>
                        </a>

                        <a href="https://omdoctor.us" target="_blank" rel="noopener noreferrer" class="contact-item">
                            <i class="fa-solid fa-globe"></i>

                            <div>
                                <small>Website</small>
                                <strong>omdoctor.us</strong>
                            </div>
                        </a>

                    </div>

                </div>

                <div class="final-quote">
                    <i class="fa-solid fa-quote-left"></i>

                    <blockquote>
                        “The P vs NP problem is not just a question for
                        mathematicians — it is a question about the nature of
                        discovery, creativity, and human potential. I want to
                        make sure every student gets a chance to ask it.”
                    </blockquote>

                    <p>— Om Doctor</p>
                </div>

            </div>
        </section>

    </main>

    <footer>
        <div class="container">
            © <span id="currentYear"></span> Om Doctor.
            Built with curiosity, creativity, and code.
        </div>
    </footer>

    <script>
        const menuButton = document.getElementById("menuButton");
        const navLinks = document.getElementById("navLinks");
        const currentYear = document.getElementById("currentYear");

        menuButton.addEventListener("click", () => {
            navLinks.classList.toggle("show");

            const icon = menuButton.querySelector("i");

            icon.classList.toggle("fa-bars");
            icon.classList.toggle("fa-xmark");
        });

        navLinks.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", () => {
                navLinks.classList.remove("show");

                const icon = menuButton.querySelector("i");

                icon.classList.add("fa-bars");
                icon.classList.remove("fa-xmark");
            });
        });

        currentYear.textContent = new Date().getFullYear();
    </script>

</body>

</html>