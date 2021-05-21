<?php get_header(); ?>

    <div class="bg-cont">
        <div class="bg-contform">

        <h2>Contáctanos</h2>

        <form>

        <div class="mb-3">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputName" placeholder="Ingrese su nombre">
        </div>

        <div class="mb-3">
            <label for="inputEmail" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="email@email.com">
        </div>

        <div class="mb-3">
            <label for="textarea" class="form-label">Mensaje</label>
            <textarea name="message" id="textarea" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-cont">Enviar</button>

        </form>
        </div>
    </div>
    
    
  
<?php get_footer(); ?>