<?php

interface CreditCardProcessor{
        public function processCreditCard($cardNumber); // Aqui solo la interfaz de la tarjeta de credito y necesitas el numero de tarjeta para procesar el pago
}

interface PayPalProcessor{

        public function processPayPal($email); // Aqui solo la interfaz de paypal y necesitas el email para procesar el pago
}

interface BankTransferProcessor{

        public function processBankTransfer($accountNumber); // Aqui solo la interfaz de transferencia bancaria y necesitas el numero de cuenta para procesar el pago
}

interface ScreenSucces{

        public function ScreenSuccess(); // Aqui solo la interfaz de exito
}

interface ScreenError{
    public function ScreenError(); // Aqui solo la interfaz de error
}
