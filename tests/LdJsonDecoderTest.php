<?php

namespace Spatie\SchemaOrg\Tests;

use Spatie\SchemaOrg\Graph;
use Spatie\SchemaOrg\Recipe;
use Spatie\SchemaOrg\Schema;
use PHPUnit\Framework\TestCase;
use Spatie\SchemaOrg\ContactPoint;
use Spatie\SchemaOrg\LocalBusiness;
use Spatie\SchemaOrg\BreadcrumbList;
use Spatie\SchemaOrg\Decoder\LdJson;

class LdJsonDecoderTest extends TestCase
{
    /** @test */
    public function it_can_decode_single_type()
    {
        $json = '{"@context":"https:\/\/schema.org","@type":"LocalBusiness","name":"Spatie","email":"info@spatie.be"}';

        $schema = LdJson::fromJson($json);

        $this->assertInstanceOf(LocalBusiness::class, $schema);
        $this->assertEquals([
            'name' => 'Spatie',
            'email' => 'info@spatie.be',
        ], $schema->getProperties());
    }

    /** @test */
    public function it_can_decode_single_type_with_sub_type()
    {
        $json = '{"@context":"https:\/\/schema.org","@type":"LocalBusiness","name":"Spatie","contactPoint":{"@type":"ContactPoint","areaServed":"Worldwide"}}';

        $schema = LdJson::fromJson($json);

        $this->assertInstanceOf(LocalBusiness::class, $schema);
        $this->assertEquals('Spatie', $schema->getProperty('name'));
        $this->assertInstanceOf(ContactPoint::class, $schema->getProperty('contactPoint'));
        $this->assertEquals([
            'name' => 'Spatie',
            'contactPoint' => Schema::contactPoint()->areaServed('Worldwide'),
        ], $schema->getProperties());
    }

    /** @test */
    public function it_can_decode_single_type_with_list_of_sub_types()
    {
        $json = '{"@context":"https:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1},{"@type":"ListItem","position":2}]}';

        $schema = LdJson::fromJson($json);

        $this->assertInstanceOf(BreadcrumbList::class, $schema);
        $this->assertIsArray($schema->getProperty('itemListElement'));
        $this->assertEquals([
            'itemListElement' => [
                Schema::listItem()->position(1),
                Schema::listItem()->position(2),
            ],
        ], $schema->getProperties());
    }

    /** @test */
    public function it_can_decode_single_type_with_list_of_sub_types_and_sub_type()
    {
        $json = '{"@context":"https:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"Thing","url":"https:\/\/example.com/dresses","name":"Dresses"}},{"@type":"ListItem","position":2,"item":{"@type":"Thing","url":"https:\/\/example.com/dresses/real","name":"Real Dresses"}}]}';

        $schema = LdJson::fromJson($json);

        $this->assertInstanceOf(BreadcrumbList::class, $schema);
        $this->assertIsArray($schema->getProperty('itemListElement'));
        $this->assertEquals([
            'itemListElement' => [
                Schema::listItem()->position(1)->item(Schema::thing()->url('https://example.com/dresses')->name('Dresses')),
                Schema::listItem()->position(2)->item(Schema::thing()->url('https://example.com/dresses/real')->name('Real Dresses')),
            ],
        ], $schema->getProperties());
    }

