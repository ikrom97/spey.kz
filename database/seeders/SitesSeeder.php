<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Seeder;

class SitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Spey sites according to country locations
        $sites = array(
            array(
                'id' => 1,
                'en_title' => 'India',
                'ru_title' => 'Индия',
                'en_location' => 'Spey in India',
                'ru_location' => 'Spey в Индии',
                'en_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.4186215488335!2d77.28871589216939!3d28.538114445751763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce401d63e40fb%3A0x59e5b2df8c416427!2sSpey%20Medical%2C%20India!5e1!3m2!1sen!2s!4v1635494522432!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'ru_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3888.418623237373!2d77.2887159!3d28.5381144!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce401d63e40fb%3A0x59e5b2df8c416427!2sSpey%20Medical%2C%20India!5e1!3m2!1sru!2s!4v1635494567638!5m2!1sru!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'link' => 'https://spey.in',
            ),
            array(
                'id' => 2,
                'en_title' => 'Russia',
                'ru_title' => 'Россия',
                'en_location' => 'Spey in Russia',
                'ru_location' => 'Spey в России',
                'en_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d622.5561847879783!2d37.4053016!3d55.7635463!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54f3368b76fa5%3A0xadcf509217df7a87!2sSpey!5e1!3m2!1sen!2s!4v1635494279114!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'ru_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d622.5561846138202!2d37.40530163478196!3d55.763546310907735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54f3368b76fa5%3A0xadcf509217df7a87!2sSpey!5e1!3m2!1sru!2s!4v1635494159864!5m2!1sru!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'link' => 'https://spey.com.ru',
            ),
            array(
                'id' => 3,
                'en_title' => 'Kazakhstan',
                'ru_title' => 'Казахстан',
                'en_location' => 'Spey in Kazakhstan',
                'ru_location' => 'Spey в Казахстане',
                'en_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3223.6769587789936!2d76.9751787!3d43.2545727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836f28e7c11fdf%3A0xb391e858eee4e6f3!2sSpey!5e1!3m2!1sen!2s!4v1635494679544!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'ru_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.67695646784!2d76.97517872322307!3d43.254572743659295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836f28e7c11fdf%3A0xb391e858eee4e6f3!2z0KHQv9C10Lk!5e1!3m2!1sru!2s!4v1635494647023!5m2!1sru!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'link' => 'https://spey.kz',
            ),
            array(
                'id' => 4,
                'en_title' => 'Uzbekistan',
                'ru_title' => 'Узбекистан',
                'en_location' => 'Spey in Uzbekistan',
                'ru_location' => 'Spey в Узбекистане',
                'en_map' => null,
                'ru_map' => null,
                'link' => 'https://spey.uz',
            ),
            array(
                'id' => 5,
                'en_title' => 'Kyrgyzstan',
                'ru_title' => 'Кыргызстан',
                'en_location' => 'Spey in Kyrgyzstan',
                'ru_location' => 'Spey в Кыргызстане',
                'en_map' => null,
                'ru_map' => null,
                'link' => 'https://spey.kg',
            ),
            array(
                'id' => 6,
                'en_title' => 'Tajikistan',
                'ru_title' => 'Таджикистан',
                'en_location' => 'Spey in Tajikistan',
                'ru_location' => 'Spey в Таджикистане',
                'en_map' => null,
                'ru_map' => null,
                'link' => 'https://spey.tj',
            ),
            array(
                'id' => 7,
                'en_title' => 'Georgia',
                'ru_title' => 'Грузия',
                'en_location' => 'Spey in Georgia',
                'ru_location' => 'Spey в Грузии',
                'en_map' => null,
                'ru_map' => null,
                'link' => 'https://spey.ge',
            ),
            array(
                'id' => 8,
                'en_title' => 'Philippines',
                'ru_title' => 'Филиппины',
                'en_location' => 'Spey in Philippines',
                'ru_location' => 'Spey в Филиппинах',
                'en_map' => null,
                'ru_map' => null,
                'link' => 'https://spey.ph',
            ),
            array(
                'id' => 9,
                'en_title' => 'Cambodia',
                'ru_title' => 'Камбоджа',
                'en_location' => 'Spey in Cambodia',
                'ru_location' => 'Spey в Камбодже',
                'en_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4336.14534712506!2d104.87013425064522!3d11.577783691740484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951458d1bfb93%3A0xa46adeb246719727!2sSpey%20Medical%20Ltd.%2C%20in%20Cambodia!5e1!3m2!1sen!2s!4v1635494875346!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'ru_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4336.145347124433!2d104.87013961480811!3d11.57778369178085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951458d1bfb93%3A0xa46adeb246719727!2sSpey%20Medical%20Ltd.%2C%20in%20Cambodia!5e1!3m2!1sru!2s!4v1635494910944!5m2!1sru!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'link' => 'https://spey.com.kh',
            ),
            array(
                'id' => 10,
                'en_title' => 'Dominicana',
                'ru_title' => 'Доминикан',
                'en_location' => 'Spey in Dominican',
                'ru_location' => 'Spey в Доминикане',
                'en_map' => null,
                'ru_map' => null,
                'link' => 'https://spey.do',
            ),
            array(
                'id' => 11,
                'en_title' => 'Bulgaria',
                'ru_title' => 'Болгария',
                'en_location' => 'Spey in Bulgaria',
                'ru_location' => 'Spey в Болгарии',
                'en_map' => null,
                'ru_map' => null,
                'link' => 'https://spey.bg',
            ),
            array(
                'id' => 12,
                'en_title' => 'Portugal',
                'ru_title' => 'Португалия',
                'en_location' => 'Spey in Portugal',
                'ru_location' => 'Spey в Португалии',
                'en_map' => null,
                'ru_map' => null,
                'link' => 'https://spey.pt',
            ),
            array(
                'id' => 13,
                'en_title' => 'Greece',
                'ru_title' => 'Греция',
                'en_location' => 'Spey in Greece',
                'ru_location' => 'Spey в Греции',
                'en_map' => null,
                'ru_map' => null,
                'link' => 'https://spey.gr',
            ),
            array(
                'id' => 14,
                'en_title' => 'Europe',
                'ru_title' => 'Европа',
                'en_location' => 'Spey in Europe',
                'ru_location' => 'Spey в Европе',
                'en_map' => null,
                'ru_map' => null,
                'link' => 'https://spey.eu',
            ),
        );

        foreach ($sites as $site) {
            $speySite = new Site;
            $speySite->en_title = $site['en_title'];
            $speySite->ru_title = $site['ru_title'];
            $speySite->en_location = $site['en_location'];
            $speySite->ru_location = $site['ru_location'];
            $speySite->en_map = $site['en_map'];
            $speySite->ru_map = $site['ru_map'];
            $speySite->en_address = '23 Osenniy Boulvar, BC Krylatsky, <br> 121609, Russia, Moscow';
            $speySite->ru_address = 'Осенний бульвар, 23, БЦ Крылатский, 121609, Россия, г. Москва';
            $speySite->email = 'info@spey.com.ru';
            $speySite->link = $site['link'];
            $speySite->save();
        }
    }
}
