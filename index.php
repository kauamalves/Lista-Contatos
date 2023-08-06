<?php
        include_once('templates/header.php');
?>

        <style>
        .navbar-brand img{
                width: 100px;
        }

        #main-title{
                text-align: center;
                margin: 15px 0 30px;
        }

        /* Home */
        #empty-list-text{
                text-align: center;
        }

        #msg{
                color: #155724;
                background-color: #D4EDDA;
                border: 1px solid #C3E6CB;
                padding: 10px;
                text-align: center;
                max-width: 500px;
                margin: 0 auto;
                margin-top: 30px;
        }

        .actions{
                width: 150px;
                text-align: right;
        }

        .actions i{
                font-size: 18px;
                margin-right: 5px;
        }

        .check-icon{
                color: #1E7E34;
        }

        .edit-icon{
                color: #007BFF;
        }        
        
        .delete-btn{
                background-color: transparent;
                border: none;
                padding: 0;
        }

        .delete-icon{
                color: #BD2130;
        }

        .delete-form{
                display: inline-block;
        }
        </style>

        <div class='container'>
                <?php if(isset($printMsg) && $printMsg != ''): ?>
                        <p id='msg'><?php $printMsg?></p>
                <?php endif ?>

                <h1 id='maintitle'>Minha agenda</h1>
                <?php if(count($contacts) > 0): ?>
                       <table class='table' id='contacts-table'>
                          <thead>
                               <tr>    
                                   <th scope='col'>#</th>
                                   <th scope='col'>Nome</th>
                                   <th scope='col'>Telefone</th>
                               </tr>
                           </thead>
                       <tbody>
                            <?php foreach($contacts as $contact): ?>
                                <tr>
                                    <td scope='row'><?php echo $contact['id'] ?></td>
                                    <td scope='row'><?php echo $contact['name'] ?></td>
                                    <td scope='row'><?php echo $contact['phone'] ?></td>
                                    <td class='actions'>
                                        <a href='<?= $BASE_URL?>show.php?id=<?php echo $contact['id'] ?>'><i class='fas fa-eye check-icon'></i></a>
                                        <a href='<?= $BASE_URL?>edit.php?id=<?php echo $contact['id'] ?>'><i class='far fa-edit edit-icon'></i></a>
                                     
                                    <form class="delete-form" action="<?= $BASE_URL?>/config/process.php" method="POST">
                                        <input type="hidden" name="type" value="delete">
                                        <input type="hidden" name="id" value="<?= $contact['id']?>">
                                        <button class='delete-btn' type='submit'><i class='fas fa-times delete'></i></button>
                                     </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                       </table>

                <?php else :?>  
                <p id='empty-list-text'>Ainda não há contatos em sua agenda, <a href='<?= $BASE_URL?>create.php'>
                Clique aqui para adicionar</a></p>
                <?php endif; ?>


        </div>

<?php
        include_once('templates/footer.php');
?>