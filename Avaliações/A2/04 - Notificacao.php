<?php

interface Notificacao{
    public function enviar($mensagem, $destinatario);
}

class EmailNotification implements Notificacao {
    public function enviar($mensagem, $destinatario) {
        echo "Email enviado para $destinatario: $mensagem<br>";
    }
}

class SMSNotification implements Notificacao {
    public function enviar($mensagem, $destinatario) {
        echo "SMS enviado para $destinatario: $mensagem<br>";
    }
}

class PushNotification implements Notificacao {
    public function enviar($mensagem, $destinatario) {
        echo "Push enviado para $destinatario: $mensagem<br>";
    }
}

$usuario = "fabiano@example.com";

$notificacoes = [
    new EmailNotification(),
    new SMSNotification(),
    new PushNotification()
];

foreach($notificacoes as $notif){
    $notif->enviar("Bom dia", $usuario);
}


