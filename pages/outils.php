<main class="page">

    <section class="outils_top">
        <article class="bloc-1">
            <h1>Les outils pour une eco-conception réussie</h1><br />
            <p>Les bonnes habitudes de développement se déclinent sur plusieurs axes : la conception fonctionnelle, graphique et technique, le contenu, le développement, l’ergonomie et l’hébergement du site Web.<br><br />
                Par exemple, au niveau de la conception, il est essentiel d’éliminer les fonctions superflues. Plusieurs études démontrent que 70% des fonctionnalités demandées par les utilisateurs ne sont pas essentielles et que 45% ne sont jamais utilisées. </p><br />
            <ul class="navigation">
                <li class="toggleSubMenu"><span id="performance"> Eco-performance web ▼</span>
                    <ul class="subMenu">
                        <li class="test2">
                            Pour vous aider à mettre en place ces actions correctives et ainsi développer votre site web de façon eco-reponsable, Google met à votre disposition un <a href="https://developers.google.com/speed/pagespeed/insights/?hl=fr-FR" id="insi" target="blank">
                                outil de performance</a> qui éprouve la vitesse de chargement de vos pages web et vous propose des solutions pour en alléger le contenu et limiter leur pollution numérique. </li>
                    </ul>
                </li>
            </ul>
        </article>

        <aside>
            <img src="img/performance.png" id="image_performance" alt="illustration d'un test de performance sur speed-insight-google" />
        </aside>

    </section>

    <section class="outils_bottom">
        <article class="bloc-2">
            <h2>Le dark mode, une économie d'énergie considérable</h2><br />
            <p>Le dark mode est l’alternative qui permet de basculer vos couleurs vers un thème sombre qui offre plusieurs avantages.<br><br />
                En plus de réduire la fatigue oculaire de vos utilisateurs, c’est une source d’économie d’énergie qui peut sembler dérisoire à petite échelle mais représente un volume important sur l’amplitude mondiale. </p><br />
            <p>En effet, un pixel noir consomme beaucoup moins d’énergie qu’un pixel blanc et l’utilisation de thèmes sombres sur votre site ou de manière plus générale dans l’utilisation de vos applications aux quotidien engendre un impact significatif sur la réduction de leur empreinte carbone.</p><br />
            <button class="noshadow" onclick="myFunction()">Aperçu dark mode</button>

            <script>
                function myFunction() {
                    var element = document.body;
                    element.classList.toggle("dark-mode");
                }
            </script>
        </article>

        <aside id="compare_pixels">
            <img src="img/white_pixels.png" alt="Consommation des pixels blancs" />
            <img src="img/black_pixels.png" alt="Consommation des pixels noirs" />
        </aside>

    </section>

</main>

<script type="text/javascript" src="javascript/scrol-menu-eco.min.js"></script>