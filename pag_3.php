<?php include "cabecalho.php" ?>
    

<form role="form" action="adiciona.php">
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>
  <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  
  <div class="form-group">
  <label for="comment">Comentários:</label>
  <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
   
</div>   
   
<?php include "rodape.php" ?>