
<!-- Being Page Title -->
<div class="container">
    <div class="page-title clearfix">
        <div class="row">
            <div class="col-md-12">
                <h6><a href="<?=base_url(); ?>">Home</a></h6>
                <h6><span class="page-active">Contato</span></h6>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">

        <div class="col-md-5">
            <div class="contact-map">
                <div class="google-map-canvas" id="map-canvas" style="height: 542px;">

                </div>
            </div>
        </div> <!-- /.col-md-5 -->
    <?=form_open('home/enviaContato/'); ?>
        <div class="col-md-7">
            <div class="contact-page-content">
                <div class="contact-heading">

                    <h3>Preencha o formulário para mais informações:</h3>
                    <p id="mensagem"><?=validation_errors(); ?> <?=$this->session->flashdata('msg'); ?> </p>
                </div>
                <div class="contact-form clearfix">
                    <p class="full-row">
                            <span class="contact-label">
                                <label for="name-id">Nome *:</label>
                                <span class="small-text">Primeiro nome</span>
                            </span>
                        <input type="text" id="name-id" name="name-id">
                    </p>
                    <p class="full-row">
                            <span class="contact-label">
                                <label for="surname-id">Último nome:</label>
                                <span class="small-text">Sobrenome</span>
                            </span>
                        <input type="text" id="surname-id" name="surname-id">
                    </p>
                    <p class="full-row">
                            <span class="contact-label">
                                <label for="email-id">E-mail:</label>
                                <span class="small-text">Endereço eletrônico</span>
                            </span>
                        <input type="text" id="email-id" name="email-id">
                    </p>

                    <p class="full-row">
                            <span class="contact-label">
                                <label for="phone-id">Número para contato *:</label>
                                <span class="small-text">Número de telefone</span>
                            </span>
                        <input type="text" id="phone-id" name="phone-id" onkeypress="mascara(this)">
                    </p>
                    <p class="full-row">
                            <span class="contact-label">
                                <label for="message">Dúvida *:</label>
                                <span class="small-text">Qualquer tipo de dúvida será respondida</span>
                            </span>
                        <textarea name="message" id="message" rows="6"></textarea>
                    </p>
                    <p class="full-row">
                        <input class="mainBtn" type="submit" name="" value="Enviar Mensagem">
                    </p>
                </div>
            </div>
        </div> <!-- /.col-md-7 -->
    <?=form_close(); ?>

    </div> <!-- /.row -->
</div> <!-- /.container -->



<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/custom.js"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(-3.075665, -60.047147)
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
    }

    function loadScript() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            'callback=initialize';
        document.body.appendChild(script);
    }

    window.onload = loadScript;
</script>

</body>

</html>