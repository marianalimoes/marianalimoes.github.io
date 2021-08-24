<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../data/000_logo/favicon-logo_M.png">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="../fontawesome/css/all.css" rel="stylesheet">
    <title>Curriculum Vitae</title>
</head>

<body id="cv">
    <div id="wrapper">
        <?php

        $logo = "../data/000_logo/LOGO.svg";
        $home = "";
        $link1 = "about";
        $a1 = "../about/";
        $link2 = "portfolio";
        $a2 = "../";

        include '../header.php'; ?>

        <div id="content">
            <div id="profile">
                <div id="profile-pic">
                    <div id="imgWrapper"><img src="../data\000_logo\foto-perfil_cv_EDIT.jpg" /></div>
                </div>

                <div id="profile-info">
                    <!-- PROFILE -->
                    <p><strong>mariana limões</strong></p>
                    <p>communication designer</p>
                    <p>based in Porto, Portugal</p>

                    <div id="contacts">
                        <p class="contact" style="font-size: 21px"><a href="mailto:marianasacalimoes@gmail.com"><i class="far fa-envelope"></i></a></p>
                        <p class="contact" style="font-size: 21px"><a href="https://www.behance.net/marianalimoes"><i class="fab fa-behance"></i></a></p>
                        <p class="contact" style="font-size: 21px"><a href="https://www.instagram.com/marianalimoes"><i class="fab fa-instagram"></i></a></p>
                    </div>
                </div>
            </div>

            <div id="container">
                <div class="section">
                    <!-- WORK EXPERIENCE -->
                    <h4>Work Experience</h4>
                    <div class="floatRight">
                        <article>
                            <h2>Ambassador</h2>
                            <h2><a href="https://ladieswinedesign.com/">Ladies, Wine & Design</a></h2>
                            <p class="description">Monthly meetings for casual conversations about life, business and
                                design
                                to
                                support women.</p>
                            <p class="description pad">Featured in:</p>
                            <ul>
                                <li>&gt; <a href="https://monumentanea.com/2020/07/30/o-manuel-de-sobrevivencia/">Monumentânea:
                                        História do Design 2000 – 2020</a></li>
                                <li>&gt; <a href="https://www.unearthwomen.com/2019/06/24/a-feminist-city-guide-to-porto/">Unearth
                                        Women</a></li>
                                <li>&gt; <a href="https://www.juponline.pt/cultura/artigo/31361/ladies-wine-and-design-um-evento-para-desbloquear.aspx">Jornal
                                        Universitário do Porto</a></li>
                            </ul>
                            <p class="data">Feb 2019 - | Porto, Portugal</p>
                        </article>

                        <article>
                            <h2>Volunteer</h2>
                            <h2><a href="https://portodesignbiennale.pt/en/page/alter-realities">Porto Design
                                    Bienale</a></h2>
                            <p class="data">May - June 2021 | Porto, Portugal</p>
                        </article>

                        <article>
                            <h2>Freelance designer</h2>
                            <ul style="padding-top: 15px;">
                                <li>&gt; Design for motion graphics</li>
                                <li>&gt; Design of layouts for animation</li>
                                <li>&gt; Illustration and editorial design</li>
                                <li>&gt; Rebranding</li>
                            </ul>
                            <p class="data">2017 - 2020 | Portugal</p>
                        </article>

                        <article>
                            <h2>Art director for motion graphics</h2>
                            <h2><a href="https://www.trix.pt/">Trix Film</a></h2>
                            <p class="data">June 2020 | Lisbon, Portugal</p>
                        </article>

                        <article>
                            <h2>Trainee Art Assistant</h2>
                            <h2><a href="https://productionportugal.com/#/">PSP Production Portugal</a></h2>
                            <p class="data">April 2017 | Lisbon, Portugal</p>
                        </article>
                    </div>
                </div>
                <div class="section">
                    <h4>Education</h4>
                    <div class="floatRight">
                        <article>
                            <h2>BA of Communication Design</h2>
                            <h2><a href="https://www.fba.up.pt/">Faculty of Fine Arts of the University of Porto</a>
                            </h2>
                            <h3 class="description pad">Final Project: UX/UI Methods applied to <a href="https://2021.xcoax.org/">xCoAx 2021</a></h3>
                            <p class="data">SEPT 2017 – JULY 2021</p>
                        </article>

                        <article>
                            <h2>Specialization in Graphic Design</h2>
                            <h2><a href="https://www.antonioarroio.edu.pt/">António Arroio Art School</a></h2>
                            <h3 class="description pad">Final Project: <a href="https://www.behance.net/gallery/61415591/Dual-Records-Visual-Identity">Visual
                                    identity
                                    for Dual Records</a></h3>
                            <p class="data">SEPT 2014 – JULY 2017</p>
                        </article>
                    </div>
                </div>
                <div class="section">
                    <h4>Recognition</h4>
                    <div class="floatRight">
                        <article>
                            <h2>Selected for <a href="https://pcd.fba.up.pt/2021/exhibition/mariana-simoes.htm">virtual exhibition</a></h2>
                            <h2><a href="https://pcd.fba.up.pt/2021/">Processing Community Day of Porto</a></h2>
                            <p class="data">FEB - MARCH 2021 | PORTO, PORTUGAL</p>
                        </article>

                        <article>
                            <h2>Published article</h2>
                            <h2><a href="https://cabeca.bigcartel.com/">Cabeça #7</a></h2>
                            <p class="data">OCTOBER 2020</p>
                        </article>
                    </div>
                </div>
                <div class="section">
                    <h4 class="skills-ttl">Skills</h4>
                    <div class="floatRight">
                        <article>
                            <ul id="skills">
                                <li>Adobe Photoshop, Illustrator & Indesign</li>
                                <li>HTML + CSS + JS + JQUERY + P5.JS</li>
                                <li>C++ PROCESSING</li>
                                <li>Blender 3D</li>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>