<div>
<form class="form-horizontal" method="post" name='contato' action='index.php?page=contato.resposta'>
<fieldset>

<!-- Form Name -->
<legend>Contato com Meu Site</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nome">Nome</label>
  <div class="controls">
    <input id="nome" name="nome" type="text" placeholder="nome completo" class="input-xlarge" required="">
    <p class="help-block">Informe o Nome Completo</p>
  </div>
</div>

<!-- Appended Input-->
<div class="control-group">
  <label class="control-label" for="email">E-Mail</label>
  <div class="controls">
    <div class="input-append">
      <input id="email" name="email" class="input-xlarge" placeholder="endereço de e-mail" type="text" required="">
      <span class="add-on">@</span>
    </div>
    <p class="help-block">Informe seu E-Mail</p>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="assunto">Assunto</label>
  <div class="controls">
    <input id="assunto" name="assunto" type="text" placeholder="assunto a tratar" class="input-xlarge" required="">
    <p class="help-block">Informe o Assunto que Deseja Tratar</p>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="mensagem">Mensagem</label>
  <div class="controls">                     
    <textarea id="mensagem" name="mensagem"></textarea>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="buttonOK"></label>
  <div class="controls">
    <button id="buttonOK" name="buttonOK" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>
</div>