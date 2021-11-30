<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industryNews = array(
            array(
                'id' => 1,
                'category_id' => 1,
                'en_title' => 'Russian heparin to be: FAS approved a joint venture between Miratorg and Heparinus',
                'ru_title' => 'Российскому гепарину быть: ФАС одобрила совместное предприятие «Мираторга» и «Гепаринуса»',
            ),
            array(
                'id' => 2,
                'category_id' => 1,
                'en_title' => 'WHO issues guidelines for editing the human genome',
                'ru_title' => 'ВОЗ выпустила рекомендации по редактированию генома человека',
            ),
            array(
                'id' => 3,
                'category_id' => 1,
                'en_title' => 'American Purdue Pharma intends to compensate for the damage from the "opioid crisis"',
                'ru_title' => 'Американская Purdue Pharma намерена компенсировать ущерб от «опиоидного кризиса»',
            ),
            array(
                'id' => 4,
                'category_id' => 1,
                'en_title' => 'Medical startup attracted 200 million rubles of investments',
                'ru_title' => 'Медицинский стартап привлек 200 млн рублей инвестиций',
            ),
            array(
                'id' => 5,
                'category_id' => 2,
                'en_title' => 'Determined the neutralizing activity of antibodies after vaccination with "Sputnik V" against new variants of coronavirus',
                'ru_title' => 'Определена нейтрализующая активность антител после вакцинации «Спутником V» против новых вариантов коронавируса',
            ),
            array(
                'id' => 6,
                'category_id' => 2,
                'en_title' => 'First drug for treatment of plexiform neurofibromas in neurofibromatosis type 1 approved in EU',
                'ru_title' => 'В ЕС одобрен первый препарат для лечения плексиформных нейрофибром при нейрофиброматозе 1 типа',
            ),
            array(
                'id' => 7,
                'category_id' => 3,
                'en_title' => 'RDIF demands Reuters to investigate after Sputnik V article',
                'ru_title' => 'РФПИ потребовал от Reuters расследования после статьи о «Спутнике V»',
            ),
            array(
                'id' => 8,
                'category_id' => 3,
                'en_title' => 'Reconfiguring the immune response defeats antibiotic-resistant staphylococcus',
                'ru_title' => 'Перенастройка иммунного ответа побеждает устойчивый к антибиотикам стафилококк',
            ),
            array(
                'id' => 9,
                'category_id' => 3,
                'en_title' => 'Endopharm is preparing to produce opium drugs',
                'ru_title' => '«Эндофарм» готовится производить опийные лекарственные препараты',
            ),
            array(
                'id' => 10,
                'category_id' => 3,
                'en_title' => 'Tatiana Golikova - curator of programs for the development of healthcare and the medical industry',
                'ru_title' => 'Татьяна Голикова — куратор программ развития здравоохранения и медпромышленности',
            ),
            array(
                'id' => 11,
                'category_id' => 4,
                'en_title' => 'Only the Chinese have applied for the registration of their vaccine in Russia',
                'ru_title' => 'Заявку на регистрацию своей вакцины в России подали только китайцы',
            ),
            array(
                'id' => 12,
                'category_id' => 4,
                'en_title' => 'Russia prepares to create vaccines that can be quickly changed',
                'ru_title' => 'Россия готовится создавать вакцины, состав которых можно быстро менять',
            ),
        );
        foreach ($industryNews as $news) {
            $industryNew = new News;
            $industryNew->category_id = $news['category_id'];
            $industryNew->en_title = $news['en_title'];
            $industryNew->ru_title = $news['ru_title'];
            $industryNew->view_rate = Faker::create()->numberBetween($min = 0, $max = 30);
            $industryNew->save();
        }
    }
}
