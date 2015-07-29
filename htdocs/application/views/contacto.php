<div class="content">
    <?php
    if(isset($_SESSION['error'])) {
        ?>
        <span class="error" style="display:block;margin:0 auto;"><?php echo $_SESSION['error']?></span>
        
    <?php
        unset($_SESSION['error']);
    }
    ?>
    <?php
    if(isset($_SESSION['success'])) {
        ?>
        <span class="success" style="display:block;margin:0 auto;"><?php echo $_SESSION['success']?></span>
        
    <?php
        unset($_SESSION['success']);
    }
    ?>
    <span class="title">Formulario de contacto</span>
    <form class="contact-form" action="/contacto/send" method="POST">
        <input type="text" name="name" placeholder="Nombre"/>
        <input type="text" name="email" placeholder="eMail"/>
        <input type="text" name="phone" placeholder="Teléfono"/>
        <span>Ingrese aquí su consulta</span>
        <textarea name="consult"></textarea>
                
        <input type="submit" value="Enviar">
    </form>
</div>