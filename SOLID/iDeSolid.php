<?php
interface PaymentProcessor{
    public function processCreditCard($cardNumber);
    public function processPayPal($email);
    public function processBankTransfer($accountNumber);
}

// Aqui hay funciones juntas en una sola clase, esta es la manera incorrecta de hacerlo porque no se cumplen los principios SOLID
// porque estas llamando a toda la interfaz y te generaria un acoplamiento muy alto, y necesitas solo 1 funcion por tarea

// Mas ejemplos

interface ScreenNotification{
    public function ScreenSuccess(ScreenSucces $succes);
    public function ScreenError(ScreenError $error);
}

// Aqui vuelven haber funciones juntas en una sola clase que se contradicen

