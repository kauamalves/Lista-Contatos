<?php
        include_once('templates/header.php');
        include('templates/backbtn.html')
?>
        <head>
            <style>
                
                #main-title{
                        text-align: center;
                        margin: 15px 0 30px;
                }

                #create-form,
                #edit-form{
                        max-width: 500px;
                        margin: 0 auto;
                }

                input{
                        margin-bottom: 15px;
                }

                textarea{
                        margin-bottom: 10px;
                }

            </style>
        </head>
        <div class="container">
                <h1 id="main-title">Editar contato</h1>

                <form id="create-form" action="<?= $BASE_URL?>config/process.php" method="POST">
                   <input type="hidden" name="type" value="edit">
                   <input type="hidden" name="id" value="<?= $contact['id']?>">

                   <div class="form-group">
                     <label for="name">Nome do contato</label>
                      <input type="text" class="form-control" name="name" placeholder="Insira o nome do contato" value="<?= $contact['name']?>" required>
                   </div>
                
                   <div class="form-group">
                      <label for="phone">Telefone do contato</label>
                      <input type="text" class="form-control" name="phone" placeholder="Insira o telefone do contato" value="<?= $contact['phone']?> "required>
                   </div>

                   <div class="form-group">
                      <label for="observations">Observações</label>
                      <textarea type="text" class="form-control" name="observations" placeholder="Insira observações do contato" rows="3">
                         <?= $contact['observations']?>
                      </textarea>
                   </div>

                      <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
        </div>
<?php
        include_once('templates/footer.php');
?>