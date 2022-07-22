</div>

    <section id="contacto" class="contact">
        <div class="container">
            <form action="/suscripcion/" class="form-email">
                <h3>¿Creamos algo juntos?</h3>
                <input type="text" placeholder="Déjame tu email" id="email">
                <button>Enviar</button>
            </form>
            <div class="social">
                <a href="https://twitter.com/leonidasesteban" class="social-link twitter"></a>
                <a href="https://facebook.com/leonidas.esteban" class="social-link facebook"></a>
                <a href="https://github.com/leonidasesteban" class="social-link github"></a>
                <a href="https://instagram.com/leonidasesteban" class="social-link instagram"></a>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div>
                <p>Desarrolladores y Programadores Unidos 2022 <img src="../paneles/images/lbm-coding.png" width="80" alt="LBM-CODING"></p>
            </div>
            <div>
                <a href="">Politicas de privacidad</a>
            </div>
            <div>
                <p>
                Todos los Derechos Reservados <a href="https://twitter.com/thespianartist">© Copyright 2022</a>
                </p>
            </div>
        </div>
    </footer>
    <script src="js/prism.js"></script>
    <script>
        const $burgerMenu = document.querySelector('#burger-menu');
        const $menu = document.querySelector('.menu');
        const ipad = window.matchMedia('(max-width: 767px)');
        runBurgerMenu(ipad.matches);
        ipad.addListener((event) => {
            runBurgerMenu(event.matches)
        })

        function hideShow() {
            if ($menu.classList.contains('is-active')) {
                $menu.classList.remove('is-active');
            } else {
                $menu.classList.add('is-active');
            }
        }

        function runBurgerMenu(yes) {
            if (yes) {
                $burgerMenu.addEventListener('click', hideShow);
            } else {
                $burgerMenu.removeEventListener('click', hideShow);
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
</body>

</html>