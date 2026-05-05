@extends('layouts.app')

@section('content')
    <section class="page-header hidden-section">
        <h1>Technical Skills</h1>
        <p>The tools and technologies I use to build modern applications.</p>
    </section>

    <section id="skills-page" class="hidden-section">
        <div class="skills-container">

            <div class="skill-category">
                <h2>Frontend Development</h2>
                <div class="skill-items">
                    <div class="skill-pill"><i class="fab fa-html5"></i> HTML5</div>
                    <div class="skill-pill"><i class="fab fa-css3-alt"></i> CSS3 & SCSS</div>
                    <div class="skill-pill"><i class="fab fa-js-square"></i> JavaScript (ES6+)</div>
                    <div class="skill-pill"><i class="fab fa-react"></i> React.js</div>
                    <div class="skill-pill"><i class="fas fa-wind"></i> Tailwind CSS</div>
                </div>
            </div>
            <div class="skill-category">
                <h2>Backend Development</h2>
                <div class="skill-items">
                    <div class="skill-pill"><i class="fab fa-php"></i> PHP</div>
                    <div class="skill-pill"><i class="fab fa-laravel"></i> Laravel</div>
                    <div class="skill-pill"><i class="fab fa-node-js"></i> Node.js & Express</div>
                    <div class="skill-pill"><i class="fas fa-database"></i> MySQL</div>

                    <div class="skill-pill"><i class="fas fa-server"></i> RESTful APIs</div>
                </div>
            </div>

            <div class="skill-category">
                <h2>Tools & DevOps</h2>
                <div class="skill-items">
                    <div class="skill-pill"><i class="fab fa-git-alt"></i> Git & GitHub</div>
                    <div class="skill-pill"><i class="fab fa-docker"></i> Docker</div>
                    <div class="skill-pill"><i class="fas fa-terminal"></i> Command Line</div>
                    <div class="skill-pill"><i class="fab fa-npm"></i> NPM / Composer</div>
                </div>
            </div>

        </div>
    </section>
@endsection
