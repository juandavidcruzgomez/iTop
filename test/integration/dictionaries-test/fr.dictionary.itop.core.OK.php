<?php
//
// Class: ActionEmail
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:ActionEmail' => 'Notification par mél',
	'Class:ActionEmail+' => '',
	'Class:ActionEmail/Attribute:status+' => 'Cet état définit qui va être notifié: le \'Destinataire de test\', tous les destinataires (A, Copie and Copie Cachée) ou personne',
	'Class:ActionEmail/Attribute:status/Value:test+' => 'Seul le destinataire de test est notifié ',
	'Class:ActionEmail/Attribute:status/Value:enabled+' => 'Tous les destinataires (A, Copie and Copie Cachée) sont notifiés',
	'Class:ActionEmail/Attribute:status/Value:disabled+' => 'La notification n\'est pas envoyée',
	'Class:ActionEmail/Attribute:test_recipient' => 'Destinataire de test',
	'Class:ActionEmail/Attribute:test_recipient+' => '',
	'Class:ActionEmail/Attribute:from' => 'De (mél)',
	'Class:ActionEmail/Attribute:from+' => 'Adresse mél qui sera affichés en expéditeur de la notification',
	'Class:ActionEmail/Attribute:from_label' => 'De (libellé)',
	'Class:ActionEmail/Attribute:from_label+' => 'Le nom de l\'expéditeur sera inclus dans l\'entête du mél',
	'Class:ActionEmail/Attribute:reply_to' => 'Répondre à (mél)',
	'Class:ActionEmail/Attribute:reply_to+' => 'Adresse mèl qui sera affichée dans le répondre à de la notification',
	'Class:ActionEmail/Attribute:reply_to_label' => 'Répondre à (libellé)',
	'Class:ActionEmail/Attribute:reply_to_label+' => 'Le nom du destinataire en cas de réponse sera inclus dans l\'entête du mél.',
	'Class:ActionEmail/Attribute:to' => 'A',
	'Class:ActionEmail/Attribute:to+' => '',
	'Class:ActionEmail/Attribute:cc' => 'Copie',
	'Class:ActionEmail/Attribute:cc+' => '',
	'Class:ActionEmail/Attribute:bcc' => 'Copie Cachée',
	'Class:ActionEmail/Attribute:bcc+' => '',
	'Class:ActionEmail/Attribute:subject' => 'Sujet',
	'Class:ActionEmail/Attribute:subject+' => '',
	'Class:ActionEmail/Attribute:body' => 'Message',
	'Class:ActionEmail/Attribute:body+' => '',
	'Class:ActionEmail/Attribute:importance' => 'Importance',
	'Class:ActionEmail/Attribute:importance+' => '',
	'Class:ActionEmail/Attribute:importance/Value:low' => 'Basse',
	'Class:ActionEmail/Attribute:importance/Value:low+' => '',
	'Class:ActionEmail/Attribute:importance/Value:normal' => 'Normale',
	'Class:ActionEmail/Attribute:importance/Value:normal+' => '',
	'Class:ActionEmail/Attribute:importance/Value:high' => 'Haute',
	'Class:ActionEmail/Attribute:importance/Value:high+' => '',
));

//
// Class: Trigger
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Trigger' => 'Déclencheur',
	'Class:Trigger+' => '',
	'Class:Trigger/Attribute:description' => 'Description',
	'Class:Trigger/Attribute:description+' => '',
	'Class:Trigger/Attribute:action_list' => 'Actions déclenchées',
	'Class:Trigger/Attribute:action_list+' => '',
	'Class:Trigger/Attribute:finalclass' => 'Sous-classe de Déclencheur',
	'Class:Trigger/Attribute:finalclass+' => 'Nom de la classe instanciable',
	'Class:Trigger/Attribute:context' => 'Contexte',
	'Class:Trigger/Attribute:context+' => 'Contexte de déclenchement',
));
