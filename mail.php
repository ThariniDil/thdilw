<?php

class contactos {

    var $nome;
    var $email;
    var $assunto;
    var $mensagem;
    var $admin;

    public function sendMail() 
    {
            $errors = "";
            $admin = "josecerejo@sapo.pt"; 

            if ($this->nome == "") {
                $errors .= '- You forgot to enter a name!<br />';
            }

                if ($this->email == "") {
                $errors .= '- You forgot to enter an email!<br />';
            }

                if ($this->assunto == "") {
                $errors .= '- You forgot to enter a assunto!<br />';
            }

                if ($this->mensagem == "") {
                $errors .= '- You forgot to enter a mensagem!<br />';
            }

            if(empty($errors)) {
            $headers = "From: ".$this->nome." <".$this->email.">";
            $send_contact=mail("$this->admin","$this->assunto","$this->mensagem","$headers");
            exit();
            } else {
                echo '<p class=\'message error\'>';
                echo '<font color="black">' . $errors . '</font>';
                echo '</p><br />';
            }
        } 
    } 
?>
