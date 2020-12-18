<div class="container column">
  <fieldset class="form-container">
    <h2>Cadastrar vaga</h2>

    <form action="" method="POST">
      <div class="input-container">
        <label for="title">Título</label> <br/>
        <input type="text" name="title" />
      </div>
      <div class="input-container">
        <label for="description">Descrição</label> <br/>
        <textarea type="text" name="description" placeholder="" cols="30" rows="5"></textarea>
      </div>
      <div class="input-radio-container">
        <div class="radio-container">
          <div>
            <input type="radio" id="test1" name="radio-group" checked>
            <label for="test1">Ativa</label>
          </div>
          <div>
            <input type="radio" id="test2" name="radio-group">
            <label for="test2">Inativa</label>
          </div>
        </div>
      </div>
      <button type="submit" class="btn" name="cadastrar">Cadastrar</button>
    </form>

    <a href="index.php">Voltar para a página inicial</a>
  </fieldset>
  <footer>Feito por <a target="_blank" href="https://github.com/rafaeldiehl">Rafael Diehl</a></footer>
</div>