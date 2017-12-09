<?php
namespace AdminBundle\Service;

class CheckContent
{
    public function keyWordCheck($objectToCheck, $type)
    {
        if($type == 'book'){
            //check objectToCheck on author
            // if true  $this->sendWarningMessage
        }elseif($type == 'movie' ){
            //check objectToCheck on director
            // if true  $this->sendWarningMessage
        }

    }

    public function sendWarningMessage($mailTo,$keyWord){

        $messageToClient = \Swift_Message::newInstance()
            ->setSubject('KeyWord Alert')
            ->setFrom('admin@novaway.fr')
            ->setTo($mailTo)
            ->setBody(
                $this->renderView(
                    'AdminBundle:emails:keywordWarning.html.twig',[
                    'keyWord' => $keyWord,
                ]),
                'text/html'
            );
        $this->get('mailer')->send($messageToClient);
    }
}