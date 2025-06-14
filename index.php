<?php
// Resume data
$profile = [
    'name' => 'Roshpet Jay B. Diapolet',
    'title' => 'Programmer',
    'email' => 'diapoletroshpetjay082@gmail.com',
    'phone' => '09169069520',
    'address' => 'Divisoria, Bontoc So. Leyte',
    'github' => 'https://github.com/Roshpetjay',
    'photo' => 'profile.jfif', // Place your profile image as profile.jpg in the same folder
];

$skills = [
    ['name' => 'Laravel', 'percent' => 65],
    ['name' => 'Bootstrap', 'percent' => 60],
    ['name' => 'NATIVE PHP', 'percent' => 75],
    ['name' => 'MySQL', 'percent' => 70],
    ['name' => 'HTML', 'percent' => 90],
    ['name' => 'CSS', 'percent' => 85],
    ['name' => 'JavaScript', 'percent' => 80],
    ['name' => 'Git', 'percent' => 70],
    ['name' => 'Github', 'percent' => 70],
    ['name' => 'Responsive Web Design', 'percent' => 80],
];

$education = [
    'degree' => 'Bachelor of Science in Information Technology',
    'school' => 'Southern Leyte State University - Bontoc Campus',
    'year' => '2024-2025',
];

$projects = [
    [
        'name' => 'Book Borrowing System',
        'desc' => 'A web-based system for managing book borrowing and returns.',
        'img' => 'book_borrowing.png', // Place your dashboard image here
    ],
    [
        'name' => 'Attendance Monitoring System',
        'desc' => 'A system for tracking and managing attendance records and gatepass logs history entry and exit.',
        'img' => 'attendance_monitoring.png', // Place your dashboard image here
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $profile['name'] ?> - Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: #f8f9fa;
        }
        .sidebar {
            position: fixed;
            left: 0; top: 0; bottom: 0;
            width: 250px;
            background: #232547;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 32px 0 16px 0;
            z-index: 100;
        }
        .sidebar h1 {
            font-size: 2rem;
            margin-bottom: 24px;
            font-weight: 700;
        }
        .sidebar .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #6c63ff;
            margin-bottom: 12px;
        }
        .sidebar .profile-name {
            font-size: 1.1rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2px;
        }
        .sidebar .profile-title {
            font-size: 1rem;
            color: #bdbfff;
            text-align: center;
            margin-bottom: 10px;
        }
        .sidebar hr {
            width: 80%;
            border: 0;
            border-top: 1px solid #444;
            margin: 16px 0;
        }
        .sidebar nav {
            width: 100%;
        }
        .sidebar nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar nav ul li {
            margin: 8px 0;
        }
        .sidebar nav ul li a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #fff;
            text-decoration: none;
            padding: 10px 32px;
            border-radius: 8px 0 0 8px;
            font-weight: 500;
            transition: background 0.2s;
        }
        .sidebar nav ul li a.active, .sidebar nav ul li a:hover {
            background: #4e54c8;
            color: #fff;
        }
        .sidebar .social {
            margin-top: auto;
            display: flex;
            gap: 16px;
            justify-content: center;
        }
        .sidebar .social a {
            color: #fff;
            font-size: 1.2rem;
            transition: color 0.2s;
        }
        .sidebar .social a:hover {
            color: #6c63ff;
        }
        .main-content {
            margin-left: 250px;
            padding: 0;
            min-height: 100vh;
        }
        section {
            padding: 60px 40px 40px 40px;
            min-height: 100vh;
        }
        .home-section {
            position: relative;
            overflow: hidden;
            background: #f5f1fa;
        }
        .home-section h2 {
            font-size: 2.5rem;
            color: #232547;
            text-shadow: 2px 2px 8px #0002;
            margin-bottom: 10px;
        }
        .home-section h3 {
            font-size: 1.5rem;
            color: #232547;
            margin-bottom: 18px;
        }
        .home-section .hire-btn {
            background: #ff6e7f;
            color: #fff;
            border: none;
            border-radius: 32px;
            padding: 16px 40px;
            font-size: 1.1rem;
            font-weight: 700;
            margin-top: 18px;
            cursor: pointer;
            box-shadow: 0 2px 8px #0002;
            transition: background 0.2s;
        }
        .home-section .hire-btn:hover {
            background: #ffb199;
            color: #232547;
        }
        .about-section, .skills-section, .resume-section, .projects-section, .contact-section {
            background: #f8f9fa;
            border-bottom: 1px solid #eee;
        }
        .section-title {
            color: #2d197c;
            font-size: 2rem;
            margin-bottom: 24px;
        }
        .about-section p {
            color: #444;
            font-size: 1.1rem;
            max-width: 700px;
        }
        .skills-list { margin: 0; padding: 0; list-style: none; }
        .skill { margin-bottom: 18px; }
        .skill-label { display: flex; justify-content: space-between; font-weight: 500; color: #2d197c; }
        .progress-bar-bg { background: #eee; border-radius: 8px; height: 10px; margin-top: 6px; }
        .progress-bar { height: 10px; border-radius: 8px; background: linear-gradient(90deg, #6c63ff, #ff6e7f); transition: width 1s; }
        .education { color: #444; }
        .projects { display: flex; flex-wrap: wrap; gap: 32px; }
        .project { background: #f4f6fb; border-radius: 12px; box-shadow: 0 2px 8px #0001; padding: 18px; flex: 1 1 350px; min-width: 300px; }
        .project img { width: 100%; border-radius: 8px; margin-bottom: 10px; }
        .project h3 { margin: 0 0 8px 0; color: #2d197c; }
        .project p { margin: 0; color: #555; }
        .contact-list { list-style: none; padding: 0; }
        .contact-list li { margin-bottom: 10px; color: #444; }
        @media (max-width: 900px) {
            .sidebar { width: 100px; padding: 16px 0; }
            .sidebar h1, .sidebar .profile-name, .sidebar .profile-title { display: none; }
            .sidebar nav ul li a { padding: 10px 10px; justify-content: center; }
            .main-content { margin-left: 100px; }
        }
        @media (max-width: 700px) {
            .sidebar { position: static; width: 100%; flex-direction: row; height: auto; }
            .main-content { margin-left: 0; }
            section { padding: 40px 10px; }
        }
        .wave-emoji {
            animation: wave-hand 2s infinite;
            transform-origin: 70% 70%;
        }
        @keyframes wave-hand {
            0% { transform: rotate(0deg); }
            10% { transform: rotate(14deg); }
            20% { transform: rotate(-8deg); }
            30% { transform: rotate(14deg); }
            40% { transform: rotate(-4deg); }
            50% { transform: rotate(10deg); }
            60% { transform: rotate(0deg); }
            100% { transform: rotate(0deg); }
        }
        .about-emoji {
            animation: bounce-emoji 1.5s infinite;
        }
        @keyframes bounce-emoji {
            0%, 100% { transform: translateY(0); }
            30% { transform: translateY(-12px); }
            50% { transform: translateY(0); }
            70% { transform: translateY(-6px); }
        }
    </style>
    <script>
        // Highlight active nav link on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.sidebar nav ul li a');
            window.addEventListener('scroll', function() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 80;
                    if (pageYOffset >= sectionTop) {
                        current = section.getAttribute('id');
                    }
                });
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + current) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div class="sidebar">
        <h1>Portfolio</h1>
        <img src="<?= $profile['photo'] ?>" alt="Profile Photo" class="profile-img">
        <div class="profile-name"><?= strtoupper($profile['name']) ?></div>
        <div class="profile-title">Programmer</div>
        <hr>
        <nav>
            <ul>
                <li><a href="#home" class="active"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i> About</a></li>
                <li><a href="#skills"><i class="fa fa-cogs"></i> Skills</a></li>
                <li><a href="#resume"><i class="fa fa-graduation-cap"></i> Resume</a></li>
                <li><a href="#projects"><i class="fa fa-code"></i> Projects</a></li>
                <li><a href="#contact"><i class="fa fa-envelope"></i> Contact</a></li>
            </ul>
        </nav>
        <div class="social">
            <a href="<?= $profile['github'] ?>" target="_blank"><i class="fab fa-github"></i></a>
        </div>
    </div>
    <div class="main-content">
        <section id="home" class="home-section" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; position: relative; overflow: hidden; background: #f5f1fa;">
            <div class="home-bg-svg" style="position: absolute; inset: 0; width: 100%; height: 100%; z-index: 0; pointer-events: none;">
                <svg viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%; display: block;">
                    <path d="M0,200 Q200,100 400,200 T800,200 T1200,200 T1440,200 L1440,0 L0,0 Z" fill="#e6c6f5"/>
                    <path d="M0,700 Q200,800 400,700 T800,700 T1200,700 T1440,700 L1440,900 L0,900 Z" fill="#e6c6f5"/>
                    <path d="M0,300 Q150,400 300,300 T600,300 T900,300 T1200,300 T1440,300 L1440,0 L0,0 Z" fill="#e7b6d9"/>
                    <path d="M0,600 Q150,500 300,600 T600,600 T900,600 T1200,600 T1440,600 L1440,900 L0,900 Z" fill="#bbaeea"/>
                    <path d="M0,0 Q100,200 300,100 T700,200 T1100,100 T1440,200 L1440,0 Z" fill="#d1b3e0"/>
                    <path d="M0,900 Q200,800 400,900 T800,900 T1200,900 T1440,900 L1440,900 L0,900 Z" fill="#e7b6d9"/>
                </svg>
            </div>
            <div style="backdrop-filter: blur(8px); background: rgba(255,255,255,0.18); border-radius: 32px; box-shadow: 0 8px 32px 0 rgba(31,38,135,0.18); padding: 56px 48px 48px 48px; display: flex; flex-direction: column; align-items: center; max-width: 520px; width: 100%; z-index: 1;">
                <span class="wave-emoji" style="font-size: 3.5rem; display: inline-block; margin-bottom: 18px;">👋</span>
                <h2 style="font-size: 2.5rem; color: #232547; font-weight: 800; margin: 0 0 18px 0; text-shadow: 2px 2px 8px #fff7;">Welcome to My Portfolio</h2>
                <div style="font-size: 1.4rem; color: #232547; font-weight: 600; margin-bottom: 10px;">Hi, I'm <span style="color:#2d197c; font-weight:900; text-shadow:2px 2px 6px #fff;"> <?= strtoupper($profile['name']) ?> </span></div>
                <div style="font-size:1.2rem; color:#6c63ff; font-weight: 700; margin-bottom: 28px; letter-spacing: 2px;"> <?= strtoupper($profile['title']) ?> </div>
                <a href="#contact" class="hire-btn home-hire-btn" style="background: linear-gradient(90deg, #ff6e7f, #ffb199); color: #fff; padding: 18px 48px; border-radius: 32px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 2px 12px #ffb19988; margin-top: 10px; display: inline-block; animation: bounce-btn 1.5s infinite;">
                    HIRE ME <i class="fa fa-paper-plane"></i>
                </a>
            </div>
            <style>
                .home-hire-btn {
                    transition: transform 0.2s;
                }
                .home-hire-btn:hover {
                    transform: scale(1.07);
                    box-shadow: 0 4px 24px #ffb199cc;
                }
                @keyframes bounce-btn {
                    0%, 100% { transform: translateY(0); }
                    30% { transform: translateY(-10px); }
                    50% { transform: translateY(0); }
                    70% { transform: translateY(-5px); }
                }
            </style>
        </section>
        <section id="about" class="about-section">
            <div class="section-title">About</div>
            <div style="display: flex; justify-content: center; align-items: flex-start; min-height: 40vh;">
                <div style="background: #fff; border-radius: 16px; box-shadow: 0 4px 24px #0001; padding: 32px 40px; min-width: 340px; max-width: 600px; width: 100%; display: flex; flex-direction: column; align-items: center;">
                    <span class="about-emoji" style="font-size: 2.5rem; display: inline-block; margin-bottom: 18px;">💻</span>
                    <p style="color: #444; font-size: 1.1rem; text-align: center; margin: 0;">Hello! I'm <?= $profile['name'] ?>, a passionate programmer based in <?= $profile['address'] ?>. I love building web applications and solving real-world problems with code. My expertise includes PHP, MySQL, and modern web technologies.</p>
                </div>
            </div>
        </section>
        <section id="skills" class="skills-section">
            <div class="section-title">My Skills</div>
            <ul class="skills-list">
                <?php foreach ($skills as $skill): ?>
                <li class="skill">
                    <div class="skill-label">
                        <span><?= $skill['name'] ?></span>
                        <span><?= $skill['percent'] ?>%</span>
                    </div>
                    <div class="progress-bar-bg">
                        <div class="progress-bar" style="width: <?= $skill['percent'] ?>%"></div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section id="resume" class="resume-section" style="background: #f4f8fd;">
            <div style="display: flex; justify-content: center; align-items: flex-start; min-height: 80vh;">
                <div style="background: rgba(255,255,255,0.80); border-radius: 24px; box-shadow: 0 8px 32px 0 rgba(31,38,135,0.18); border: 1.5px solid #b3d1f7; display: flex; overflow: hidden; max-width: 800px; width: 100%; position: relative; backdrop-filter: blur(10px);">
                    <!-- Accent Bar -->
                    <div style="width: 10px; background: linear-gradient(180deg, #4f8efc 0%, #b3d1f7 100%); border-radius: 24px 0 0 24px;"></div>
                    <!-- Left Column -->
                    <div style="background: linear-gradient(180deg, #4f8efc 0%, #b3d1f7 100%); color: #fff; width: 230px; padding: 32px 18px; display: flex; flex-direction: column; align-items: center; min-height: 100%;">
                        <img src='<?= $profile['photo'] ?>' alt='Profile Photo' style='width: 110px; height: 110px; border-radius: 50%; object-fit: cover; border: 3px solid #fff; margin-bottom: 16px; box-shadow: 0 2px 12px #4f8efc88;'>
                        <div style="margin-bottom: 22px; width: 100%; border-bottom: 1px solid #fff2; padding-bottom: 12px;">
                            <strong style="display: flex; align-items: center; gap: 8px;"><i class="fa fa-user" style="color:#b3d1f7;"></i> About Me</strong>
                            <p style="font-size: 0.85rem; margin: 8px 0 0 0; color: #f8f9fa; text-align: justify;">Hello! I'm <?= $profile['name'] ?>, currently pursuing a Bachelor of Science in Information Technology. I am passionate about programming, software development, and solving problems through code.</p>
                        </div>
                        <div style="margin-bottom: 22px; width: 100%; border-bottom: 1px solid #fff2; padding-bottom: 12px;">
                            <strong style="display: flex; align-items: center; gap: 8px;"><i class="fa fa-address-book" style="color:#b3d1f7;"></i> Contact</strong>
                            <div style="font-size: 0.85rem; margin-top: 8px;">
                                <div style='margin-bottom: 6px;'><i class="fa fa-phone"></i> <?= $profile['phone'] ?></div>
                                <div style='margin-bottom: 6px;'><i class="fa fa-envelope"></i> <?= $profile['email'] ?></div>
                                <div><i class="fa fa-map-marker-alt"></i> <?= $profile['address'] ?></div>
                            </div>
                        </div>
                        <div style="margin-bottom: 22px; width: 100%; border-bottom: 1px solid #fff2; padding-bottom: 12px;">
                            <strong style="display: flex; align-items: center; gap: 8px;"><i class="fa fa-cogs" style="color:#b3d1f7;"></i> Skills</strong>
                            <ul style="font-size: 0.85rem; margin: 8px 0 0 0; padding: 0 0 0 16px; color: #f8f9fa;">
                                <li>Programmer</li>
                                <li>Editing</li>
                                <li>Front End</li>
                                <li>Back End</li>
                            </ul>
                        </div>
                        <div style="width: 100%;">
                            <strong style="display: flex; align-items: center; gap: 8px;"><i class="fa fa-language" style="color:#b3d1f7;"></i> Language</strong>
                            <ul style="font-size: 0.85rem; margin: 8px 0 0 0; padding: 0 0 0 16px; color: #f8f9fa;">
                                <li>English</li>
                                <li>Tagalog</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div style="flex: 1; padding: 40px 36px; display: flex; flex-direction: column; justify-content: center;">
                        <div style="font-size: 1.7rem; font-weight: 800; color: #232547; margin-bottom: 4px;"><i class="fa fa-id-badge" style="color:#4f8efc; margin-right:8px;"></i><?= strtoupper($profile['name']) ?></div>
                        <div style="color: #4f8efc; font-weight: 600; margin-bottom: 24px; font-size: 1.1rem; letter-spacing: 1px;"> <i class="fa fa-user-tie"></i> <?= strtoupper($profile['title']) ?></div>
                        <div style="margin-bottom: 28px;">
                            <strong style="display: flex; align-items: center; gap: 8px; color: #232547;"><i class="fa fa-graduation-cap" style="color:#4f8efc;"></i> Education</strong>
                            <div style="font-size: 0.98rem; margin-top: 8px; color: #232547;">
                                <div><b>(2015–2016)</b><br>DIVISORIA ELEMENTARY SCHOOL<br>DIVISORIA BONTOC SO. LEYTE</div>
                                <div style="margin-top: 10px;"><b>(2021–2022)</b><br>DIVISORIA SENIOR HIGH SCHOOL<br>DIVISORIA BONTOC SO. LEYTE</div>
                            </div>
                        </div>
                        <div>
                            <strong style="display: flex; align-items: center; gap: 8px; color: #232547;"><i class="fa fa-briefcase" style="color:#4f8efc;"></i> Experience</strong>
                            <div style="font-size: 0.98rem; margin-top: 8px; color: #232547; text-align: justify;">
                                I have practical experience in developing a website and system tailored to our instructor's project requirements. I engaged in both the design and coding processes, which allowed me to enhance my skills in web development using PHP, Laravel, and MySQL.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center; margin-top: 18px;">
                <a href="resume.pdf" download class="hire-btn" style="background: linear-gradient(90deg, #4f8efc, #b3d1f7); color: #fff; padding: 10px 28px; border-radius: 8px; text-decoration: none; font-weight: 600; box-shadow: 0 2px 8px #4f8efc88;">
                    <i class="fa fa-download"></i> Download Resume
                </a>
            </div>
        </section>
        <section id="projects" class="projects-section">
            <div class="section-title">Projects</div>
            <div class="projects">
                <?php foreach ($projects as $project): ?>
                <div class="project">
                    <img src="<?= $project['img'] ?>" alt="<?= $project['name'] ?> Screenshot">
                    <h3><?= $project['name'] ?></h3>
                    <p><?= $project['desc'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section id="contact" class="contact-section">
            <div class="section-title">Contact</div>
            <div style="display: flex; justify-content: center; align-items: flex-start; min-height: 40vh;">
                <div style="background: #fff; border-radius: 16px; box-shadow: 0 4px 24px #0001; padding: 32px 40px; min-width: 340px; max-width: 420px; width: 100%; display: flex; flex-direction: column; align-items: center;">
                    <span class="wave-emoji" style="font-size: 2.5rem; display: inline-block; margin-bottom: 18px;">👋</span>
                    <ul class="contact-list" style="list-style: none; padding: 0; margin: 0; font-size: 1.1rem;">
                        <li style="margin-bottom: 18px; display: flex; align-items: center;"><i class="fa fa-envelope" style="color: #6c63ff; margin-right: 12px; font-size: 1.3rem;"></i> <strong style="min-width: 70px;">Email:</strong> <a href="mailto:<?= $profile['email'] ?>" style="color: #4e54c8; margin-left: 8px; word-break: break-all;"> <?= $profile['email'] ?></a></li>
                        <li style="margin-bottom: 18px; display: flex; align-items: center;"><i class="fa fa-phone" style="color: #6c63ff; margin-right: 12px; font-size: 1.3rem;"></i> <strong style="min-width: 70px;">Phone:</strong> <span style="margin-left: 8px;"> <?= $profile['phone'] ?></span></li>
                        <li style="margin-bottom: 18px; display: flex; align-items: center;"><i class="fa fa-map-marker-alt" style="color: #6c63ff; margin-right: 12px; font-size: 1.3rem;"></i> <strong style="min-width: 70px;">Address:</strong> <span style="margin-left: 8px;"> <?= $profile['address'] ?></span></li>
                        <li style="display: flex; align-items: center;"><i class="fab fa-github" style="color: #6c63ff; margin-right: 12px; font-size: 1.3rem;"></i> <strong style="min-width: 70px;">Github:</strong> <a href="<?= $profile['github'] ?>" target="_blank" style="color: #4e54c8; margin-left: 8px;">Roshpetjay</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</body>
</html> 