    /** @test */
    public function it_can_decode_real_world_recipe()
    {
        $json = '{"@context":"https://schema.org/","@type":"Recipe","name":"Falscher Hase: Mit Ei gefüllter Hackbraten Im Baconmantel mit Schmorgemüse","author":"HelloFresh","image":"https://hellofresh.com/image/falscher-hase-mit-ei-gefullter-hackbraten-6c14bf33.jpg","thumbnailUrl":"https://hellofresh.com/thumb/falscher-hase-mit-ei-gefullter-hackbraten-6c14bf33.jpg","description":"Mit diesem Special bringen wir Dir einen deftigen Klassiker der deutschen Küche auf den Tisch: Falscher Hase! Dieser Hackbraten ist ein echtes Festmahl und hat es, dank seiner Füllung aus gekochtem Ei, tatsächlich in sich. Als Beilage gibt es Gemüse, das Du ganz einfach im aromatischen Bratensaft im Ofen mitschmoren lässt. Lass Dir dieses proteinreiche Gericht schmecken!","datePublished":"2018-10-16T09:56:09+00:00","aggregateRating":{"@type":"AggregateRating","ratingValue":3.4,"ratingCount":337,"bestRating":4},"totalTime":"PT35M","nutrition":{"@type":"NutritionInformation","calories":"518 kcal","fatContent":"20 g","saturatedFatContent":"7 g","carbohydrateContent":"58 g","sugarContent":"12 g","proteinContent":"24 g","fiberContent":"9 g","cholesterolContent":"0 mg","sodiumContent":"3 g","servingSize":800},"recipeInstructions":[{"@type":"HowToStep","text":"Wasche Gemüse und Kräuter ab. Erhitze reichlich Wasser im Wasserkocher. Heize den Backofen auf 220 °C Ober-/Unterhitze (200 °C Umluft) vor. Zum Kochen benötigst Du 1 kleinen Topf, 1 große Schüssel und eine Auflaufform. In einen kleinen Topf reichlich heißes Wasser* füllen, zum Kochen bringen, Eier vorsichtig mit einem Löffel ins Wasser geben und 7 Min. garen. Anschließend Eier kalt abschrecken.  In der Zwischenzeit heiße Gemüsebrühe* und Gemüse vorbereiten."},{"@type":"HowToStep","text":"Ungeschälte Kartoffeln vierteln.  Karotte schälen, längs vierteln und in Stifte schneiden. Porree in dünne Streifen schneiden.  Petersilienblätter fein hacken und Schnittlauch in feine Röllchen schneiden. Tipp: Porree über die gesamte Länge längs einschneiden und unter fließendem Wasser abspülen. So entfernt man den Sand auch in den einzelnen Schichten."},{"@type":"HowToStep","text":"In einer großen Schüssel Hackfleisch, Semmelbrösel, Schnittlauchröllchen, mittelscharfen Senf, Salz* und Pfeffer* gut vermischen. Fleischmasse flach ausbreiten.  Eier schälen, mittig hineinlegen und einen Laib formen.  Baconscheiben leicht überlappend nebeneinanderlegen, Laib darauflegen und vorsichtig einrollen."},{"@type":"HowToStep","text":"Braten in eine große Auflaufform geben, Kartoffelviertel, Karottenstifte und Porreestreifen dazugeben, Brühe* dazugießen und ca. 30 Min. backen."},{"@type":"HowToStep","text":"Nach der Backzeit Schmorgemüse in die große Schüssel geben und mit gehackter Petersilie mischen.  Bratensatz aus der Auflaufform in den kleinen Topf füllen und 1 – 2 Min. einköcheln lassen. Tipp: Wenn Du die Soße etwas dicker magst, einfach etwas Stärke mit kaltem Wasser verrühren und die Soße damit abbinden!"},{"@type":"HowToStep","text":"Falschen Hasen in Scheiben schneiden.  Schmorgemüse auf Teller verteilen, Bratenscheiben daneben anrichten und mit Soße genießen. Guten Appetit"}],"recipeIngredient":["300 g gemischtes Hackfleisch","80 g Bacon","500 g Kartoffeln (Drillinge)","25 g Semmelbrösel","10 g mittelscharfer Senf","5 g Petersilie","5 g Schnittlauch","2 Stück Ei","2 Stück Karotte","1 Stück Porree","ml Gemüsebrühe*","ml Öl*","nach Geschmack Salz*","nach Geschmack Pfeffer*"],"recipeYield":2,"keywords":[],"recipeCategory":"KLASSIKER-SPECIAL","recipeCuisine":"Deutsch"}';

        $schema = LdJson::fromJson($json);
        $this->assertInstanceOf(Recipe::class, $schema);
        $this->assertEquals(
            Schema::recipe()
                ->name('Falscher Hase: Mit Ei gefüllter Hackbraten Im Baconmantel mit Schmorgemüse')
                ->author('HelloFresh')
                ->image('https://hellofresh.com/image/falscher-hase-mit-ei-gefullter-hackbraten-6c14bf33.jpg')
                ->thumbnailUrl('https://hellofresh.com/thumb/falscher-hase-mit-ei-gefullter-hackbraten-6c14bf33.jpg')
                ->description('Mit diesem Special bringen wir Dir einen deftigen Klassiker der deutschen Küche auf den Tisch: Falscher Hase! Dieser Hackbraten ist ein echtes Festmahl und hat es, dank seiner Füllung aus gekochtem Ei, tatsächlich in sich. Als Beilage gibt es Gemüse, das Du ganz einfach im aromatischen Bratensaft im Ofen mitschmoren lässt. Lass Dir dieses proteinreiche Gericht schmecken!')
                ->datePublished('2018-10-16T09:56:09+00:00')
                ->aggregateRating(
                    Schema::aggregateRating()->ratingValue(3.4)->ratingCount(337)->bestRating(4)
                )
                ->totalTime('PT35M')
                ->keywords([])
                ->recipeCategory('KLASSIKER-SPECIAL')
                ->recipeCuisine('Deutsch')
                ->recipeYield(2)
                ->nutrition(
                    Schema::nutritionInformation()
                        ->calories('518 kcal')
                        ->fatContent('20 g')
                        ->saturatedFatContent('7 g')
                        ->carbohydrateContent('58 g')
                        ->sugarContent('12 g')
                        ->proteinContent('24 g')
                        ->fiberContent('9 g')
                        ->cholesterolContent('0 mg')
                        ->sodiumContent('3 g')
                        ->servingSize(800)
                )
                ->recipeInstructions([
                    Schema::howToStep()->text('Wasche Gemüse und Kräuter ab. Erhitze reichlich Wasser im Wasserkocher. Heize den Backofen auf 220 °C Ober-/Unterhitze (200 °C Umluft) vor. Zum Kochen benötigst Du 1 kleinen Topf, 1 große Schüssel und eine Auflaufform. In einen kleinen Topf reichlich heißes Wasser* füllen, zum Kochen bringen, Eier vorsichtig mit einem Löffel ins Wasser geben und 7 Min. garen. Anschließend Eier kalt abschrecken.  In der Zwischenzeit heiße Gemüsebrühe* und Gemüse vorbereiten.'),
                    Schema::howToStep()->text('Ungeschälte Kartoffeln vierteln.  Karotte schälen, längs vierteln und in Stifte schneiden. Porree in dünne Streifen schneiden.  Petersilienblätter fein hacken und Schnittlauch in feine Röllchen schneiden. Tipp: Porree über die gesamte Länge längs einschneiden und unter fließendem Wasser abspülen. So entfernt man den Sand auch in den einzelnen Schichten.'),
                    Schema::howToStep()->text('In einer großen Schüssel Hackfleisch, Semmelbrösel, Schnittlauchröllchen, mittelscharfen Senf, Salz* und Pfeffer* gut vermischen. Fleischmasse flach ausbreiten.  Eier schälen, mittig hineinlegen und einen Laib formen.  Baconscheiben leicht überlappend nebeneinanderlegen, Laib darauflegen und vorsichtig einrollen.'),
                    Schema::howToStep()->text('Braten in eine große Auflaufform geben, Kartoffelviertel, Karottenstifte und Porreestreifen dazugeben, Brühe* dazugießen und ca. 30 Min. backen.'),
                    Schema::howToStep()->text('Nach der Backzeit Schmorgemüse in die große Schüssel geben und mit gehackter Petersilie mischen.  Bratensatz aus der Auflaufform in den kleinen Topf füllen und 1 – 2 Min. einköcheln lassen. Tipp: Wenn Du die Soße etwas dicker magst, einfach etwas Stärke mit kaltem Wasser verrühren und die Soße damit abbinden!'),
                    Schema::howToStep()->text('Falschen Hasen in Scheiben schneiden.  Schmorgemüse auf Teller verteilen, Bratenscheiben daneben anrichten und mit Soße genießen. Guten Appetit'),
                ])
                ->recipeIngredient([
                    '300 g gemischtes Hackfleisch',
                    '80 g Bacon',
                    '500 g Kartoffeln (Drillinge)',
                    '25 g Semmelbrösel',
                    '10 g mittelscharfer Senf',
                    '5 g Petersilie',
                    '5 g Schnittlauch',
                    '2 Stück Ei',
                    '2 Stück Karotte',
                    '1 Stück Porree',
                    'ml Gemüsebrühe*',
                    'ml Öl*',
                    'nach Geschmack Salz*',
                    'nach Geschmack Pfeffer*',
                ])
                ->toArray(),
            $schema->toArray()
        );
    }

    /** @test */
    public function it_can_decode_graph()
    {
        $json = '{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company"},{"@type":"Product","name":"My Product"}]}';

        $schema = LdJson::fromJson($json);

        $this->assertInstanceOf(Graph::class, $schema);
        $this->assertEquals([
            Schema::organization()->name('Organization'),
            Schema::product()->name('My Product'),
        ], $schema->getProperties());
    }
}
