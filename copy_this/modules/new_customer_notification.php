<?php
class new_customer_notification extends new_customer_notification_parent
{
    public function createUser()
    {
       $parent_return = parent::createUser();
       if ($parent_return == true)
       {
           $oEmail = oxNew( 'oxemail' );
		   $my_mailtext = "Hallo,\n\ngerade eben hat sich ein neuer User im OnlineShop www.jaeckle-sst.de/shop registriert.\n";
		   $my_mailtext .= "\n\nBenutzername: " . $this->oxuser__oxusername->value;
		   $my_mailtext .= "\n\nHerzliche Gruesse\nvom Shopsystem ;-)";
           $oEmail->sendEmail('nnn@webshop.nn', 'Neukunden Anmeldung',  $my_mailtext);
       }        
        return $parent_return;
    }
}  
?>