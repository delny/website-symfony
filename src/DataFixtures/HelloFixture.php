<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Hello;

class HelloFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $datas = [
            [
                'content' => 'Hello and welcome',
                'language' => 'Anglais',
            ],
            [
                'content' => 'hola i benvinguts',
                'language' => 'Catalan',
            ],
            [
                'content' => 'Hola y bienvenidos',
                'language' => 'Espagnol',
            ],
            [
                'content' => 'Hallo und herzlich willkommen',
                'language' => 'Allemand',
            ],
            [
                'content' => 'Dobr&yacute; den, v&iacute;tejte',
                'language' => 'Tch&egrave;que',
            ],
            [
                'content' => 'Hej og velkommen',
                'language' => 'Danois',
            ],
            [
                'content' => 'Hei og velkommen',
                'language' => 'Norv&eacute;gien',
            ],
            [
                'content' => 'Dia duit agus f&aacute;ilte a chur roimh',
                'language' => 'Irlandais',
            ],
            [
                'content' => 'Ol&aacute; e bem vindos',
                'language' => 'Portuguais',
            ],
            [
                'content' => 'Salve, et grata',
                'language' => 'Latin',
            ],
            [
                'content' => 'Sveiki atvyk&#281;',
                'language' => 'Lituanien',
            ],
            [
                'content' => 'Hall&oacute; og velkomin',
                'language' => 'Islandais',
            ],
            [
                'content' => 'Tere ja teretulnud',
                'language' => 'Estonien',
            ],
            [
                'content' => '&Uuml;dv&ouml;zl&uuml;nk',
                'language' => 'Hongrois',
            ],
            [
                'content' => 'Hej och v&auml;lkommen',
                'language' => 'Su&eacute;dois',
            ],
            [
                'content' => 'Hello u mer&#295;ba',
                'language' => 'Maltais',
            ],
            [
                'content' => 'Ciao e benvenuto',
                'language' => 'Italien',
            ],
            [
                'content' => 'Cze&sacute;&cacute; i witaj',
                'language' => 'Polonais',
            ],
            [
                'content' => 'Hallo en welkom',
                'language' => 'N&eacute;erlandais',
            ],
            [
                'content' => 'Dobr&yacute; de&#328;, vitajte',
                'language' => 'Slovaque',
            ],
            
        ];
        foreach($datas as $data)
        {
            $hello = new Hello();
            $hello->setContent($data['content'])
            ->setLanguage($data['language']);
            $manager->persist($hello);
        }

        $manager->flush();
    }
}
