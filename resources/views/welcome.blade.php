@extends('layouts.frontend')

@section('content')

<div class="site-about">
    <div class="banner banner--dark">
        <p class="banner__header">Lakeland Airways</p>
        <p class="banner__info">Search and book your <span class="bold">tickets</span>!</p>
    </div>
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item link link--state-1"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>
    <div class="container spacing-vertical-outer-main">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <img src="{{ asset('/images/decorative/idea.jpg') }}" alt="" loading="lazy" class="img-fluid mx-auto rounded" />
            </div>
            <div class="col-sm-12 col-md-8">
                <h1 class="header-1">About the Project</h1>
                <p>This project is is concerned with the specification of a proposed information system for the course Software Development Methodologies of MSc in Cybersecurity of International Hellenic University (IHU) under the supervision of <span class="bold"><a class="link link--state-1 js-external" href="https://https://www.linkedin.com/in/koukarasparaskevas/?originalSubdomain=gr/">Dr Paraskevas Koukaras</a></span>.</p>
                <p>It has been developed by <span class="bold">

                    <a class="link link--state-1 js-external" href="https://gr.linkedin.com/in/dorotheos-epeslidis-4216ab1aa/"><strong>Epeslidis Dorotheos (GR)</strong></a>,</span> 
                    <a class="link link--state-1 js-external" href="https://gr.linkedin.com/in/vasiliki-georgiadi-49a1a8167/"><strong>Georgiadi Vasiliki (GR)</strong></a>,</span> 
                    <a class="link link--state-1 js-external" href="https://www.linkedin.com/in/konstantinos-mitsarakis-a9768350/"><strong>Mitsarakis Konstantinos (GR)</strong></a>.</span>

                </p>
                <p class="spacing-vertical-outer-main">The aim of this project is to to identify what are the most critical aspects of the operation of a fictional airline, Lakeland Airways, and what parts of the operation could not usefully be supported by an information system.</p>
                <div class="buttons-row">
                    <a class="btn button--attention button buttons-row__button buttons-row__button--first js-external" href="https://github.com/kostmits83">Github</a>
                    <a class="btn button--default button buttons-row__button buttons-row__button--last js-external" href="https://www.linkedin.com/in/konstantinos-mitsarakis-a9768350/">Contact</a>
                </div>
            </div>
        </div>
    </div>

    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="team-members__header header-2">Authors</h2>
                    <p class="team-members__description">System Specification, System Analysis, Agile Product &amp; Project Management, UX &amp; UI Design, Backend &amp; Frontend Developing, Infrastructure Setup, Testing, Documentation</p>
                    <div class="team-members__all">
                        <div class="row justify-content-md-center">
                            <div class="col-sm-12 col-md-4">
                                <div class="team-member">
                                    <img src="{{ asset('/images/author/epeslidis-dorotheos.jpg') }}" alt="" loading="lazy" class="img-fluid team-member__image" />
                                    <p class="team-member__name header-3"><a class="js-external" href="https://gr.linkedin.com/in/dorotheos-epeslidis-4216ab1aa/"><span class="team-member__link link link--state-1">Epeslidis Dorotheos</span></a></p>
                                    <p class="team-member__info">Having taken numerous courses around IT field I have realized that my passion is Cybersecurity. Threats, attacks, defensive mechanism are only few of my interests.</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="team-member">
                                    <img src="{{ asset('/images/author/georgiadi-vasiliki.jpg') }}" alt="" loading="lazy" class="img-fluid team-member__image" />
                                    <p class="team-member__name header-3"><a class="js-external" href="https://gr.linkedin.com/in/vasiliki-georgiadi-49a1a8167/"><span class="team-member__link link link--state-1">Georgiadi Vasiliki</span></a></p>
                                    <p class="team-member__info">I think, in the last semester of the university, in a course for web development, it was when I realized that technology and programming fulfill me.</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="team-member">
                                    <img src="{{ asset('/images/author/mitsarakis-konstantinos.jpg') }}" alt="" loading="lazy" class="img-fluid team-member__image" />
                                    <p class="team-member__name header-3"><a class="js-external" href="https://www.linkedin.com/in/konstantinos-mitsarakis-a9768350/"><span class="team-member__link link link--state-1">Konstantinos Mitsarakis</span></a></p>
                                    <p class="team-member__info">A disciplined self-motivated web developer with strong team spirit and well-rounded experience in both backend and frontend development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container skills">
        <div class="row">
            <h2 class="skills__header header-2">Skills</h2>
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="skill">
                                <p class="skill__name">System Specification <span class="skill__percent">100%</span></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="skill">
                                <p class="skill__name">System Analysis <span class="skill__percent">100%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="skill">
                                <p class="skill__name">Project Management <span class="skill__percent">100%</span></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="skill">
                                <p class="skill__name">UX UI Design <span class="skill__percent">100%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="skill">
                                <p class="skill__name">Web Development <span class="skill__percent">100%</span></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="skill">
                                <p class="skill__name">API Integration <span class="skill__percent">100%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="technologies">
        <h2 class="technologies__header header-1">Technologies &amp; Tools Used</h2>
        <div class="container">
            <div class="row technologies__all">

                <div class="col-sm-12 col-md-6 technologies__group">
                    <h3 class="technologies__subheader header-2">Backend</h3>
                    <div class="technology">
                        <h3 class="technology__header header-3">Laravel</h3>
                        <p class="technology__description">Laravel is a web application framework with expressive, elegant syntax. It has already laid the foundation — freeing the developers to create without sweating the small things.</p>
                        <a class="technology__link js-external" href="https://laravel.com/"><span class="link link--state-1">www.laravel.com</span></a>
                    </div>
                    <div class="technology">
                        <h3 class="technology__header header-3">MySQL</h3>
                        <p class="technology__description">MySQL is an Oracle-backed open source relational database management system (RDBMS) based on Structured Query Language (SQL). MySQL runs on virtually all platforms, including Linux, UNIX and Windows.</p>
                        <a class="technology__link js-external" href="https://www.mysql.com/"><span class="link link--state-1">www.mysql.com</span></a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 technologies__group">
                    <h3 class="technologies__subheader header-2">Frontend</h3>
                    <div class="technology">
                        <h3 class="technology__header header-3">Bootstrap</h3>
                        <p class="technology__description">Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.</p>
                        <a class="technology__link js-external" href="https://getbootstrap.com/"><span class="link link--state-1">getbootstrap.com</span></a>
                    </div>
                    <div class="technology">
                        <h3 class="technology__header header-3">jQuery</h3>
                        <p class="technology__description">jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</p>
                        <a class="technology__link js-external" href="https://jquery.com/"><span class="link link--state-1">jquery.com</span></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 technologies__group">
                    <h3 class="technologies__subheader header-2">Infrastructure</h3>
                    <div class="technology">
                        <h3 class="technology__header header-3">Docker</h3>
                        <p class="technology__description">Docker makes development efficient and predictable taking away repetitive, mundane configuration tasks and is used throughout the development lifecycle for fast, easy and portable application development - desktop and cloud.</p>
                        <a class="technology__link js-external" href="https://www.docker.com/"><span class="link link--state-1">www.docker.com</span></a>
                    </div>
                    <div class="technology">
                        <h3 class="technology__header header-3">Git &amp; Github</h3>
                        <p class="technology__description">Github offers the distributed version control and source code management (SCM) functionality of Git, plus its own features. It provides access control and several collaboration features such as bug tracking, feature requests, task management, continuous integration and wikis for every project.</p>
                        <a class="technology__link js-external" href="https://github.com/"><span class="link link--state-1">www.github.com</span></a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 technologies__group">
                    <h3 class="technologies__subheader header-2">Collaboration</h3>
                    <div class="technology">
                        <h3 class="technology__header header-3">Microsoft 365</h3>
                        <p class="technology__description">Microsoft 365, formerly Office 365, is a line of subscription services offered by Microsoft which adds to and includes the Microsoft Office product line.</p>
                        <a class="technology__link js-external" href="https://www.microsoft.com/en-us/microsoft-365/"><span class="link link--state-1">www.microsoft.com/en-us/microsoft-365/</span></a>
                    </div>
                    <div class="technology">
                        <h3 class="technology__header header-3">Tools</h3>
                        <p class="technology__description">OneDrive, VisualParadigm, DrawIO, WireframePro, Excalidraw, Canva</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="project-metrics">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 project-metric">
                    <span class="project-metric__icon"><i class="fas fa-code-branch"></i></span>
                    <p class="project-metric__header">Branches:</p>
                    <p class="project-metric__number">5</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 project-metric">
                    <span class="project-metric__icon"><i class="fas fa-code"></i></span>
                    <p class="project-metric__header">Commits:</p>
                    <p class="project-metric__number">7</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 project-metric">
                    <span class="project-metric__icon"><i class="fas fa-user"></i></span>
                    <p class="project-metric__header">Contributors:</p>
                    <p class="project-metric__number">3</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 project-metric">
                    <span class="project-metric__icon"><i class="fas fa-coffee"></i></span>
                    <p class="project-metric__header">Cups of Coffee:</p>
                    <p class="project-metric__number">250</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection